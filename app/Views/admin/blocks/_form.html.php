<?php 
$class	= \Speedy\Loader::instance()->toClass($this->block['element']);
$info	= (class_exists($class)) ? $class::info() : null;
?>
<?php $this->formFor(['admin', $this->block], ['class' => 'form-horizontal', 'id' => 'block_form'], function($f) use ($info) { ?>

	<?php if ($this->block->errors && $this->block->errors->count()): ?>
		<div id="error_explanation">
			<?php element('h2', "{$this->pluralize($this->block, 'error')} prohibited this block from beign saved:"); ?>
		</div>
		<ul>
			<?php $this->block->errors->each(function($error) { ?>
				<li><?php echo $error; ?></li>
			<?php }); ?>
		</ul>
	<?php endif; ?>

		<?php $f->label("path", null, ['class' => 'control-label']); ?>
		<div class="controls">
			<?php $f->textField("path"); ?>
		</div>
	</div>
	<div class="control-group">
		<?php $f->label("block", null, ['class' => 'control-label']); ?>
		<div class="controls">
			<?php $f->select("block", \Cms\Models\Theme::blockOptions()); ?>
		</div>
	</div>
	<div class="control-group">
		<?php $f->label("element", null, ['class' => 'control-label']); ?>
		<div class="controls">
			<?php $f->select("element", \Cms\Models\Block\Manager::availableBlocks()); ?>
		</div>
	</div>
	<div id="block_params_container">
		<?php if (!empty($info)): ?>
			<?php $this->render('dynamic_fields_horz', ['info' => $info, 'params' => $this->block['params']]); ?>
		<?php endif; ?>
	</div>
	<div class="control-group">
		<?php $f->label("priority", null, ['class' => 'control-label']); ?>
		<div class="controls">
			<?php $f->textField("priority"); ?>
		</div>
	</div>
	<div class="form-actions">
		<?php $this->linkTo('Cancel', $this->admin_blocks_url(), ['class' => 'btn']); ?>
		<?php $f->submit('Save', ['class' => 'btn btn-primary']); ?>
	</div>
	
<?php }); ?>