<?php
/* 
 * @Package Softpin Order Manager
 * @Subpackage : simorder Manager
 * Created by : thuc.lehuy@gmail.com
 */
// no direct access
defined('_JEXEC') or die('Truy nhập không hợp lệ');
// Set the table directory
JTable::addIncludePath(JPATH_ADMINISTRATOR.DS.'components'.DS.'com_simorder'.DS.'tables');
// require base controller
require_once(JPATH_COMPONENT.DS.'controller.php');
// Create the controller
$classname	= 'SimorderController'.$controller;
$controller	= new $classname();
// Perform the Request task
$controller->execute( JRequest::getVar( 'task' ) );
// Redirect if set by the controller
$controller->redirect();


