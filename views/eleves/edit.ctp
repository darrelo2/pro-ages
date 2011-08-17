<div class="eleves form">
<?php echo $this->Form->create('Eleve');?>
	<fieldset>
		<legend><?php __('Edit Eleve'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('elev_matricule');
		echo $this->Form->input('elev_nom');
		echo $this->Form->input('elev_prenom');
		echo $this->Form->input('elev_date_naissance');
		echo $this->Form->input('elev_lieu_naissance');
		echo $this->Form->input('elev_adresse1');
		echo $this->Form->input('elev_adresse2');
		echo $this->Form->input('elev_telephone_fixe');
		echo $this->Form->input('elev_portable1');
		echo $this->Form->input('elev_sexe');
		echo $this->Form->input('elev_email');
		echo $this->Form->input('elev_date_inscription');
		echo $this->Form->input('elev_photo');
		echo $this->Form->input('classe_id');
		echo $this->Form->input('annee_id');
		echo $this->Form->input('etablissement_id');
		echo $this->Form->input('Absence');
		echo $this->Form->input('Bulletin');
		echo $this->Form->input('Note');
		echo $this->Form->input('Tuteur');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $this->Form->value('Eleve.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $this->Form->value('Eleve.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Eleves', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Classes', true), array('controller' => 'classes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Classe', true), array('controller' => 'classes', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Annees', true), array('controller' => 'annees', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Annee', true), array('controller' => 'annees', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Etablissements', true), array('controller' => 'etablissements', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Etablissement', true), array('controller' => 'etablissements', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Absences', true), array('controller' => 'absences', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Absence', true), array('controller' => 'absences', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Bulletins', true), array('controller' => 'bulletins', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Bulletin', true), array('controller' => 'bulletins', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Notes', true), array('controller' => 'notes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Note', true), array('controller' => 'notes', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Tuteurs', true), array('controller' => 'tuteurs', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Tuteur', true), array('controller' => 'tuteurs', 'action' => 'add')); ?> </li>
	</ul>
</div>