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

class SimprovidersViewSimproviders extends JView
{
    function display($tpl = null)
    {
        JToolBarHelper::title(JText::_( 'Quản lý nhóm Sim' ), 'generic.png' );
        if($this->authen()){
            JToolBarHelper::addNewX();
            JToolBarHelper::editListX();
            JToolBarHelper::publish();
            JToolBarHelper::unpublish();
        }
        JToolBarHelper::help( 'screen.banners' );
        $items =& $this->get('Data');
        $this->assignRef('items', $items);

        parent::display($tpl);
    }
    /*
     * Authentication
     * Manager can not edit,new,publish,unpublish
     */
    function authen()
    {
        $user = JFactory::getUser();
        if($user->get('gid') < 24){
            return 0;
        }else{
            return 1;
        }
    }
}

