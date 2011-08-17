<div class="batiments view">
<h2><?php  __('Batiment');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $batiment['Batiment']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Bat Code'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $batiment['Batiment']['bat_code']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Bat Nom'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $batiment['Batiment']['bat_nom']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Annee'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $this->Html->link($batiment['Annee']['id'], array('controller' => 'annees', 'action' => 'view', $batiment['Annee']['id'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Etablissement'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $this->Html->link($batiment['Etablissement']['id'], array('controller' => 'etablissements', 'action' => 'view', $batiment['Etablissement']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Batiment', true), array('action' => 'edit', $batiment['Batiment']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Delete Batiment', true), array('action' => 'delete', $batiment['Batiment']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $batiment['Batiment']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Batiments', true), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Batiment', true), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Annees', true), array('controller' => 'annees', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Annee', true), array('controller' => 'annees', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Etablissements', true), array('controller' => 'etablissements', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Etablissement', true), array('controller' => 'etablissements', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Salle Cours', true), array('controller' => 'salle_cours', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Salle Cours', true), array('controller' => 'salle_cours', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php __('Related Salle Cours');?></h3>
	<?php if (!empty($batiment['SalleCours'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('Sal Numero'); ?></th>
		<th><?php __('Sal Nbre Place'); ?></th>
		<th><?php __('Batiment Id'); ?></th>
		<th><?php __('Annee Id'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($batiment['SalleCours'] as $salleCours):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $salleCours['id'];?></td>
			<td><?php echo $salleCours['sal_numero'];?></td>
			<td><?php echo $salleCours['sal_nbre_place'];?></td>
			<td><?php echo $salleCours['batiment_id'];?></td>
			<td><?php echo $salleCours['annee_id'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View', true), array('controller' => 'salle_cours', 'action' => 'view', $salleCours['id'])); ?>
				<?php echo $this->Html->link(__('Edit', true), array('controller' => 'salle_cours', 'action' => 'edit', $salleCours['id'])); ?>
				<?php echo $this->Html->link(__('Delete', true), array('controller' => 'salle_cours', 'action' => 'delete', $salleCours['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $salleCours['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Salle Cours', true), array('controller' => 'salle_cours', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
