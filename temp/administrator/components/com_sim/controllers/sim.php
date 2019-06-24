<?php
/*
 * @Package Softpin Order Manager
 * @Subpackage : sim Manager
 * Created by : thuc.lehuy@gmail.com
 */
// no direct access
defined('_JEXEC') or die('Truy nhập không hợp lệ');

class SimsControllerSim extends JController
{
    function __construct()
    {
        parent::__construct();
        // Register Extra tasks ... add and edit have similar form
        $this->registerTask( 'add'  , 'edit' );
        $this->registerTask( 'upload'  , 'save' );
        // Register Extra tasks ... publish and unpublish and save have similar form
        $tasks = JRequest::getVar('task');
        $cid = JRequest::getVar('cid',array(),'','array');
        if($tasks == "unpublish")
        {
            if($cid == array()){
                $msg = 'Chưa chọn nhóm sim!';
                $this->setRedirect( 'index.php?option=com_sim',$msg);
            }else{
                $this->registerTask( 'unpublish'  ,'save' );
                JRequest::setVar( 'del_flag',1);
            }
        }
        if($tasks == "publish")
        {
            if($cid == array()){
                $msg = 'Chưa chọn nhóm sim!';
                $this->setRedirect( 'index.php?option=com_sim',$msg);
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
        $model = $this->getModel('sim');
        if(!$model->delete()) {
            $msg = JText::_( 'Error: Quá trình xóa Sim bị lỗi.' );
        } else {
            $msg = JText::_( 'Đã xóa thành công.' );
        }

        $this->setRedirect( 'index.php?option=com_sim', $msg );
    }
    /**
     * display the edit form
     * @return void
     */
    function edit()
    {
        JRequest::setVar( 'view', 'sim' );
        JRequest::setVar( 'layout', 'form'  );
        //JRequest::setVar('hidemainmenu', 1);

        parent::display();
    }
    /**
     * save a record (and redirect to main page)
     * @return void
     */
    function save()
    {
        $id = JRequest::getVar('sim_id',0);
        $cid = JRequest::getVar('cid',array(),'','array');
        $simbatch = JRequest::getVar('simbatch');
        $model = $this->getModel('sim');
        if(!$simbatch){
            if($cid != array()){
                //is Publish or Unpublish
                for($i=0,$n=count($cid);$i<$n;$i++){
                    JRequest::setVar( 'sim_id',$cid[$i]);
                    if ($model->store($post)) {
                        $msg = JText::_( 'Success!' );
                    } else {
                        $msg = JText::_( 'Error' );
                    }
                }
            }else{
                // is New or Edit
                if($id == 0){
                    //isNew
                    $today = date("Y-m-d H:i:s");
                    JRequest::setVar( 'del_flag', 0 );
                }else{
                    //is Edit
                }
                // Perform the Request task
                if ($model->store($post)) {
                    $msg = JText::_( 'Thành công!' );
                } else {
                    $msg = JText::_( 'Có lỗi xảy ra!' );
                }
            }
        }else{
            // is sim batch
            $n = count($simbatch);
            for($i=0;$i<$n;$i++){
                $data = $simbatch[$i];
                $msg = JText::_( 'Thành công!' );
                if (!$model->stores($data)) {
                    $msg = JText::_( 'Có lỗi xảy ra! Tại vị trí sim thứ :'.$i);
                }
            }
        }
        // Check the table in so it can be edited.... we are done with it anyway
        $link = 'index.php?option=com_sim';
        $this->setRedirect($link, $msg);
    }
    /**
     * cancel editing a record
     * @return void
     */
    function cancel()
    {
        $msg = JText::_( 'Operation Cancelled' );
        $this->setRedirect( 'index.php?option=com_sim', $msg );
    }
}
