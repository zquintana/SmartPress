<?php echo $this->formFor(['admin', $this->menu], null, function($f) { ?>

	<?php if ($this->menu->errors && $this->menu->errors->count()): ?>
		<div id="error_explanation">
			<?php echo $this->element('h2', "{$this->pluralize($this->menu, 'error')} prohibited this menu from beign saved:"); ?>
		</div>
		<ul>
			<?php $this->menu->errors->each(function($error) { ?>
				<li><?php echo $error; ?></li>
			<?php }); ?>
		</ul>
	<?php endif; ?>
	<div class="field">
		<?php echo $f->label("parent_id", 'Item In'); ?>
		<?php echo $f->collectionSelect("parent_id", $this->allMenus, 'id', 'title', null, ['class' => 'input-medium']); ?>
	</div>
	<div class="field">
		<?php echo $f->label("title"); ?>
		<?php echo $f->textField("title", ['class' => 'input-medium']); ?>
	</div>
	<div class="field">
		<?php echo $f->label("url"); ?>
		<?php echo $f->textField("url", ['class' => 'input-medium']); ?>
	</div>
	<div class="actions">
		<?php echo $f->submit('Add', ['class' => 'btn btn-primary pull-right']); ?>
	</div>
	
<?php }); ?>
