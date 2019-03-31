
<div class="form">
<?php echo $this->IForm->create('ExtraLeft');?>

<h3>	<?php 
					if ($ave == 'A') {
					echo 'Ajout Extra Left';
					}elseif ($ave == 'E') {;
					echo	'Modification Extra Left';
					} else {
					echo	'Consultation Extra Left';
					}
				?></h3>		

	<?php
		echo $this->IForm->input_('elefts_id');
		echo $this->IForm->input_('extra_id');
	?>
<?php if ($ave !== 'V'){ echo $this->IForm->end_('Enregistrer'); }
				else {  echo '</form>' ;}
?>
<?php $liste_action = $this->Html->link('Extra Lefts', array('action' => 'index'),array('class'=>'noid')) ;
		$this->RAction->register($liste_action);
?></div>