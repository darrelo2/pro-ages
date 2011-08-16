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
		echo $this->Form->input('academies_id');
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
		<li><?php echo $this->Html->link(__('New Academies', true), array('controller' => 'academies', 'action' => 'add')); ?> </li>
	</ul>
</div>