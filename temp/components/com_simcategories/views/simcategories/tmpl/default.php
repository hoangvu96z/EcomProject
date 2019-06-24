<?php defined( '_JEXEC' ) or die( 'Restricted access' );
?>
<div class="div_sim">
    <div class="componentheading"><div style="float:left;"><?php echo $this->category_name[0]->categori_name; ?></div><div  style="float:right;color:red;"><b> Tổng cộng có <?php echo count($this->list);?> sim</b></div></div>
    <table border="0" cellpadding="5" width="100%" cellspacing="1" >
        <tr align="center" class="tr_header_sim">
            <td height="25">STT</td>
            <td>Số sim</td>
            <td>Nhà cung cấp</td>
            <td>Giá bán</td>
            <td>Kho</td>
            <td>Mua</td>
        </tr>
        <?php
        $i=1;
        foreach($this->list as $l):
        $link 		= JRoute::_( 'index.php?option=com_simbuy&task=add&simnumb='.$l->sim_numb );
        ?>
        <tr align="center" class="tr_sim">
            <td>
                <?php echo $i; ?>
            </td>
            <td >
                <?php JHTML::_('behavior.modal'); ?>
                <a rel="{handler: 'iframe', size: {x: 600, y: 400}}" href="<?php echo $link; ?>" class="modal"><?php echo $l->sim_numb;?></a>
            </td>
            <td>
                <?php echo $l->provider_name; ?>
            </td>
            <td>
                <?php echo $l->price;?>.000 <?php echo $l->curency; ?>
            </td>
            <td>
                <?php echo $l->admin_name; ?>
            </td>
            <td><?php JHTML::_('behavior.modal'); ?>
                <a rel="{handler: 'iframe', size: {x: 600, y: 400}}" href="<?php echo $link; ?>" class="modal"><img src="images/publish_f2.png" /></a>
            </td>

        </tr>
        <?php
        $i++;
        endforeach;
        ?>

    </table>
</div>