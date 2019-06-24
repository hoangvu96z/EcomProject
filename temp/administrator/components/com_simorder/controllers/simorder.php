<?php
/*
 * @Package Softpin Order Manager
 * @Subpackage : simorder Manager
 * Created by : thuc.lehuy@gmail.com
 */
// no direct access
defined('_JEXEC') or die('Truy nhập không hợp lệ');

class SimordersControllerSimorder extends JController
{
    function __construct()
    {
        parent::__construct();
        // Register Extra tasks ... publish and unpublish and save have similar form
        $tasks = JRequest::getVar('task');
        $cid = JRequest::getVar('cid',array(),'','array');
        if($tasks == "unpublish")
        {
            if($cid == array()){
                $msg = 'Chưa chọn nhóm sim!';
                $this->setRedirect( 'index.php?option=com_simorder',$msg);
            }else{
                $this->registerTask( 'unpublish'  ,'save' );
                JRequest::setVar( 'del_flag',1);
            }
        }
        if($tasks == "publish")
        {
            if($cid == array()){
                $msg = 'Chưa chọn nhóm sim!';
                $this->setRedirect( 'index.php?option=com_simorder',$msg);
            }else{
                $this->registerTask( 'publish'  ,'save' );
                JRequest::setVar( 'del_flag',0);
            }
        }
    }
       /**
 * remove record(s)
 * @return void
 */
    function remove()
    {
        $model = $this->getModel('simorder');
        if(!$model->delete()) {
            $msg = JText::_( 'Error: Quá trình xóa bị lỗi.' );
        } else {
            $msg = JText::_( 'Đã xóa đặt hàng thành công.' );
        }

        $this->setRedirect( 'index.php?option=com_simorder', $msg );
    }
    /**
     * save a record (and redirect to main page)
     * @return void
     */
    function save()
    {
        $cid = JRequest::getVar('cid',array(),'','array');
        $model = $this->getModel('simorder');
        if($cid != array()){
            //is Publish or Unpublish
            for($i=0,$n=count($cid);$i<$n;$i++){
                JRequest::setVar( 'sim_order_id',$cid[$i]);
                if ($model->store($post)) {
                    $msg = JText::_( 'Thành công!' );
                } else {
                    $msg = JText::_( 'Error' );
                }
            }
        }
        // Check the table in so it can be edited.... we are done with it anyway
        $link = 'index.php?option=com_simorder';
        $this->setRedirect($link, $msg);
    }
}
