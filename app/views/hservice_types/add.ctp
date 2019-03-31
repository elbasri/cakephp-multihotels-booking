
<div class="form">
<?php echo $this->IForm->create('HserviceType');?>

<h3>	<?php 
					if ($ave == 'A') {
					echo 'Ajout Hservice Type';
					}elseif ($ave == 'E') {;
					echo	'Modification Hservice Type';
					} else {
					echo	'Consultation Hservice Type';
					}
				?></h3>		

	<?php
		echo $this->IForm->input_('name');
	?>
<?php if ($ave !== 'V'){ echo $this->IForm->end_('Enregistrer'); }
				else {  echo '</form>' ;}
?>
<?php $liste_action = $this->Html->link('Hservice Types', array('action' => 'index'),array('class'=>'noid')) ;
		$this->RAction->register($liste_action);
?></div>