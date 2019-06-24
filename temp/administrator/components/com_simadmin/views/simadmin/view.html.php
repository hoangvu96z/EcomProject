<?php
/*
 * @Package Softpin Order Manager
 * @Subpackage : simadmin Manager
 * Create by : thuc.lehuy@gmail.com
 */
// No direct access
defined( '_JEXEC' ) or die( 'Restricted access' );
//import view parent class
jimport( 'joomla.application.component.view' );

class SimadminsViewSimadmin extends JView
{
    function display($tpl=null){
        // get simadmin
        $simadmin = $this->get('Data');
        $isNew = ($simadmin->admin_id<1);
        $text = $isNew ? JText::_( 'New' ) : JText::_( 'Edit' );

        JToolBarHelper::title(   JText::_( 'Quản lý theo Admin' ).': <small><small>[ ' . $text.' ]</small></small>','generic.png' );
        JToolBarHelper::save();
        if($isNew)
        {
            JToolBarHelper::cancel();
        }else{
            JToolBarHelper::cancel('cancel','close');
        }
        $this->assignRef('simadmin', $simadmin);
        parent::display($tpl);
    }
    
}


