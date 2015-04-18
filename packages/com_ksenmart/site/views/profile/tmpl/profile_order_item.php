<?php defined('_JEXEC') or die(); ?>
<td class="image">
	<a href="<?php echo $this->order_item->product->link; ?>">
		<img src="<?php echo $this->order_item->product->mini_small_img; ?>" alt="<?php echo $this->order_item->product->title; ?>" class="km_img sm" />
	</a>
</td>
<td class="names">
	<div class="name"></div>
	<div class="info">
		<dl class="dl-horizontal">
		  <dt>Артикул:</dt>
		  <dd><?php echo $this->order_item->product->product_code; ?></dd>
		<?php foreach($this->order_item->properties as $item_property): ?>
			<?php if (!empty($item_property->value)): ?>
			  <dt><?php echo $item_property->title; ?>:</dt>
			  <dd><?php echo $item_property->value; ?></dd>
			<?php else: ?>
			  <dt><?php echo $item_property->title; ?></dt>
			  <dd></dd>
			<?php endif; ?>
		<?php endforeach; ?>
		<?php if ($this->order->status_id == 5): ?>
			<?php foreach($this->order_item->product->files as $file): ?>
			<div>
				<label><a target="_blank" href="<?php echo JURI::root()?>administrator/components/com_ksenmart/files/<?php echo $file->file; ?>"><?php echo $file->title; ?></a></label>
			</div>
			<?php endforeach; ?>
		<?php endif; ?>
		</dl>
	</div>
</td>
<td class="quantt">
	<?php echo $this->order_item->count; ?>
</td>
<td class="pricee">
	<?php echo $this->order_item->product->val_price; ?>
</td>
<td class="totall">
	<?php echo KSMPrice::showPriceWithTransform($this->order_item->price*$this->order_item->count); ?>
</td>