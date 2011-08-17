<div class="academies view">
<h2><?php  __('Academie');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $academie['Academie']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Acad Nom'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $academie['Academie']['acad_nom']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Acad Ville'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $academie['Academie']['acad_ville']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Acad Province'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $academie['Academie']['acad_province']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Acad Matricule'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $academie['Academie']['acad_matricule']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Acad Code Acces'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $academie['Academie']['acad_code_acces']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Academie', true), array('action' => 'edit', $academie['Academie']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Delete Academie', true), array('action' => 'delete', $academie['Academie']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $academie['Academie']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Academies', true), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Academie', true), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Etablissements', true), array('controller' => 'etablissements', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Etablissement', true), array('controller' => 'etablissements', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php __('Related Etablissements');?></h3>
	<?php if (!empty($academie['Etablissement'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('Etab Nom'); ?></th>
		<th><?php __('Etab Adresse'); ?></th>
		<th><?php __('Etab Ville'); ?></th>
		<th><?php __('Etab Province'); ?></th>
		<th><?php __('Etab Departement'); ?></th>
		<th><?php __('Etab Fax'); ?></th>
		<th><?php __('Etab Email'); ?></th>
		<th><?php __('Etab Boite Postale'); ?></th>
		<th><?php __('Etab Code Acces'); ?></th>
		<th><?php __('Eta Type'); ?></th>
		<th><?php __('Academie Id'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($academie['Etablissement'] as $etablissement):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $etablissement['id'];?></td>
			<td><?php echo $etablissement['etab_nom'];?></td>
			<td><?php echo $etablissement['etab_adresse'];?></td>
			<td><?php echo $etablissement['etab_ville'];?></td>
			<td><?php echo $etablissement['etab_province'];?></td>
			<td><?php echo $etablissement['etab_departement'];?></td>
			<td><?php echo $etablissement['etab_fax'];?></td>
			<td><?php echo $etablissement['etab_email'];?></td>
			<td><?php echo $etablissement['etab_boite_postale'];?></td>
			<td><?php echo $etablissement['etab_code_acces'];?></td>
			<td><?php echo $etablissement['eta_type'];?></td>
			<td><?php echo $etablissement['academie_id'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View', true), array('controller' => 'etablissements', 'action' => 'view', $etablissement['id'])); ?>
				<?php echo $this->Html->link(__('Edit', true), array('controller' => 'etablissements', 'action' => 'edit', $etablissement['id'])); ?>
				<?php echo $this->Html->link(__('Delete', true), array('controller' => 'etablissements', 'action' => 'delete', $etablissement['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $etablissement['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Etablissement', true), array('controller' => 'etablissements', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
