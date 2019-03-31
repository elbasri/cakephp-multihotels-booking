<div class="hotelCarteCredits view">
<h2><?php  __('Hotel Carte Credit');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $hotelCarteCredit['HotelCarteCredit']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Hotel'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $this->Html->link($hotelCarteCredit['Hotel']['name'], array('controller' => 'hotels', 'action' => 'view', $hotelCarteCredit['Hotel']['id'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Carte Credit'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $this->Html->link($hotelCarteCredit['CarteCredit']['name'], array('controller' => 'carte_credits', 'action' => 'view', $hotelCarteCredit['CarteCredit']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Hotel Carte Credit', true), array('action' => 'edit', $hotelCarteCredit['HotelCarteCredit']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Delete Hotel Carte Credit', true), array('action' => 'delete', $hotelCarteCredit['HotelCarteCredit']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $hotelCarteCredit['HotelCarteCredit']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Hotel Carte Credits', true), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Hotel Carte Credit', true), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Hotels', true), array('controller' => 'hotels', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Hotel', true), array('controller' => 'hotels', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Carte Credits', true), array('controller' => 'carte_credits', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Carte Credit', true), array('controller' => 'carte_credits', 'action' => 'add')); ?> </li>
	</ul>
</div>
