<?php
/*
 * @Package Softpin Order Manager
 * @Subpackage : simcategory Manager
 * Created by : thuc.lehuy@gmail.com
 */
// no direct access
defined('_JEXEC') or die('Truy nhập không hợp lệ');
/*
 * simcategory Table class
 */
class TableSimcategory extends JTable
{
    // Primary key-----------
    var $categori_id = null;
    var $categori_name = null;
    var $datetime_create = null;
    var $datetime_last_modified = null;
    var $del_flag = null;
    /**
	 * Constructor
	 *
	 * @param object Database connector object
	 */
    function TableSimcategory(& $db)
    {
        parent::__construct('#__sim_categories', 'categori_id', $db);
    }
    
}


