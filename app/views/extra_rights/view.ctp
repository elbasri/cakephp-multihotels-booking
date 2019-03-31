<div class="extraRights view">
<h2><?php  __('Extra Right');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $extraRight['ExtraRight']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Eright'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $this->Html->link($extraRight['Eright']['name'], array('controller' => 'erights', 'action' => 'view', $extraRight['Eright']['id'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Extra'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $this->Html->link($extraRight['Extra']['name'], array('controller' => 'extras', 'action' => 'view', $extraRight['Extra']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Extra Right', true), array('action' => 'edit', $extraRight['ExtraRight']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Delete Extra Right', true), array('action' => 'delete', $extraRight['ExtraRight']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $extraRight['ExtraRight']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Extra Rights', true), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Extra Right', true), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Erights', true), array('controller' => 'erights', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Eright', true), array('controller' => 'erights', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Extras', true), array('controller' => 'extras', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Extra', true), array('controller' => 'extras', 'action' => 'add')); ?> </li>
	</ul>
</div>
