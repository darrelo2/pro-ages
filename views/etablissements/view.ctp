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
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Academies'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $this->Html->link($etablissement['Academies']['id'], array('controller' => 'academies', 'action' => 'view', $etablissement['Academies']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Academies', true), array('controller' => 'academies', 'action' => 'add')); ?> </li>
	</ul>
</div>
