
<div class="form">
<?php echo $this->IForm->create('Eleft');?>

<h3>	<?php 
					if ($ave == 'A') {
					echo 'Ajout Eleft';
					}elseif ($ave == 'E') {;
					echo	'Modification Eleft';
					} else {
					echo	'Consultation Eleft';
					}
				?></h3>		

	<?php
		echo $this->IForm->input_('id');
		echo $this->IForm->input_('name');
	?>
<?php if ($ave !== 'V'){ echo $this->IForm->end_('Enregistrer'); }
				else {  echo '</form>' ;}
?>
<?php $liste_action = $this->Html->link('Elefts', array('action' => 'index'),array('class'=>'noid')) ;
		$this->RAction->register($liste_action);
?></div>