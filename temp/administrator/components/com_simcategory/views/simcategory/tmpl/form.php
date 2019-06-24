<?php
/*
 * @Package Softpin Order Manager
 * @Subpackage : simcategory Manager
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
				<label for="categori_name">
					<?php echo JText::_( 'Tên nhóm Sim' ); ?>:
				</label>
			</td>
			<td>
				<input class="text_area" type="text" name="categori_name" id="categori_name" size="32" maxlength="250" value="<?php echo $this->simcategory->categori_name;?>" />
			</td>
		</tr>
	</table>
	</fieldset>
</div>
<div class="clr"></div>
<input type="hidden" name="option" value="com_simcategory" />
<input type="hidden" name="categori_id" value="<?php echo $this->simcategory->categori_id; ?>" />
<input type="hidden" name="task" value="" />
<input type="hidden" name="controller" value="simcategory" />
</form>

