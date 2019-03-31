<div class="extraLefts view">
<h2><?php  __('Extra Left');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $extraLeft['ExtraLeft']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Elefts'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $this->Html->link($extraLeft['Elefts']['name'], array('controller' => 'elefts', 'action' => 'view', $extraLeft['Elefts']['id'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Extra'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $this->Html->link($extraLeft['Extra']['name'], array('controller' => 'extras', 'action' => 'view', $extraLeft['Extra']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Extra Left', true), array('action' => 'edit', $extraLeft['ExtraLeft']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Delete Extra Left', true), array('action' => 'delete', $extraLeft['ExtraLeft']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $extraLeft['ExtraLeft']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Extra Lefts', true), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Extra Left', true), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Elefts', true), array('controller' => 'elefts', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Elefts', true), array('controller' => 'elefts', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Extras', true), array('controller' => 'extras', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Extra', true), array('controller' => 'extras', 'action' => 'add')); ?> </li>
	</ul>
</div>
