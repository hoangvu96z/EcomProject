<?php
      defined ('_JEXEC') or die ('Restricted access');
      require (dirname(__FILE__).DS.'helper.php');
      $list= modNewsimHelper::getNewsim();
      require(JModuleHelper::getLayoutPath('mod_newsim'));
?>
