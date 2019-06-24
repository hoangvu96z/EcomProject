<?php
/*
 * @Package Softpin Order Manager
 * @Subpackage : simbuy Manager
 * Created by : thuc.lehuy@gmail.com
 */
// no direct access
defined('_JEXEC') or die('Truy nhập không hợp lệ');

jimport('joomla.application.component.model');

class SimbuyModelSimbuy extends JModel
{
    function __construct()
    {
        parent::__construct();
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
        // Bind the form fields to the simbuy table
        if (!$row->bind($data)) {
            $this->setError($this->_db->getErrorMsg());
            return false;
        }

        // Make sure the simbuy record is valid
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
