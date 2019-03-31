
<div class="form">
<?php echo $this->IForm->create('InventaireStay');?>

<h3>	<?php 
					if ($ave == 'A') {
					echo 'Ajout Inventaire Stay';
					}elseif ($ave == 'E') {;
					echo	'Modification Inventaire Stay';
					} else {
					echo	'Consultation Inventaire Stay';
					}
				?></h3>		

	<?php
		echo $this->IForm->input_('hotel_id');
		echo $this->IForm->input_('chambre_id');
		echo $this->IForm->input_('inventaire_id');
		echo $this->IForm->input_('minimum');
		echo $this->IForm->input_('jour');
	?>
<?php if ($ave !== 'V'){ echo $this->IForm->end_('Enregistrer'); }
				else {  echo '</form>' ;}
?>
<?php $liste_action = $this->Html->link('Inventaire Stays', array('action' => 'index'),array('class'=>'noid')) ;
		$this->RAction->register($liste_action);
?></div>