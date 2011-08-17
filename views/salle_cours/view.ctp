<div class="salleCours view">
<h2><?php  __('Salle Cours');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $salleCours['SalleCours']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Sal Numero'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $salleCours['SalleCours']['sal_numero']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Sal Nbre Place'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $salleCours['SalleCours']['sal_nbre_place']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Batiment'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $this->Html->link($salleCours['Batiment']['id'], array('controller' => 'batiments', 'action' => 'view', $salleCours['Batiment']['id'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Annee'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $this->Html->link($salleCours['Annee']['id'], array('controller' => 'annees', 'action' => 'view', $salleCours['Annee']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Salle Cours', true), array('action' => 'edit', $salleCours['SalleCours']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Delete Salle Cours', true), array('action' => 'delete', $salleCours['SalleCours']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $salleCours['SalleCours']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Salle Cours', true), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Salle Cours', true), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Batiments', true), array('controller' => 'batiments', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Batiment', true), array('controller' => 'batiments', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Annees', true), array('controller' => 'annees', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Annee', true), array('controller' => 'annees', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Classes', true), array('controller' => 'classes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Classe', true), array('controller' => 'classes', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php __('Related Classes');?></h3>
	<?php if (!empty($salleCours['Classe'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('Clas Nom'); ?></th>
		<th><?php __('Clas Code'); ?></th>
		<th><?php __('Annee Id'); ?></th>
		<th><?php __('Etablissement Id'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($salleCours['Classe'] as $classe):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $classe['id'];?></td>
			<td><?php echo $classe['clas_nom'];?></td>
			<td><?php echo $classe['clas_code'];?></td>
			<td><?php echo $classe['annee_id'];?></td>
			<td><?php echo $classe['etablissement_id'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View', true), array('controller' => 'classes', 'action' => 'view', $classe['id'])); ?>
				<?php echo $this->Html->link(__('Edit', true), array('controller' => 'classes', 'action' => 'edit', $classe['id'])); ?>
				<?php echo $this->Html->link(__('Delete', true), array('controller' => 'classes', 'action' => 'delete', $classe['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $classe['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Classe', true), array('controller' => 'classes', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
