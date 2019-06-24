<?php
defined('_JEXEC') or die('Restricted access');?>
<marquee behavior="scroll" direction="up" scrollamount="4" onmouseover="this.stop();" onmouseout="this.start();">
<?php
foreach ($list as $review)
{
     modNewsimHelper::renderNewsim($review);
}
?></marquee>