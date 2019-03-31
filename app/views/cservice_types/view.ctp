<div class="cserviceTypes view">
<h2><?php  __('Cservice Type');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $cserviceType['CserviceType']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Name'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $cserviceType['CserviceType']['name']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Cservice Type', true), array('action' => 'edit', $cserviceType['CserviceType']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Delete Cservice Type', true), array('action' => 'delete', $cserviceType['CserviceType']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $cserviceType['CserviceType']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Cservice Types', true), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Cservice Type', true), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Cservices', true), array('controller' => 'cservices', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Cservice', true), array('controller' => 'cservices', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php __('Related Cservices');?></h3>
	<?php if (!empty($cserviceType['Cservice'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('Name'); ?></th>
		<th><?php __('Cservice Type Id'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($cserviceType['Cservice'] as $cservice):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $cservice['id'];?></td>
			<td><?php echo $cservice['name'];?></td>
			<td><?php echo $cservice['cservice_type_id'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View', true), array('controller' => 'cservices', 'action' => 'view', $cservice['id'])); ?>
				<?php echo $this->Html->link(__('Edit', true), array('controller' => 'cservices', 'action' => 'edit', $cservice['id'])); ?>
				<?php echo $this->Html->link(__('Delete', true), array('controller' => 'cservices', 'action' => 'delete', $cservice['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $cservice['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Cservice', true), array('controller' => 'cservices', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
