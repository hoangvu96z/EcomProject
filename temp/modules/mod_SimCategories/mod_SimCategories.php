<?php
      defined ('_JEXEC') or die ('Restricted access');
      require (dirname(__FILE__).DS.'helper.php');
      $list= modSimCategoriesHelper::getSimCategories();
      require(JModuleHelper::getLayoutPath('mod_SimCategories'));
     
?>
