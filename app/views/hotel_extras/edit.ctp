
<div class="form">
<?php echo $this->IForm->create('HotelExtra');?>

<h3>	<?php 
					if ($ave == 'A') {
					echo 'Ajout Hotel Extra';
					}elseif ($ave == 'E') {;
					echo	'Modification Hotel Extra';
					} else {
					echo	'Consultation Hotel Extra';
					}
				?></h3>		

	<?php
		echo $this->IForm->input_('id');
		echo $this->IForm->input_('hotel_id');
		echo $this->IForm->input_('extra_id');
		echo $this->IForm->input_('val');
		echo $this->IForm->input_('eleft_id');
		echo $this->IForm->input_('eright_id');
	?>
<?php if ($ave !== 'V'){ echo $this->IForm->end_('Enregistrer'); }
				else {  echo '</form>' ;}
?>
<?php $liste_action = $this->Html->link('Hotel Extras', array('action' => 'index'),array('class'=>'noid')) ;
		$this->RAction->register($liste_action);
?></div>