<?php
defined( '_JEXEC' ) or die( 'Restricted access' );
jimport( 'joomla.application.component.model' );
class ModelSimCategoriesSimCategories extends JModel
{
    var $_SimCategories = null;
    var $_id = null;
    var $_Category_name=null;

    function __construct()
    {
        parent::__construct();
        $id = JRequest::getVar('id', 0,'int');
        $this->_id = $id;
    }
    function getSimCategories()
    {
        if(!$this->_SimCategories)
        {
            $query = "SELECT a.sim_id, a.sim_numb,a.price,a.curency,b.provider_name,c.admin_name FROM #__sim as a,#__sim_provider as b,#__sim_admin c WHERE a.admin_id=c.admin_id and
         a.provider_id = b.provider_id and a.del_flag =0 and a.categori_id = '" . $this->_id . "' order by a.price desc";
            $this->_SimCategories = $this->_getList($query);
        }
        return $this->_SimCategories;
    }
    function getCategoryName(){
        $query = "select categori_name from #__sim_categories where del_flag=0 and categori_id=". $this->_id ;
        $this->_Category_name = $this->_getList($query);
        return $this->_Category_name;
    }
}
?>