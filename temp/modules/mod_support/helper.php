<?php
defined ('_JEXEC') or die ('Restricted access');
class modSupportHelper
{
    function getSupport()
    {
       $db= &JFactory::getDBO();
       $query ='select * from #__sim_admin';
       $db->setQuery($query);
       $rows = $db->loadObjectList();
       return $rows;
    }
    function renderSupport(&$review)
    {
        //$link = JRoute::_("index.php?option=com_simprovider&task=view&id=" . $review->provider_id);
         require(JModuleHelper::getLayoutPath('mod_support','_review'));
    }
}
?>