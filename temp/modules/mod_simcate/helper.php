<?php
defined ('_JEXEC') or die ('Restricted access');
class modSimCateHelper
{
    function getSim(&$params)
    {
        $db= &JFactory::getDBO();
        $query ="select a.*,b.provider_name,c.admin_name from #__sim a,#__sim_provider b,#__sim_admin c where a.provider_id=b.provider_id and a.admin_id=c.admin_id and a.del_flag=0 and a.categori_id =".$params->get('id')." order by a.price desc limit 10";
        $db->setQuery($query);
        $rows = $db->LoadObjectList();
        if ($db->getErrorNum())
        {
            echo $db->stderr();
            return false;
        }
        return $rows;
    }
    function getTotalSim(&$params)
    {
        $db= &JFactory::getDBO();
        $query ="select count(*) from #__sim a where a.del_flag=0 and a.categori_id =".$params->get('id');
        $db->setQuery($query);
        $total = $db->loadResult();
        if ($db->getErrorNum())
        {
            echo $db->stderr();
            return false;
        }
        return $total;
    }
    function getCategoryName(&$params)
    {
        $db= &JFactory::getDBO();
        $query ="select a.categori_name from #__sim_categories a where a.del_flag=0 and a.categori_id =".$params->get('id');
        $db->setQuery($query);
        $categoriname = $db->loadResult();
        if ($db->getErrorNum())
        {
            echo $db->stderr();
            return false;
        }
        return $categoriname;
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