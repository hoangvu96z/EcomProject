<?php
/*
 * @Package Softpin Order Manager
 * @Subpackage : sim Manager
 * Created by : thuc.lehuy@gmail.com
 */
// no direct access
defined('_JEXEC') or die('Truy nhập không hợp lệ');

jimport('joomla.application.component.model');

class SimsModelSim extends JModel
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
        $this->_sim_id	= $id;
        $this->_data	= null;
    }
    /**
     * Returns the query
     * @return string The query to be used to retrieve the rows from the database
     */
    function _buildQuery()
    {
        $query = 'select S.*,SA.admin_name,SP.provider_name,SC.categori_name from #__sim S,#__sim_admin SA,#__sim_categories SC,#__sim_provider SP where S.admin_id=SA.admin_id and S.provider_id=SP.provider_id and S.categori_id=SC.categori_id and S.sim_id= '.$this->_sim_id;
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
    function getProvider(){
        $query = 'select P.provider_id,P.provider_name from #__sim_provider P';
        $this->_data1 = $this->_getList( $query );
        return $this->_data1;
    }
    function getCategories(){
        $query = 'select C.categori_id,C.categori_name from #__sim_categories C';
        $this->_data1 = $this->_getList( $query );
        return $this->_data1;
    }
    function getAdmin(){
        $query = 'select A.admin_id,A.admin_name from #__sim_admin A';
        $this->_data1 = $this->_getList( $query );
        return $this->_data1;
    }
    function delete()
    {
        $cids = JRequest::getVar( 'cid', array(0), 'post', 'array' );
        $row =& $this->getTable();
        foreach($cids as $cid) {
            if (!$row->delete( $cid )) {
                $this->setError( $row->getErrorMsg() );
                return false;
            }
        }
        return true;
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
        // Bind the form fields to the sim table
        if (!$row->bind($data)) {
            $this->setError($this->_db->getErrorMsg());
            return false;
        }

        // Make sure the sim record is valid
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
    // store simbatch in excel file to DB
    function stores($data)
    {
        $row =& $this->getTable();
        // Bind the form fields to the sim table
        try {
            if (!$row->bind($data)) {
                $this->setError($this->_db->getErrorMsg());
                return false;
            }

            // Make sure the sim record is valid
            if (!$row->check()) {
                $this->setError($this->_db->getErrorMsg());
                return false;
            }

            // Store the web link table to the database
            if (!$row->store()) {
                $this->setError($this->_db->getErrorMsg());
                return false;
            }
        } catch (Exception $e) {
            $this->setError($this->_db->getErrorMsg());
            return false;
        }
        return true;
    }
}
