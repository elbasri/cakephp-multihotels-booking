<div class="hserviceTypes view">
<h2><?php  __('Hservice Type');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $hserviceType['HserviceType']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Name'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $hserviceType['HserviceType']['name']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Hservice Type', true), array('action' => 'edit', $hserviceType['HserviceType']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Delete Hservice Type', true), array('action' => 'delete', $hserviceType['HserviceType']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $hserviceType['HserviceType']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Hservice Types', true), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Hservice Type', true), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Hservices', true), array('controller' => 'hservices', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Hservice', true), array('controller' => 'hservices', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php __('Related Hservices');?></h3>
	<?php if (!empty($hserviceType['Hservice'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('Name'); ?></th>
		<th><?php __('Hservice Type Id'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($hserviceType['Hservice'] as $hservice):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $hservice['id'];?></td>
			<td><?php echo $hservice['name'];?></td>
			<td><?php echo $hservice['hservice_type_id'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View', true), array('controller' => 'hservices', 'action' => 'view', $hservice['id'])); ?>
				<?php echo $this->Html->link(__('Edit', true), array('controller' => 'hservices', 'action' => 'edit', $hservice['id'])); ?>
				<?php echo $this->Html->link(__('Delete', true), array('controller' => 'hservices', 'action' => 'delete', $hservice['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $hservice['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Hservice', true), array('controller' => 'hservices', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
