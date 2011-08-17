<div class="batiments index">
	<h2><?php __('Batiments');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('bat_code');?></th>
			<th><?php echo $this->Paginator->sort('bat_nom');?></th>
			<th><?php echo $this->Paginator->sort('annee_id');?></th>
			<th><?php echo $this->Paginator->sort('etablissement_id');?></th>
			<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($batiments as $batiment):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $batiment['Batiment']['id']; ?>&nbsp;</td>
		<td><?php echo $batiment['Batiment']['bat_code']; ?>&nbsp;</td>
		<td><?php echo $batiment['Batiment']['bat_nom']; ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($batiment['Annee']['id'], array('controller' => 'annees', 'action' => 'view', $batiment['Annee']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($batiment['Etablissement']['id'], array('controller' => 'etablissements', 'action' => 'view', $batiment['Etablissement']['id'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View', true), array('action' => 'view', $batiment['Batiment']['id'])); ?>
			<?php echo $this->Html->link(__('Edit', true), array('action' => 'edit', $batiment['Batiment']['id'])); ?>
			<?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $batiment['Batiment']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $batiment['Batiment']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Batiment', true), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Annees', true), array('controller' => 'annees', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Annee', true), array('controller' => 'annees', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Etablissements', true), array('controller' => 'etablissements', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Etablissement', true), array('controller' => 'etablissements', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Salle Cours', true), array('controller' => 'salle_cours', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Salle Cours', true), array('controller' => 'salle_cours', 'action' => 'add')); ?> </li>
	</ul>
</div>