<div class="classes view">
<h2><?php  __('Classe');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $classe['Classe']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Clas Nom'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $classe['Classe']['clas_nom']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Clas Code'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $classe['Classe']['clas_code']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Annee'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $this->Html->link($classe['Annee']['id'], array('controller' => 'annees', 'action' => 'view', $classe['Annee']['id'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Etablissement'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $this->Html->link($classe['Etablissement']['id'], array('controller' => 'etablissements', 'action' => 'view', $classe['Etablissement']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Classe', true), array('action' => 'edit', $classe['Classe']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Delete Classe', true), array('action' => 'delete', $classe['Classe']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $classe['Classe']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Classes', true), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Classe', true), array('action' => 'add')); ?> </li>
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
<div class="related">
	<h3><?php __('Related Eleves');?></h3>
	<?php if (!empty($classe['Eleve'])):?>
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
		foreach ($classe['Eleve'] as $eleve):
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
	<?php if (!empty($classe['Matiere'])):?>
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
		foreach ($classe['Matiere'] as $matiere):
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
	<?php if (!empty($classe['Note'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('Note'); ?></th>
		<th><?php __('Annee Id'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($classe['Note'] as $note):
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
	<?php if (!empty($classe['Personnel'])):?>
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
		foreach ($classe['Personnel'] as $personnel):
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
	<h3><?php __('Related Salle Cours');?></h3>
	<?php if (!empty($classe['SalleCours'])):?>
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
		foreach ($classe['SalleCours'] as $salleCours):
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
