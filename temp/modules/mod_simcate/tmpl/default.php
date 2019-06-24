<?php
defined('_JEXEC') or die('Restricted access');
?>
<div class="div_sim">
    <table border="0" cellpadding="5" width="100%" cellspacing="1">
        <tr align="center" class="tr_header_sim">
            <td>STT</td>
            <td height="25">Số sim</td>
            <td nowrap="nowrap">Nhà cung cấp</td>
            <td nowrap="nowrap">Giá bán</td>
            <td nowrap="nowrap">Kho</td>
            <td nowrap="nowrap">Mua</td>
        </tr>
        <?php
        $stt=1;
        foreach($list as $review)
        {
            $link = JRoute::_( 'index.php?option=com_simbuy&task=add&simnumb='.$review->sim_numb );
            ?>
        <tr align="center" class="tr_sim">
            <td><?php echo $stt; ?></td>
            <td><?php JHTML::_('behavior.modal'); ?>
                <a rel="{handler: 'iframe', size: {x: 600, y: 400}}" href="<?php echo $link; ?>" class="modal"><?php echo $review->sim_numb;?></a>
            </td>
            <td><?php echo $review->provider_name; ?></td>
            <td><?php echo modSimCateHelper::thousandseperate($review->price);?>.000 <?php echo $review->curency; ?></td>
            <td><?php echo $review->admin_name; ?></td>
            <td><?php JHTML::_('behavior.modal'); ?>
                <a rel="{handler: 'iframe', size: {x: 600, y: 400}}" href="<?php echo $link; ?>" class="modal"><img src="images/publish_f2.png" /></a>
            </td>
        </tr>
        <?php
        $stt++;
    }
    ?>
    </table>
</div>
<div align="center">
    <b style="color:red;">Tổng sim <?php echo '"'.$categoryname.'" : '.$totalsim.' sim';?></b><br/>
    <a style="color:red;" href="index.php?option=com_simcategories&view=simcategories&id=<?php echo $id;?>">[-Xem thêm-]</a>
</div>

