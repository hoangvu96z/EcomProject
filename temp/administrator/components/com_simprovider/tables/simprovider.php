<?php
/*
 * @Package Softpin Order Manager
 * @Subpackage : simprovider Manager
 * Created by : thuc.lehuy@gmail.com
 */
// no direct access
defined('_JEXEC') or die('Truy nhập không hợp lệ');
/*
 * simprovider Table class
 */
class TableSimprovider extends JTable
{
    // Primary key-----------
    var $provider_id = null;
    var $provider_name = null;
    var $provider_address = null;
    var $del_flag = null;
    /**
	 * Constructor
	 *
	 * @param object Database connector object
	 */
    function TableSimprovider(& $db)
    {
        parent::__construct('#__sim_provider', 'provider_id', $db);
    }
    
}


