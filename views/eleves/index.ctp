<div class="eleves index">
	<h2><?php __('Eleves');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('elev_matricule');?></th>
			<th><?php echo $this->Paginator->sort('elev_nom');?></th>
			<th><?php echo $this->Paginator->sort('elev_prenom');?></th>
			<th><?php echo $this->Paginator->sort('elev_date_naissance');?></th>
			<th><?php echo $this->Paginator->sort('elev_lieu_naissance');?></th>
			<th><?php echo $this->Paginator->sort('elev_adresse1');?></th>
			<th><?php echo $this->Paginator->sort('elev_adresse2');?></th>
			<th><?php echo $this->Paginator->sort('elev_telephone_fixe');?></th>
			<th><?php echo $this->Paginator->sort('elev_portable1');?></th>
			<th><?php echo $this->Paginator->sort('elev_sexe');?></th>
			<th><?php echo $this->Paginator->sort('elev_email');?></th>
			<th><?php echo $this->Paginator->sort('elev_date_inscription');?></th>
			<th><?php echo $this->Paginator->sort('elev_photo');?></th>
			<th><?php echo $this->Paginator->sort('classe_id');?></th>
			<th><?php echo $this->Paginator->sort('annee_id');?></th>
			<th><?php echo $this->Paginator->sort('etablissement_id');?></th>
			<th><?php echo $this->Paginator->sort('created');?></th>
			<th><?php echo $this->Paginator->sort('modified');?></th>
			<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($eleves as $eleve):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $eleve['Eleve']['id']; ?>&nbsp;</td>
		<td><?php echo $eleve['Eleve']['elev_matricule']; ?>&nbsp;</td>
		<td><?php echo $eleve['Eleve']['elev_nom']; ?>&nbsp;</td>
		<td><?php echo $eleve['Eleve']['elev_prenom']; ?>&nbsp;</td>
		<td><?php echo $eleve['Eleve']['elev_date_naissance']; ?>&nbsp;</td>
		<td><?php echo $eleve['Eleve']['elev_lieu_naissance']; ?>&nbsp;</td>
		<td><?php echo $eleve['Eleve']['elev_adresse1']; ?>&nbsp;</td>
		<td><?php echo $eleve['Eleve']['elev_adresse2']; ?>&nbsp;</td>
		<td><?php echo $eleve['Eleve']['elev_telephone_fixe']; ?>&nbsp;</td>
		<td><?php echo $eleve['Eleve']['elev_portable1']; ?>&nbsp;</td>
		<td><?php echo $eleve['Eleve']['elev_sexe']; ?>&nbsp;</td>
		<td><?php echo $eleve['Eleve']['elev_email']; ?>&nbsp;</td>
		<td><?php echo $eleve['Eleve']['elev_date_inscription']; ?>&nbsp;</td>
		<td><?php echo $eleve['Eleve']['elev_photo']; ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($eleve['Classe']['id'], array('controller' => 'classes', 'action' => 'view', $eleve['Classe']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($eleve['Annee']['id'], array('controller' => 'annees', 'action' => 'view', $eleve['Annee']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($eleve['Etablissement']['id'], array('controller' => 'etablissements', 'action' => 'view', $eleve['Etablissement']['id'])); ?>
		</td>
		<td><?php echo $eleve['Eleve']['created']; ?>&nbsp;</td>
		<td><?php echo $eleve['Eleve']['modified']; ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View', true), array('action' => 'view', $eleve['Eleve']['id'])); ?>
			<?php echo $this->Html->link(__('Edit', true), array('action' => 'edit', $eleve['Eleve']['id'])); ?>
			<?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $eleve['Eleve']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $eleve['Eleve']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Eleve', true), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Classes', true), array('controller' => 'classes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Classe', true), array('controller' => 'classes', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Annees', true), array('controller' => 'annees', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Annee', true), array('controller' => 'annees', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Etablissements', true), array('controller' => 'etablissements', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Etablissement', true), array('controller' => 'etablissements', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Absences', true), array('controller' => 'absences', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Absence', true), array('controller' => 'absences', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Bulletins', true), array('controller' => 'bulletins', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Bulletin', true), array('controller' => 'bulletins', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Notes', true), array('controller' => 'notes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Note', true), array('controller' => 'notes', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Tuteurs', true), array('controller' => 'tuteurs', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Tuteur', true), array('controller' => 'tuteurs', 'action' => 'add')); ?> </li>
	</ul>
</div>