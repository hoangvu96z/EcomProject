<?php
defined( '_JEXEC' ) or die( 'Restricted access' );
jimport( 'joomla.application.component.model' );
class ModelSimCategoriesSimProvider extends JModel
{
    var $_SimProvider = null;
    var $_id = null;
    function __construct()
    {
        parent::__construct();
        $id = JRequest::getVar('id', 0,'int');
        $this->_id = $id;
    }
    function getSimProvider()
    {
        if(!$this->_SimProvider)
        {
            $query = "SELECT a.sim_id, a.sim_numb,a.price,a.curency,".
"b.provider_name,c.categori_name,d.admin_name FROM #__sim as a,#__sim_provider as b,#__sim_categories c,#__sim_admin d WHERE
a.provider_id = b.provider_id and a.categori_id=c.categori_id and a.admin_id=d.admin_id and a.del_flag=0 and a.provider_id = '" . $this->_id . "' order by a.price desc";
            $this->_SimProvider = $this->_getList($query, 0, 0);
        }
        return $this->_SimProvider;
    }
}
?>