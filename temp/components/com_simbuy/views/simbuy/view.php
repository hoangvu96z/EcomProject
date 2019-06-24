<?php
/*
 * @Package Softpin Order Manager
 * @Subpackage : simbuy Manager
 * Create by : thuc.lehuy@gmail.com
 */
// No direct access
defined( '_JEXEC' ) or die( 'Restricted access' );
//import view parent class
jimport( 'joomla.application.component.view' );

class SimbuyViewSimbuy extends JView
{
    function display(){
        $simnumb = JRequest::getVar('simnumb');
        $document = & JFactory::getDocument();
        $document->setTitle('Mời bạn mua sim');
        ?>
<form action="index.php" method="post" name="adminForm" autocomplete="off">
    <fieldset>
        <div style="float: right">
            <button type="button" onclick="window.parent.document.getElementById('sbox-window').close();">
            <?php echo JText::_( 'Cancel' );?></button>
        </div>
        <div class="configuration" >
            <b>Mời bạn mua sim</b>
        </div>
    </fieldset>
    <fieldset>
        <legend>
            Mua Sim
        </legend>
        <div>
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
                </tr
                <tr>
                    <td width="120" align="right" height="30">
                        <label for="sim_numb">
                            <?php echo JText::_( 'Số sim' ); ?>:
                        </label>
                    </td>
                    <td>
                        <input align="center" type="text" name="sim_numb" id="sim_numb" readonly="readonly" size="32"  value="<?php echo $simnumb;?>"></input>
                    </td>
                </tr>
                <tr>
                    <td width="120" align="right">
                        <label for="require">
                            <?php echo JText::_( 'Yêu cầu sim' ); ?>:
                        </label>
                    </td>
                    <td>
                        <textarea rows="6" cols="50" name="require" id="require" onfocus="document.getElementById('require').innerHTML='';" onblur="if(document.getElementById('require').innerHTML=='') document.getElementById('require').innerHTML='Viết yêu cầu của bạn tại đây';">
                                Viết yêu cầu của bạn tại đây
                        </textarea>
                    </td>
                </tr>
            </table>
            <div align="center"><input type="submit" value="Đặt sim" onclick="window.parent.document.getElementById('sbox-window').close();alert('Bạn đã đặt mua sim thành công!Chân thành cảm ơn bạn đã sử dụng dịch vụ của chúng tôi!');" class="button"/></div>
            <input type="hidden" name="option" value="com_simorder" />
            <input type="hidden" name="sim_order_id" value="" />
            <input type="hidden" name="task" value="save" />
            <input type="hidden" name="controller" value="simorder" />
        </div>
    </fieldset>
</form>
<?php
//require_once('tmpl/default.php');

}

}


