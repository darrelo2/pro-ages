<div class="personnels view">
<h2><?php  __('Personnel');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $personnel['Personnel']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Pers Matricule'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $personnel['Personnel']['pers_matricule']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Pers Nom'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $personnel['Personnel']['pers_nom']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Pers Prenom'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $personnel['Personnel']['pers_prenom']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Pers Date Naissance'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $personnel['Personnel']['pers_date_naissance']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Pers Lieu Naissance'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $personnel['Personnel']['pers_lieu_naissance']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Pers Adresse1'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $personnel['Personnel']['pers_adresse1']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Pers Adresse2'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $personnel['Personnel']['pers_adresse2']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Pers Telephone Fixe'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $personnel['Personnel']['pers_telephone_fixe']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Pers Portable1'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $personnel['Personnel']['pers_portable1']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Pers Portable2'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $personnel['Personnel']['pers_portable2']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Pers Telephone Pro'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $personnel['Personnel']['pers_telephone_pro']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Pers Sexe'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $personnel['Personnel']['pers_sexe']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Pers Email'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $personnel['Personnel']['pers_email']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Pers Photo'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $personnel['Personnel']['pers_photo']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Annee'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $this->Html->link($personnel['Annee']['id'], array('controller' => 'annees', 'action' => 'view', $personnel['Annee']['id'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Etablissement'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $this->Html->link($personnel['Etablissement']['id'], array('controller' => 'etablissements', 'action' => 'view', $personnel['Etablissement']['id'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Created'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $personnel['Personnel']['created']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Modified'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $personnel['Personnel']['modified']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Personnel', true), array('action' => 'edit', $personnel['Personnel']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Delete Personnel', true), array('action' => 'delete', $personnel['Personnel']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $personnel['Personnel']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Personnels', true), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Personnel', true), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Annees', true), array('controller' => 'annees', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Annee', true), array('controller' => 'annees', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Etablissements', true), array('controller' => 'etablissements', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Etablissement', true), array('controller' => 'etablissements', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Utilisateurs', true), array('controller' => 'utilisateurs', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Utilisateur', true), array('controller' => 'utilisateurs', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Absences', true), array('controller' => 'absences', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Absence', true), array('controller' => 'absences', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Classes', true), array('controller' => 'classes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Classe', true), array('controller' => 'classes', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Notes', true), array('controller' => 'notes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Note', true), array('controller' => 'notes', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Postes', true), array('controller' => 'postes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Poste', true), array('controller' => 'postes', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php __('Related Utilisateurs');?></h3>
	<?php if (!empty($personnel['Utilisateur'])):?>
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
		foreach ($personnel['Utilisateur'] as $utilisateur):
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
<div class="related">
	<h3><?php __('Related Absences');?></h3>
	<?php if (!empty($personnel['Absence'])):?>
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
		foreach ($personnel['Absence'] as $absence):
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
	<h3><?php __('Related Classes');?></h3>
	<?php if (!empty($personnel['Classe'])):?>
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
		foreach ($personnel['Classe'] as $classe):
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
	<h3><?php __('Related Notes');?></h3>
	<?php if (!empty($personnel['Note'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('Note'); ?></th>
		<th><?php __('Annee Id'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($personnel['Note'] as $note):
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
	<h3><?php __('Related Postes');?></h3>
	<?php if (!empty($personnel['Poste'])):?>
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
		foreach ($personnel['Poste'] as $poste):
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
