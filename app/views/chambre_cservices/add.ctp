
<div class="form">
<?php echo $this->IForm->create('ChambreCservice');?>

<h3>	<?php 
					if ($ave == 'A') {
					echo 'Ajout Chambre Cservice';
					}elseif ($ave == 'E') {;
					echo	'Modification Chambre Cservice';
					} else {
					echo	'Consultation Chambre Cservice';
					}
				?></h3>		

	<?php
		echo $this->IForm->input_('cservice_id');
		echo $this->IForm->input_('chambre_id');
		echo $this->IForm->input_('hotel_id');
	?>
<?php if ($ave !== 'V'){ echo $this->IForm->end_('Enregistrer'); }
				else {  echo '</form>' ;}
?>
<?php $liste_action = $this->Html->link('Chambre Cservices', array('action' => 'index'),array('class'=>'noid')) ;
		$this->RAction->register($liste_action);
?></div>