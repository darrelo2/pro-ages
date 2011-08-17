<div class="salleCours form">
<?php echo $this->Form->create('SalleCours');?>
	<fieldset>
		<legend><?php __('Add Salle Cours'); ?></legend>
	<?php
		echo $this->Form->input('sal_numero');
		echo $this->Form->input('sal_nbre_place');
		echo $this->Form->input('batiment_id');
		echo $this->Form->input('annee_id');
		echo $this->Form->input('Classe');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Salle Cours', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Batiments', true), array('controller' => 'batiments', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Batiment', true), array('controller' => 'batiments', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Annees', true), array('controller' => 'annees', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Annee', true), array('controller' => 'annees', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Classes', true), array('controller' => 'classes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Classe', true), array('controller' => 'classes', 'action' => 'add')); ?> </li>
	</ul>
</div>