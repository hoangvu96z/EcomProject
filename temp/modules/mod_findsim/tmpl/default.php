<?php // no direct access
defined('_JEXEC') or die('Restricted access'); 
if( ! isset($moduleclass_sfx) ) $moduleclass_sfx = '';
if( ! isset($maxlength) ) $maxlength = '20';
?>
<form action="index.php" method="post">
    <div class="search">
        <?php
        $text = 'Nhập số sim cần tìm';
        $output = '<input name="searchword" id="mod_search_searchword" maxlength="20" alt="Nhập số sim" class="inputbox" type="text" style="width:80%;margin-left:10px;" value="'.$text.'"  onblur="if(this.value==\'\') this.value=\''.$text.'\';" onfocus="if(this.value==\''.$text.'\') this.value=\'\';" />';
        $minprice = 0;
        $minmoney = '<input name="minprice" alt="'.$minprice.'" class="inputbox'.$moduleclass_sfx.'" type="text" style="width:80%;margin-left:10px;" value="'.$minprice.'"  onblur="if(this.value==\'\') this.value=\''.$minprice.'\';" onfocus="if(this.value==\''.$minprice.'\') this.value=\'\';" />';
        $maxprice = 10000000;
        $maxmoney = '<input name="maxprice" maxlength="'.$maxlength.'" alt="'.$maxprice.'" class="inputbox'.$moduleclass_sfx.'" type="text" style="width:80%;margin-left:10px;" value="'.$maxprice.'"  onblur="if(this.value==\'\') this.value=\''.$maxprice.'\';" onfocus="if(this.value==\''.$maxprice.'\') this.value=\'\';" />';
        $button = '<div align="center"><input type="submit" value="Tìm kiếm" class="button" onclick="this.form.searchword.focus();"/></div>';

        $button = '<br />'.$button;
        $provider='<br />'.$provider;
        $category='<br />'.$category;
        $minmoney='<br />'.$minmoney;
        $maxmoney='<br />'.$maxmoney;
        $output = $output.$provider.$minmoney.$maxmoney.$category.$button;
        echo $output;
        ?>
    </div>
    <input type="hidden" name="task"   value="search" />
    <input type="hidden" name="option" value="com_sim" />
</form>