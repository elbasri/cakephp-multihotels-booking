<div class="inventaireDisponibilites view">
<h2><?php  __('Inventaire Disponibilite');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $inventaireDisponibilite['InventaireDisponibilite']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Hotel'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $this->Html->link($inventaireDisponibilite['Hotel']['name'], array('controller' => 'hotels', 'action' => 'view', $inventaireDisponibilite['Hotel']['id'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Chambre'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $this->Html->link($inventaireDisponibilite['Chambre']['name'], array('controller' => 'chambres', 'action' => 'view', $inventaireDisponibilite['Chambre']['id'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Inventaire'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $this->Html->link($inventaireDisponibilite['Inventaire']['id'], array('controller' => 'inventaires', 'action' => 'view', $inventaireDisponibilite['Inventaire']['id'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Disponibilte'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $inventaireDisponibilite['InventaireDisponibilite']['disponibilte']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Etat'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $inventaireDisponibilite['InventaireDisponibilite']['etat']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Jour'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $inventaireDisponibilite['InventaireDisponibilite']['jour']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Inventaire Disponibilite', true), array('action' => 'edit', $inventaireDisponibilite['InventaireDisponibilite']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Delete Inventaire Disponibilite', true), array('action' => 'delete', $inventaireDisponibilite['InventaireDisponibilite']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $inventaireDisponibilite['InventaireDisponibilite']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Inventaire Disponibilites', true), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Inventaire Disponibilite', true), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Hotels', true), array('controller' => 'hotels', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Hotel', true), array('controller' => 'hotels', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Chambres', true), array('controller' => 'chambres', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Chambre', true), array('controller' => 'chambres', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Inventaires', true), array('controller' => 'inventaires', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Inventaire', true), array('controller' => 'inventaires', 'action' => 'add')); ?> </li>
	</ul>
</div>
