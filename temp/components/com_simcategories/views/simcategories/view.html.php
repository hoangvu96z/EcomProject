<?php
defined( '_JEXEC' ) or die( 'Restricted access' );
jimport('joomla.application.component.view');
class SimCategoriesViewSimCategories extends JView
{
    function display($tpl = null)
    {
        global $option;
        $model  = &$this->getModel();
        $list   = $model->getSimCategories();
        $category_name = $model->getCategoryName();
        for($i = 0; $i < count($list); $i++)
        {
            $list[$i]->price = $this->thousandseperate($list[$i]->price);
        }
        $this->assignRef('list', $list);
        $this->assignRef('category_name', $category_name);
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