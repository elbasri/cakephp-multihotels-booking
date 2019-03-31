<div class="banners view">
<h2><?php  __('Banner');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $banner['Banner']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Content'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $banner['Banner']['content']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Action'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $banner['Banner']['action']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Banner', true), array('action' => 'edit', $banner['Banner']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Delete Banner', true), array('action' => 'delete', $banner['Banner']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $banner['Banner']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Banners', true), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Banner', true), array('action' => 'add')); ?> </li>
	</ul>
</div>
