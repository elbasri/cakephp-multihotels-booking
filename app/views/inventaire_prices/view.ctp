<div class="inventairePrices view">
<h2><?php  __('Inventaire Price');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $inventairePrice['InventairePrice']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Hotel'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $this->Html->link($inventairePrice['Hotel']['name'], array('controller' => 'hotels', 'action' => 'view', $inventairePrice['Hotel']['id'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Chambre'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $this->Html->link($inventairePrice['Chambre']['name'], array('controller' => 'chambres', 'action' => 'view', $inventairePrice['Chambre']['id'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Inventaire'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $this->Html->link($inventairePrice['Inventaire']['id'], array('controller' => 'inventaires', 'action' => 'view', $inventairePrice['Inventaire']['id'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Prix'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $inventairePrice['InventairePrice']['prix']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Jour'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $inventairePrice['InventairePrice']['jour']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Inventaire Price', true), array('action' => 'edit', $inventairePrice['InventairePrice']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Delete Inventaire Price', true), array('action' => 'delete', $inventairePrice['InventairePrice']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $inventairePrice['InventairePrice']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Inventaire Prices', true), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Inventaire Price', true), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Hotels', true), array('controller' => 'hotels', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Hotel', true), array('controller' => 'hotels', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Chambres', true), array('controller' => 'chambres', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Chambre', true), array('controller' => 'chambres', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Inventaires', true), array('controller' => 'inventaires', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Inventaire', true), array('controller' => 'inventaires', 'action' => 'add')); ?> </li>
	</ul>
</div>
