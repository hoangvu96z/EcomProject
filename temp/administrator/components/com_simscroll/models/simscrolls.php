<?php
/* 
 * @Package Softpin Order Manager
 * @Subpackage : simscroll Manager
 * Create by : thuc.lehuy@gmail.com
 */

// no direct access
defined('_JEXEC') or die('Truy nhập không hợp lệ');
// import model parent
jimport( 'joomla.application.component.model' );

/*
 *  simscroll Model
 * Get data from table simscroll
 */
class SimscrollsModelSimscrolls extends JModel
{
    var $_data;
     /**
	 * Returns the query
	 * @return string The query to be used to retrieve the rows from the database
	 */
    function _buildQuery()
    {
        $query = 'select * from #__sim_scroll';
        return $query;
    }
    // Get simscroll in DB
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