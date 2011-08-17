<div class="postes index">
	<h2><?php __('Postes');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('post_nom');?></th>
			<th><?php echo $this->Paginator->sort('post_type');?></th>
			<th><?php echo $this->Paginator->sort('annee_id');?></th>
			<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($postes as $poste):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $poste['Poste']['id']; ?>&nbsp;</td>
		<td><?php echo $poste['Poste']['post_nom']; ?>&nbsp;</td>
		<td><?php echo $poste['Poste']['post_type']; ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($poste['Annee']['id'], array('controller' => 'annees', 'action' => 'view', $poste['Annee']['id'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View', true), array('action' => 'view', $poste['Poste']['id'])); ?>
			<?php echo $this->Html->link(__('Edit', true), array('action' => 'edit', $poste['Poste']['id'])); ?>
			<?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $poste['Poste']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $poste['Poste']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Poste', true), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Annees', true), array('controller' => 'annees', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Annee', true), array('controller' => 'annees', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Personnels', true), array('controller' => 'personnels', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Personnel', true), array('controller' => 'personnels', 'action' => 'add')); ?> </li>
	</ul>
</div>