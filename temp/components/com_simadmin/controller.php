<?php
defined ('_JEXEC') or die ('Restricted Access');
jimport('joomla.application.component.controller');
class SimAdminController extends JController
{
    function display()
    {
        
        $document =& JFactory::getDocument(); 
        $viewName = JRequest::getVar('view');
        
        $viewType = $document->getType();
        $view = &$this->getView($viewName, $viewType);
        $model =& $this->getModel( $viewName, 'ModelSimAdmin');
        
            if (!JError::isError( $model ))
              {
                   $view->setModel( $model, true );
              }
             
       $view->setLayout('default');
       $view->display();
    }
}
?>