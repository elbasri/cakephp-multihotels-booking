<div class="chambres view">
<h2><?php  __('Chambre');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $chambre['Chambre']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Name'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $chambre['Chambre']['name']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Chambre', true), array('action' => 'edit', $chambre['Chambre']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Delete Chambre', true), array('action' => 'delete', $chambre['Chambre']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $chambre['Chambre']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Chambres', true), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Chambre', true), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Chambre Cservices', true), array('controller' => 'chambre_cservices', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Chambre Cservice', true), array('controller' => 'chambre_cservices', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Hotel Photos', true), array('controller' => 'hotel_photos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Hotel Photo', true), array('controller' => 'hotel_photos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Inventaire Disponibilites', true), array('controller' => 'inventaire_disponibilites', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Inventaire Disponibilite', true), array('controller' => 'inventaire_disponibilites', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Inventaire Prices', true), array('controller' => 'inventaire_prices', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Inventaire Price', true), array('controller' => 'inventaire_prices', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Inventaire Stays', true), array('controller' => 'inventaire_stays', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Inventaire Stay', true), array('controller' => 'inventaire_stays', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php __('Related Chambre Cservices');?></h3>
	<?php if (!empty($chambre['ChambreCservice'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('Cservice Id'); ?></th>
		<th><?php __('Chambre Id'); ?></th>
		<th><?php __('Hotel Id'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($chambre['ChambreCservice'] as $chambreCservice):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $chambreCservice['id'];?></td>
			<td><?php echo $chambreCservice['cservice_id'];?></td>
			<td><?php echo $chambreCservice['chambre_id'];?></td>
			<td><?php echo $chambreCservice['hotel_id'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View', true), array('controller' => 'chambre_cservices', 'action' => 'view', $chambreCservice['id'])); ?>
				<?php echo $this->Html->link(__('Edit', true), array('controller' => 'chambre_cservices', 'action' => 'edit', $chambreCservice['id'])); ?>
				<?php echo $this->Html->link(__('Delete', true), array('controller' => 'chambre_cservices', 'action' => 'delete', $chambreCservice['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $chambreCservice['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Chambre Cservice', true), array('controller' => 'chambre_cservices', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php __('Related Hotel Photos');?></h3>
	<?php if (!empty($chambre['HotelPhoto'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('Hotel Id'); ?></th>
		<th><?php __('Chambre Id'); ?></th>
		<th><?php __('Photo'); ?></th>
		<th><?php __('Thumb'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($chambre['HotelPhoto'] as $hotelPhoto):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $hotelPhoto['id'];?></td>
			<td><?php echo $hotelPhoto['hotel_id'];?></td>
			<td><?php echo $hotelPhoto['chambre_id'];?></td>
			<td><?php echo $hotelPhoto['photo'];?></td>
			<td><?php echo $hotelPhoto['thumb'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View', true), array('controller' => 'hotel_photos', 'action' => 'view', $hotelPhoto['id'])); ?>
				<?php echo $this->Html->link(__('Edit', true), array('controller' => 'hotel_photos', 'action' => 'edit', $hotelPhoto['id'])); ?>
				<?php echo $this->Html->link(__('Delete', true), array('controller' => 'hotel_photos', 'action' => 'delete', $hotelPhoto['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $hotelPhoto['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Hotel Photo', true), array('controller' => 'hotel_photos', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php __('Related Inventaire Disponibilites');?></h3>
	<?php if (!empty($chambre['InventaireDisponibilite'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('Hotel Id'); ?></th>
		<th><?php __('Chambre Id'); ?></th>
		<th><?php __('Inventaire Id'); ?></th>
		<th><?php __('Disponibilte'); ?></th>
		<th><?php __('Etat'); ?></th>
		<th><?php __('Jour'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($chambre['InventaireDisponibilite'] as $inventaireDisponibilite):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $inventaireDisponibilite['id'];?></td>
			<td><?php echo $inventaireDisponibilite['hotel_id'];?></td>
			<td><?php echo $inventaireDisponibilite['chambre_id'];?></td>
			<td><?php echo $inventaireDisponibilite['inventaire_id'];?></td>
			<td><?php echo $inventaireDisponibilite['disponibilte'];?></td>
			<td><?php echo $inventaireDisponibilite['etat'];?></td>
			<td><?php echo $inventaireDisponibilite['jour'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View', true), array('controller' => 'inventaire_disponibilites', 'action' => 'view', $inventaireDisponibilite['id'])); ?>
				<?php echo $this->Html->link(__('Edit', true), array('controller' => 'inventaire_disponibilites', 'action' => 'edit', $inventaireDisponibilite['id'])); ?>
				<?php echo $this->Html->link(__('Delete', true), array('controller' => 'inventaire_disponibilites', 'action' => 'delete', $inventaireDisponibilite['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $inventaireDisponibilite['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Inventaire Disponibilite', true), array('controller' => 'inventaire_disponibilites', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php __('Related Inventaire Prices');?></h3>
	<?php if (!empty($chambre['InventairePrice'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('Hotel Id'); ?></th>
		<th><?php __('Chambre Id'); ?></th>
		<th><?php __('Inventaire Id'); ?></th>
		<th><?php __('Prix'); ?></th>
		<th><?php __('Jour'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($chambre['InventairePrice'] as $inventairePrice):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $inventairePrice['id'];?></td>
			<td><?php echo $inventairePrice['hotel_id'];?></td>
			<td><?php echo $inventairePrice['chambre_id'];?></td>
			<td><?php echo $inventairePrice['inventaire_id'];?></td>
			<td><?php echo $inventairePrice['prix'];?></td>
			<td><?php echo $inventairePrice['jour'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View', true), array('controller' => 'inventaire_prices', 'action' => 'view', $inventairePrice['id'])); ?>
				<?php echo $this->Html->link(__('Edit', true), array('controller' => 'inventaire_prices', 'action' => 'edit', $inventairePrice['id'])); ?>
				<?php echo $this->Html->link(__('Delete', true), array('controller' => 'inventaire_prices', 'action' => 'delete', $inventairePrice['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $inventairePrice['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Inventaire Price', true), array('controller' => 'inventaire_prices', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php __('Related Inventaire Stays');?></h3>
	<?php if (!empty($chambre['InventaireStay'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('Hotel Id'); ?></th>
		<th><?php __('Chambre Id'); ?></th>
		<th><?php __('Inventaire Id'); ?></th>
		<th><?php __('Minimum'); ?></th>
		<th><?php __('Jour'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($chambre['InventaireStay'] as $inventaireStay):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $inventaireStay['id'];?></td>
			<td><?php echo $inventaireStay['hotel_id'];?></td>
			<td><?php echo $inventaireStay['chambre_id'];?></td>
			<td><?php echo $inventaireStay['inventaire_id'];?></td>
			<td><?php echo $inventaireStay['minimum'];?></td>
			<td><?php echo $inventaireStay['jour'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View', true), array('controller' => 'inventaire_stays', 'action' => 'view', $inventaireStay['id'])); ?>
				<?php echo $this->Html->link(__('Edit', true), array('controller' => 'inventaire_stays', 'action' => 'edit', $inventaireStay['id'])); ?>
				<?php echo $this->Html->link(__('Delete', true), array('controller' => 'inventaire_stays', 'action' => 'delete', $inventaireStay['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $inventaireStay['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Inventaire Stay', true), array('controller' => 'inventaire_stays', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
