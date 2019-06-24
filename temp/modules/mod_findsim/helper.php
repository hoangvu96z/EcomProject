<?php
defined ('_JEXEC') or die ('Restricted access');
class modFindsimHelper
{
    function getProvider()
    {
        $db= &JFactory::getDBO();
        $query ='select * from #__sim_provider where del_flag=0';
        $db->setQuery($query);
        $rows = $db->loadObjectList();
        $provider = '<select id="provider" name="provider" class="inputbox" style="width:85%;margin-left:10px">';
        $provider.='<option value="0">Chọn mạng</option>';
        foreach ($rows as $row){
            $provider.='<option value="'.$row->provider_id.'">'.$row->provider_name.'</option>';
        }
        $provider.='</select>';
        return $provider;
    }
    function getCategory(){
        $db= &JFactory::getDBO();
        $query ='select * from #__sim_categories where del_flag=0';
        $db->setQuery($query);
        $rows = $db->loadObjectList();
        $category = '<select id="category" name="category" class="inputbox" style="width:85%;margin-left:10px">';
        $category.='<option value="0">Chọn loại sim</option>';
        foreach ($rows as $row){
            $category.='<option value="'.$row->categori_id.'">'.$row->categori_name.'</option>';
        }
        $category.='</select>';
        return $category;
    }
    function renderSupport(&$review)
    {
        //$link = JRoute::_("index.php?option=com_simprovider&task=view&id=" . $review->provider_id);
        require(JModuleHelper::getLayoutPath('mod_support','_review'));
    }
}

?>
