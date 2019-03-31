
<div class="form">
<?php echo $this->IForm->create('Reservation');?>

<h3>	<?php 
					if ($ave == 'A') {
					echo 'Ajout Reservation';
					}elseif ($ave == 'E') {;
					echo	'Modification Reservation';
					} else {
					echo	'Consultation Reservation';
					}
				?></h3>		

	<?php
		echo $this->IForm->input_('nom');
		echo $this->IForm->input_('prenom');
		echo $this->IForm->input_('pay_id');
		echo $this->IForm->input_('telephone');
		echo $this->IForm->input_('email');
		echo $this->IForm->input_('etat');
		echo $this->IForm->input_('payement');
		echo $this->IForm->input_('hotel_id');
		echo $this->IForm->input_('chambre_id');
	?>
<?php if ($ave !== 'V'){ echo $this->IForm->end_('Enregistrer'); }
				else {  echo '</form>' ;}
?>
<?php $liste_action = $this->Html->link('Reservations', array('action' => 'index'),array('class'=>'noid')) ;
		$this->RAction->register($liste_action,false);
?></div>