<div class="bulletins view">
<h2><?php  __('Bulletin');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $bulletin['Bulletin']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Bull Année'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $bulletin['Bulletin']['bull_année']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Bull Periode'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $bulletin['Bulletin']['bull_periode']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Bull Numero'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $bulletin['Bulletin']['bull_numero']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Bulletinscol'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $bulletin['Bulletin']['bulletinscol']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Bull Total Points'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $bulletin['Bulletin']['bull_total_points']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Bull Moyenne'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $bulletin['Bulletin']['bull_moyenne']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Annee'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $this->Html->link($bulletin['Annee']['id'], array('controller' => 'annees', 'action' => 'view', $bulletin['Annee']['id'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Created'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $bulletin['Bulletin']['created']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Modified'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $bulletin['Bulletin']['modified']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Bulletin', true), array('action' => 'edit', $bulletin['Bulletin']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Delete Bulletin', true), array('action' => 'delete', $bulletin['Bulletin']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $bulletin['Bulletin']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Bulletins', true), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Bulletin', true), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Annees', true), array('controller' => 'annees', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Annee', true), array('controller' => 'annees', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Eleves', true), array('controller' => 'eleves', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Eleve', true), array('controller' => 'eleves', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php __('Related Eleves');?></h3>
	<?php if (!empty($bulletin['Eleve'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('Elev Matricule'); ?></th>
		<th><?php __('Elev Nom'); ?></th>
		<th><?php __('Elev Prenom'); ?></th>
		<th><?php __('Elev Date Naissance'); ?></th>
		<th><?php __('Elev Lieu Naissance'); ?></th>
		<th><?php __('Elev Adresse1'); ?></th>
		<th><?php __('Elev Adresse2'); ?></th>
		<th><?php __('Elev Telephone Fixe'); ?></th>
		<th><?php __('Elev Portable1'); ?></th>
		<th><?php __('Elev Sexe'); ?></th>
		<th><?php __('Elev Email'); ?></th>
		<th><?php __('Elev Date Inscription'); ?></th>
		<th><?php __('Elev Photo'); ?></th>
		<th><?php __('Classe Id'); ?></th>
		<th><?php __('Annee Id'); ?></th>
		<th><?php __('Etablissement Id'); ?></th>
		<th><?php __('Created'); ?></th>
		<th><?php __('Modified'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($bulletin['Eleve'] as $eleve):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $eleve['id'];?></td>
			<td><?php echo $eleve['elev_matricule'];?></td>
			<td><?php echo $eleve['elev_nom'];?></td>
			<td><?php echo $eleve['elev_prenom'];?></td>
			<td><?php echo $eleve['elev_date_naissance'];?></td>
			<td><?php echo $eleve['elev_lieu_naissance'];?></td>
			<td><?php echo $eleve['elev_adresse1'];?></td>
			<td><?php echo $eleve['elev_adresse2'];?></td>
			<td><?php echo $eleve['elev_telephone_fixe'];?></td>
			<td><?php echo $eleve['elev_portable1'];?></td>
			<td><?php echo $eleve['elev_sexe'];?></td>
			<td><?php echo $eleve['elev_email'];?></td>
			<td><?php echo $eleve['elev_date_inscription'];?></td>
			<td><?php echo $eleve['elev_photo'];?></td>
			<td><?php echo $eleve['classe_id'];?></td>
			<td><?php echo $eleve['annee_id'];?></td>
			<td><?php echo $eleve['etablissement_id'];?></td>
			<td><?php echo $eleve['created'];?></td>
			<td><?php echo $eleve['modified'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View', true), array('controller' => 'eleves', 'action' => 'view', $eleve['id'])); ?>
				<?php echo $this->Html->link(__('Edit', true), array('controller' => 'eleves', 'action' => 'edit', $eleve['id'])); ?>
				<?php echo $this->Html->link(__('Delete', true), array('controller' => 'eleves', 'action' => 'delete', $eleve['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $eleve['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Eleve', true), array('controller' => 'eleves', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
