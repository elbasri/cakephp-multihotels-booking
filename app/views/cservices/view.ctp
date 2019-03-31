<div class="cservices view">
<h2><?php  __('Cservice');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $cservice['Cservice']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Name'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $cservice['Cservice']['name']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Cservice Type'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $this->Html->link($cservice['CserviceType']['name'], array('controller' => 'cservice_types', 'action' => 'view', $cservice['CserviceType']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Cservice', true), array('action' => 'edit', $cservice['Cservice']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Delete Cservice', true), array('action' => 'delete', $cservice['Cservice']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $cservice['Cservice']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Cservices', true), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Cservice', true), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Cservice Types', true), array('controller' => 'cservice_types', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Cservice Type', true), array('controller' => 'cservice_types', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Chambres', true), array('controller' => 'chambres', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Chambre', true), array('controller' => 'chambres', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php __('Related Chambres');?></h3>
	<?php if (!empty($cservice['Chambre'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('Name'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($cservice['Chambre'] as $chambre):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $chambre['id'];?></td>
			<td><?php echo $chambre['name'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View', true), array('controller' => 'chambres', 'action' => 'view', $chambre['id'])); ?>
				<?php echo $this->Html->link(__('Edit', true), array('controller' => 'chambres', 'action' => 'edit', $chambre['id'])); ?>
				<?php echo $this->Html->link(__('Delete', true), array('controller' => 'chambres', 'action' => 'delete', $chambre['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $chambre['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Chambre', true), array('controller' => 'chambres', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
