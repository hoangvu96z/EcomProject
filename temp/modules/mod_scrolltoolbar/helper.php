<?php
defined ('_JEXEC') or die ('Restricted access');
class modScrollToolbarHelper
{
    function getScrollToolbar()
    {
       $db= &JFactory::getDBO();
       $query ='select content from #__sim_scroll where scroll_id=2';
       $db->setQuery($query);
       $rows = $db->loadObject();
       return $rows;
    }
    function renderSrolltoolbar(&$review)
    {
        //$link = JRoute::_("index.php?option=com_simprovider&task=view&id=" . $review->provider_id);
         require(JModuleHelper::getLayoutPath('mod_scrolltoolbar','_review'));
    }
}
?>