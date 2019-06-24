<?php
/*
 * @Package Softpin Order Manager
 * @Subpackage : simadmin Manager
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
				<label for="admin_name">
					<?php echo JText::_( 'Tên admin' ); ?>:
				</label>
			</td>
			<td>
				<input class="text_area" type="text" name="admin_name" id="admin_name" size="32" maxlength="250" value="<?php echo $this->simadmin->admin_name;?>" />
			</td>
		</tr>
        <tr>
			<td width="100" align="right">
				<label for="admin_address">
					<?php echo JText::_( 'Địa chỉ' ); ?>:
				</label>
			</td>
			<td>
				<input class="text_area" type="text" name="admin_address" id="admin_address" size="32" maxlength="250" value="<?php echo $this->simadmin->admin_address;?>" />
			</td>
		</tr>
        <tr>
			<td width="100" align="right">
				<label for="account_bank">
					<?php echo JText::_( 'Tài khoản' ); ?>:
				</label>
			</td>
			<td>
				<input class="text_area" type="text" name="account_bank" id="account_bank" size="32" maxlength="250" value="<?php echo $this->simadmin->account_bank;?>" />
			</td>
		</tr>
        <tr>
			<td width="100" align="right">
				<label for="phone_number">
					<?php echo JText::_( 'Số điện thoại' ); ?>:
				</label>
			</td>
			<td>
				<input class="text_area" type="text" name="phone_number" id="phone_number" size="32" maxlength="250" value="<?php echo $this->simadmin->phone_number;?>" />
			</td>
		</tr>
        <tr>
			<td width="100" align="right">
				<label for="admin_yahoo">
					<?php echo JText::_( 'yahoo' ); ?>:
				</label>
			</td>
			<td>
				<input class="text_area" type="text" name="admin_yahoo" id="admin_yahoo" size="32" maxlength="250" value="<?php echo $this->simadmin->admin_yahoo;?>" />
			</td>
		</tr>
	</table>
	</fieldset>
</div>
<div class="clr"></div>
<input type="hidden" name="option" value="com_simadmin" />
<input type="hidden" name="admin_id" value="<?php echo $this->simadmin->admin_id; ?>" />
<input type="hidden" name="task" value="" />
<input type="hidden" name="controller" value="simadmin" />
</form>

