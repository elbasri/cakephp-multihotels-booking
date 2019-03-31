
<div class="form">
<?php echo $this->IForm->create('Groupe');?>

<h3>	<?php 
					if ($ave == 'A') {
					echo 'Ajout Groupe';
					}elseif ($ave == 'E') {;
					echo	'Modification Groupe';
					} else {
					echo	'Consultation Groupe';
					}
				?></h3>		

	<?php
		echo $this->IForm->input_('id');
		echo $this->IForm->input_('nom');
		echo $this->IForm->input_('prenom');
		echo $this->IForm->input_('nom_societe');
		echo $this->IForm->input_('email');
		echo $this->IForm->input_('tel');
		echo $this->IForm->input_('fax');
		echo $this->IForm->input_('portable');
		echo $this->IForm->input_('ville');
		echo $this->IForm->input_('pays');
		echo $this->IForm->input_('du');
		echo $this->IForm->input_('au');
		echo $this->IForm->input_('ville_arrivee');
		echo $this->IForm->input_('type_sejour');
		echo $this->IForm->input_('adulte');
		echo $this->IForm->input_('enfant');
		echo $this->IForm->input_('moyenne_age');
		echo $this->IForm->input_('budget');
		echo $this->IForm->input_('hotel_type_id');
		echo $this->IForm->input_('nbre_chambre');
		echo $this->IForm->input_('lit_supplement');
		echo $this->IForm->input_('single');
		echo $this->IForm->input_('double');
		echo $this->IForm->input_('twin');
		echo $this->IForm->input_('triples');
		echo $this->IForm->input_('quadriples');
		echo $this->IForm->input_('restauration');
		echo $this->IForm->input_('demande_text');
	?>
<?php if ($ave !== 'V'){ echo $this->IForm->end_('Enregistrer'); }
				else {  echo '</form>' ;}
?>
<?php $liste_action = $this->Html->link('Groupes', array('action' => 'index'),array('class'=>'noid')) ;
		$this->RAction->register($liste_action);
?></div>