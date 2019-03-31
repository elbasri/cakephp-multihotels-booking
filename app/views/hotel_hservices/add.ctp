
<div class="form">
<?php echo $this->IForm->create('HotelHservice');?>

<h3>	<?php 
					if ($ave == 'A') {
					echo 'Ajout Hotel Hservice';
					}elseif ($ave == 'E') {;
					echo	'Modification Hotel Hservice';
					} else {
					echo	'Consultation Hotel Hservice';
					}
				?></h3>		

	<?php
		echo $this->IForm->input_('hotel_id');
		echo $this->IForm->input_('hservice_id');
	?>
<?php if ($ave !== 'V'){ echo $this->IForm->end_('Enregistrer'); }
				else {  echo '</form>' ;}
?>
<?php $liste_action = $this->Html->link('Hotel Hservices', array('action' => 'index'),array('class'=>'noid')) ;
		$this->RAction->register($liste_action);
?></div>