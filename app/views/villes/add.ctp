
<div class="form">
<?php echo $this->IForm->create('Ville');?>

<h3>	<?php 
					if ($ave == 'A') {
					echo 'Ajout Ville';
					}elseif ($ave == 'E') {;
					echo	'Modification Ville';
					} else {
					echo	'Consultation Ville';
					}
				?></h3>		

	<?php
		echo $this->IForm->input_('name');
		echo $this->IForm->input_('pay_id');
	?>
<?php if ($ave !== 'V'){ echo $this->IForm->end_('Enregistrer'); }
				else {  echo '</form>' ;}
?>
<?php $liste_action = $this->Html->link('Villes', array('action' => 'index'),array('class'=>'noid')) ;
		$this->RAction->register($liste_action);
?></div>