<div class="eleves view">
<h2><?php  __('Eleve');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $eleve['Eleve']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Elev Matricule'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $eleve['Eleve']['elev_matricule']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Elev Nom'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $eleve['Eleve']['elev_nom']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Elev Prenom'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $eleve['Eleve']['elev_prenom']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Elev Date Naissance'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $eleve['Eleve']['elev_date_naissance']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Elev Lieu Naissance'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $eleve['Eleve']['elev_lieu_naissance']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Elev Adresse1'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $eleve['Eleve']['elev_adresse1']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Elev Adresse2'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $eleve['Eleve']['elev_adresse2']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Elev Telephone Fixe'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $eleve['Eleve']['elev_telephone_fixe']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Elev Portable1'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $eleve['Eleve']['elev_portable1']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Elev Sexe'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $eleve['Eleve']['elev_sexe']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Elev Email'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $eleve['Eleve']['elev_email']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Elev Date Inscription'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $eleve['Eleve']['elev_date_inscription']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Elev Photo'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $eleve['Eleve']['elev_photo']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Classe'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $this->Html->link($eleve['Classe']['id'], array('controller' => 'classes', 'action' => 'view', $eleve['Classe']['id'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Annee'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $this->Html->link($eleve['Annee']['id'], array('controller' => 'annees', 'action' => 'view', $eleve['Annee']['id'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Etablissement'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $this->Html->link($eleve['Etablissement']['id'], array('controller' => 'etablissements', 'action' => 'view', $eleve['Etablissement']['id'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Created'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $eleve['Eleve']['created']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Modified'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $eleve['Eleve']['modified']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Eleve', true), array('action' => 'edit', $eleve['Eleve']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Delete Eleve', true), array('action' => 'delete', $eleve['Eleve']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $eleve['Eleve']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Eleves', true), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Eleve', true), array('action' => 'add')); ?> </li>
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
<div class="related">
	<h3><?php __('Related Absences');?></h3>
	<?php if (!empty($eleve['Absence'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('Abs Date'); ?></th>
		<th><?php __('Abs Date Debut'); ?></th>
		<th><?php __('Abs Date Fin'); ?></th>
		<th><?php __('Abs Motif'); ?></th>
		<th><?php __('Abs Justifie'); ?></th>
		<th><?php __('Annee Id'); ?></th>
		<th><?php __('Etablissement Id'); ?></th>
		<th><?php __('Created'); ?></th>
		<th><?php __('Modified'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($eleve['Absence'] as $absence):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $absence['id'];?></td>
			<td><?php echo $absence['abs_date'];?></td>
			<td><?php echo $absence['abs_date_debut'];?></td>
			<td><?php echo $absence['abs_date_fin'];?></td>
			<td><?php echo $absence['abs_motif'];?></td>
			<td><?php echo $absence['abs_justifie'];?></td>
			<td><?php echo $absence['annee_id'];?></td>
			<td><?php echo $absence['etablissement_id'];?></td>
			<td><?php echo $absence['created'];?></td>
			<td><?php echo $absence['modified'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View', true), array('controller' => 'absences', 'action' => 'view', $absence['id'])); ?>
				<?php echo $this->Html->link(__('Edit', true), array('controller' => 'absences', 'action' => 'edit', $absence['id'])); ?>
				<?php echo $this->Html->link(__('Delete', true), array('controller' => 'absences', 'action' => 'delete', $absence['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $absence['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Absence', true), array('controller' => 'absences', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php __('Related Bulletins');?></h3>
	<?php if (!empty($eleve['Bulletin'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('Bull Année'); ?></th>
		<th><?php __('Bull Periode'); ?></th>
		<th><?php __('Bull Numero'); ?></th>
		<th><?php __('Bulletinscol'); ?></th>
		<th><?php __('Bull Total Points'); ?></th>
		<th><?php __('Bull Moyenne'); ?></th>
		<th><?php __('Annee Id'); ?></th>
		<th><?php __('Created'); ?></th>
		<th><?php __('Modified'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($eleve['Bulletin'] as $bulletin):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $bulletin['id'];?></td>
			<td><?php echo $bulletin['bull_année'];?></td>
			<td><?php echo $bulletin['bull_periode'];?></td>
			<td><?php echo $bulletin['bull_numero'];?></td>
			<td><?php echo $bulletin['bulletinscol'];?></td>
			<td><?php echo $bulletin['bull_total_points'];?></td>
			<td><?php echo $bulletin['bull_moyenne'];?></td>
			<td><?php echo $bulletin['annee_id'];?></td>
			<td><?php echo $bulletin['created'];?></td>
			<td><?php echo $bulletin['modified'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View', true), array('controller' => 'bulletins', 'action' => 'view', $bulletin['id'])); ?>
				<?php echo $this->Html->link(__('Edit', true), array('controller' => 'bulletins', 'action' => 'edit', $bulletin['id'])); ?>
				<?php echo $this->Html->link(__('Delete', true), array('controller' => 'bulletins', 'action' => 'delete', $bulletin['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $bulletin['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Bulletin', true), array('controller' => 'bulletins', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php __('Related Notes');?></h3>
	<?php if (!empty($eleve['Note'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('Note'); ?></th>
		<th><?php __('Annee Id'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($eleve['Note'] as $note):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $note['id'];?></td>
			<td><?php echo $note['note'];?></td>
			<td><?php echo $note['annee_id'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View', true), array('controller' => 'notes', 'action' => 'view', $note['id'])); ?>
				<?php echo $this->Html->link(__('Edit', true), array('controller' => 'notes', 'action' => 'edit', $note['id'])); ?>
				<?php echo $this->Html->link(__('Delete', true), array('controller' => 'notes', 'action' => 'delete', $note['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $note['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Note', true), array('controller' => 'notes', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php __('Related Tuteurs');?></h3>
	<?php if (!empty($eleve['Tuteur'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('Tut Nom'); ?></th>
		<th><?php __('Tut Prenom'); ?></th>
		<th><?php __('Tut Adresse1'); ?></th>
		<th><?php __('Tut Adresse2'); ?></th>
		<th><?php __('Tut Telephone Fixe'); ?></th>
		<th><?php __('Tut Portable1'); ?></th>
		<th><?php __('Tut Telephone Pro'); ?></th>
		<th><?php __('Tut Email'); ?></th>
		<th><?php __('Annee Id'); ?></th>
		<th><?php __('Created'); ?></th>
		<th><?php __('Modified'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($eleve['Tuteur'] as $tuteur):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $tuteur['id'];?></td>
			<td><?php echo $tuteur['tut_nom'];?></td>
			<td><?php echo $tuteur['tut_prenom'];?></td>
			<td><?php echo $tuteur['tut_adresse1'];?></td>
			<td><?php echo $tuteur['tut_adresse2'];?></td>
			<td><?php echo $tuteur['tut_telephone_fixe'];?></td>
			<td><?php echo $tuteur['tut_portable1'];?></td>
			<td><?php echo $tuteur['tut_telephone_pro'];?></td>
			<td><?php echo $tuteur['tut_email'];?></td>
			<td><?php echo $tuteur['annee_id'];?></td>
			<td><?php echo $tuteur['created'];?></td>
			<td><?php echo $tuteur['modified'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View', true), array('controller' => 'tuteurs', 'action' => 'view', $tuteur['id'])); ?>
				<?php echo $this->Html->link(__('Edit', true), array('controller' => 'tuteurs', 'action' => 'edit', $tuteur['id'])); ?>
				<?php echo $this->Html->link(__('Delete', true), array('controller' => 'tuteurs', 'action' => 'delete', $tuteur['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $tuteur['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Tuteur', true), array('controller' => 'tuteurs', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
