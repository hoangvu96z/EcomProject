<?php
defined ('_JEXEC') or die ('Restricted access');
class modSimCategoriesHelper
{
    function getSimCategories()
    {
        $db= &JFactory::getDBO();
       $query ='select * from #__sim_categories c where c.del_flag=0 order by categori_id';
       $db->setQuery($query);
       $rows = $db->LoadObjectList();
       return $rows;
    }
    function renderSimCategories(&$review)
    {
        $link = JRoute::_("index.php?option=com_simcategories&view=simcategories&id=" . $review->categori_id);
         require(JModuleHelper::getLayoutPath('mod_SimCategories','_review'));
    }
}
?>