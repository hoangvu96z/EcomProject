<?php
/*
 * @Package Softpin Order Manager
 * @Subpackage : simscroll Manager
 * Create by : thuc.lehuy@gmail.com
 */
// No direct access
defined( '_JEXEC' ) or die( 'Restricted access' );
//import view parent class
jimport( 'joomla.application.component.view' );

class SimscrollsViewSimscroll extends JView
{
    function display($tpl=null){
        // get simscroll
        $simscroll = $this->get('Data');
        JToolBarHelper::title(   JText::_( 'Quản lý chữ chạy' ).': <small><small>[ Sửa ]</small></small>','generic.png' );
        JToolBarHelper::save();
        JToolBarHelper::cancel('cancel','close');
        $this->assignRef('simscroll', $simscroll);
        parent::display($tpl);
    }
    
}


