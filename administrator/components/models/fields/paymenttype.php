<?php 
defined( '_JEXEC' ) or die;

class JFormFieldPaymentType extends JFormField {

	
	protected $type = 'PaymentType';
	
	public function getInput(){
		$db=JFactory::getDBO();
		$query=$db->getQuery(true);
		$query->select('name,element')->from('#__extensions')->where('folder="kmpayment"')->where('enabled=1');
		$db->setQuery($query);
		$plugins=$db->loadObjectList('element');
				
		$html='';
		if (count($plugins))
		{
			$html.='<span class="linka"><a id="add-alg" href="#">'.JText::_($plugins[$this->value]->name).'</a></span>';
			$html.='<div id="popup-window2" class="popup-window">';
			$html.='	<div style="width: 460px;height: 340px;margin-left: -230px;margin-top: -175px;">';
			$html.='		<div class="popup-window-inner">';
			$html.='			<div class="heading">';
			$html.='				<h3>'.JText::_('ksm_payments_payment_type_lbl').'</h3>';
			$html.='				<div class="save-close">';
			$html.='					<button class="close" onclick="return false;"></button>';
			$html.='				</div>';
			$html.='			</div>';
			$html.='			<div class="contents">';
			$html.='				<div class="contents-inner">';
			$html.='					<div class="slide_module">';
			$html.='						<div class="row">';
			$html.='							<ul>';
			foreach($plugins as $plugin)
			{
				$html.='							<li class="'.($plugin->element==$this->value?'active':'').'">';
				$html.='								<label>'.JText::_($plugin->name).'<input onclick="setPaymentType(this);" type="radio" name="'.$this->name.'" value="'.$plugin->element.'" '.($plugin->element==$this->value?'checked':'').' style="visibility:hidden;" ></label>';
				$html.='							</li>';
			}
			$html.='							</ul>';
			$html.='						</div>';
			$html.='					</div>';
			$html.='				</div>';
			$html.='			</div>';
			$html.='		</div>';
			$html.='	</div>';
			$html.='</div>';
		}	
		return $html;
	}
}