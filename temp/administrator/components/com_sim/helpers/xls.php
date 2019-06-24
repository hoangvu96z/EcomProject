<?php
/**
 * @version		$Id: media.php 10381 2008-06-01 03:35:53Z pasamio $
 * @package		Joomla
 * @subpackage	Media
 * @copyright	Copyright (C) 2005 - 2008 Open Source Matters. All rights reserved.
 * @license		GNU/GPL, see LICENSE.php
 * Joomla! is free software. This version may have been modified pursuant to the
 * GNU General Public License, and as distributed it includes or is derivative
 * of works licensed under the GNU General Public License or other free or open
 * source software licenses. See COPYRIGHT.php for copyright notices and
 * details.
 */

/**
 * @package		Joomla
 * @subpackage	Media
 */
class XlsHelper
{
    function upload()
    {
        global $mainframe;

        // Check for request forgeries
        //JRequest::checkToken( 'request' ) or jexit( 'Invalid Token' );

        $file 		= JRequest::getVar( 'Filedata', '', 'files', 'array' );
        $folder		= JRequest::getVar( 'folder', '', '', 'path' );
        $err		= null;

        // Set FTP credentials, if given
        jimport('joomla.client.helper');
        JClientHelper::setCredentialsFromRequest('ftp');

        // Make the filename safe
        jimport('joomla.filesystem.file');
        $file['name']	= JFile::makeSafe($file['name']);

        if (isset($file['name'])) {
            $filepath = JPath::clean(JPATH_COMPONENT.DS.helpers.DS.$folder.DS.strtolower($file['name']));

            if (!$this->canUpload( $file, $err )) {
                // REDIRECT
                $mainframe->enqueueMessage(JText::_('Không thể upload file.Có thể do file phải là file excel hoặc định dạng sai!'));
                // REDIRECT
                if ($return) {
                    $mainframe->redirect(base64_decode($return).'&folder='.$folder);
                }
                return;
            }
            if (JFile::exists($filepath)) {
                // REDIRECT
                $this->delete($filepath);
            }

            if (!JFile::upload($file['tmp_name'], $filepath)) {
                // REDIRECT
                $mainframe->enqueueMessage(JText::_(JText::_('Error. Unable to upload file')));
                if ($return) {
                    $mainframe->redirect(base64_decode($return).'&folder='.$folder);
                }
                return;
            } else {
                $mainframe->enqueueMessage(JText::_('Upload complete'));
                // REDIRECT
                if ($return) {
                    $mainframe->redirect(base64_decode($return).'&folder='.$folder);
                }
                return;
            }
        } else {
            $mainframe->redirect('index.php', 'Invalid Request', 'error');
        }
    }
    function readxls(){
        //upload excel file onto server
        $this->upload();
        require_once 'Excel/reader.php';
        // ExcelFile($filename, $encoding);
        $data = new Spreadsheet_Excel_Reader();
        // Set output Encoding.
        $data->setOutputEncoding('UTF-8');
        //read data from excel
        $file 	= JRequest::getVar( 'Filedata', '', 'files', 'array' );
        $folder	= JRequest::getVar( 'folder', '', '', 'path' );
        $data->read('components/com_sim/helpers/'.DS.$folder.DS.$file['name']);
        $simbatch = array();
        for ($i = 2; $i <= $data->sheets[0]['numRows']; $i++) {
            if($data->sheets[0]['cells'][$i][1]==null){
                break;
            }else{
                for ($j = 1; $j <= $data->sheets[0]['numCols']; $j++) {
                    $k = $data->sheets[0]['cells'][1][$j];
                    $simbatch[$i-2]->$k = $data->sheets[0]['cells'][$i][$j];
                }
            }
        }
        $this->delete();
        return $simbatch;
    }
    /**
     * Deletes paths from the current path
     *
     * @param string $listFolder The image directory to delete a file from
     * @since 1.5
     */
    function delete()
    {
        global $mainframe;
        $file 		= JRequest::getVar( 'Filedata', '', 'files', 'array' );
        $folder		= JRequest::getVar( 'folder', '', '', 'path' );
        // Set FTP credentials, if given
        jimport('joomla.client.helper');
        JClientHelper::setCredentialsFromRequest('ftp');

        // Initialize variables
        $ret = true;
        $fullPath = JPath::clean(JPATH_COMPONENT.DS.helpers.DS.$folder.DS.strtolower($file['name']));
        if (is_file($fullPath)) {
            $ret |= !JFile::delete($fullPath);
        } else if (is_dir($fullPath)) {
            $files = JFolder::files($fullPath, '.', true);
            $canDelete = true;
            foreach ($files as $file) {
                if ($file != 'index.html') {
                    $canDelete = false;
                }
            }
            if ($canDelete) {
                $ret |= !JFolder::delete($fullPath);
            } else {
                JError::raiseWarning(100, JText::_('Unable to delete:').$fullPath.' '.JText::_('Not Empty!'));
            }
        }
    }
    /**
     * Checks if the file can be uploaded
     *
     * @param array File information
     * @param string An error message to be returned
     * @return boolean
     */
    function canUpload( $file, &$err )
    {
        $params = &JComponentHelper::getParams( 'com_media' );

        if(empty($file['name'])) {
            $err = 'Please input a file for upload';
            return false;
        }

        jimport('joomla.filesystem.file');
        if ($file['name'] !== JFile::makesafe($file['name'])) {
            $err = 'WARNFILENAME';
            return false;
        }

        $format = strtolower(JFile::getExt($file['name']));

        //$allowable = explode( ',', $params->get( 'upload_extensions' ));
        //$ignored = explode(',', $params->get( 'ignore_extensions' ));
        if (!$format=='xls')
        {
            $err = 'WARNFILETYPE';
            return false;
        }

        $maxSize = (int) $params->get( 'upload_maxsize', 0 );
        if ($maxSize > 0 && (int) $file['size'] > $maxSize)
        {
            $err = 'WARNFILETOOLARGE';
            return false;
        }
/*
        $user = JFactory::getUser();
        $imginfo = null;
        if($params->get('restrict_uploads',1) ) {
            $images = explode( ',', $params->get( 'image_extensions' ));
            if(in_array($format, $images)) { // if its an image run it through getimagesize
                if(($imginfo = getimagesize($file['tmp_name'])) === FALSE) {
                    $err = 'WARNINVALIDIMG';
                    return false;
                }
            } else if(!in_array($format, $ignored)) {
                // if its not an image...and we're not ignoring it
                $allowed_mime = explode(',', $params->get('upload_mime'));
                $illegal_mime = explode(',', $params->get('upload_mime_illegal'));
                if(function_exists('finfo_open') && $params->get('check_mime',1)) {
                    // We have fileinfo
                    $finfo = finfo_open(FILEINFO_MIME);
                    $type = finfo_file($finfo, $file['tmp_name']);
                    if(strlen($type) && !in_array($type, $allowed_mime) && in_array($type, $illegal_mime)) {
                        $err = 'WARNINVALIDMIME';
                        return false;
                    }
                    finfo_close($finfo);
                } else if(function_exists('mime_content_type') && $params->get('check_mime',1)) {
                    // we have mime magic
                    $type = mime_content_type($file['tmp_name']);
                    if(strlen($type) && !in_array($type, $allowed_mime) && in_array($type, $illegal_mime)) {
                        $err = 'WARNINVALIDMIME';
                        return false;
                    }
                } else if(!$user->authorize( 'login', 'administrator' )) {
                    $err = 'WARNNOTADMIN';
                    return false;
                }
            }
        }
*/
        return true;
    }

    function parseSize($size)
    {
        if ($size < 1024) {
            return $size . ' bytes';
        }
        else
        {
            if ($size >= 1024 && $size < 1024 * 1024) {
                return sprintf('%01.2f', $size / 1024.0) . ' Kb';
            } else {
                return sprintf('%01.2f', $size / (1024.0 * 1024)) . ' Mb';
            }
        }
    }
}