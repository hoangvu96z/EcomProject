<?php
defined ('_JEXEC') or die ('Restricted access');
require_once(dirname(__FILE__).DS.'helper.php');
$list = modSimCateHelper::getSim($params);
$totalsim = modSimCateHelper::getTotalSim($params);
$categoryname = modSimCateHelper::getCategoryName($params);
$id = $params->get('id');
require(JModuleHelper::getLayoutPath('mod_simcate'));
?>
