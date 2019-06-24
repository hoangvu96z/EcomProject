<?php
/**
 * @version		$Id: view.html.php 10498 2008-07-04 00:05:36Z ian $
 * @package		Joomla
 * @subpackage	Weblinks
 * @copyright	Copyright (C) 2005 - 2008 Open Source Matters. All rights reserved.
 * @license		GNU/GPL, see LICENSE.php
 * Joomla! is free software. This version may have been modified pursuant
 * to the GNU General Public License, and as distributed it includes or
 * is derivative of works licensed under the GNU General Public License or
 * other free or open source software licenses.
 * See COPYRIGHT.php for copyright notices and details.
 */

// Check to ensure this file is included in Joomla!
defined('_JEXEC') or die( 'Restricted access' );

jimport( 'joomla.application.component.view');

/**
 * HTML View class for the WebLinks component
 *
 * @static
 * @package		Joomla
 * @subpackage	Weblinks
 * @since 1.0
 */
class SimViewSim extends JView
{
	function display($tpl = null)
	{
        $items =& $this->get('Data');
        for($i = 0; $i < count($items); $i++)
        {
            $items[$i]->price = $this->thousandseperate($items[$i]->price);
        }
        $this->assign('items', $items);
		parent::display($tpl);
	}
    function thousandseperate($value)
    {
        $thausandSepCh = ".";
        $realValue = $value."";
        $result = "";
        $len = strlen($realValue);
        while($len>3){
            $result = $thausandSepCh.substr($realValue,$len-3,3).$result;
            $len=$len-3;
        }
        $result=substr($realValue,0,$len).$result;
        return $result;
    }
}
