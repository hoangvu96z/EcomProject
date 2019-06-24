<?php
/**
 * @version		$Id: search.php 10752 2008-08-23 01:53:31Z eddieajau $
 * @package		Joomla
 * @subpackage	Search
 * @copyright	Copyright (C) 2005 - 2008 Open Source Matters. All rights reserved.
 * @license		GNU/GPL, see LICENSE.php
 * Joomla! is free software. This version may have been modified pursuant to the
 * GNU General Public License, and as distributed it includes or is derivative
 * of works licensed under the GNU General Public License or other free or open
 * source software licenses. See COPYRIGHT.php for copyright notices and
 * details.
 */

// Check to ensure this file is included in Joomla!
defined( '_JEXEC' ) or die( 'Restricted access' );

jimport('joomla.application.component.model');

/**
 * Search Component Search Model
 *
 * @package		Joomla
 * @subpackage	Search
 * @since 1.5
 */
class SimModelSim extends JModel
{
    /**
     * Sezrch data array
     *
     * @var array
     */
    var $_data = null;
    function &getData()
    {
        if (empty($this->_data)){
            $minprice = JRequest::getVar("minprice");
            if(strlen($minprice)>3){
                $minprice = substr($minprice,0,strlen($minprice)-3);
            }
            $maxprice = JRequest::getVar("maxprice");
            if(strlen($maxprice)>3){
                $maxprice = substr($maxprice,0,strlen($maxprice)-3);
            }
            $searchword = JRequest::getVar("searchword");
            $query = "select S.*,P.provider_name,A.admin_name from #__sim S,#__sim_provider P,#__sim_admin A where S.provider_id=P.provider_id and S.admin_id=A.admin_id and S.del_flag=0 and S.price >".$minprice.' and S.price<'.$maxprice.' ';
            if(JRequest::getVar("provider")){
                $provider = JRequest::getVar("provider");
                $query=$query.' and S.provider_id='.$provider;
            }
            if(JRequest::getVar("category")){
                $category = JRequest::getVar("category");
                $query=$query.' and S.categori_id='.$category;
            }
		$query=$query.' order by S.price desc';
            $rows = $this->_getList( $query );
            if($searchword==""){
                $this->_data = $rows;
            }
            else{
                $length = count($rows);
                foreach ($rows as $row)
                {
                    $sim_numb = str_replace(" ","",$row->sim_numb);
			$sim_numb = str_replace(".","",$sim_numb);
			$searchword= str_replace(" ","",$searchword);
			$searchword= str_replace(".","",$searchword);
                    if(substr_count($sim_numb, $searchword)>0){
                        $this->_data[]=$row;
                    }
                }
            }
        }
        return $this->_data;
    }
}
