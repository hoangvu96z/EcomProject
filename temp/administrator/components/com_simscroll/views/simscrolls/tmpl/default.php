<?php
/*
 * @Package Softpin Order Manager
 * @Subpackage : simscroll Manager
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
                    <?php echo JText::_( 'Nội dung' ); ?>
                </th>
                <th width="100">
                    <?php echo JText::_( 'Vị trí' ); ?>
                </th>

                <th width="80">
                    <?php echo JText::_( 'Trạng thái' ); ?>
                </th>
            </tr>
        </thead>
        <?php
        $k = 0;
        for ($i=0, $n=count( $this->items ); $i < $n; $i++)
        {
            $row =& $this->items[$i];
            $checked 	= JHTML::_('grid.id',   $i, $row->scroll_id );
            ?>
        <tr class="<?php echo "row$k"; ?>">
            <td>
                <?php echo $row->scroll_id; ?>
            </td>
            <td>
                <?php echo $checked; ?>
            </td>
            <td>
                <?php echo $row->content; ?>
            </td>
            <td>
                <?php
                if($row->scroll_id==1){
                    echo("Trên tab");
                }else{
                    echo("Trên Toolbar");
                }
                ?>
            </td>
            <td>
                <?php 
                if($row->del_flag){
                    echo("Đã khóa");
                }else{
                    echo("Đang hiện");
                }
                ?>
            </td>
        </tr>
        <?php
        $k = 1 - $k;
    }
    ?>
    </table>
    <input type="hidden" name="option" value="com_simscroll" />
    <input type="hidden" name="task" value="" />
    <input type="hidden" name="boxchecked" value="0" />
    <input type="hidden" name="controller" value="simscroll" />
</form>
