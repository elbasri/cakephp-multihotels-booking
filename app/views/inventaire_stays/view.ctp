<div class="inventaireStays view">
<h2><?php  __('Inventaire Stay');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $inventaireStay['InventaireStay']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Hotel'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $this->Html->link($inventaireStay['Hotel']['name'], array('controller' => 'hotels', 'action' => 'view', $inventaireStay['Hotel']['id'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Chambre'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $this->Html->link($inventaireStay['Chambre']['name'], array('controller' => 'chambres', 'action' => 'view', $inventaireStay['Chambre']['id'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Inventaire'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $this->Html->link($inventaireStay['Inventaire']['id'], array('controller' => 'inventaires', 'action' => 'view', $inventaireStay['Inventaire']['id'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Minimum'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $inventaireStay['InventaireStay']['minimum']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Jour'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $inventaireStay['InventaireStay']['jour']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Inventaire Stay', true), array('action' => 'edit', $inventaireStay['InventaireStay']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Delete Inventaire Stay', true), array('action' => 'delete', $inventaireStay['InventaireStay']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $inventaireStay['InventaireStay']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Inventaire Stays', true), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Inventaire Stay', true), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Hotels', true), array('controller' => 'hotels', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Hotel', true), array('controller' => 'hotels', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Chambres', true), array('controller' => 'chambres', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Chambre', true), array('controller' => 'chambres', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Inventaires', true), array('controller' => 'inventaires', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Inventaire', true), array('controller' => 'inventaires', 'action' => 'add')); ?> </li>
	</ul>
</div>
