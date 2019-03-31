<div class="villes view">
<h2><?php  __('Ville');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $ville['Ville']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Name'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $ville['Ville']['name']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Pay'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $this->Html->link($ville['Pay']['name'], array('controller' => 'pays', 'action' => 'view', $ville['Pay']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Ville', true), array('action' => 'edit', $ville['Ville']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Delete Ville', true), array('action' => 'delete', $ville['Ville']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $ville['Ville']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Villes', true), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Ville', true), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Pays', true), array('controller' => 'pays', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Pay', true), array('controller' => 'pays', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Hotels', true), array('controller' => 'hotels', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Hotel', true), array('controller' => 'hotels', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php __('Related Hotels');?></h3>
	<?php if (!empty($ville['Hotel'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('Name'); ?></th>
		<th><?php __('Tel'); ?></th>
		<th><?php __('Fax'); ?></th>
		<th><?php __('Site Web'); ?></th>
		<th><?php __('Email'); ?></th>
		<th><?php __('Langue Id'); ?></th>
		<th><?php __('Adresse Rue'); ?></th>
		<th><?php __('Adresse Rue Num'); ?></th>
		<th><?php __('Adresse Cp'); ?></th>
		<th><?php __('Ville Id'); ?></th>
		<th><?php __('Pay Id'); ?></th>
		<th><?php __('Longitude'); ?></th>
		<th><?php __('Latitude'); ?></th>
		<th><?php __('Devise Id'); ?></th>
		<th><?php __('Checkin'); ?></th>
		<th><?php __('Checkout'); ?></th>
		<th><?php __('Description'); ?></th>
		<th><?php __('Nbre Etoiles'); ?></th>
		<th><?php __('Nbre Chambres'); ?></th>
		<th><?php __('Nbre Villas'); ?></th>
		<th><?php __('Nbre Suite'); ?></th>
		<th><?php __('Nbre Etages'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($ville['Hotel'] as $hotel):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $hotel['id'];?></td>
			<td><?php echo $hotel['name'];?></td>
			<td><?php echo $hotel['tel'];?></td>
			<td><?php echo $hotel['fax'];?></td>
			<td><?php echo $hotel['site_web'];?></td>
			<td><?php echo $hotel['email'];?></td>
			<td><?php echo $hotel['langue_id'];?></td>
			<td><?php echo $hotel['adresse_rue'];?></td>
			<td><?php echo $hotel['adresse_rue_num'];?></td>
			<td><?php echo $hotel['adresse_cp'];?></td>
			<td><?php echo $hotel['ville_id'];?></td>
			<td><?php echo $hotel['pay_id'];?></td>
			<td><?php echo $hotel['longitude'];?></td>
			<td><?php echo $hotel['latitude'];?></td>
			<td><?php echo $hotel['devise_id'];?></td>
			<td><?php echo $hotel['checkin'];?></td>
			<td><?php echo $hotel['checkout'];?></td>
			<td><?php echo $hotel['description'];?></td>
			<td><?php echo $hotel['nbre_etoiles'];?></td>
			<td><?php echo $hotel['nbre_chambres'];?></td>
			<td><?php echo $hotel['nbre_villas'];?></td>
			<td><?php echo $hotel['nbre_suite'];?></td>
			<td><?php echo $hotel['nbre_etages'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View', true), array('controller' => 'hotels', 'action' => 'view', $hotel['id'])); ?>
				<?php echo $this->Html->link(__('Edit', true), array('controller' => 'hotels', 'action' => 'edit', $hotel['id'])); ?>
				<?php echo $this->Html->link(__('Delete', true), array('controller' => 'hotels', 'action' => 'delete', $hotel['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $hotel['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Hotel', true), array('controller' => 'hotels', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
