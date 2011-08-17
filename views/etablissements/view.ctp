<div class="etablissements view">
<h2><?php  __('Etablissement');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $etablissement['Etablissement']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Etab Nom'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $etablissement['Etablissement']['etab_nom']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Etab Adresse'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $etablissement['Etablissement']['etab_adresse']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Etab Ville'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $etablissement['Etablissement']['etab_ville']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Etab Province'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $etablissement['Etablissement']['etab_province']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Etab Departement'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $etablissement['Etablissement']['etab_departement']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Etab Fax'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $etablissement['Etablissement']['etab_fax']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Etab Email'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $etablissement['Etablissement']['etab_email']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Etab Boite Postale'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $etablissement['Etablissement']['etab_boite_postale']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Etab Code Acces'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $etablissement['Etablissement']['etab_code_acces']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Eta Type'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $etablissement['Etablissement']['eta_type']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Academie'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $this->Html->link($etablissement['Academie']['id'], array('controller' => 'academies', 'action' => 'view', $etablissement['Academie']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Etablissement', true), array('action' => 'edit', $etablissement['Etablissement']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Delete Etablissement', true), array('action' => 'delete', $etablissement['Etablissement']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $etablissement['Etablissement']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Etablissements', true), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Etablissement', true), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Academies', true), array('controller' => 'academies', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Academie', true), array('controller' => 'academies', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Absences', true), array('controller' => 'absences', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Absence', true), array('controller' => 'absences', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Batiments', true), array('controller' => 'batiments', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Batiment', true), array('controller' => 'batiments', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Classes', true), array('controller' => 'classes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Classe', true), array('controller' => 'classes', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Eleves', true), array('controller' => 'eleves', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Eleve', true), array('controller' => 'eleves', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Personnels', true), array('controller' => 'personnels', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Personnel', true), array('controller' => 'personnels', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php __('Related Absences');?></h3>
	<?php if (!empty($etablissement['Absence'])):?>
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
		foreach ($etablissement['Absence'] as $absence):
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
	<h3><?php __('Related Batiments');?></h3>
	<?php if (!empty($etablissement['Batiment'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('Bat Code'); ?></th>
		<th><?php __('Bat Nom'); ?></th>
		<th><?php __('Annee Id'); ?></th>
		<th><?php __('Etablissement Id'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($etablissement['Batiment'] as $batiment):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $batiment['id'];?></td>
			<td><?php echo $batiment['bat_code'];?></td>
			<td><?php echo $batiment['bat_nom'];?></td>
			<td><?php echo $batiment['annee_id'];?></td>
			<td><?php echo $batiment['etablissement_id'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View', true), array('controller' => 'batiments', 'action' => 'view', $batiment['id'])); ?>
				<?php echo $this->Html->link(__('Edit', true), array('controller' => 'batiments', 'action' => 'edit', $batiment['id'])); ?>
				<?php echo $this->Html->link(__('Delete', true), array('controller' => 'batiments', 'action' => 'delete', $batiment['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $batiment['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Batiment', true), array('controller' => 'batiments', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php __('Related Classes');?></h3>
	<?php if (!empty($etablissement['Classe'])):?>
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
		foreach ($etablissement['Classe'] as $classe):
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
<div class="related">
	<h3><?php __('Related Eleves');?></h3>
	<?php if (!empty($etablissement['Eleve'])):?>
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
		foreach ($etablissement['Eleve'] as $eleve):
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
<div class="related">
	<h3><?php __('Related Personnels');?></h3>
	<?php if (!empty($etablissement['Personnel'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('Pers Matricule'); ?></th>
		<th><?php __('Pers Nom'); ?></th>
		<th><?php __('Pers Prenom'); ?></th>
		<th><?php __('Pers Date Naissance'); ?></th>
		<th><?php __('Pers Lieu Naissance'); ?></th>
		<th><?php __('Pers Adresse1'); ?></th>
		<th><?php __('Pers Adresse2'); ?></th>
		<th><?php __('Pers Telephone Fixe'); ?></th>
		<th><?php __('Pers Portable1'); ?></th>
		<th><?php __('Pers Portable2'); ?></th>
		<th><?php __('Pers Telephone Pro'); ?></th>
		<th><?php __('Pers Sexe'); ?></th>
		<th><?php __('Pers Email'); ?></th>
		<th><?php __('Pers Photo'); ?></th>
		<th><?php __('Annee Id'); ?></th>
		<th><?php __('Etablissement Id'); ?></th>
		<th><?php __('Created'); ?></th>
		<th><?php __('Modified'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($etablissement['Personnel'] as $personnel):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $personnel['id'];?></td>
			<td><?php echo $personnel['pers_matricule'];?></td>
			<td><?php echo $personnel['pers_nom'];?></td>
			<td><?php echo $personnel['pers_prenom'];?></td>
			<td><?php echo $personnel['pers_date_naissance'];?></td>
			<td><?php echo $personnel['pers_lieu_naissance'];?></td>
			<td><?php echo $personnel['pers_adresse1'];?></td>
			<td><?php echo $personnel['pers_adresse2'];?></td>
			<td><?php echo $personnel['pers_telephone_fixe'];?></td>
			<td><?php echo $personnel['pers_portable1'];?></td>
			<td><?php echo $personnel['pers_portable2'];?></td>
			<td><?php echo $personnel['pers_telephone_pro'];?></td>
			<td><?php echo $personnel['pers_sexe'];?></td>
			<td><?php echo $personnel['pers_email'];?></td>
			<td><?php echo $personnel['pers_photo'];?></td>
			<td><?php echo $personnel['annee_id'];?></td>
			<td><?php echo $personnel['etablissement_id'];?></td>
			<td><?php echo $personnel['created'];?></td>
			<td><?php echo $personnel['modified'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View', true), array('controller' => 'personnels', 'action' => 'view', $personnel['id'])); ?>
				<?php echo $this->Html->link(__('Edit', true), array('controller' => 'personnels', 'action' => 'edit', $personnel['id'])); ?>
				<?php echo $this->Html->link(__('Delete', true), array('controller' => 'personnels', 'action' => 'delete', $personnel['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $personnel['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Personnel', true), array('controller' => 'personnels', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
