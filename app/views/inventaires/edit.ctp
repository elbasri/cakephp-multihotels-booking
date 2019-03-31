
<div class="form">
<?php echo $this->IForm->create('Inventaire');?>

<h3>	<?php 
					if ($ave == 'A') {
					echo 'Ajout Inventaire';
					}elseif ($ave == 'E') {;
					echo	'Modification Inventaire';
					} else {
					echo	'Consultation Inventaire';
					}
				?></h3>		

	<?php
		echo $this->IForm->input_('id');
		echo $this->IForm->input_('annee');
		echo $this->IForm->input_('mois');
		echo $this->IForm->input_('nbre_jour');
	?>
<?php if ($ave !== 'V'){ echo $this->IForm->end_('Enregistrer'); }
				else {  echo '</form>' ;}
?>
<?php $liste_action = $this->Html->link('Inventaires', array('action' => 'index'),array('class'=>'noid')) ;
		$this->RAction->register($liste_action);
?></div>