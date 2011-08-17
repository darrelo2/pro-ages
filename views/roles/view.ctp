<div class="roles view">
<h2><?php  __('Role');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $role['Role']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Role'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $role['Role']['role']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Role', true), array('action' => 'edit', $role['Role']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Delete Role', true), array('action' => 'delete', $role['Role']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $role['Role']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Roles', true), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Role', true), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Utilisateurs', true), array('controller' => 'utilisateurs', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Utilisateur', true), array('controller' => 'utilisateurs', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php __('Related Utilisateurs');?></h3>
	<?php if (!empty($role['Utilisateur'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('Pseudo'); ?></th>
		<th><?php __('Password'); ?></th>
		<th><?php __('Created'); ?></th>
		<th><?php __('Modified'); ?></th>
		<th><?php __('Derniere Visite'); ?></th>
		<th><?php __('Adresse Ip'); ?></th>
		<th><?php __('Personnel Id'); ?></th>
		<th><?php __('Role Id'); ?></th>
		<th><?php __('Annee Id'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($role['Utilisateur'] as $utilisateur):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $utilisateur['id'];?></td>
			<td><?php echo $utilisateur['pseudo'];?></td>
			<td><?php echo $utilisateur['password'];?></td>
			<td><?php echo $utilisateur['created'];?></td>
			<td><?php echo $utilisateur['modified'];?></td>
			<td><?php echo $utilisateur['derniere_visite'];?></td>
			<td><?php echo $utilisateur['adresse_ip'];?></td>
			<td><?php echo $utilisateur['personnel_id'];?></td>
			<td><?php echo $utilisateur['role_id'];?></td>
			<td><?php echo $utilisateur['annee_id'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View', true), array('controller' => 'utilisateurs', 'action' => 'view', $utilisateur['id'])); ?>
				<?php echo $this->Html->link(__('Edit', true), array('controller' => 'utilisateurs', 'action' => 'edit', $utilisateur['id'])); ?>
				<?php echo $this->Html->link(__('Delete', true), array('controller' => 'utilisateurs', 'action' => 'delete', $utilisateur['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $utilisateur['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Utilisateur', true), array('controller' => 'utilisateurs', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
