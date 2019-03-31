<div class="reservations view">
<h2><?php  __('Reservation');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $reservation['Reservation']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Nom'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $reservation['Reservation']['nom']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Prenom'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $reservation['Reservation']['prenom']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Pay'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $this->Html->link($reservation['Pay']['name'], array('controller' => 'pays', 'action' => 'view', $reservation['Pay']['id'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Telephone'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $reservation['Reservation']['telephone']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Email'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $reservation['Reservation']['email']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Etat'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $reservation['Reservation']['etat']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Payement'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $reservation['Reservation']['payement']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Hotel'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $this->Html->link($reservation['Hotel']['name'], array('controller' => 'hotels', 'action' => 'view', $reservation['Hotel']['id'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Chambre'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $this->Html->link($reservation['Chambre']['name'], array('controller' => 'chambres', 'action' => 'view', $reservation['Chambre']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Reservation', true), array('action' => 'edit', $reservation['Reservation']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Delete Reservation', true), array('action' => 'delete', $reservation['Reservation']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $reservation['Reservation']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Reservations', true), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Reservation', true), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Pays', true), array('controller' => 'pays', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Pay', true), array('controller' => 'pays', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Hotels', true), array('controller' => 'hotels', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Hotel', true), array('controller' => 'hotels', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Chambres', true), array('controller' => 'chambres', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Chambre', true), array('controller' => 'chambres', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Reservation Details', true), array('controller' => 'reservation_details', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Reservation Detail', true), array('controller' => 'reservation_details', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php __('Related Reservation Details');?></h3>
	<?php if (!empty($reservation['ReservationDetail'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('Tarif'); ?></th>
		<th><?php __('Reservation Id'); ?></th>
		<th><?php __('Inventaire Id'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($reservation['ReservationDetail'] as $reservationDetail):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $reservationDetail['id'];?></td>
			<td><?php echo $reservationDetail['tarif'];?></td>
			<td><?php echo $reservationDetail['reservation_id'];?></td>
			<td><?php echo $reservationDetail['inventaire_id'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View', true), array('controller' => 'reservation_details', 'action' => 'view', $reservationDetail['id'])); ?>
				<?php echo $this->Html->link(__('Edit', true), array('controller' => 'reservation_details', 'action' => 'edit', $reservationDetail['id'])); ?>
				<?php echo $this->Html->link(__('Delete', true), array('controller' => 'reservation_details', 'action' => 'delete', $reservationDetail['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $reservationDetail['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Reservation Detail', true), array('controller' => 'reservation_details', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
