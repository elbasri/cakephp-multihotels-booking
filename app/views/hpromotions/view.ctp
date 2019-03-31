<div class="featureds view">
<h2><?php  __('Featured');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $featured['Featured']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Hotel'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $this->Html->link($featured['Hotel']['name'], array('controller' => 'hotels', 'action' => 'view', $featured['Hotel']['id'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Order'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $featured['Featured']['order']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Featured', true), array('action' => 'edit', $featured['Featured']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Delete Featured', true), array('action' => 'delete', $featured['Featured']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $featured['Featured']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Featureds', true), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Featured', true), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Hotels', true), array('controller' => 'hotels', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Hotel', true), array('controller' => 'hotels', 'action' => 'add')); ?> </li>
	</ul>
</div>
