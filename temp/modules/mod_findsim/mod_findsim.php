<?php
/**
* @version		$Id: mod_search.php 10855 2008-08-29 22:47:34Z willebil $
* @package		Joomla
* @copyright	Copyright (C) 2005 - 2008 Open Source Matters. All rights reserved.
* @license		GNU/GPL, see LICENSE.php
* Joomla! is free software. This version may have been modified pursuant
* to the GNU General Public License, and as distributed it includes or
* is derivative of works licensed under the GNU General Public License or
* other free or open source software licenses.
* See COPYRIGHT.php for copyright notices and details.
*/

// no direct access
defined('_JEXEC') or die('Restricted access');
require (dirname(__FILE__).DS.'helper.php');
$provider= modFindsimHelper::getProvider();
$category= modFindsimHelper::getCategory();
require(JModuleHelper::getLayoutPath('mod_findsim'));
