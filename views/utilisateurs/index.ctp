<div class="utilisateurs index">
	<h2><?php __('Utilisateurs');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('pseudo');?></th>
			<th><?php echo $this->Paginator->sort('password');?></th>
			<th><?php echo $this->Paginator->sort('created');?></th>
			<th><?php echo $this->Paginator->sort('modified');?></th>
			<th><?php echo $this->Paginator->sort('derniere_visite');?></th>
			<th><?php echo $this->Paginator->sort('adresse_ip');?></th>
			<th><?php echo $this->Paginator->sort('personnel_id');?></th>
			<th><?php echo $this->Paginator->sort('role_id');?></th>
			<th><?php echo $this->Paginator->sort('annee_id');?></th>
			<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($utilisateurs as $utilisateur):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $utilisateur['Utilisateur']['id']; ?>&nbsp;</td>
		<td><?php echo $utilisateur['Utilisateur']['pseudo']; ?>&nbsp;</td>
		<td><?php echo $utilisateur['Utilisateur']['password']; ?>&nbsp;</td>
		<td><?php echo $utilisateur['Utilisateur']['created']; ?>&nbsp;</td>
		<td><?php echo $utilisateur['Utilisateur']['modified']; ?>&nbsp;</td>
		<td><?php echo $utilisateur['Utilisateur']['derniere_visite']; ?>&nbsp;</td>
		<td><?php echo $utilisateur['Utilisateur']['adresse_ip']; ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($utilisateur['Personnel']['id'], array('controller' => 'personnels', 'action' => 'view', $utilisateur['Personnel']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($utilisateur['Role']['id'], array('controller' => 'roles', 'action' => 'view', $utilisateur['Role']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($utilisateur['Annee']['id'], array('controller' => 'annees', 'action' => 'view', $utilisateur['Annee']['id'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View', true), array('action' => 'view', $utilisateur['Utilisateur']['id'])); ?>
			<?php echo $this->Html->link(__('Edit', true), array('action' => 'edit', $utilisateur['Utilisateur']['id'])); ?>
			<?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $utilisateur['Utilisateur']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $utilisateur['Utilisateur']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Utilisateur', true), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Personnels', true), array('controller' => 'personnels', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Personnel', true), array('controller' => 'personnels', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Roles', true), array('controller' => 'roles', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Role', true), array('controller' => 'roles', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Annees', true), array('controller' => 'annees', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Annee', true), array('controller' => 'annees', 'action' => 'add')); ?> </li>
	</ul>
</div>