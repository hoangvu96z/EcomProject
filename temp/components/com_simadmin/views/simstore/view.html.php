<?php
defined( '_JEXEC' ) or die( 'Restricted access' );
jimport('joomla.application.component.view');
class SimAdminViewSimStore extends JView
{
function display($tpl = null) 
{
global $option;
$model = &$this->getModel();
$list = $model->getSimStore();
$this->assignRef('list', $list);
parent::display($tpl);
}
}
?>