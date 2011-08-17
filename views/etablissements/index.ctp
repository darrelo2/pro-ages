<div class="etablissements index">
	<h2><?php __('Etablissements');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('etab_nom');?></th>
			<th><?php echo $this->Paginator->sort('etab_adresse');?></th>
			<th><?php echo $this->Paginator->sort('etab_ville');?></th>
			<th><?php echo $this->Paginator->sort('etab_province');?></th>
			<th><?php echo $this->Paginator->sort('etab_departement');?></th>
			<th><?php echo $this->Paginator->sort('etab_fax');?></th>
			<th><?php echo $this->Paginator->sort('etab_email');?></th>
			<th><?php echo $this->Paginator->sort('etab_boite_postale');?></th>
			<th><?php echo $this->Paginator->sort('etab_code_acces');?></th>
			<th><?php echo $this->Paginator->sort('eta_type');?></th>
			<th><?php echo $this->Paginator->sort('academie_id');?></th>
			<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($etablissements as $etablissement):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $etablissement['Etablissement']['id']; ?>&nbsp;</td>
		<td><?php echo $etablissement['Etablissement']['etab_nom']; ?>&nbsp;</td>
		<td><?php echo $etablissement['Etablissement']['etab_adresse']; ?>&nbsp;</td>
		<td><?php echo $etablissement['Etablissement']['etab_ville']; ?>&nbsp;</td>
		<td><?php echo $etablissement['Etablissement']['etab_province']; ?>&nbsp;</td>
		<td><?php echo $etablissement['Etablissement']['etab_departement']; ?>&nbsp;</td>
		<td><?php echo $etablissement['Etablissement']['etab_fax']; ?>&nbsp;</td>
		<td><?php echo $etablissement['Etablissement']['etab_email']; ?>&nbsp;</td>
		<td><?php echo $etablissement['Etablissement']['etab_boite_postale']; ?>&nbsp;</td>
		<td><?php echo $etablissement['Etablissement']['etab_code_acces']; ?>&nbsp;</td>
		<td><?php echo $etablissement['Etablissement']['eta_type']; ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($etablissement['Academie']['id'], array('controller' => 'academies', 'action' => 'view', $etablissement['Academie']['id'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View', true), array('action' => 'view', $etablissement['Etablissement']['id'])); ?>
			<?php echo $this->Html->link(__('Edit', true), array('action' => 'edit', $etablissement['Etablissement']['id'])); ?>
			<?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $etablissement['Etablissement']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $etablissement['Etablissement']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Etablissement', true), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Academies', true), array('controller' => 'academies', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Academie', true), array('controller' => 'academies', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Absences', true), array('controller' => 'absences', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Absence', true), array('controller' => 'absences', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Batiments', true), array('controller' => 'batiments', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Batiment', true), array('controller' => 'batiments', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Classes', true), array('controller' => 'classes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Classe', true), array('controller' => 'classes', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Eleves', true), array('controller' => 'eleves', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Eleve', true), array('controller' => 'eleves', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Personnels', true), array('controller' => 'personnels', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Personnel', true), array('controller' => 'personnels', 'action' => 'add')); ?> </li>
	</ul>
</div>