<?php 
/**
 * @copyright   Copyright (C) 2013. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */
 
defined('_JEXEC') or die;

$user = JFactory::getUser();
?>
<div class="ksm-product-comment-form">
	<form method="post">
		<div class="ksm-product-comment-form-row">
			<?php echo $this->reviewform->getLabel('comment_name'); ?>
			<div class="ksm-product-comment-form-row-control">
				<?php echo $this->reviewform->getInput('comment_name'); ?>
			</div>
		</div>
		<div class="ksm-product-comment-form-row">
			<?php echo $this->reviewform->getLabel('comment_rate'); ?>
			<div class="ksm-product-comment-form-row-control">
				<?php echo $this->reviewform->getInput('comment_rate'); ?>
			</div>
		</div>	
		<div class="ksm-product-comment-form-row">
			<?php echo $this->reviewform->getLabel('comment_comment'); ?>
			<div class="ksm-product-comment-form-row-control">
				<?php echo $this->reviewform->getInput('comment_comment'); ?>
			</div>
		</div>			
		<div class="ksm-product-comment-form-row">
			<?php echo $this->reviewform->getLabel('comment_good'); ?>
			<div class="ksm-product-comment-form-row-control">
				<?php echo $this->reviewform->getInput('comment_good'); ?>
			</div>
		</div>	
		<div class="ksm-product-comment-form-row">
			<?php echo $this->reviewform->getLabel('comment_bad'); ?>
			<div class="ksm-product-comment-form-row-control">
				<?php echo $this->reviewform->getInput('comment_bad'); ?>
			</div>
		</div>	
		<?php if (!$this->reviewform->getField('captcha')->hidden): ?>
		<div class="ksm-product-comment-form-row">
			<?php echo $this->reviewform->getLabel('captcha'); ?>
			<div class="ksm-product-comment-form-row-control">
				<?php echo $this->reviewform->getInput('captcha'); ?>
			</div>
		</div>	
		<?php endif; ?>
		<div class="ksm-product-comment-form-row">
			<div class="ksm-product-comment-form-row-control">
				<input type="submit" class="btn btn-success" value="<?php echo JText::_('KSM_PRODUCT_POST_A_REVIEW_BUTTON_TEXT'); ?>" />
			</div>
		</div>
		<input type="hidden" name="task" value="product.add_comment" />
	</form>	
</div>