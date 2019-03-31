
<div class="form">
<?php echo $this->IForm->create('HotelPhoto');?>

<h3>	<?php 
					if ($ave == 'A') {
					echo 'Ajout Hotel Photo';
					}elseif ($ave == 'E') {;
					echo	'Modification Hotel Photo';
					} else {
					echo	'Consultation Hotel Photo';
					}
				?></h3>		

	<?php
		echo $this->IForm->input_('hotel_id');
		echo $this->IForm->input_('chambre_id');
		echo $this->IForm->input_('photo');
		echo $this->IForm->input_('thumb');
	?>
<?php if ($ave !== 'V'){ echo $this->IForm->end_('Enregistrer'); }
				else {  echo '</form>' ;}
?>
<?php $liste_action = $this->Html->link('Hotel Photos', array('action' => 'index'),array('class'=>'noid')) ;
		$this->RAction->register($liste_action);
?></div>