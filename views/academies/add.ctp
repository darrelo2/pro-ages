<div class="academies form">
<?php echo $this->Form->create('Academie');?>
	<fieldset>
		<legend><?php __('Add Academie'); ?></legend>
	<?php
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

		<li><?php echo $this->Html->link(__('List Academies', true), array('action' => 'index'));?></li>
	</ul>
</div>