<div class="utilisateurs form">
<?php echo $this->Form->create('Utilisateur');?>
	<fieldset>
		<legend><?php __('Edit Utilisateur'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('pseudo');
		echo $this->Form->input('password');
		echo $this->Form->input('derniere_visite');
		echo $this->Form->input('adresse_ip');
		echo $this->Form->input('personnel_id');
		echo $this->Form->input('role_id');
		echo $this->Form->input('annee_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $this->Form->value('Utilisateur.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $this->Form->value('Utilisateur.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Utilisateurs', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Personnels', true), array('controller' => 'personnels', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Personnel', true), array('controller' => 'personnels', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Roles', true), array('controller' => 'roles', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Role', true), array('controller' => 'roles', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Annees', true), array('controller' => 'annees', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Annee', true), array('controller' => 'annees', 'action' => 'add')); ?> </li>
	</ul>
</div>