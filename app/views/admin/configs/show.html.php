<p id="notice"></p>

	<b>Id</b>
	<?php echo $this->config->id; ?>
</p>
<p>
	<b>Name</b>
	<?php echo $this->config->name; ?>
</p>
<p>
	<b>Value</b>
	<?php echo $this->config->value; ?>
</p>

<?php echo $this->linkTo('Back', $this->admin_configs_url()); ?>