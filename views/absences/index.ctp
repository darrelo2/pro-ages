<div class="absences index">
	<h2><?php __('Absences');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('abs_date');?></th>
			<th><?php echo $this->Paginator->sort('abs_date_debut');?></th>
			<th><?php echo $this->Paginator->sort('abs_date_fin');?></th>
			<th><?php echo $this->Paginator->sort('abs_motif');?></th>
			<th><?php echo $this->Paginator->sort('abs_justifie');?></th>
			<th><?php echo $this->Paginator->sort('annee_id');?></th>
			<th><?php echo $this->Paginator->sort('etablissement_id');?></th>
			<th><?php echo $this->Paginator->sort('created');?></th>
			<th><?php echo $this->Paginator->sort('modified');?></th>
			<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($absences as $absence):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $absence['Absence']['id']; ?>&nbsp;</td>
		<td><?php echo $absence['Absence']['abs_date']; ?>&nbsp;</td>
		<td><?php echo $absence['Absence']['abs_date_debut']; ?>&nbsp;</td>
		<td><?php echo $absence['Absence']['abs_date_fin']; ?>&nbsp;</td>
		<td><?php echo $absence['Absence']['abs_motif']; ?>&nbsp;</td>
		<td><?php echo $absence['Absence']['abs_justifie']; ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($absence['Annee']['id'], array('controller' => 'annees', 'action' => 'view', $absence['Annee']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($absence['Etablissement']['id'], array('controller' => 'etablissements', 'action' => 'view', $absence['Etablissement']['id'])); ?>
		</td>
		<td><?php echo $absence['Absence']['created']; ?>&nbsp;</td>
		<td><?php echo $absence['Absence']['modified']; ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View', true), array('action' => 'view', $absence['Absence']['id'])); ?>
			<?php echo $this->Html->link(__('Edit', true), array('action' => 'edit', $absence['Absence']['id'])); ?>
			<?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $absence['Absence']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $absence['Absence']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Absence', true), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Annees', true), array('controller' => 'annees', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Annee', true), array('controller' => 'annees', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Etablissements', true), array('controller' => 'etablissements', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Etablissement', true), array('controller' => 'etablissements', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Eleves', true), array('controller' => 'eleves', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Eleve', true), array('controller' => 'eleves', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Personnels', true), array('controller' => 'personnels', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Personnel', true), array('controller' => 'personnels', 'action' => 'add')); ?> </li>
	</ul>
</div>