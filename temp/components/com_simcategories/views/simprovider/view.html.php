<?php
defined( '_JEXEC' ) or die( 'Restricted access' );
jimport('joomla.application.component.view');
class SimCategoriesViewSimProvider extends JView
{
    function display($tpl = null)
    {
        global $option;
        $model = &$this->getModel();
        $list = $model->getSimProvider();
        for($i = 0; $i < count($list); $i++)
        {
            $list[$i]->price = $this->thousandseperate($list[$i]->price);
        }
        $this->assignRef('list', $list);
        parent::display($tpl);
    }
    function thousandseperate($value)
    {
        $thausandSepCh = ".";
        $realValue = $value."";
        $result = "";
        $len = strlen($realValue);
        while($len>3){
            $result = $thausandSepCh.substr($realValue,$len-3,3).$result;
            $len=$len-3;
        }
        $result=substr($realValue,0,$len).$result;
        return $result;
    }
}
?>