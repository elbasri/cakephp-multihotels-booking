<div class="Achats view">
<h2><?php  __('Achat');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $Achat['Achat']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Name'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $Achat['Achat']['name']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Achat'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $Achat['Achat']['Achat']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Achat'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $this->Html->link($Achat['Achat']['id'], array('controller' => 'Achats', 'action' => 'view', $Achat['Achat']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Achat', true), array('action' => 'edit', $Achat['Achat']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Delete Achat', true), array('action' => 'delete', $Achat['Achat']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $Achat['Achat']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Achats', true), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Achat', true), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Achats', true), array('controller' => 'Achats', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Achat', true), array('controller' => 'Achats', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php __('Related Achats');?></h3>
	<?php if (!empty($Achat['Achat'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('name'); ?></th>
		<th><?php __('Achat'); ?></th>
		<th><?php __('Achat Id'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($Achat['Achat'] as $Achat):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $Achat['id'];?></td>
			<td><?php echo $Achat['name'];?></td>
			<td><?php echo $Achat['Achat'];?></td>
			<td><?php echo $Achat['Achat_id'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View', true), array('controller' => 'Achats', 'action' => 'view', $Achat['id'])); ?>
				<?php echo $this->Html->link(__('Edit', true), array('controller' => 'Achats', 'action' => 'edit', $Achat['id'])); ?>
				<?php echo $this->Html->link(__('Delete', true), array('controller' => 'Achats', 'action' => 'delete', $Achat['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $Achat['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Achat', true), array('controller' => 'Achats', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
