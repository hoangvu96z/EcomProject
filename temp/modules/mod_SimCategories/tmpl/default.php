<?php
defined('_JEXEC') or die('Restricted access');
?>
<ul class="menu">
<?php
foreach ($list as $review)
{
     modSimCategoriesHelper::renderSimCategories($review);
}
?>
</ul>