<div class="row">
	<?php if (Arr::get($messages, 'error')) :?>
	<div class="span12">
		<div class="alert alert-danger">
			<a class="close">x</a>
			<strong><?php echo __('Error') ?></strong>
			<?php echo implode('<br/>', $messages['error'])?>
		</div>
	</div>
	<?php endif;
	if (Arr::get($messages, 'success')) :?>
	<div class="span12">
		<div class="alert alert-success">
			<a class="close">x</a>
			<strong><?php echo __('Success') ?></strong>
			<?php echo implode('<br/>', $messages['success'])?>
		</div>
	</div>
	<?php endif;	
	if (Arr::get($messages, 'notice')) :?>	
	<div class="span12">
		<div class="alert alert-info">
			<a class="close">x</a>
			<strong><?php echo __('Information') ?></strong>
			<?php echo implode('<br/>', $messages['notice'])?>
		</div>
	</div>
	<?php endif; ?>
</div>