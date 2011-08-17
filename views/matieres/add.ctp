<div class="matieres form">
<?php echo $this->Form->create('Matiere');?>
	<fieldset>
		<legend><?php __('Add Matiere'); ?></legend>
	<?php
		echo $this->Form->input('mat_nom');
		echo $this->Form->input('mat_coef');
		echo $this->Form->input('mat_ordre');
		echo $this->Form->input('mat_code');
		echo $this->Form->input('annee_id');
		echo $this->Form->input('Classe');
		echo $this->Form->input('Note');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Matieres', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Annees', true), array('controller' => 'annees', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Annee', true), array('controller' => 'annees', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Classes', true), array('controller' => 'classes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Classe', true), array('controller' => 'classes', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Notes', true), array('controller' => 'notes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Note', true), array('controller' => 'notes', 'action' => 'add')); ?> </li>
	</ul>
</div>