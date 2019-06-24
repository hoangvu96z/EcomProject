<?php
defined ('_JEXEC') or die ('Restricted access');
class modSimProviderHelper
{
    function getSimProvider()
    {
        $db= &JFactory::getDBO();
       $query ='select * from #__sim_provider order by provider_id  ';
       $db->setQuery($query);
       $rows = $db->LoadObjectList();
       return $rows;
    }
    function renderSimProvider(&$review)
    {
        $link = JRoute::_("index.php?option=com_simprovider&task=view&id=" . $review->provider_id);
         require(JModuleHelper::getLayoutPath('mod_SimProvider','_review'));
    }
}
?>