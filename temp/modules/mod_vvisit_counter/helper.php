<?php
/**
* @version		$Id: helper.php 2009-02-06 vinaora $
* @package		Joomla
* @copyright	Copyright (C) 2006 - 2009 VINAORA.COM. All rights reserved.
* @license		GNU/GPL, see LICENSE.php
* Joomla! is free software. This version may have been modified pursuant
* to the GNU General Public License, and as distributed it includes or
* is derivative of works licensed under the GNU General Public License or
* other free or open source software licenses.
* See COPYRIGHT.php for copyright notices and details.
*/

// no direct access
defined('_JEXEC') or die('Restricted access');

class modVisitCounterHelper
{
	function render(&$params)
	{
		// Read our Parameters
		$today			=	@$params->get('today', 'Today');
		$yesterday		=	@$params->get('yesterday', 'Yesterday');
		$x_month		=	@$params->get('month', 'This month');
		$x_week			=	@$params->get('week', 'This week');
		$all			=	@$params->get('all', 'All days');
		
		$locktime		=	@$params->get('locktime', 60);
		$initialvalue	=	@$params->get('initialvalue', 1);
		$records		=	@$params->get('records', 1);
		
		$s_today		=	@$params->get('s_today', 1);
		$s_yesterday	=	@$params->get('s_yesterday', 1);
		$s_all			=	@$params->get('s_all', 1);
		$s_week			=	@$params->get('s_week', 1);
		$s_month		=	@$params->get('s_month', 1);
		
		$s_digit		=	@$params->get( 's_digit', 1 );
		$disp_type 		= 	@$params->get( 'disp_type', "a" );
		
		$widthtable		=	@$params->get( 'widthtable', "100" );
		$pretext  		= 	@$params->get( 'pretext', "" );
		$posttext  		= 	@$params->get( 'posttext', "" );
		
		// From minutes to seconds
		$locktime		=	$locktime * 60;
		
		$db		=& JFactory::getDBO();
		
		// Check if table exists. When not, create it
		$query	=	"CREATE TABLE IF NOT EXISTS #__vvisitcounter (id int(11) unsigned NOT NULL auto_increment, tm int not null, ip varchar(16) not null default '0.0.0.0', PRIMARY KEY (id)) ENGINE=MyISAM AUTO_INCREMENT=1";
		$db->setQuery($query);
		$db->query();
		
		// Now we are checking if the ip was logged in the database. Depending of the value in minutes in the locktime variable.
		$day			 =	date('d');
		$month			 =	date('n');
		$year			 =	date('Y');
		$daystart		 =	mktime(0,0,0,$month,$day,$year);
		$monthstart		 =  mktime(0,0,0,$month,1,$year);
		
		// weekstart
		$weekday		 =	date('w');
		$weekday--;
		if ($weekday < 0)$weekday = 7;
		$weekday		 =	$weekday * 24*60*60;
		$weekstart		 =	$daystart - $weekday;

		$yesterdaystart	 =	$daystart - (24*60*60);
		$now			 =	time();
		$ip				 =	$_SERVER['REMOTE_ADDR'];
		
		$query			 =	"SELECT MAX(id) FROM #__vvisitcounter";
							$db->setQuery($query);
		$all_visitors	 =	$db->loadResult();
		
		if ($all_visitors == NULL) {
			$all_visitors = $initialvalue;
		} else {
			$all_visitors += $initialvalue;
		}
		
		// Delete old records
		$temp=$all_visitors-$records;
		
		if ($records>0){
			$query		 =  "DELETE FROM #__vvisitcounter WHERE id<'$temp'";
							$db->setQuery($query);
							$db->query();
		}
		
		$query			 =	"SELECT COUNT(*) FROM #__vvisitcounter WHERE ip='$ip' AND (tm+'$locktime')>'$now'";
							$db->setQuery($query);
		$items			 =	$db->loadResult();
		
		if (empty($items))
		{
			$query = "INSERT INTO #__vvisitcounter (id, tm, ip) VALUES ('', '$now', '$ip')";
			$db->setQuery($query);
			$db->query();
			$e = $db->getErrorMsg();
		}
		
		$n				 = 	$all_visitors;
		$div = 100000;
		while ($n > $div) {
			$div *= 10;
		}
        $query = 'SELECT count(*) FROM #__session WHERE client_id = 0 and guest=1';
		$db->setQuery($query);
		$today_visitors = $db->loadResult();
        $query = 'SELECT count(*) FROM #__sim WHERE del_flag=0';
        $db->setQuery($query);
		$month_visitors	 =	$db->loadResult();
/*
		$query			 =	"SELECT COUNT(*) FROM #__vvisitcounter WHERE tm>'$daystart'";
							$db->setQuery($query);
		$today_visitors	 =	$db->loadResult();
		
		$query			 =	"SELECT COUNT(*) FROM #__vvisitcounter WHERE tm>'$yesterdaystart' and tm<'$daystart'";
							$db->setQuery($query);
		$yesterday_visitors	 =	$db->loadResult();
			
		$query			 =	"SELECT COUNT(*) FROM #__vvisitcounter WHERE tm>='$weekstart'";
							$db->setQuery($query);
		$week_visitors	 =	$db->loadResult();

		$query			 =	"SELECT COUNT(*) FROM #__vvisitcounter WHERE tm>='$monthstart'";
							$db->setQuery($query);
		$month_visitors	 =	$db->loadResult();
*/
		$content = '<div>';
		if ($pretext != "") $content .= '<div>'.$pretext.'</div>';
		// Show digit counter
		if($s_digit){		
			$content .= '<div style="text-align: center;">';
			while ($div >= 1) {
				$digit = $n / $div % 10;
				$content .= '<img src="'.JURI::base().'modules/mod_vvisit_counter/images/'.$disp_type.'/'.$digit.'.gif" alt="mod_vvisit_counter" />';
				$n -= $digit * $div;
				$div /= 10;
			}
			$content .= '</div>';
		}
		
		$content		 .=	'<div><table cellpadding="0" cellspacing="0" style="text-align: center; width: '.$widthtable.'%;" class="vinaora_counter"><tbody align="center">';
		// Show today, yestoday, week, month, all statistic
		if($s_today)		$content		.=	modVisitCounterHelper::spaceer("vtoday.gif", $today, $today_visitors);
		//if($s_yesterday)	$content		.=	modVisitCounterHelper::spaceer("vyesterday.gif", $yesterday, $yesterday_visitors);
		//if($s_week)			$content		.=	modVisitCounterHelper::spaceer("vweek.gif", $x_week, $week_visitors);
		if($s_all)			$content		.=	modVisitCounterHelper::spaceer("vmonth.gif", $all, $all_visitors);
        if($s_month)		$content		.=	modVisitCounterHelper::spaceer("sim.jpg", $x_month, $month_visitors);
		
		$content		.= "</tbody></table></div>";
		if ($posttext != "") $content		.= '<div>'.$posttext.'</div>';
		$content .= "</div>";
		//$content .= '<div style="text-align:center;"><a href="http://vinaora.com" target="_blank" title="Vinaora Visitors Counter">Visitors Counter 1.5</a></div>';
		echo $content;
	}
	function spaceer($a1,$a2,$a3)
	{
		$ret = '<tr align="left" nowrap="nowrap"><td width="20" height="20"><img src="'.JURI::base().'modules/mod_vvisit_counter/images/'.$a1.'" alt="mod_vvisit_counter"/></td>';
		$ret .= '<td nowrap="nowrap">'.$a2.'</td>';
		$ret .= '<td align="right" nowrap="nowrap" style="padding-left:5px;">'.$a3.'</td></tr>';
		return $ret;
	}
}