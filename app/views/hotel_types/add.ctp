
<div class="form">
<?php echo $this->IForm->create('HotelType');?>

<h3>	<?php 
					if ($ave == 'A') {
					echo 'Ajout Hotel Type';
					}elseif ($ave == 'E') {;
					echo	'Modification Hotel Type';
					} else {
					echo	'Consultation Hotel Type';
					}
				?></h3>		

	<?php
		echo $this->IForm->input_('name');
	?>
<?php if ($ave !== 'V'){ echo $this->IForm->end_('Enregistrer'); }
				else {  echo '</form>' ;}
?>
<?php $liste_action = $this->Html->link('Hotel Types', array('action' => 'index'),array('class'=>'noid')) ;
		$this->RAction->register($liste_action);
?></div>