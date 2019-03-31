<div class="extraTypes view">
<h2><?php  __('Extra Type');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $extraType['ExtraType']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Name'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $extraType['ExtraType']['name']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Extra Type', true), array('action' => 'edit', $extraType['ExtraType']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Delete Extra Type', true), array('action' => 'delete', $extraType['ExtraType']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $extraType['ExtraType']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Extra Types', true), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Extra Type', true), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Extras', true), array('controller' => 'extras', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Extra', true), array('controller' => 'extras', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php __('Related Extras');?></h3>
	<?php if (!empty($extraType['Extra'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('Name'); ?></th>
		<th><?php __('Extra Type Id'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($extraType['Extra'] as $extra):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $extra['id'];?></td>
			<td><?php echo $extra['name'];?></td>
			<td><?php echo $extra['extra_type_id'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View', true), array('controller' => 'extras', 'action' => 'view', $extra['id'])); ?>
				<?php echo $this->Html->link(__('Edit', true), array('controller' => 'extras', 'action' => 'edit', $extra['id'])); ?>
				<?php echo $this->Html->link(__('Delete', true), array('controller' => 'extras', 'action' => 'delete', $extra['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $extra['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Extra', true), array('controller' => 'extras', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
