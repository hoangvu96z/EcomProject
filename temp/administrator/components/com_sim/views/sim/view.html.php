<?php
/*
 * @Package Softpin Order Manager
 * @Subpackage : sim Manager
 * Create by : thuc.lehuy@gmail.com
 */
// No direct access
defined( '_JEXEC' ) or die( 'Restricted access' );
//import view parent class
jimport( 'joomla.application.component.view' );

class SimsViewSim extends JView
{
    function display($tpl=null){
        // get sim
        $sim = $this->get('Data');
        $isNew = ($sim->sim_id<1);
        $text = $isNew ? JText::_( 'New' ) : JText::_( 'Edit' );

        JToolBarHelper::title(   JText::_( 'Quản lý Sim' ).': <small><small>[ ' . $text.' ]</small></small>','generic.png' );
        if($isNew)
        {
            $provider = & $this->get('Provider');
            $categories = & $this->get('Categories');
            $admin = & $this->get('Admin');
            $htmlprovider = '<select id="provider_id" name="provider_id" style="width:120px;">';
            foreach ($provider as $provider) {
                $htmlprovider .= '<option value='.$provider->provider_id.'>'.$provider->provider_name.'</option>';
                if($provider->provider== $sim->provider_id){
                    JToolBarHelper::title(   JText::_( 'Quản lý Sim :'.$provider->provider_name).': <small><small>[ ' . $text.' ]</small></small>','generic.png' );
                }
            }
            $htmlprovider .= '</select>';
            $htmlcategories = '<select id="categori_id" name="categori_id" style="width:120px;">';
            foreach ($categories as $categories) {
                $htmlcategories .= '<option value='.$categories->categori_id.'>'.$categories->categori_name.'</option>';
                if($categories->categori_id == $sim->categori_id){
                    JToolBarHelper::title(   JText::_( 'Quản lý Sim :'.$categories->categori_name).': <small><small>[ ' . $text.' ]</small></small>','generic.png' );
                }
            }
            $htmlcategories .= '</select>';
            $htmladmin = '<select id="admin_id" name="admin_id" style="width:120px;">';
            foreach ($admin as $admin) {
                $htmladmin .= '<option value='.$admin->admin_id.'>'.$admin->admin_name.'</option>';
                if($categories->admin_id == $sim->admin_id){
                    JToolBarHelper::title(   JText::_( 'Quản lý Sim :'.$admin->admin_name).': <small><small>[ ' . $text.' ]</small></small>','generic.png' );
                }
            }
            $htmladmin .= '</select>';
        }else{
            $provider = & $this->get('Provider');
            $categories = & $this->get('Categories');
            $admin = & $this->get('Admin');
            $htmlprovider = '<select id="provider_id" name="provider_id" style="width:120px;">';
            foreach ($provider as $provider) {
                if($provider->provider_id == $sim->provider_id){
                    $htmlprovider .= '<option value='.$provider->provider_id.' selected>'.$provider->provider_name.'</option>';
                }else{
                    $htmlprovider .= '<option value='.$provider->provider_id.'>'.$provider->provider_name.'</option>';
                }
            }
            $htmlprovider .= '</select>';
            $htmlcategories = '<select id="categori_id" name="categori_id" style="width:120px;">';
            foreach ($categories as $categories) {
                if($categories->categori_id==$sim->categori_id){
                    $htmlcategories .= '<option value='.$categories->categori_id.' selected>'.$categories->categori_name.'</option>';
                }else{
                    $htmlcategories .= '<option value='.$categories->categori_id.'>'.$categories->categori_name.'</option>';
                }
            }
            $htmlcategories .= '</select>';
            $htmladmin = '<select id="admin_id" name="admin_id" style="width:120px;">';
            foreach ($admin as $admin) {
                if($admin->admin_id==$sim->admin_id){
                    $htmladmin .= '<option value='.$admin->admin_id.' selected>'.$admin->admin_name.'</option>';
                }else{
                    $htmladmin .= '<option value='.$admin->admin_id.'>'.$admin->admin_name.'</option>';
                }
            }
            $htmladmin .= '</select>';
        }
        $this->assignRef('sim', $sim);
        $this->assignRef('htmlprovider', $htmlprovider);
        $this->assignRef('htmlcategories', $htmlcategories);
        $this->assignRef('htmladmin', $htmladmin);
        parent::display($tpl);
    }

}


