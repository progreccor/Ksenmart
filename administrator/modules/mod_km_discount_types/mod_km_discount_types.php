<?php
defined( '_JEXEC' ) or die;

$view=JRequest::getVar('view','panel');
if (in_array('*',$params->get('views',array('discounts')))|| in_array($view,$params->get('views',array('discounts'))))
{
	KMSystem::loadModuleFiles('mod_km_discount_types');
	require_once dirname(__FILE__).DS.'helper.php';
	$types=ModKMDiscountTypesHelper::getDiscountTypes();
	$layout=KMSystem::getModuleLayout('mod_km_discount_types');
	require JModuleHelper::getLayoutPath('mod_km_discount_types',$layout);
}
?>