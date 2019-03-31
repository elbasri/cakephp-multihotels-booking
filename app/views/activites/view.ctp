<div class="activites view">
<h2><?php  __('Activite');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $activite['Activite']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Titre'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $activite['Activite']['titre']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Content'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $activite['Activite']['content']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Activite Category'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $this->Html->link($activite['ActiviteCategory']['titre'], array('controller' => 'activite_categories', 'action' => 'view', $activite['ActiviteCategory']['id'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Titreeng'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $activite['Activite']['titreeng']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Titreesp'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $activite['Activite']['titreesp']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Contenteng'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $activite['Activite']['contenteng']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Contentesp'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $activite['Activite']['contentesp']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Activite', true), array('action' => 'edit', $activite['Activite']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Delete Activite', true), array('action' => 'delete', $activite['Activite']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $activite['Activite']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Activites', true), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Activite', true), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Activite Categories', true), array('controller' => 'activite_categories', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Activite Category', true), array('controller' => 'activite_categories', 'action' => 'add')); ?> </li>
	</ul>
</div>
