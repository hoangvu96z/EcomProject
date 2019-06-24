<?php
/*
 * @Package Softpin Order Manager
 * @Subpackage : simscroll Manager
 * Create by : thuc.lehuy@gmail.com
 */
// No direct access
defined( '_JEXEC' ) or die( 'Restricted access' );
?>
<form action="index.php" method="post" name="adminForm" id="adminForm">
<div class="col100">
	<fieldset class="adminform">
		<legend><?php echo JText::_( 'Details' ); ?></legend>
		<table class="admintable">
		<tr>
			<td width="100" align="right">
				<label for="content">
					<?php echo JText::_( 'Nội dung chữ chạy' ); ?>:
				</label>
			</td>
			<td>
				<input class="text_area" type="text" name="content" id="content" size="150" maxlength="250" value="<?php echo $this->simscroll->content;?>" />
			</td>
		</tr>
	</table>
	</fieldset>
</div>
<div class="clr"></div>
<input type="hidden" name="option" value="com_simscroll" />
<input type="hidden" name="scroll_id" value="<?php echo $this->simscroll->scroll_id; ?>" />
<input type="hidden" name="task" value="" />
<input type="hidden" name="controller" value="simscroll" />
</form>

