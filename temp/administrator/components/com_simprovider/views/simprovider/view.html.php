<?php
/*
 * @Package Softpin Order Manager
 * @Subpackage : simprovider Manager
 * Create by : thuc.lehuy@gmail.com
 */
// No direct access
defined( '_JEXEC' ) or die( 'Restricted access' );
//import view parent class
jimport( 'joomla.application.component.view' );

class SimprovidersViewSimprovider extends JView
{
    function display($tpl=null){
        // get simprovider
        $simprovider = $this->get('Data');
        $isNew = ($simprovider->provider_id<1);
        $text = $isNew ? JText::_( 'New' ) : JText::_( 'Edit' );

        JToolBarHelper::title(   JText::_( 'Quản lý theo nhà cung cấp' ).': <small><small>[ ' . $text.' ]</small></small>','generic.png' );
        JToolBarHelper::save();
        if($isNew)
        {
            JToolBarHelper::cancel();
        }else{
            JToolBarHelper::cancel('cancel','close');
        }
        $this->assignRef('simprovider', $simprovider);
        parent::display($tpl);
    }
    
}


