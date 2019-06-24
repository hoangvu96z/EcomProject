<?php
      defined ('_JEXEC') or die ('Restricted access');
      require (dirname(__FILE__).DS.'helper.php');
      $list= modScrollToolbarHelper::getScrollToolbar();
      require(JModuleHelper::getLayoutPath('mod_scrolltoolbar'));
?>
