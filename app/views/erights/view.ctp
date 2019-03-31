<div class="erights view">
<h2><?php  __('Eright');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $eright['Eright']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Name'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $eright['Eright']['name']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Eright', true), array('action' => 'edit', $eright['Eright']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Delete Eright', true), array('action' => 'delete', $eright['Eright']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $eright['Eright']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Erights', true), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Eright', true), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Extra Rights', true), array('controller' => 'extra_rights', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Extra Right', true), array('controller' => 'extra_rights', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Hotel Extras', true), array('controller' => 'hotel_extras', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Hotel Extra', true), array('controller' => 'hotel_extras', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php __('Related Extra Rights');?></h3>
	<?php if (!empty($eright['ExtraRight'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('Eright Id'); ?></th>
		<th><?php __('Extra Id'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($eright['ExtraRight'] as $extraRight):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $extraRight['id'];?></td>
			<td><?php echo $extraRight['eright_id'];?></td>
			<td><?php echo $extraRight['extra_id'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View', true), array('controller' => 'extra_rights', 'action' => 'view', $extraRight['id'])); ?>
				<?php echo $this->Html->link(__('Edit', true), array('controller' => 'extra_rights', 'action' => 'edit', $extraRight['id'])); ?>
				<?php echo $this->Html->link(__('Delete', true), array('controller' => 'extra_rights', 'action' => 'delete', $extraRight['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $extraRight['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Extra Right', true), array('controller' => 'extra_rights', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php __('Related Hotel Extras');?></h3>
	<?php if (!empty($eright['HotelExtra'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('Hotel Id'); ?></th>
		<th><?php __('Extra Id'); ?></th>
		<th><?php __('Val'); ?></th>
		<th><?php __('Eleft Id'); ?></th>
		<th><?php __('Eright Id'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($eright['HotelExtra'] as $hotelExtra):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $hotelExtra['id'];?></td>
			<td><?php echo $hotelExtra['hotel_id'];?></td>
			<td><?php echo $hotelExtra['extra_id'];?></td>
			<td><?php echo $hotelExtra['val'];?></td>
			<td><?php echo $hotelExtra['eleft_id'];?></td>
			<td><?php echo $hotelExtra['eright_id'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View', true), array('controller' => 'hotel_extras', 'action' => 'view', $hotelExtra['id'])); ?>
				<?php echo $this->Html->link(__('Edit', true), array('controller' => 'hotel_extras', 'action' => 'edit', $hotelExtra['id'])); ?>
				<?php echo $this->Html->link(__('Delete', true), array('controller' => 'hotel_extras', 'action' => 'delete', $hotelExtra['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $hotelExtra['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Hotel Extra', true), array('controller' => 'hotel_extras', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
