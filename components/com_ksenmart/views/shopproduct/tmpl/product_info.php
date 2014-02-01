<?php defined( '_JEXEC' ) or die; ?>
<? if (!empty($this->product->product_code)){ ?>
<div class="control-group">
	<label class="control-label"><?php echo JText::_('KSM_PRODUCT_ARTICLE'); ?></label>
	<div class="controls">
		<span class="article muted"><?php echo $this->product->product_code; ?></span>
	</div>
</div>
<? } ?>
<?php if (!empty($this->product->introcontent)) {?>
<div class="control-group">
	<label class="control-label"><?php echo JText::_('KSM_PRODUCT_MINIDESC'); ?></label>
	<div class="controls">
		<div class="minidesc"><?php echo html_entity_decode($this->product->introcontent)?></div>
	</div>
</div>
<?php } ?>
<?php echo $this->loadTemplate('properties'); ?>       
<?php if(!empty($this->product->manufacturer)){?>
	<div class="control-group">
		<label class="control-label"><?php echo JText::_('KSM_PRODUCT_MANUFACTURER'); ?></label>
		<div class="controls">
			<span><a href="<?php echo JRoute::_('index.php?option=com_ksenmart&view=shopcatalog&manufacturers[]='.$this->product->manufacturer->id.'&Itemid='.KMSystem::getShopItemid().'&clicked=manufacturers')?>"><?php echo $this->product->manufacturer->title?></a></span>
		</div>
	</div>
<?php } ?>
<?php if(!empty($this->product->tag)){ ?>
	<div class="control-group">
		<label class="control-label"><?php echo JText::_('KSM_PRODUCT_TAG'); ?></label>
		<div class="controls">
			<span><a href="javascript:void(0);"><?php echo $this->product->tag?></a></span>
		</div>
	</div>
<?php } ?>	
<?php if(isset($this->product->manufacturer->country) && count($this->product->manufacturer->country)>0){ ?>
	<div class="control-group">
		<label class="control-label"><?php echo JText::_('KSM_PRODUCT_COUNTRY'); ?></label>
		<div class="controls">
			<span><a href="<?php echo JRoute::_('index.php?option=com_ksenmart&view=shopcatalog&countries[]='.$this->product->manufacturer->country->id.'&Itemid='.KMSystem::getShopItemid().'&clicked=countries')?>"><?php echo $this->product->manufacturer->country->title?></a></span>
		</div>
	</div>
<?php } ?>	