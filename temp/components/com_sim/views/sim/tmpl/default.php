<?php
/*
 * @Package Softpin Order Manager
 * @Subpackage : sim Manager
 * Create by : thuc.lehuy@gmail.com
 */
jimport('joomla.html.toolbar');
defined('_JEXEC') or die('Restricted access');
if(!$this->items){
    echo '<div class="componentheading"><div>Kết quả tìm kiếm : Không có Sim được tìm thấy</div></div><div><a href="datsim.html" style="color:red;padding-left:10px">Hiện tại không có sim theo yêu cầu của bạn,mời bạn đặt sim với chúng tôi bằng chức năng đặt sim!</a></div>';
}else{
    ?>
<div  class="div_sim">
    <div class="componentheading"><div>Kết quả tìm kiếm : Có tổng cộng <b style="color:red;"><?php echo count($this->items);?></b> Sim được tìm thấy</div></div>
    <table width="100%" cellspacing="1" cellpadding="5" border="0">
        <thead>
            <tr class="tr_header_sim">
                <th nowrap="nowrap" width="5%">
                    <?php echo JText::_( 'ID' ); ?>
                </th>
                <th nowrap="nowrap" width="25%">
                    <?php echo JText::_( 'Số sim' ); ?>
                </th>
                <th nowrap="nowrap" width="20%">
                    <?php echo JText::_( 'Mạng' ); ?>
                </th>
                <th nowrap="nowrap" width="20%">
                    <?php echo JText::_( 'Giá' ); ?>
                </th>
                <th nowrap="nowrap" width="20%">
                    <?php echo JText::_( 'Kho admin' ); ?>
                </th>
                <th nowrap="nowrap" width="15%">
                    <?php echo JText::_( 'Mua' ); ?>
                </th>
            </tr>
        </thead>
        <?php
        $k = 1;
        for ($i=0, $n=count( $this->items ); $i < $n; $i++)
        {
            $row =& $this->items[$i];
            //$checked 	= JHTML::_('grid.id',   $i, $row->sim_id );
            $link 		= JRoute::_( 'index.php?option=com_simbuy&task=add&simnumb='.$row->sim_numb );
            ?>
        <tr class="tr_sim">
            <td>
                <?php echo $k; ?>
            </td>
            <td>
                <?php JHTML::_('behavior.modal'); ?>
                <a rel="{handler: 'iframe', size: {x: 600, y: 400}}" href="<?php echo $link; ?>" class="modal"><?php echo $row->sim_numb; ?></a>
            </td>
            <td>
                <?php echo $row->provider_name; ?>
            </td>
            <td nowrap="nowrap">
                <?php echo $row->price; ?>.000 <?php echo $row->curency; ?>
            </td>
            <td>
                <?php echo $row->admin_name; ?>
            </td>
            <td>
                <?php JHTML::_('behavior.modal'); ?>
                <?php JHTML::_('behavior.modal'); ?>
                <a rel="{handler: 'iframe', size: {x: 600, y: 400}}" href="<?php echo $link; ?>" class="modal"><img src="images/publish_f2.png" /></a>
            </td>
        </tr>
        <?php
        $k =$k+1;
    }
    ?>
    </table>
    <input type="hidden" name="option" value="com_sim" />
    <input type="hidden" name="task" value="" />
    <input type="hidden" name="boxchecked" value="0" />
    <input type="hidden" name="controller" value="sim" />
</div>
<?php }?>