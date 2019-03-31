<div class="hotelExtras view">
<h2><?php  __('Hotel Extra');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $hotelExtra['HotelExtra']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Hotel'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $this->Html->link($hotelExtra['Hotel']['name'], array('controller' => 'hotels', 'action' => 'view', $hotelExtra['Hotel']['id'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Extra'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $this->Html->link($hotelExtra['Extra']['name'], array('controller' => 'extras', 'action' => 'view', $hotelExtra['Extra']['id'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Val'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $hotelExtra['HotelExtra']['val']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Eleft'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $this->Html->link($hotelExtra['Eleft']['name'], array('controller' => 'elefts', 'action' => 'view', $hotelExtra['Eleft']['id'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Eright'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $this->Html->link($hotelExtra['Eright']['name'], array('controller' => 'erights', 'action' => 'view', $hotelExtra['Eright']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Hotel Extra', true), array('action' => 'edit', $hotelExtra['HotelExtra']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Delete Hotel Extra', true), array('action' => 'delete', $hotelExtra['HotelExtra']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $hotelExtra['HotelExtra']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Hotel Extras', true), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Hotel Extra', true), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Hotels', true), array('controller' => 'hotels', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Hotel', true), array('controller' => 'hotels', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Extras', true), array('controller' => 'extras', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Extra', true), array('controller' => 'extras', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Elefts', true), array('controller' => 'elefts', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Eleft', true), array('controller' => 'elefts', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Erights', true), array('controller' => 'erights', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Eright', true), array('controller' => 'erights', 'action' => 'add')); ?> </li>
	</ul>
</div>
