<?php defined('_JEXEC') or die('Restricted access');
?>
<div>
    <table border="0" cellpadding="5" cellspacing="1">
        <tr>
            <td colspan="2">
                <div class="supportname">
                    <?php echo $review->admin_name;?>
                </div>
            </td>
        </tr
        <tr>
            <td>
                <div class="suporticon">
                    <?php if($review->del_flag){
                        ?>
                    <a href="ymsgr:sendim?<?php echo $review->admin_yahoo?>">
                    <img src="images/online.gif"></img></a>
                    <?php
                }else{
                    ?>
                    <a href="ymsgr:sendim?<?php echo $review->admin_yahoo?>">
                        <img src="images/offline.gif"></img>
                    </a>
                    <?php
                }
                ?>
                    <img src="images/telephone.png">
                </div>
            </td>
            <td>
                <div class="supporttel">
                    <?php
                    echo $review->phone_number;
                    ?>
                </div>
            </td>
        </tr>
    </table>
</div>
