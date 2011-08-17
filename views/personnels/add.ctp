<div class="personnels form">
<?php echo $this->Form->create('Personnel');?>
	<fieldset>
		<legend><?php __('Add Personnel'); ?></legend>
	<?php
		echo $this->Form->input('pers_matricule');
		echo $this->Form->input('pers_nom');
		echo $this->Form->input('pers_prenom');
		echo $this->Form->input('pers_date_naissance');
		echo $this->Form->input('pers_lieu_naissance');
		echo $this->Form->input('pers_adresse1');
		echo $this->Form->input('pers_adresse2');
		echo $this->Form->input('pers_telephone_fixe');
		echo $this->Form->input('pers_portable1');
		echo $this->Form->input('pers_portable2');
		echo $this->Form->input('pers_telephone_pro');
		echo $this->Form->input('pers_sexe');
		echo $this->Form->input('pers_email');
		echo $this->Form->input('pers_photo');
		echo $this->Form->input('annee_id');
		echo $this->Form->input('etablissement_id');
		echo $this->Form->input('Absence');
		echo $this->Form->input('Classe');
		echo $this->Form->input('Note');
		echo $this->Form->input('Poste');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Personnels', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Annees', true), array('controller' => 'annees', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Annee', true), array('controller' => 'annees', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Etablissements', true), array('controller' => 'etablissements', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Etablissement', true), array('controller' => 'etablissements', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Utilisateurs', true), array('controller' => 'utilisateurs', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Utilisateur', true), array('controller' => 'utilisateurs', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Absences', true), array('controller' => 'absences', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Absence', true), array('controller' => 'absences', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Classes', true), array('controller' => 'classes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Classe', true), array('controller' => 'classes', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Notes', true), array('controller' => 'notes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Note', true), array('controller' => 'notes', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Postes', true), array('controller' => 'postes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Poste', true), array('controller' => 'postes', 'action' => 'add')); ?> </li>
	</ul>
</div>