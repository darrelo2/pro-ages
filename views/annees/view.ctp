<div class="annees view">
<h2><?php  __('Annee');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $annee['Annee']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Annees Debut'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $annee['Annee']['annees_debut']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Annees Fin'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $annee['Annee']['annees_fin']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Annees Verrouillage'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $annee['Annee']['annees_verrouillage']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Annee', true), array('action' => 'edit', $annee['Annee']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Delete Annee', true), array('action' => 'delete', $annee['Annee']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $annee['Annee']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Annees', true), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Annee', true), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Absences', true), array('controller' => 'absences', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Absence', true), array('controller' => 'absences', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Batiments', true), array('controller' => 'batiments', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Batiment', true), array('controller' => 'batiments', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Bulletins', true), array('controller' => 'bulletins', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Bulletin', true), array('controller' => 'bulletins', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Classes', true), array('controller' => 'classes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Classe', true), array('controller' => 'classes', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Eleves', true), array('controller' => 'eleves', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Eleve', true), array('controller' => 'eleves', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Matieres', true), array('controller' => 'matieres', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Matiere', true), array('controller' => 'matieres', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Notes', true), array('controller' => 'notes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Note', true), array('controller' => 'notes', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Personnels', true), array('controller' => 'personnels', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Personnel', true), array('controller' => 'personnels', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Postes', true), array('controller' => 'postes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Poste', true), array('controller' => 'postes', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Salle Cours', true), array('controller' => 'salle_cours', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Salle Cours', true), array('controller' => 'salle_cours', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Tuteurs', true), array('controller' => 'tuteurs', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Tuteur', true), array('controller' => 'tuteurs', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Utilisateurs', true), array('controller' => 'utilisateurs', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Utilisateur', true), array('controller' => 'utilisateurs', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php __('Related Absences');?></h3>
	<?php if (!empty($annee['Absence'])):?>
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
		foreach ($annee['Absence'] as $absence):
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
	<?php if (!empty($annee['Batiment'])):?>
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
		foreach ($annee['Batiment'] as $batiment):
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
	<h3><?php __('Related Bulletins');?></h3>
	<?php if (!empty($annee['Bulletin'])):?>
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
		foreach ($annee['Bulletin'] as $bulletin):
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
	<h3><?php __('Related Classes');?></h3>
	<?php if (!empty($annee['Classe'])):?>
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
		foreach ($annee['Classe'] as $classe):
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
	<?php if (!empty($annee['Eleve'])):?>
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
		foreach ($annee['Eleve'] as $eleve):
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
	<h3><?php __('Related Matieres');?></h3>
	<?php if (!empty($annee['Matiere'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('Mat Nom'); ?></th>
		<th><?php __('Mat Coef'); ?></th>
		<th><?php __('Mat Ordre'); ?></th>
		<th><?php __('Mat Code'); ?></th>
		<th><?php __('Annee Id'); ?></th>
		<th><?php __('Created'); ?></th>
		<th><?php __('Modified'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($annee['Matiere'] as $matiere):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $matiere['id'];?></td>
			<td><?php echo $matiere['mat_nom'];?></td>
			<td><?php echo $matiere['mat_coef'];?></td>
			<td><?php echo $matiere['mat_ordre'];?></td>
			<td><?php echo $matiere['mat_code'];?></td>
			<td><?php echo $matiere['annee_id'];?></td>
			<td><?php echo $matiere['created'];?></td>
			<td><?php echo $matiere['modified'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View', true), array('controller' => 'matieres', 'action' => 'view', $matiere['id'])); ?>
				<?php echo $this->Html->link(__('Edit', true), array('controller' => 'matieres', 'action' => 'edit', $matiere['id'])); ?>
				<?php echo $this->Html->link(__('Delete', true), array('controller' => 'matieres', 'action' => 'delete', $matiere['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $matiere['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Matiere', true), array('controller' => 'matieres', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php __('Related Notes');?></h3>
	<?php if (!empty($annee['Note'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('Note'); ?></th>
		<th><?php __('Annee Id'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($annee['Note'] as $note):
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
	<h3><?php __('Related Personnels');?></h3>
	<?php if (!empty($annee['Personnel'])):?>
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
		foreach ($annee['Personnel'] as $personnel):
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
<div class="related">
	<h3><?php __('Related Postes');?></h3>
	<?php if (!empty($annee['Poste'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('Post Nom'); ?></th>
		<th><?php __('Post Type'); ?></th>
		<th><?php __('Annee Id'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($annee['Poste'] as $poste):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $poste['id'];?></td>
			<td><?php echo $poste['post_nom'];?></td>
			<td><?php echo $poste['post_type'];?></td>
			<td><?php echo $poste['annee_id'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View', true), array('controller' => 'postes', 'action' => 'view', $poste['id'])); ?>
				<?php echo $this->Html->link(__('Edit', true), array('controller' => 'postes', 'action' => 'edit', $poste['id'])); ?>
				<?php echo $this->Html->link(__('Delete', true), array('controller' => 'postes', 'action' => 'delete', $poste['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $poste['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Poste', true), array('controller' => 'postes', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php __('Related Salle Cours');?></h3>
	<?php if (!empty($annee['SalleCours'])):?>
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
		foreach ($annee['SalleCours'] as $salleCours):
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
<div class="related">
	<h3><?php __('Related Tuteurs');?></h3>
	<?php if (!empty($annee['Tuteur'])):?>
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
		foreach ($annee['Tuteur'] as $tuteur):
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
<div class="related">
	<h3><?php __('Related Utilisateurs');?></h3>
	<?php if (!empty($annee['Utilisateur'])):?>
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
		foreach ($annee['Utilisateur'] as $utilisateur):
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
