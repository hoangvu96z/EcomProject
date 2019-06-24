<?php
/*
 * @Package Softpin Order Manager
 * @Subpackage : simcategory Manager
 * Create by : thuc.lehuy@gmail.com
 */
// No direct access
defined( '_JEXEC' ) or die( 'Restricted access' );
//import view parent class
jimport( 'joomla.application.component.view' );

class SimcategorysViewSimcategory extends JView
{
    function display($tpl=null){
        // get simcategory
        $simcategory = $this->get('Data');
        $isNew = ($simcategory->categori_id<1);
        $text = $isNew ? JText::_( 'New' ) : JText::_( 'Edit' );

        JToolBarHelper::title(   JText::_( 'Quản lý theo nhóm Sim' ).': <small><small>[ ' . $text.' ]</small></small>','generic.png' );
        JToolBarHelper::save();
        if($isNew)
        {
            JToolBarHelper::cancel();
        }else{
            JToolBarHelper::cancel('cancel','close');
        }
        $this->assignRef('simcategory', $simcategory);
        parent::display($tpl);
    }
    
}


