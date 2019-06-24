<?php
/*
 * @Package Softpin Order Manager
 * @Subpackage : simorder Manager
 * Create by : thuc.lehuy@gmail.com
 */

// No direct access
defined( '_JEXEC' ) or die( 'Restricted access' );

jimport('joomla.application.component.controller');

class SimorderController extends JController
{
    /**
     * Method to display the view
     *
     * @access	public
     */
    function add()
    {
        JRequest::setVar( 'view', 'simorder' );
        //JRequest::setVar( 'layout', 'form'  );
        JRequest::setVar('hidemainmenu', 1);
        parent::display();
    }
    function save()
    {
        //isNew
        $today = date("Y-m-d H:i:s");
        JRequest::setVar( 'datetime_created', $today );
        JRequest::setVar( 'del_flag', 0 );
        // Perform the Request task
        $model = $this->getModel('simorder');
        if ($model->store($post)) {
            $msg = JText::_( 'Bạn đã đặt Sim với chúng tôi!Chúng tôi sẽ liên lạc lại với bạn!Rất cảm ơn bạn đã sử dụng dịch vụ.' );
        } else {
            $msg = JText::_( 'Rất xin lỗi vì có lỗi xảy ra!Bạn có thể đặt hàng lại hoặc gọi điện trực tiếp cho chúng tôi' );
        }
        $this->setredirect('index.php',$msg);
    }
}
