<div class="Reservationrestos view">
<h2><?php  __('Reservationresto');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $Reservationresto['Reservationresto']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Name'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $Reservationresto['Reservationresto']['name']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Reservationresto'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $Reservationresto['Reservationresto']['Reservationresto']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Reservationresto'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $this->Html->link($Reservationresto['Reservationresto']['id'], array('controller' => 'Reservationrestos', 'action' => 'view', $Reservationresto['Reservationresto']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Reservationresto', true), array('action' => 'edit', $Reservationresto['Reservationresto']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Delete Reservationresto', true), array('action' => 'delete', $Reservationresto['Reservationresto']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $Reservationresto['Reservationresto']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Reservationrestos', true), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Reservationresto', true), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Reservationrestos', true), array('controller' => 'Reservationrestos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Reservationresto', true), array('controller' => 'Reservationrestos', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php __('Related Reservationrestos');?></h3>
	<?php if (!empty($Reservationresto['Reservationresto'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('name'); ?></th>
		<th><?php __('Reservationresto'); ?></th>
		<th><?php __('Reservationresto Id'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($Reservationresto['Reservationresto'] as $Reservationresto):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $Reservationresto['id'];?></td>
			<td><?php echo $Reservationresto['name'];?></td>
			<td><?php echo $Reservationresto['Reservationresto'];?></td>
			<td><?php echo $Reservationresto['Reservationresto_id'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View', true), array('controller' => 'Reservationrestos', 'action' => 'view', $Reservationresto['id'])); ?>
				<?php echo $this->Html->link(__('Edit', true), array('controller' => 'Reservationrestos', 'action' => 'edit', $Reservationresto['id'])); ?>
				<?php echo $this->Html->link(__('Delete', true), array('controller' => 'Reservationrestos', 'action' => 'delete', $Reservationresto['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $Reservationresto['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Reservationresto', true), array('controller' => 'Reservationrestos', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
