<?php
defined('_JEXEC') or die('Restricted access');
foreach ($list as $review)
{
     modSimProviderHelper::renderSimProvider($review);
}
?>