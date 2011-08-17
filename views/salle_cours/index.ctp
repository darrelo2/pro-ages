<div class="salleCours index">
	<h2><?php __('Salle Cours');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('sal_numero');?></th>
			<th><?php echo $this->Paginator->sort('sal_nbre_place');?></th>
			<th><?php echo $this->Paginator->sort('batiment_id');?></th>
			<th><?php echo $this->Paginator->sort('annee_id');?></th>
			<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($salleCours as $salleCours):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $salleCours['SalleCours']['id']; ?>&nbsp;</td>
		<td><?php echo $salleCours['SalleCours']['sal_numero']; ?>&nbsp;</td>
		<td><?php echo $salleCours['SalleCours']['sal_nbre_place']; ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($salleCours['Batiment']['id'], array('controller' => 'batiments', 'action' => 'view', $salleCours['Batiment']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($salleCours['Annee']['id'], array('controller' => 'annees', 'action' => 'view', $salleCours['Annee']['id'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View', true), array('action' => 'view', $salleCours['SalleCours']['id'])); ?>
			<?php echo $this->Html->link(__('Edit', true), array('action' => 'edit', $salleCours['SalleCours']['id'])); ?>
			<?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $salleCours['SalleCours']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $salleCours['SalleCours']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Salle Cours', true), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Batiments', true), array('controller' => 'batiments', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Batiment', true), array('controller' => 'batiments', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Annees', true), array('controller' => 'annees', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Annee', true), array('controller' => 'annees', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Classes', true), array('controller' => 'classes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Classe', true), array('controller' => 'classes', 'action' => 'add')); ?> </li>
	</ul>
</div>