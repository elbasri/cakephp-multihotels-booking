
<div class="form">
<?php echo $this->IForm->create('InventairePrice');?>

<h3>	<?php 
					if ($ave == 'A') {
					echo 'Ajout Inventaire Price';
					}elseif ($ave == 'E') {;
					echo	'Modification Inventaire Price';
					} else {
					echo	'Consultation Inventaire Price';
					}
				?></h3>		

	<?php
		echo $this->IForm->input_('id');
		echo $this->IForm->input_('hotel_id');
		echo $this->IForm->input_('chambre_id');
		echo $this->IForm->input_('inventaire_id');
		echo $this->IForm->input_('prix');
		echo $this->IForm->input_('jour');
	?>
<?php if ($ave !== 'V'){ echo $this->IForm->end_('Enregistrer'); }
				else {  echo '</form>' ;}
?>
<?php $liste_action = $this->Html->link('Inventaire Prices', array('action' => 'index'),array('class'=>'noid')) ;
		$this->RAction->register($liste_action);
?></div>