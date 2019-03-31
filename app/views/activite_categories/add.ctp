
<div class="form">
<?php echo $this->IForm->create('ActiviteCategory');?>

<h3>	<?php 
					if ($ave == 'A') {
					echo 'Ajout Activite Category';
					}elseif ($ave == 'E') {;
					echo	'Modification Activite Category';
					} else {
					echo	'Consultation Activite Category';
					}
				?></h3>		

	<?php
		echo $this->IForm->input_('titre');
		echo $this->IForm->input_('titreeng');
		echo $this->IForm->input_('titreesp');
	?>
<?php if ($ave !== 'V'){ echo $this->IForm->end_('Enregistrer'); }
				else {  echo '</form>' ;}
?>
<?php $liste_action = $this->Html->link('Activite Categories', array('action' => 'index'),array('class'=>'noid')) ;
		$this->RAction->register($liste_action);
?></div>