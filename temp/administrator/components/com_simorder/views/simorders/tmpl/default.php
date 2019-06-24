<?php
/*
 * @Package Softpin Order Manager
 * @Subpackage : simorder Manager
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
                <th width="100">
                    <?php echo JText::_( 'Tên' ); ?>
                </th>
                <th width="100">
                    <?php echo JText::_( 'Email' ); ?>
                </th>

                <th width="80">
                    <?php echo JText::_( 'Điện thoại' ); ?>
                </th>
                <th width="100">
                    <?php echo JText::_( 'Địa chỉ'); ?>
                </th>
                <th width="50">
                    <?php echo JText::_( 'Số sim'); ?>
                </th>
                <th>
                    <?php echo JText::_( 'Nội dung' ); ?>
                </th>
                <th width="100">
                    <?php echo JText::_( 'Ngày đặt' ); ?>
                </th>
                <th width="50">
                    <?php echo JText::_( 'Trạng thái' ); ?>
                </th>
            </tr>
        </thead>
        <?php
        $k = 0;
        for ($i=0, $n=count( $this->items ); $i < $n; $i++)
        {
            $row =& $this->items[$i];
            $checked 	= JHTML::_('grid.id',   $i, $row->sim_order_id );
            ?>
        <tr class="<?php echo "row$k"; ?>">
            <td>
                <?php echo $row->sim_order_id; ?>
            </td>
            <td>
                <?php echo $checked; ?>
            </td>
            <td>
                <?php echo $row->name; ?>
            </td>
            <td>
                <?php echo $row->email; ?>
            </td>
            <td>
                <?php echo $row->tel; ?>
            </td>
            <td>
                <?php echo $row->address; ?>
            </td>
            <td>
                <?php echo $row->sim_numb; ?>
            </td>
            <td>
                <?php echo $row->require; ?>
            </td>
            <td>
                <?php echo $row->datetime_created; ?>
            </td>
            <td>
                <?php 
                if($row->del_flag){
                    echo("Hoàn thành");
                }else{
                    echo("Đang chờ");
                }
                ?>
            </td>
        </tr>
        <?php
        $k = 1 - $k;
    }
    ?>
    </table>
    <input type="hidden" name="option" value="com_simorder" />
    <input type="hidden" name="task" value="" />
    <input type="hidden" name="boxchecked" value="0" />
    <input type="hidden" name="controller" value="simorder" />
</form>
