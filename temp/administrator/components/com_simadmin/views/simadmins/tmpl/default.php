<?php
/*
 * @Package Softpin Order Manager
 * @Subpackage : simadmin Manager
 * Create by : thuc.lehuy@gmail.com
 */
defined('_JEXEC') or die('Restricted access');
?>
<form action="index.php" method="post" name="adminForm">
    <table class="adminlist">
        <thead>
            <tr>
                <th width="5">
                    <?php echo JText::_( 'ID' ); ?>
                </th>
                <th width="20">
                    <input type="checkbox" name="toggle" value="" onclick="checkAll(<?php echo count( $this->items ); ?>);" />
                </th>
                <th>
                    <?php echo JText::_( 'Tên admin' ); ?>
                </th>
                <th width="200">
                    <?php echo JText::_( 'Địa chỉ' ); ?>
                </th>

                <th width="80">
                    <?php echo JText::_( 'Điện thoại' ); ?>
                </th>
                <th width="100">
                    <?php echo JText::_( 'Yahoo' ); ?>
                </th>
                <th width="200">
                    <?php echo JText::_( 'Tài khoản' ); ?>
                </th>
                <th width="100">
                    <?php echo JText::_( 'Trạng thái' ); ?>
                </th>
            </tr>
        </thead>
        <?php
        $k = 0;
        for ($i=0, $n=count( $this->items ); $i < $n; $i++)
        {
            $row =& $this->items[$i];
            $checked 	= JHTML::_('grid.id',   $i, $row->admin_id );
            $link 		= JRoute::_( 'index.php?option=com_simadmin&controller=simadmin&task=edit&cid[]='.$row->admin_id );
            ?>
        <tr class="<?php echo "row$k"; ?>">
            <td>
                <?php echo $row->admin_id; ?>
            </td>
            <td>
                <?php echo $checked; ?>
            </td>
            <td>
                <a href="<?php echo $link; ?>"><?php echo $row->admin_name; ?></a>
            </td>
            <td>
                <?php echo $row->admin_address; ?>
            </td>
            <td>
                <?php echo $row->phone_number; ?>
            </td>
            <td>
                <?php echo $row->admin_yahoo; ?>
            </td>
            <td>
                <?php echo $row->account_bank; ?>
            </td>
            <td>
                <?php 
                if($row->del_flag){
                    echo("Đang online");
                }else{
                    echo("Đã offline");
                }
                ?>
            </td>
        </tr>
        <?php
        $k = 1 - $k;
    }
    ?>
    </table>
    <input type="hidden" name="option" value="com_simadmin" />
    <input type="hidden" name="task" value="" />
    <input type="hidden" name="boxchecked" value="0" />
    <input type="hidden" name="controller" value="simadmin" />
</form>
