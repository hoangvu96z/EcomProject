<?php // no direct access
defined('_JEXEC') or die('Restricted access'); ?>
<form action="index.php" method="post">
	<div class="search<?php echo $params->get('moduleclass_sfx') ?>">
		<?php
		    $output = '<input name="searchword" id="mod_search_searchword" maxlength="'.$maxlength.'" alt="'.$button_text.'" class="inputbox'.$moduleclass_sfx.'" type="text" style="width:80%;margin-left:10px;" value="'.$text.'"  onblur="if(this.value==\'\') this.value=\''.$text.'\';" onfocus="if(this.value==\''.$text.'\') this.value=\'\';" />';
            
            $provider = '<select id="provider" name="provider" class="inputbox" style="width:85%;margin-left:10px">';
            $provider.='<option>Chọn mạng</option>';
            $provider.='</select>';

            $category = '<select id="category" name="category" class="inputbox" style="width:85%;margin-left:10px">';
            $category.='<option>Chọn loại sim</option>';
            $category.='</select>';
            $minprice = 'Giá thấp nhất';
            $minmoney = '<input name="minprice" id="mod_search_searchword" maxlength="'.$maxlength.'" alt="'.$minprice.'" class="inputbox'.$moduleclass_sfx.'" type="text" style="width:80%;margin-left:10px;" value="'.$minprice.'"  onblur="if(this.value==\'\') this.value=\''.$minprice.'\';" onfocus="if(this.value==\''.$minprice.'\') this.value=\'\';" />';
            $maxprice = 'Giá cao nhất';
            $maxmoney = '<input name="maxprice" id="mod_search_searchword" maxlength="'.$maxlength.'" alt="'.$maxprice.'" class="inputbox'.$moduleclass_sfx.'" type="text" style="width:80%;margin-left:10px;" value="'.$maxprice.'"  onblur="if(this.value==\'\') this.value=\''.$maxprice.'\';" onfocus="if(this.value==\''.$maxprice.'\') this.value=\'\';" />';
			if ($button) :
			    if ($imagebutton) :
			        $button = '<input type="image" value="'.$button_text.'" class="button'.$moduleclass_sfx.'" src="'.$img.'" onclick="this.form.searchword.focus();"/>';
			    else :
			        $button = '<input type="submit" value="'.$button_text.'" class="button'.$moduleclass_sfx.'" onclick="this.form.searchword.focus();"/>';
			    endif;
			endif;

			switch ($button_pos) :
			    case 'top' :
				    $button = $button.'<br />';
				    $output = $button.$output;
				    break;

			    case 'bottom' :
				    $button = '<br />'.$button;
                    $provider='<br />'.$provider;
                    $category='<br />'.$category;
                    $minmoney='<br />'.$minmoney;
                    $maxmoney='<br />'.$maxmoney;
				    $output = $output.$provider.$minmoney.$maxmoney.$category.$button;
				    break;

			    case 'right' :
				    $output = $output.$button;
				    break;

			    case 'left' :
			    default :
				    $output = $button.$output;
				    break;
			endswitch;

			echo $output;
		?>
	</div>
	<input type="hidden" name="task"   value="search" />
	<input type="hidden" name="option" value="com_search" />
</form>