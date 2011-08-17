<div class="academies form">
<?php echo $this->Form->create('Academie');?>
	<fieldset>
		<legend><?php __('Edit Academie'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('acad_nom');
		echo $this->Form->input('acad_ville');
		echo $this->Form->input('acad_province');
		echo $this->Form->input('acad_matricule');
		echo $this->Form->input('acad_code_acces');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $this->Form->value('Academie.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $this->Form->value('Academie.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Academies', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Etablissements', true), array('controller' => 'etablissements', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Etablissement', true), array('controller' => 'etablissements', 'action' => 'add')); ?> </li>
	</ul>
</div>