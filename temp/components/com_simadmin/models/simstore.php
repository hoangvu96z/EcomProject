<?php
defined( '_JEXEC' ) or die( 'Restricted access' );
jimport( 'joomla.application.component.model' );
class ModelSimAdminSimStore extends JModel
{
var $_SimStore = null;
function getSimStore()
{
if(!$this->_SimStore)
{
$query = "SELECT * FROM #__sim_admin ORDER BY admin_id";
$this->_SimStore = $this->_getList($query, 0, 0);
}
return $this->_SimStore;
}
}
?>