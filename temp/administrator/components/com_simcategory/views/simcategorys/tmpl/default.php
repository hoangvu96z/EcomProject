<?php
/*
 * @Package Softpin Order Manager
 * @Subpackage : simcategory Manager
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
                    <?php echo JText::_( 'Tên nhóm' ); ?>
                </th>
                <th width="200">
                    <?php echo JText::_( 'Ngày tạo' ); ?>
                </th>
                <th width="200">
                    <?php echo JText::_( 'Ngày chỉnh gần nhất' ); ?>
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
            $checked 	= JHTML::_('grid.id',   $i, $row->categori_id );
            $link 		= JRoute::_( 'index.php?option=com_simcategory&controller=simcategory&task=edit&cid[]='.$row->categori_id );
            ?>
        <tr class="<?php echo "row$k"; ?>">
            <td>
                <?php echo $row->categori_id; ?>
            </td>
            <td>
                <?php echo $checked; ?>
            </td>
            <td>
                <a href="<?php echo $link; ?>"><?php echo $row->categori_name; ?></a>
            </td>
            <td>
                <?php echo $row->datetime_create; ?>
            </td>
            <td>
                <?php echo $row->datetime_last_modified; ?>
            </td>
            <td>
                <?php 
                if($row->del_flag){
                    echo("Đã khóa");
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
    <input type="hidden" name="option" value="com_simcategory" />
    <input type="hidden" name="task" value="" />
    <input type="hidden" name="boxchecked" value="0" />
    <input type="hidden" name="controller" value="simcategory" />
</form>
