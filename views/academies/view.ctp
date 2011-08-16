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
	</ul>
</div>
