<?php
/*
 * @Package Softpin Order Manager
 * @Subpackage : simorder Manager
 * Created by : thuc.lehuy@gmail.com
 */
// no direct access
defined('_JEXEC') or die('Truy nhập không hợp lệ');
/*
 * simorder Table class
 */
class TableSimorder extends JTable
{
    // Primary key-----------
    var $sim_order_id = null;
    var $name = null;
    var $address = null;
    var $email = null;
    var $tel = null;
    var $require = null;
    var $datetime_created = null;
    var $del_flag = null;
    var $sim_numb = null;
    /**
	 * Constructor
	 *
	 * @param object Database connector object
	 */
    function TableSimorder(& $db)
    {
        parent::__construct('#__sim_order', 'sim_order_id', $db);
    }
    
}


