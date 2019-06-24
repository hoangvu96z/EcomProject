<?php
/*
 * @Package Softpin Order Manager
 * @Subpackage : simprovider Manager
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
				<label for="provider_name">
					<?php echo JText::_( 'Tên nhà cung cấp' ); ?>:
				</label>
			</td>
			<td>
				<input class="text_area" type="text" name="provider_name" id="provider_name" size="32" maxlength="250" value="<?php echo $this->simprovider->provider_name;?>" />
			</td>
		</tr>
        <tr>
			<td width="100" align="right">
				<label for="provider_address">
					<?php echo JText::_( 'Địa chỉ' ); ?>:
				</label>
			</td>
			<td>
				<input class="text_area" type="text" name="provider_address" id="provider_address" size="32" maxlength="250" value="<?php echo $this->simprovider->provider_address;?>" />
			</td>
		</tr>
	</table>
	</fieldset>
</div>
<div class="clr"></div>
<input type="hidden" name="option" value="com_simprovider" />
<input type="hidden" name="provider_id" value="<?php echo $this->simprovider->provider_id; ?>" />
<input type="hidden" name="task" value="" />
<input type="hidden" name="controller" value="simprovider" />
</form>

