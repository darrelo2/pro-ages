<div class="etablissements form">
<?php echo $this->Form->create('Etablissement');?>
	<fieldset>
		<legend><?php __('Edit Etablissement'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('etab_nom');
		echo $this->Form->input('etab_adresse');
		echo $this->Form->input('etab_ville');
		echo $this->Form->input('etab_province');
		echo $this->Form->input('etab_departement');
		echo $this->Form->input('etab_fax');
		echo $this->Form->input('etab_email');
		echo $this->Form->input('etab_boite_postale');
		echo $this->Form->input('etab_code_acces');
		echo $this->Form->input('eta_type');
		echo $this->Form->input('academie_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $this->Form->value('Etablissement.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $this->Form->value('Etablissement.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Etablissements', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Academies', true), array('controller' => 'academies', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Academie', true), array('controller' => 'academies', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Absences', true), array('controller' => 'absences', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Absence', true), array('controller' => 'absences', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Batiments', true), array('controller' => 'batiments', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Batiment', true), array('controller' => 'batiments', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Classes', true), array('controller' => 'classes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Classe', true), array('controller' => 'classes', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Eleves', true), array('controller' => 'eleves', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Eleve', true), array('controller' => 'eleves', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Personnels', true), array('controller' => 'personnels', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Personnel', true), array('controller' => 'personnels', 'action' => 'add')); ?> </li>
	</ul>
</div>