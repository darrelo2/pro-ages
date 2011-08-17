<div class="academies index">
	<h2><?php __('Academies');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('acad_nom');?></th>
			<th><?php echo $this->Paginator->sort('acad_ville');?></th>
			<th><?php echo $this->Paginator->sort('acad_province');?></th>
			<th><?php echo $this->Paginator->sort('acad_matricule');?></th>
			<th><?php echo $this->Paginator->sort('acad_code_acces');?></th>
			<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($academies as $academie):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $academie['Academie']['id']; ?>&nbsp;</td>
		<td><?php echo $academie['Academie']['acad_nom']; ?>&nbsp;</td>
		<td><?php echo $academie['Academie']['acad_ville']; ?>&nbsp;</td>
		<td><?php echo $academie['Academie']['acad_province']; ?>&nbsp;</td>
		<td><?php echo $academie['Academie']['acad_matricule']; ?>&nbsp;</td>
		<td><?php echo $academie['Academie']['acad_code_acces']; ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View', true), array('action' => 'view', $academie['Academie']['id'])); ?>
			<?php echo $this->Html->link(__('Edit', true), array('action' => 'edit', $academie['Academie']['id'])); ?>
			<?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $academie['Academie']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $academie['Academie']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Academie', true), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Etablissements', true), array('controller' => 'etablissements', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Etablissement', true), array('controller' => 'etablissements', 'action' => 'add')); ?> </li>
	</ul>
</div>