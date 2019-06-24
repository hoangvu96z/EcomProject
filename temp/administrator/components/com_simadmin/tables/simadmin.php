<?php
/*
 * @Package Softpin Order Manager
 * @Subpackage : simadmin Manager
 * Created by : thuc.lehuy@gmail.com
 */
// no direct access
defined('_JEXEC') or die('Truy nhập không hợp lệ');
/*
 * simadmin Table class
 */
class TableSimadmin extends JTable
{
    // Primary key-----------
    var $admin_id = null;
    var $admin_name = null;
    var $admin_address = null;
    var $phone_number = null;
    var $account_bank = null;
    var $admin_yahoo = null;
    var $del_flag = null;
    /**
	 * Constructor
	 *
	 * @param object Database connector object
	 */
    function TableSimadmin(& $db)
    {
        parent::__construct('#__sim_admin', 'admin_id', $db);
    }
    
}


