<?php
defined ('_JEXEC') or die ('Restricted access');
class modNewsimHelper
{
    function getNewsim()
    {
       $db= &JFactory::getDBO();
       $query ='select sim_id,sim_numb,price,curency from #__sim where del_flag=0 order by sim_id desc limit 20';
       $db->setQuery($query);
       $rows = $db->loadObjectList();
       return $rows;
    }
    function renderNewsim(&$review)
    {
         $link = JRoute::_("index.php?option=com_simbuy&task=add&simnumb=".$review->sim_numb);
         require(JModuleHelper::getLayoutPath('mod_newsim','_review'));
    }
     function thousandseperate($value)
    {
        $thausandSepCh = ".";
        $realValue = $value."";
        $result = "";
        $len = strlen($realValue);
        while($len>3){
            $result = $thausandSepCh.substr($realValue,$len-3,3).$result;
            $len=$len-3;
        }
        $result=substr($realValue,0,$len).$result;
        return $result;
    }
}
?>