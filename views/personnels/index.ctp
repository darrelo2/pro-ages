<div class="personnels index">
	<h2><?php __('Personnels');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('pers_matricule');?></th>
			<th><?php echo $this->Paginator->sort('pers_nom');?></th>
			<th><?php echo $this->Paginator->sort('pers_prenom');?></th>
			<th><?php echo $this->Paginator->sort('pers_date_naissance');?></th>
			<th><?php echo $this->Paginator->sort('pers_lieu_naissance');?></th>
			<th><?php echo $this->Paginator->sort('pers_adresse1');?></th>
			<th><?php echo $this->Paginator->sort('pers_adresse2');?></th>
			<th><?php echo $this->Paginator->sort('pers_telephone_fixe');?></th>
			<th><?php echo $this->Paginator->sort('pers_portable1');?></th>
			<th><?php echo $this->Paginator->sort('pers_portable2');?></th>
			<th><?php echo $this->Paginator->sort('pers_telephone_pro');?></th>
			<th><?php echo $this->Paginator->sort('pers_sexe');?></th>
			<th><?php echo $this->Paginator->sort('pers_email');?></th>
			<th><?php echo $this->Paginator->sort('pers_photo');?></th>
			<th><?php echo $this->Paginator->sort('annee_id');?></th>
			<th><?php echo $this->Paginator->sort('etablissement_id');?></th>
			<th><?php echo $this->Paginator->sort('created');?></th>
			<th><?php echo $this->Paginator->sort('modified');?></th>
			<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($personnels as $personnel):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $personnel['Personnel']['id']; ?>&nbsp;</td>
		<td><?php echo $personnel['Personnel']['pers_matricule']; ?>&nbsp;</td>
		<td><?php echo $personnel['Personnel']['pers_nom']; ?>&nbsp;</td>
		<td><?php echo $personnel['Personnel']['pers_prenom']; ?>&nbsp;</td>
		<td><?php echo $personnel['Personnel']['pers_date_naissance']; ?>&nbsp;</td>
		<td><?php echo $personnel['Personnel']['pers_lieu_naissance']; ?>&nbsp;</td>
		<td><?php echo $personnel['Personnel']['pers_adresse1']; ?>&nbsp;</td>
		<td><?php echo $personnel['Personnel']['pers_adresse2']; ?>&nbsp;</td>
		<td><?php echo $personnel['Personnel']['pers_telephone_fixe']; ?>&nbsp;</td>
		<td><?php echo $personnel['Personnel']['pers_portable1']; ?>&nbsp;</td>
		<td><?php echo $personnel['Personnel']['pers_portable2']; ?>&nbsp;</td>
		<td><?php echo $personnel['Personnel']['pers_telephone_pro']; ?>&nbsp;</td>
		<td><?php echo $personnel['Personnel']['pers_sexe']; ?>&nbsp;</td>
		<td><?php echo $personnel['Personnel']['pers_email']; ?>&nbsp;</td>
		<td><?php echo $personnel['Personnel']['pers_photo']; ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($personnel['Annee']['id'], array('controller' => 'annees', 'action' => 'view', $personnel['Annee']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($personnel['Etablissement']['id'], array('controller' => 'etablissements', 'action' => 'view', $personnel['Etablissement']['id'])); ?>
		</td>
		<td><?php echo $personnel['Personnel']['created']; ?>&nbsp;</td>
		<td><?php echo $personnel['Personnel']['modified']; ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View', true), array('action' => 'view', $personnel['Personnel']['id'])); ?>
			<?php echo $this->Html->link(__('Edit', true), array('action' => 'edit', $personnel['Personnel']['id'])); ?>
			<?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $personnel['Personnel']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $personnel['Personnel']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Personnel', true), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Annees', true), array('controller' => 'annees', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Annee', true), array('controller' => 'annees', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Etablissements', true), array('controller' => 'etablissements', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Etablissement', true), array('controller' => 'etablissements', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Utilisateurs', true), array('controller' => 'utilisateurs', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Utilisateur', true), array('controller' => 'utilisateurs', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Absences', true), array('controller' => 'absences', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Absence', true), array('controller' => 'absences', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Classes', true), array('controller' => 'classes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Classe', true), array('controller' => 'classes', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Notes', true), array('controller' => 'notes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Note', true), array('controller' => 'notes', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Postes', true), array('controller' => 'postes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Poste', true), array('controller' => 'postes', 'action' => 'add')); ?> </li>
	</ul>
</div>