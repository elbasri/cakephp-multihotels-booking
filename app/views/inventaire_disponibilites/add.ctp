
<div class="form">
<?php echo $this->IForm->create('InventaireDisponibilite');?>

<h3>	<?php 
					if ($ave == 'A') {
					echo 'Ajout Inventaire Disponibilite';
					}elseif ($ave == 'E') {;
					echo	'Modification Inventaire Disponibilite';
					} else {
					echo	'Consultation Inventaire Disponibilite';
					}
				?></h3>		

	<?php
		echo $this->IForm->input_('hotel_id');
		echo $this->IForm->input_('chambre_id');
		echo $this->IForm->input_('inventaire_id');
		echo $this->IForm->input_('disponibilte');
		echo $this->IForm->input_('etat');
		echo $this->IForm->input_('jour');
	?>
<?php if ($ave !== 'V'){ echo $this->IForm->end_('Enregistrer'); }
				else {  echo '</form>' ;}
?>
<?php $liste_action = $this->Html->link('Inventaire Disponibilites', array('action' => 'index'),array('class'=>'noid')) ;
		$this->RAction->register($liste_action);
?></div>