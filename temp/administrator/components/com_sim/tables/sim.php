<?php
/*
 * @Package Softpin Order Manager
 * @Subpackage : sim Manager
 * Created by : thuc.lehuy@gmail.com
 */
// no direct access
defined('_JEXEC') or die('Truy nhập không hợp lệ');
/*
 * sim Table class
 */
class TableSim extends JTable
{
    // Primary key-----------
    var $sim_id = null;
    var $sim_numb = null;
    var $admin_id = null;
    var $provider_id = null;
    var $categori_id = null;
    var $price = null;
    var $curency = null;
    var $del_flag = null;
    /**
	 * Constructor
	 *
	 * @param object Database connector object
	 */
    function TableSim(& $db)
    {
        parent::__construct('#__sim', 'sim_id', $db);
    }
    
}


