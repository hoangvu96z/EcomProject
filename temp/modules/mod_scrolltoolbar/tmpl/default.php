<?php
defined('_JEXEC') or die('Restricted access');?>
<marquee behavior="scroll" direction="left" scrollamount="4" onmouseover="this.stop();" onmouseout="this.start();">
<?php
foreach ($list as $review)
{
     modScrollToolbarHelper::renderSrolltoolbar($review);
}
?></marquee>