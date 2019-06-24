<?php
/*
 * @Package Softpin Order Manager
 * @Subpackage : simcategory Manager
 * Created by : thuc.lehuy@gmail.com
 */
// no direct access
defined('_JEXEC') or die('Truy nhập không hợp lệ');

class SimcategorysControllerSimcategory extends JController
{
    function __construct()
    {
        parent::__construct();
        // Register Extra tasks ... add and edit have similar form
        $this->registerTask( 'add'  , 	'edit' );
        // Register Extra tasks ... publish and unpublish and save have similar form
        $tasks = JRequest::getVar('task');
        $cid = JRequest::getVar('cid',array(),'','array');
        if($tasks == "unpublish")
        {
            if($cid == array()){
                $msg = 'Chưa chọn nhóm sim!';
                $this->setRedirect( 'index.php?option=com_simcategory',$msg);
            }else{
                $this->registerTask( 'unpublish'  ,'save' );
                JRequest::setVar( 'del_flag',1);
            }
        }
        if($tasks == "publish")
        {
            if($cid == array()){
                $msg = 'Chưa chọn nhóm sim!';
                $this->setRedirect( 'index.php?option=com_simcategory',$msg);
            }else{
                $this->registerTask( 'publish'  ,'save' );
                JRequest::setVar( 'del_flag',0);
            }
        }
    }
    /**
     * display the edit form
     * @return void
     */
    function edit()
    {
        JRequest::setVar( 'view', 'simcategory' );
        JRequest::setVar( 'layout', 'form'  );
        JRequest::setVar('hidemainmenu', 1);

        parent::display();
    }
    /**
     * save a record (and redirect to main page)
     * @return void
     */
    function save()
    {
        $id = JRequest::getVar('categori_id',0);
        $cid = JRequest::getVar('cid',array(),'','array');
        $model = $this->getModel('simcategory');
        if($cid != array()){
            //is Publish or Unpublish
            $today = date("Y-m-d H:i:s");
            JRequest::setVar( 'datetime_last_modified',$today);
            for($i=0,$n=count($cid);$i<$n;$i++){
                JRequest::setVar( 'categori_id',$cid[$i]);
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
                JRequest::setVar( 'datetime_create',$today);
                JRequest::setVar( 'datetime_last_modified', null);
                JRequest::setVar( 'del_flag', 0 );
            }else{
                //is Edit
                $today = date("Y-m-d H:i:s");
                JRequest::setVar( 'datetime_last_modified',$today);
            }
            // Perform the Request task
            if ($model->store($post)) {
                $msg = JText::_( 'Thành công!' );
            } else {
                $msg = JText::_( 'Có lỗi xảy ra!' );
            }
        }

        // Check the table in so it can be edited.... we are done with it anyway
        $link = 'index.php?option=com_simcategory';
        $this->setRedirect($link, $msg);
    }
    /**
     * cancel editing a record
     * @return void
     */
    function cancel()
    {
        $msg = JText::_( 'Operation Cancelled' );
        $this->setRedirect( 'index.php?option=com_simcategory', $msg );
    }
}
