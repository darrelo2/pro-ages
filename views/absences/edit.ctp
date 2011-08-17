<div class="absences form">
<?php echo $this->Form->create('Absence');?>
	<fieldset>
		<legend><?php __('Edit Absence'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('abs_date');
		echo $this->Form->input('abs_date_debut');
		echo $this->Form->input('abs_date_fin');
		echo $this->Form->input('abs_motif');
		echo $this->Form->input('abs_justifie');
		echo $this->Form->input('annee_id');
		echo $this->Form->input('etablissement_id');
		echo $this->Form->input('Eleve');
		echo $this->Form->input('Personnel');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $this->Form->value('Absence.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $this->Form->value('Absence.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Absences', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Annees', true), array('controller' => 'annees', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Annee', true), array('controller' => 'annees', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Etablissements', true), array('controller' => 'etablissements', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Etablissement', true), array('controller' => 'etablissements', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Eleves', true), array('controller' => 'eleves', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Eleve', true), array('controller' => 'eleves', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Personnels', true), array('controller' => 'personnels', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Personnel', true), array('controller' => 'personnels', 'action' => 'add')); ?> </li>
	</ul>
</div>