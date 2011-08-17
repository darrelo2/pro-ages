<div class="bulletins index">
	<h2><?php __('Bulletins');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('bull_année');?></th>
			<th><?php echo $this->Paginator->sort('bull_periode');?></th>
			<th><?php echo $this->Paginator->sort('bull_numero');?></th>
			<th><?php echo $this->Paginator->sort('bulletinscol');?></th>
			<th><?php echo $this->Paginator->sort('bull_total_points');?></th>
			<th><?php echo $this->Paginator->sort('bull_moyenne');?></th>
			<th><?php echo $this->Paginator->sort('annee_id');?></th>
			<th><?php echo $this->Paginator->sort('created');?></th>
			<th><?php echo $this->Paginator->sort('modified');?></th>
			<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($bulletins as $bulletin):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $bulletin['Bulletin']['id']; ?>&nbsp;</td>
		<td><?php echo $bulletin['Bulletin']['bull_année']; ?>&nbsp;</td>
		<td><?php echo $bulletin['Bulletin']['bull_periode']; ?>&nbsp;</td>
		<td><?php echo $bulletin['Bulletin']['bull_numero']; ?>&nbsp;</td>
		<td><?php echo $bulletin['Bulletin']['bulletinscol']; ?>&nbsp;</td>
		<td><?php echo $bulletin['Bulletin']['bull_total_points']; ?>&nbsp;</td>
		<td><?php echo $bulletin['Bulletin']['bull_moyenne']; ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($bulletin['Annee']['id'], array('controller' => 'annees', 'action' => 'view', $bulletin['Annee']['id'])); ?>
		</td>
		<td><?php echo $bulletin['Bulletin']['created']; ?>&nbsp;</td>
		<td><?php echo $bulletin['Bulletin']['modified']; ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View', true), array('action' => 'view', $bulletin['Bulletin']['id'])); ?>
			<?php echo $this->Html->link(__('Edit', true), array('action' => 'edit', $bulletin['Bulletin']['id'])); ?>
			<?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $bulletin['Bulletin']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $bulletin['Bulletin']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Bulletin', true), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Annees', true), array('controller' => 'annees', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Annee', true), array('controller' => 'annees', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Eleves', true), array('controller' => 'eleves', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Eleve', true), array('controller' => 'eleves', 'action' => 'add')); ?> </li>
	</ul>
</div>