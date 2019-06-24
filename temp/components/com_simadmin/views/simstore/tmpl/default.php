<?php defined( '_JEXEC' ) or die( 'Restricted access' );

?>
<div class="div_sim">
    <table border="0" cellpadding="5" width="100%" cellspacing="1" >
        <tr align="center" class="tr_header_sim">
            <th>STT</th>
            <th>TÊN KHO</th>
            <th>ĐIỆN THOẠI</th>
            <th>TÀI KHOẢN NGÂN HÀNG</th>
            <th>Yahoo</th>
        </tr>
        <?php
        foreach($this->list as $l):
        ?>
        <tr align="center" class="tr_sim">
            <td>
                <?php echo $l->admin_id; ?>
            </td>
            <td >
                <?php echo $l->admin_name; ?>
            </td>
            <td>
                <?php echo $l->phone_number; ?>
            </td>
            <td>
                <?php echo $l->account_bank; ?>
            </td>
            <td>
                <?php echo $l->admin_yahoo; ?>
            </td>

        </tr>
        <?php
        endforeach;
        ?>
    </table>
</div>