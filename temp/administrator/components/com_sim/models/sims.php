<?php
/* 
 * @Package Softpin Order Manager
 * @Subpackage : sim Manager
 * Create by : thuc.lehuy@gmail.com
 */

// no direct access
defined('_JEXEC') or die('Truy nhập không hợp lệ');
// import model parent
jimport( 'joomla.application.component.model' );

/*
 *  sim Model
 * Get data from table sim
 */
class SimsModelSims extends JModel
{
    var $_data;
     /**
	 * Returns the query
	 * @return string The query to be used to retrieve the rows from the database
	 */
    function _buildQuery()
    {
        $query = 'select S.*,SA.admin_name,SP.provider_name,SC.categori_name from #__sim S,#__sim_admin SA,#__sim_categories SC,#__sim_provider SP where S.admin_id=SA.admin_id and S.provider_id=SP.provider_id and S.categori_id=SC.categori_id order by del_flag,sim_id';
        return $query;
    }
    // Get sim in DB
    function getData()
    {
        if(empty ($this->_data))
        {
            $query = $this->_buildQuery();
			$this->_data = $this->_getList( $query );
        }
        return $this->_data;
    }    
}