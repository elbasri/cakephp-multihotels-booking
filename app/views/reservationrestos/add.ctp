
<div class="form">
<?php echo $this->IForm->create('Reservationresto');?>

<h3>	<?php 
					if ($ave == 'A') {
					echo 'Ajout Reservationresto';
					}elseif ($ave == 'E') {;
					echo	'Modification Reservationresto';
					} else {
					echo	'Consultation Reservationresto';
					}
				?></h3>		

	<?php
		echo $this->IForm->input_('titre');
		echo $this->IForm->textarea('Reservationresto');
		echo $this->IForm->input_('user_id');
	?>
<?php if ($ave !== 'V'){ echo $this->IForm->end_('Enregistrer'); }
				else {  echo '</form>' ;}
?>
<?php $liste_action = $this->Html->link('Reservationrestos', array('action' => 'index'),array('class'=>'noid')) ;
		$this->RAction->register($liste_action);
?></div>