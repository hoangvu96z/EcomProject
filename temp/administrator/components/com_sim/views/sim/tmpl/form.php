<?php
/*
 * @Package Softpin Order Manager
 * @Subpackage : sim Manager
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
                        <label for="sim_numb">
                            <?php echo JText::_( 'Số Sim' ); ?>:
                        </label>
                    </td>
                    <td>
                        <input class="text_area" type="text" name="sim_numb" id="sim_numb" size="32" maxlength="250" value="<?php echo $this->sim->sim_numb;?>" />
                    </td>
                </tr>
                <tr>
                    <td width="100" align="right">
                        <label for="admin_id">
                            <?php echo JText::_( 'Tên admin' ); ?>:
                        </label>
                    </td>
                    <td>
                        <?php echo $this->htmladmin;?>
                    </td>
                </tr>
                <tr>
                    <td width="100" align="right">
                        <label for="provider_id">
                            <?php echo JText::_( 'Nhà cung cấp' ); ?>:
                        </label>
                    </td>
                    <td>
                        <?php echo $this->htmlprovider;?>
                    </td>
                </tr>
                <tr>
                    <td width="100" align="right">
                        <label for="categori_id">
                            <?php echo JText::_( 'Loại sim' ); ?>:
                        </label>
                    </td>
                    <td>
                        <?php echo $this->htmlcategories;?>
                    </td>
                </tr>
                <tr>
                    <td width="100" align="right">
                        <label for="price">
                            <?php echo JText::_( 'Giá tiền' ); ?>:
                        </label>
                    </td>
                    <td>
                        <input class="text_area" type="text" name="price" id="price" size="32" maxlength="250" value="<?php echo $this->sim->price;?>" />
                    </td>
                </tr>
                <tr>
                    <td width="100" align="right">
                        <label for="curency">
                            <?php echo JText::_( 'Loại tiền' ); ?>:
                        </label>
                    </td>
                    <td>
                        <input class="text_area" type="text" name="curency" id="curency" size="32" maxlength="250" value="<?php if($this->sim->curency==null){echo 'VNĐ';}else {echo $this->sim->curency;}?>" />
                    </td>
                </tr>
            </table>
            <table class="toolbar">
                <tbody>
                    <tr>
                        <td id="toolbar-save" class="button">
                            <input type="submit" id="file-upload-submit" class="toolbar" value="<?php echo JText::_('Save'); ?>"/>
                        </td>
                        <td id="toolbar-cancel" class="button">
                            <a class="toolbar" href="index.php?option=com_sim">
                                Cancel
                            </a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </fieldset>
    </div>
    <div class="clr"></div>
    <input type="hidden" name="option" value="com_sim" />
    <input type="hidden" name="sim_id" value="<?php echo $this->sim->sim_id; ?>" />
    <input type="hidden" name="task" value="save" />
    <input type="hidden" name="controller" value="sim" />
</form>
<form action="index.php" method="post" name="adminForm" id="adminForm" enctype="multipart/form-data">
    <div class="col100">
        <fieldset class="adminform">
            <legend><?php echo JText::_( 'Up Sim theo Excel' ); ?></legend>
            <table class="toolbar">
                <tr>
                    <td>
                        File Excel : <input type="file" size="80" name="Filedata" id="Filedata" ><input type="submit" id="file-upload-submit" class="button" value="<?php echo JText::_('Start Upload'); ?>"/>
                    </td>
                </tr>
            </table>
        </fieldset>
    </div>
    <div class="clr"></div>
    <input type="hidden" name="option" value="com_sim" />
    <input type="hidden" name="uptype" value="1" />
    <input type="hidden" name="task" value="upload" />
    <input type="hidden" name="folder" value="xls" />
    <input type="hidden" name="controller" value="sim" />
</form>

