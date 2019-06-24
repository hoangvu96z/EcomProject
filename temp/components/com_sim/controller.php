<?php
/**
 * @version		$Id: controller.php 10869 2008-08-30 07:24:03Z willebil $
 * @package		Joomla
 * @subpackage	Content
 * @copyright	Copyright (C) 2005 - 2008 Open Source Matters. All rights reserved.
 * @license		GNU/GPL, see LICENSE.php
 * Joomla! is free software. This version may have been modified pursuant to the
 * GNU General Public License, and as distributed it includes or is derivative
 * of works licensed under the GNU General Public License or other free or open
 * source software licenses. See COPYRIGHT.php for copyright notices and
 * details.
 */

// Check to ensure this file is included in Joomla!
defined('_JEXEC') or die( 'Restricted access' );

jimport('joomla.application.component.controller');

/**
 * Search Component Controller
 *
 * @package		Joomla
 * @subpackage	Search
 * @since 1.5
 */
class SimController extends JController
{
    /**
     * Method to show the search view
     *
     * @access	public
     * @since	1.5
     */
    function display()
    {
        JRequest::setVar('view','sim'); // force it to be the polls view
        parent::display();
    }
    function search()
    {
        $searchword = JRequest::getString('searchword', null, 'post');
        if($searchword != null && $searchword != 'Nhập số sim cần tìm'){
        $post['searchword'] = $searchword;
        }
        $provider= JRequest::getInt('provider', null, 'post');
        if($provider>0){
            $post['provider']=$provider;
        }
        $category	= JRequest::getInt('category', null, 'post');
        if($category>0){
            $post['category']=$category;
        }
        $post['minprice']  = JRequest::getInt('minprice', null, 'post');
        $post['maxprice']  = JRequest::getInt('maxprice', null, 'post');
        //if($post['minprice']==null){$post['minprice']=0;}
        //if($post['maxprice']==null){$post['maxprice']=10000000000;}
        $uri = JURI::getInstance();
		$uri->setQuery($post);
		$uri->setVar('option', 'com_sim');
        $uri->setVar('id', 1);
		$this->setRedirect(JRoute::_('index.php'.$uri->toString(array('query', 'fragment')), false));
    }
}
