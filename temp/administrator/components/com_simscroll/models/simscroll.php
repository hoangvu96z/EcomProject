<?php
/*
 * @Package Softpin Order Manager
 * @Subpackage : simscroll Manager
 * Created by : thuc.lehuy@gmail.com
 */
// no direct access
defined('_JEXEC') or die('Truy nhập không hợp lệ');

jimport('joomla.application.component.model');

class SimscrollsModelSimscroll extends JModel
{
    function __construct()
    {
        parent::__construct();

        $array = JRequest::getVar('cid',  0, '', 'array');
        $this->setId((int)$array[0]);

    }
        /**

     */
    function setId($id)
    {
        // Set id and wipe data
        $this->_scroll_id	= $id;
        $this->_data	= null;
    }
    /**
     * Returns the query
     * @return string The query to be used to retrieve the rows from the database
     */
    function _buildQuery()
    {
        $query = 'select * from #__sim_scroll where scroll_id= '.$this->_scroll_id;
        return $query;
    }
    /**
     * Method to get a hello
     * @return object with data
     */
    function &getData()
    {
        // Load the data
        if (empty( $this->_data )) {
            $query = $this->_buildQuery();
            $this->_db->setQuery( $query );
            $this->_data =& $this->_db->loadObject();
        }
        return $this->_data;
    }
    /**
 * Method to store a record
 *
 * @access    public
 * @return    boolean    True on success
 */
    function store()
    {
        $row =& $this->getTable();
        $data = JRequest::get( 'post' );
        // Bind the form fields to the simscroll table
        if (!$row->bind($data)) {
            $this->setError($this->_db->getErrorMsg());
            return false;
        }

        // Make sure the simscroll record is valid
        if (!$row->check()) {
            $this->setError($this->_db->getErrorMsg());
            return false;
        }

        // Store the web link table to the database
        if (!$row->store()) {
            $this->setError($this->_db->getErrorMsg());
            return false;
        }
        return true;
    }
}
