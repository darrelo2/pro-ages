<div class="roles form">
<?php echo $this->Form->create('Role');?>
	<fieldset>
		<legend><?php __('Add Role'); ?></legend>
	<?php
		echo $this->Form->input('role');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Roles', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Utilisateurs', true), array('controller' => 'utilisateurs', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Utilisateur', true), array('controller' => 'utilisateurs', 'action' => 'add')); ?> </li>
	</ul>
</div>