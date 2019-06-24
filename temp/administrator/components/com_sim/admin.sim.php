<?php
/* 
 * @Package Softpin Order Manager
 * @Subpackage : sim Manager
 * Created by : thuc.lehuy@gmail.com
 */
// no direct access
defined('_JEXEC') or die('Truy nhập không hợp lệ');
//upload excel file
if(JRequest::getVar('uptype')==1){
    $params =& JComponentHelper::getParams('com_media');
    // Load the admin HTML view
    require_once( JPATH_COMPONENT.DS.'helpers'.DS.'xls.php' );
    // Load file upload controller
    $xlshelper = new XlsHelper();
    $simbatch=$xlshelper->readxls();
    JRequest::setVar('simbatch',$simbatch);
}
// Set the table directory
JTable::addIncludePath(JPATH_ISTRATOR.DS.'components'.DS.'com_sim'.DS.'tables');
// require base controller
require_once(JPATH_COMPONENT.DS.'controller.php');

// Require specific controller if requested
if($controller = JRequest::getWord('controller')) {
    $path = JPATH_COMPONENT.DS.'controllers'.DS.$controller.'.php';
    if (file_exists($path)) {
        require_once $path;
    } else {
        $controller = '';
    }
}
JSubMenuHelper::addEntry(JText::_('Quản lý đặt sim'), 'index.php?option=com_simorder');
JSubMenuHelper::addEntry(JText::_('Quản lý theo nhóm sim'), 'index.php?option=com_simcategory');
JSubMenuHelper::addEntry(JText::_('Quản lý theo nhà cung cấp'), 'index.php?option=com_simprovider');
JSubMenuHelper::addEntry(JText::_('Quản lý theo kho'), 'index.php?option=com_simadmin');
JSubMenuHelper::addEntry(JText::_('Quản lý sim'), 'index.php?option=com_sim',true);
JSubMenuHelper::addEntry(JText::_('Quản lý chức năng chữ chạy'), 'index.php?option=com_simscroll');
// Create the controller
$classname	= 'SimsController'.$controller;
$controller	= new $classname();

// Perform the Request task
$controller->execute( JRequest::getVar( 'task' ) );
// Redirect if set by the controller
$controller->redirect();


