<div class="hotelTypes view">
<h2><?php  __('Hotel Type');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $hotelType['HotelType']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Name'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $hotelType['HotelType']['name']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Hotel Type', true), array('action' => 'edit', $hotelType['HotelType']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Delete Hotel Type', true), array('action' => 'delete', $hotelType['HotelType']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $hotelType['HotelType']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Hotel Types', true), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Hotel Type', true), array('action' => 'add')); ?> </li>
	</ul>
</div>
