<div class="batiments form">
<?php echo $this->Form->create('Batiment');?>
	<fieldset>
		<legend><?php __('Edit Batiment'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('bat_code');
		echo $this->Form->input('bat_nom');
		echo $this->Form->input('annee_id');
		echo $this->Form->input('etablissement_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $this->Form->value('Batiment.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $this->Form->value('Batiment.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Batiments', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Annees', true), array('controller' => 'annees', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Annee', true), array('controller' => 'annees', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Etablissements', true), array('controller' => 'etablissements', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Etablissement', true), array('controller' => 'etablissements', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Salle Cours', true), array('controller' => 'salle_cours', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Salle Cours', true), array('controller' => 'salle_cours', 'action' => 'add')); ?> </li>
	</ul>
</div>