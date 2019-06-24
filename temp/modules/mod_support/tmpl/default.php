<?php
defined('_JEXEC') or die('Restricted access');
foreach ($list as $review)
{
     modSupportHelper::renderSupport($review);
}
?>