
<div class="form">
<?php echo $this->IForm->create('CserviceType');?>

<h3>	<?php 
					if ($ave == 'A') {
					echo 'Ajout Cservice Type';
					}elseif ($ave == 'E') {;
					echo	'Modification Cservice Type';
					} else {
					echo	'Consultation Cservice Type';
					}
				?></h3>		

	<?php
		echo $this->IForm->input_('id');
		echo $this->IForm->input_('name');
	?>
<?php if ($ave !== 'V'){ echo $this->IForm->end_('Enregistrer'); }
				else {  echo '</form>' ;}
?>
<?php $liste_action = $this->Html->link('Cservice Types', array('action' => 'index'),array('class'=>'noid')) ;
		$this->RAction->register($liste_action);
?></div>