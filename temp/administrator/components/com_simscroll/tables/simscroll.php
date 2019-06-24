<?php
/*
 * @Package Softpin Order Manager
 * @Subpackage : simscroll Manager
 * Created by : thuc.lehuy@gmail.com
 */
// no direct access
defined('_JEXEC') or die('Truy nhập không hợp lệ');
/*
 * simscroll Table class
 */
class TableSimscroll extends JTable
{
    // Primary key-----------
    var $scroll_id = null;
    var $content = null;
    var $del_flag = null;
    /**
	 * Constructor
	 *
	 * @param object Database connector object
	 */
    function TableSimscroll(& $db)
    {
        parent::__construct('#__sim_scroll', 'scroll_id', $db);
    }
    
}


