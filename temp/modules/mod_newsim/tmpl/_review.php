<?php defined('_JEXEC') or die('Restricted access');
?>
<div class="div_newsim">

    <table border="0" cellpadding="5" cellspacing="0" align="center">
        <tr class="tr_newsim" >
            <td align="left" width="45%" nowrap="nowrap">
                <?php JHTML::_('behavior.modal'); ?>
                <a rel="{handler: 'iframe', size: {x: 600, y: 400}}" href="<?php echo $link; ?>" class="modal"><?php echo $review->sim_numb;?></a>
            </td>
            <td width="10%"></td>
            <td width="35%" nowrap="nowrap">
                <font color="red"><?php echo modNewsimHelper::thousandseperate($review->price);?>.000 </font>
            </td>
            <td align="right" width="10%">
                <?php echo $review->curency;?>
            </td>
        </tr>
    </table>
   
</div>
