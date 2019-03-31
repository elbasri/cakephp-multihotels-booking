
<div class="form">
<?php echo $this->IForm->create('HotelCarteCredit');?>

<h3>	<?php 
					if ($ave == 'A') {
					echo 'Ajout Hotel Carte Credit';
					}elseif ($ave == 'E') {;
					echo	'Modification Hotel Carte Credit';
					} else {
					echo	'Consultation Hotel Carte Credit';
					}
				?></h3>		

	<?php
		echo $this->IForm->input_('id');
		echo $this->IForm->input_('hotel_id');
		echo $this->IForm->input_('carte_credit_id');
	?>
<?php if ($ave !== 'V'){ echo $this->IForm->end_('Enregistrer'); }
				else {  echo '</form>' ;}
?>
<?php $liste_action = $this->Html->link('Hotel Carte Credits', array('action' => 'index'),array('class'=>'noid')) ;
		$this->RAction->register($liste_action);
?></div>