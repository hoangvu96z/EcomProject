<?php
      defined ('_JEXEC') or die ('Restricted access');
      require (dirname(__FILE__).DS.'helper.php');
      $list= modSimProviderHelper::getSimProvider();
      require(JModuleHelper::getLayoutPath('mod_SimProvider'));

?>
