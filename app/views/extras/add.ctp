
<div class="form">
<?php echo $this->IForm->create('Extra');?>

<h3>	<?php 
					if ($ave == 'A') {
					echo 'Ajout Extra';
					}elseif ($ave == 'E') {;
					echo	'Modification Extra';
					} else {
					echo	'Consultation Extra';
					}
				?></h3>		

	<?php
		echo $this->IForm->input_('name');
		echo $this->IForm->input_('extra_type_id');
		echo $this->IForm->input('Hotel');
	?>
<?php if ($ave !== 'V'){ echo $this->IForm->end_('Enregistrer'); }
				else {  echo '</form>' ;}
?>
<?php $liste_action = $this->Html->link('Extras', array('action' => 'index'),array('class'=>'noid')) ;
		$this->RAction->register($liste_action);
?></div>