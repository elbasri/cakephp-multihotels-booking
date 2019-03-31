<div class="hotelPhotos view">
<h2><?php  __('Hotel Photo');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $hotelPhoto['HotelPhoto']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Hotel'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $this->Html->link($hotelPhoto['Hotel']['name'], array('controller' => 'hotels', 'action' => 'view', $hotelPhoto['Hotel']['id'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Chambre'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $this->Html->link($hotelPhoto['Chambre']['name'], array('controller' => 'chambres', 'action' => 'view', $hotelPhoto['Chambre']['id'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Photo'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $hotelPhoto['HotelPhoto']['photo']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Thumb'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $hotelPhoto['HotelPhoto']['thumb']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Hotel Photo', true), array('action' => 'edit', $hotelPhoto['HotelPhoto']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Delete Hotel Photo', true), array('action' => 'delete', $hotelPhoto['HotelPhoto']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $hotelPhoto['HotelPhoto']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Hotel Photos', true), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Hotel Photo', true), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Hotels', true), array('controller' => 'hotels', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Hotel', true), array('controller' => 'hotels', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Chambres', true), array('controller' => 'chambres', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Chambre', true), array('controller' => 'chambres', 'action' => 'add')); ?> </li>
	</ul>
</div>
