<?php
/*
 * @Package Softpin Order Manager
 * @Subpackage : sim Manager
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
                    <?php echo JText::_( 'Số sim' ); ?>
                </th>
                <th width="100">
                    <?php echo JText::_( 'Kho admin' ); ?>
                </th>
                <th width="150">
                    <?php echo JText::_( 'Nhà cung cấp' ); ?>
                </th>
                <th width="100">
                    <?php echo JText::_( 'Loại Sim' ); ?>
                </th>
                <th width="100">
                    <?php echo JText::_( 'Giá' ); ?>
                </th>
                <th width="50">
                    <?php echo JText::_( 'Loại tiền' ); ?>
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
            $checked 	= JHTML::_('grid.id',   $i, $row->sim_id );
            $link 		= JRoute::_( 'index.php?option=com_sim&controller=sim&task=edit&cid[]='.$row->sim_id );
            ?>
        <tr class="<?php echo "row$k"; ?>">
            <td>
                <?php echo $row->sim_id; ?>
            </td>
            <td>
                <?php echo $checked; ?>
            </td>
            <td>
                <a href="<?php echo $link; ?>"><?php echo $row->sim_numb; ?></a>
            </td>
            <td>
                <?php echo $row->admin_name; ?>
            </td>
            <td>
                <?php echo $row->provider_name; ?>
            </td>
            <td>
                <?php echo $row->categori_name; ?>
            </td>
            <td>
                <?php echo $row->price; ?>
            </td>
            <td>
                <?php echo $row->curency; ?>
            </td>
            <td>
                <?php 
                if($row->del_flag){
                    echo("Đã bán");
                }else{
                    echo("Đang có");
                }
                ?>
            </td>
        </tr>
        <?php
        $k = 1 - $k;
    }
    ?>
    </table>
    <input type="hidden" name="option" value="com_sim" />
    <input type="hidden" name="task" value="" />
    <input type="hidden" name="boxchecked" value="0" />
    <input type="hidden" name="controller" value="sim" />
</form>
