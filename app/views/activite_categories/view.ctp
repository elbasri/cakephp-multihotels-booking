<div class="activiteCategories view">
<h2><?php  __('Activite Category');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $activiteCategory['ActiviteCategory']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Titre'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $activiteCategory['ActiviteCategory']['titre']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Titreeng'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $activiteCategory['ActiviteCategory']['titreeng']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Titreesp'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $activiteCategory['ActiviteCategory']['titreesp']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Activite Category', true), array('action' => 'edit', $activiteCategory['ActiviteCategory']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Delete Activite Category', true), array('action' => 'delete', $activiteCategory['ActiviteCategory']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $activiteCategory['ActiviteCategory']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Activite Categories', true), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Activite Category', true), array('action' => 'add')); ?> </li>
	</ul>
</div>
