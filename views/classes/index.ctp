<div class="classes index">
	<h2><?php __('Classes');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('clas_nom');?></th>
			<th><?php echo $this->Paginator->sort('clas_code');?></th>
			<th><?php echo $this->Paginator->sort('annee_id');?></th>
			<th><?php echo $this->Paginator->sort('etablissement_id');?></th>
			<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($classes as $classe):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $classe['Classe']['id']; ?>&nbsp;</td>
		<td><?php echo $classe['Classe']['clas_nom']; ?>&nbsp;</td>
		<td><?php echo $classe['Classe']['clas_code']; ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($classe['Annee']['id'], array('controller' => 'annees', 'action' => 'view', $classe['Annee']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($classe['Etablissement']['id'], array('controller' => 'etablissements', 'action' => 'view', $classe['Etablissement']['id'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View', true), array('action' => 'view', $classe['Classe']['id'])); ?>
			<?php echo $this->Html->link(__('Edit', true), array('action' => 'edit', $classe['Classe']['id'])); ?>
			<?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $classe['Classe']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $classe['Classe']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Classe', true), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Annees', true), array('controller' => 'annees', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Annee', true), array('controller' => 'annees', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Etablissements', true), array('controller' => 'etablissements', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Etablissement', true), array('controller' => 'etablissements', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Eleves', true), array('controller' => 'eleves', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Eleve', true), array('controller' => 'eleves', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Matieres', true), array('controller' => 'matieres', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Matiere', true), array('controller' => 'matieres', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Notes', true), array('controller' => 'notes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Note', true), array('controller' => 'notes', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Personnels', true), array('controller' => 'personnels', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Personnel', true), array('controller' => 'personnels', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Salle Cours', true), array('controller' => 'salle_cours', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Salle Cours', true), array('controller' => 'salle_cours', 'action' => 'add')); ?> </li>
	</ul>
</div>