<p id="notice"></p>

	<b>Id</b>
	<?php echo $this->group->id; ?>
</p>
<p>
	<b>Name</b>
	<?php echo $this->group->name; ?>
</p>
<p>
	<b>Privileges</b>
	<?php echo $this->group->privilege; ?>
</p>

<?php echo $this->linkTo('Back', $this->groups_url()); ?>