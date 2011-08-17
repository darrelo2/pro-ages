<div class="matieres index">
	<h2><?php __('Matieres');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('mat_nom');?></th>
			<th><?php echo $this->Paginator->sort('mat_coef');?></th>
			<th><?php echo $this->Paginator->sort('mat_ordre');?></th>
			<th><?php echo $this->Paginator->sort('mat_code');?></th>
			<th><?php echo $this->Paginator->sort('annee_id');?></th>
			<th><?php echo $this->Paginator->sort('created');?></th>
			<th><?php echo $this->Paginator->sort('modified');?></th>
			<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($matieres as $matiere):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $matiere['Matiere']['id']; ?>&nbsp;</td>
		<td><?php echo $matiere['Matiere']['mat_nom']; ?>&nbsp;</td>
		<td><?php echo $matiere['Matiere']['mat_coef']; ?>&nbsp;</td>
		<td><?php echo $matiere['Matiere']['mat_ordre']; ?>&nbsp;</td>
		<td><?php echo $matiere['Matiere']['mat_code']; ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($matiere['Annee']['id'], array('controller' => 'annees', 'action' => 'view', $matiere['Annee']['id'])); ?>
		</td>
		<td><?php echo $matiere['Matiere']['created']; ?>&nbsp;</td>
		<td><?php echo $matiere['Matiere']['modified']; ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View', true), array('action' => 'view', $matiere['Matiere']['id'])); ?>
			<?php echo $this->Html->link(__('Edit', true), array('action' => 'edit', $matiere['Matiere']['id'])); ?>
			<?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $matiere['Matiere']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $matiere['Matiere']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page %page% of %pages%, showing %current% records out of %count% total, starting on record %start%, ending on %end%', true)
	));
	?>	</p>

	<div class="paging">
		<?php echo $this->Paginator->prev('<< ' . __('previous', true), array(), null, array('class'=>'disabled'));?>
	 | 	<?php echo $this->Paginator->numbers();?>
 |
		<?php echo $this->Paginator->next(__('next', true) . ' >>', array(), null, array('class' => 'disabled'));?>
	</div>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Matiere', true), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Annees', true), array('controller' => 'annees', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Annee', true), array('controller' => 'annees', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Classes', true), array('controller' => 'classes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Classe', true), array('controller' => 'classes', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Notes', true), array('controller' => 'notes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Note', true), array('controller' => 'notes', 'action' => 'add')); ?> </li>
	</ul>
</div>