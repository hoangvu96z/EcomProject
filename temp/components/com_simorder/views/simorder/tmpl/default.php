<?php
/*
 * @Package Softpin Order Manager
 * @Subpackage : simorder Manager
 * Create by : thuc.lehuy@gmail.com
 */
// No direct access
defined( '_JEXEC' ) or die( 'Restricted access' );
?>
<div>
    <div class="componentheading"><div>Mời bạn đặt sim theo yêu cầu</div></div>
    <form action="index.php" method="post">
        <table >
            <tr>
                <td width="120" align="right" height="30">
                    <label for="name">
                        <?php echo JText::_( 'Tên bạn' ); ?>:
                    </label>
                </td>
                <td>
                    <input class="search" type="text" name="name" id="name" size="32" maxlength="250" />
                </td>
            </tr>
            <tr>
                <td width="120" align="right" height="30">
                    <label for="email">
                        <?php echo JText::_( 'Email' ); ?>:
                    </label>
                </td>
                <td>
                    <input class="search" type="text" name="email" id="email" size="32" maxlength="250" />
                </td>
            </tr>
            <tr>
                <td width="120" align="right" height="30">
                    <label for="tel">
                        <?php echo JText::_( 'Điện thoại' ); ?>:
                    </label>
                </td>
                <td>
                    <input class="search" type="text" name="tel" id="tel" size="32" maxlength="250" />
                </td>
            </tr>
            <tr>
                <td width="120" align="right" height="30">
                    <label for="address">
                        <?php echo JText::_( 'Địa chỉ' ); ?>:
                    </label>
                </td>
                <td>
                    <input class="search" type="text" name="address" id="address" size="32" maxlength="250" />
                </td>
            </tr>
            <tr>
                <td width="120" align="right">
                    <label for="require">
                        <?php echo JText::_( 'Yêu cầu sim' ); ?>:
                    </label>
                </td>
                <td>
                    <textarea rows="6" cols="45" name="require" id="require" onfocus="document.getElementById('require').innerHTML='';" onblur="if(document.getElementById('require').innerHTML=='') document.getElementById('require').innerHTML='Viết yêu cầu của bạn tại đây';">
                        Viết yêu cầu của bạn tại đây
                    </textarea>
                </td>
            </tr>
        </table>
        <div align="center"><input type="submit" value="Đặt sim" class="button"/></div>
        <input type="hidden" name="option" value="com_simorder" />
        <input type="hidden" name="sim_order_id" value="" />
        <input type="hidden" name="task" value="save" />
        <input type="hidden" name="controller" value="simorder" />
    </form>
</div>

