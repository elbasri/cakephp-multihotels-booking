<div class="chambreCservices view">
<h2><?php  __('Chambre Cservice');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $chambreCservice['ChambreCservice']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Cservice'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $this->Html->link($chambreCservice['Cservice']['name'], array('controller' => 'cservices', 'action' => 'view', $chambreCservice['Cservice']['id'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Chambre'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $this->Html->link($chambreCservice['Chambre']['name'], array('controller' => 'chambres', 'action' => 'view', $chambreCservice['Chambre']['id'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Hotel'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $this->Html->link($chambreCservice['Hotel']['name'], array('controller' => 'hotels', 'action' => 'view', $chambreCservice['Hotel']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Chambre Cservice', true), array('action' => 'edit', $chambreCservice['ChambreCservice']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Delete Chambre Cservice', true), array('action' => 'delete', $chambreCservice['ChambreCservice']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $chambreCservice['ChambreCservice']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Chambre Cservices', true), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Chambre Cservice', true), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Cservices', true), array('controller' => 'cservices', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Cservice', true), array('controller' => 'cservices', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Chambres', true), array('controller' => 'chambres', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Chambre', true), array('controller' => 'chambres', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Hotels', true), array('controller' => 'hotels', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Hotel', true), array('controller' => 'hotels', 'action' => 'add')); ?> </li>
	</ul>
</div>
