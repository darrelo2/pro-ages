<div class="notes form">
<?php echo $this->Form->create('Note');?>
	<fieldset>
		<legend><?php __('Edit Note'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('note');
		echo $this->Form->input('annee_id');
		echo $this->Form->input('Classe');
		echo $this->Form->input('Eleve');
		echo $this->Form->input('Matiere');
		echo $this->Form->input('Personnel');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $this->Form->value('Note.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $this->Form->value('Note.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Notes', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Annees', true), array('controller' => 'annees', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Annee', true), array('controller' => 'annees', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Classes', true), array('controller' => 'classes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Classe', true), array('controller' => 'classes', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Eleves', true), array('controller' => 'eleves', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Eleve', true), array('controller' => 'eleves', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Matieres', true), array('controller' => 'matieres', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Matiere', true), array('controller' => 'matieres', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Personnels', true), array('controller' => 'personnels', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Personnel', true), array('controller' => 'personnels', 'action' => 'add')); ?> </li>
	</ul>
</div>