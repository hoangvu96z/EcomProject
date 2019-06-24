<?php
      defined ('_JEXEC') or die ('Restricted access');
      require (dirname(__FILE__).DS.'helper.php');
      $list= modSupportHelper::getSupport();
      require(JModuleHelper::getLayoutPath('mod_support'));
?>
