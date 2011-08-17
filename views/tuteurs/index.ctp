<div class="tuteurs index">
	<h2><?php __('Tuteurs');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('tut_nom');?></th>
			<th><?php echo $this->Paginator->sort('tut_prenom');?></th>
			<th><?php echo $this->Paginator->sort('tut_adresse1');?></th>
			<th><?php echo $this->Paginator->sort('tut_adresse2');?></th>
			<th><?php echo $this->Paginator->sort('tut_telephone_fixe');?></th>
			<th><?php echo $this->Paginator->sort('tut_portable1');?></th>
			<th><?php echo $this->Paginator->sort('tut_telephone_pro');?></th>
			<th><?php echo $this->Paginator->sort('tut_email');?></th>
			<th><?php echo $this->Paginator->sort('annee_id');?></th>
			<th><?php echo $this->Paginator->sort('created');?></th>
			<th><?php echo $this->Paginator->sort('modified');?></th>
			<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($tuteurs as $tuteur):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $tuteur['Tuteur']['id']; ?>&nbsp;</td>
		<td><?php echo $tuteur['Tuteur']['tut_nom']; ?>&nbsp;</td>
		<td><?php echo $tuteur['Tuteur']['tut_prenom']; ?>&nbsp;</td>
		<td><?php echo $tuteur['Tuteur']['tut_adresse1']; ?>&nbsp;</td>
		<td><?php echo $tuteur['Tuteur']['tut_adresse2']; ?>&nbsp;</td>
		<td><?php echo $tuteur['Tuteur']['tut_telephone_fixe']; ?>&nbsp;</td>
		<td><?php echo $tuteur['Tuteur']['tut_portable1']; ?>&nbsp;</td>
		<td><?php echo $tuteur['Tuteur']['tut_telephone_pro']; ?>&nbsp;</td>
		<td><?php echo $tuteur['Tuteur']['tut_email']; ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($tuteur['Annee']['id'], array('controller' => 'annees', 'action' => 'view', $tuteur['Annee']['id'])); ?>
		</td>
		<td><?php echo $tuteur['Tuteur']['created']; ?>&nbsp;</td>
		<td><?php echo $tuteur['Tuteur']['modified']; ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View', true), array('action' => 'view', $tuteur['Tuteur']['id'])); ?>
			<?php echo $this->Html->link(__('Edit', true), array('action' => 'edit', $tuteur['Tuteur']['id'])); ?>
			<?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $tuteur['Tuteur']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $tuteur['Tuteur']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Tuteur', true), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Annees', true), array('controller' => 'annees', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Annee', true), array('controller' => 'annees', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Eleves', true), array('controller' => 'eleves', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Eleve', true), array('controller' => 'eleves', 'action' => 'add')); ?> </li>
	</ul>
</div>