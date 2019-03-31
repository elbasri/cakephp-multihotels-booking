
<div class="form">
<?php echo $this->IForm->create('ExtraType');?>

<h3>	<?php 
					if ($ave == 'A') {
					echo 'Ajout Extra Type';
					}elseif ($ave == 'E') {;
					echo	'Modification Extra Type';
					} else {
					echo	'Consultation Extra Type';
					}
				?></h3>		

	<?php
		echo $this->IForm->input_('name');
	?>
<?php if ($ave !== 'V'){ echo $this->IForm->end_('Enregistrer'); }
				else {  echo '</form>' ;}
?>
<?php $liste_action = $this->Html->link('Extra Types', array('action' => 'index'),array('class'=>'noid')) ;
		$this->RAction->register($liste_action);
?></div>