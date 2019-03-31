<div class="hotels view">
<h2><?php  __('Hotel');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $hotel['Hotel']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Name'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $hotel['Hotel']['name']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Tel'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $hotel['Hotel']['tel']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Fax'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $hotel['Hotel']['fax']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Site Web'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $hotel['Hotel']['site_web']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Email'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $hotel['Hotel']['email']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Langue'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $this->Html->link($hotel['Langue']['name'], array('controller' => 'langues', 'action' => 'view', $hotel['Langue']['id'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Adresse Rue'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $hotel['Hotel']['adresse_rue']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Adresse Rue Num'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $hotel['Hotel']['adresse_rue_num']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Adresse Cp'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $hotel['Hotel']['adresse_cp']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Ville'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $this->Html->link($hotel['Ville']['name'], array('controller' => 'villes', 'action' => 'view', $hotel['Ville']['id'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Pay'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $this->Html->link($hotel['Pay']['name'], array('controller' => 'pays', 'action' => 'view', $hotel['Pay']['id'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Longitude'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $hotel['Hotel']['longitude']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Latitude'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $hotel['Hotel']['latitude']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Devise'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $this->Html->link($hotel['Devise']['name'], array('controller' => 'devises', 'action' => 'view', $hotel['Devise']['id'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Checkin'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $hotel['Hotel']['checkin']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Checkout'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $hotel['Hotel']['checkout']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Description'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $hotel['Hotel']['description']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Nbre Etoiles'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $hotel['Hotel']['nbre_etoiles']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Nbre Chambres'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $hotel['Hotel']['nbre_chambres']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Nbre Villas'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $hotel['Hotel']['nbre_villas']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Nbre Suite'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $hotel['Hotel']['nbre_suite']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Nbre Etages'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $hotel['Hotel']['nbre_etages']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Hotel', true), array('action' => 'edit', $hotel['Hotel']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Delete Hotel', true), array('action' => 'delete', $hotel['Hotel']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $hotel['Hotel']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Hotels', true), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Hotel', true), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Langues', true), array('controller' => 'langues', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Langue', true), array('controller' => 'langues', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Villes', true), array('controller' => 'villes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Ville', true), array('controller' => 'villes', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Pays', true), array('controller' => 'pays', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Pay', true), array('controller' => 'pays', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Devises', true), array('controller' => 'devises', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Devise', true), array('controller' => 'devises', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Chambre Cservices', true), array('controller' => 'chambre_cservices', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Chambre Cservice', true), array('controller' => 'chambre_cservices', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Hotel Carte Credits', true), array('controller' => 'hotel_carte_credits', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Hotel Carte Credit', true), array('controller' => 'hotel_carte_credits', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Hotel Extras', true), array('controller' => 'hotel_extras', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Hotel Extra', true), array('controller' => 'hotel_extras', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Hotel Hservices', true), array('controller' => 'hotel_hservices', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Hotel Hservice', true), array('controller' => 'hotel_hservices', 'action' => 'add')); ?> </li>
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
	<?php if (!empty($hotel['ChambreCservice'])):?>
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
		foreach ($hotel['ChambreCservice'] as $chambreCservice):
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
	<h3><?php __('Related Hotel Carte Credits');?></h3>
	<?php if (!empty($hotel['HotelCarteCredit'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('Hotel Id'); ?></th>
		<th><?php __('Carte Credit Id'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($hotel['HotelCarteCredit'] as $hotelCarteCredit):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $hotelCarteCredit['id'];?></td>
			<td><?php echo $hotelCarteCredit['hotel_id'];?></td>
			<td><?php echo $hotelCarteCredit['carte_credit_id'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View', true), array('controller' => 'hotel_carte_credits', 'action' => 'view', $hotelCarteCredit['id'])); ?>
				<?php echo $this->Html->link(__('Edit', true), array('controller' => 'hotel_carte_credits', 'action' => 'edit', $hotelCarteCredit['id'])); ?>
				<?php echo $this->Html->link(__('Delete', true), array('controller' => 'hotel_carte_credits', 'action' => 'delete', $hotelCarteCredit['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $hotelCarteCredit['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Hotel Carte Credit', true), array('controller' => 'hotel_carte_credits', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php __('Related Hotel Extras');?></h3>
	<?php if (!empty($hotel['HotelExtra'])):?>
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
		foreach ($hotel['HotelExtra'] as $hotelExtra):
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
<div class="related">
	<h3><?php __('Related Hotel Hservices');?></h3>
	<?php if (!empty($hotel['HotelHservice'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('Hotel Id'); ?></th>
		<th><?php __('Hservice Id'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($hotel['HotelHservice'] as $hotelHservice):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $hotelHservice['id'];?></td>
			<td><?php echo $hotelHservice['hotel_id'];?></td>
			<td><?php echo $hotelHservice['hservice_id'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View', true), array('controller' => 'hotel_hservices', 'action' => 'view', $hotelHservice['id'])); ?>
				<?php echo $this->Html->link(__('Edit', true), array('controller' => 'hotel_hservices', 'action' => 'edit', $hotelHservice['id'])); ?>
				<?php echo $this->Html->link(__('Delete', true), array('controller' => 'hotel_hservices', 'action' => 'delete', $hotelHservice['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $hotelHservice['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Hotel Hservice', true), array('controller' => 'hotel_hservices', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php __('Related Hotel Photos');?></h3>
	<?php if (!empty($hotel['HotelPhoto'])):?>
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
		foreach ($hotel['HotelPhoto'] as $hotelPhoto):
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
	<?php if (!empty($hotel['InventaireDisponibilite'])):?>
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
		foreach ($hotel['InventaireDisponibilite'] as $inventaireDisponibilite):
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
	<?php if (!empty($hotel['InventairePrice'])):?>
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
		foreach ($hotel['InventairePrice'] as $inventairePrice):
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
	<?php if (!empty($hotel['InventaireStay'])):?>
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
		foreach ($hotel['InventaireStay'] as $inventaireStay):
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
