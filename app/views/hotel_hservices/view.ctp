<div class="hotelHservices view">
<h2><?php  __('Hotel Hservice');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $hotelHservice['HotelHservice']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Hotel'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $this->Html->link($hotelHservice['Hotel']['name'], array('controller' => 'hotels', 'action' => 'view', $hotelHservice['Hotel']['id'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Hservice'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $this->Html->link($hotelHservice['Hservice']['name'], array('controller' => 'hservices', 'action' => 'view', $hotelHservice['Hservice']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Hotel Hservice', true), array('action' => 'edit', $hotelHservice['HotelHservice']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Delete Hotel Hservice', true), array('action' => 'delete', $hotelHservice['HotelHservice']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $hotelHservice['HotelHservice']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Hotel Hservices', true), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Hotel Hservice', true), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Hotels', true), array('controller' => 'hotels', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Hotel', true), array('controller' => 'hotels', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Hservices', true), array('controller' => 'hservices', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Hservice', true), array('controller' => 'hservices', 'action' => 'add')); ?> </li>
	</ul>
</div>
