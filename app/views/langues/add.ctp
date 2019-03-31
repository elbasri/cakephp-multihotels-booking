
<div class="form">
<?php echo $this->IForm->create('Langue');?>

<h3>	<?php 
					if ($ave == 'A') {
					echo 'Ajout Langue';
					}elseif ($ave == 'E') {;
					echo	'Modification Langue';
					} else {
					echo	'Consultation Langue';
					}
				?></h3>		

	<?php
		echo $this->IForm->input_('name');
	?>
<?php if ($ave !== 'V'){ echo $this->IForm->end_('Enregistrer'); }
				else {  echo '</form>' ;}
?>
<?php $liste_action = $this->Html->link('Langues', array('action' => 'index'),array('class'=>'noid')) ;
		$this->RAction->register($liste_action);
?></div>