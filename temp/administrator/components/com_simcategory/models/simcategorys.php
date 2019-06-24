<?php
/* 
 * @Package Softpin Order Manager
 * @Subpackage : simcategory Manager
 * Create by : thuc.lehuy@gmail.com
 */

// no direct access
defined('_JEXEC') or die('Truy nhập không hợp lệ');
// import model parent
jimport( 'joomla.application.component.model' );

/*
 *  simcategory Model
 * Get data from table simcategory
 */
class SimcategorysModelSimcategorys extends JModel
{
    var $_data;
     /**
	 * Returns the query
	 * @return string The query to be used to retrieve the rows from the database
	 */
    function _buildQuery()
    {
        $query = 'select * from #__sim_categories order by del_flag';
        return $query;
    }
    // Get simcategory in DB
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