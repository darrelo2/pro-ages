<div class="tuteurs form">
<?php echo $this->Form->create('Tuteur');?>
	<fieldset>
		<legend><?php __('Edit Tuteur'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('tut_nom');
		echo $this->Form->input('tut_prenom');
		echo $this->Form->input('tut_adresse1');
		echo $this->Form->input('tut_adresse2');
		echo $this->Form->input('tut_telephone_fixe');
		echo $this->Form->input('tut_portable1');
		echo $this->Form->input('tut_telephone_pro');
		echo $this->Form->input('tut_email');
		echo $this->Form->input('annee_id');
		echo $this->Form->input('Eleve');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $this->Form->value('Tuteur.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $this->Form->value('Tuteur.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Tuteurs', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Annees', true), array('controller' => 'annees', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Annee', true), array('controller' => 'annees', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Eleves', true), array('controller' => 'eleves', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Eleve', true), array('controller' => 'eleves', 'action' => 'add')); ?> </li>
	</ul>
</div>