<div class="bulletins form">
<?php echo $this->Form->create('Bulletin');?>
	<fieldset>
		<legend><?php __('Edit Bulletin'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('bull_année');
		echo $this->Form->input('bull_periode');
		echo $this->Form->input('bull_numero');
		echo $this->Form->input('bulletinscol');
		echo $this->Form->input('bull_total_points');
		echo $this->Form->input('bull_moyenne');
		echo $this->Form->input('annee_id');
		echo $this->Form->input('Eleve');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $this->Form->value('Bulletin.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $this->Form->value('Bulletin.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Bulletins', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Annees', true), array('controller' => 'annees', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Annee', true), array('controller' => 'annees', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Eleves', true), array('controller' => 'eleves', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Eleve', true), array('controller' => 'eleves', 'action' => 'add')); ?> </li>
	</ul>
</div>