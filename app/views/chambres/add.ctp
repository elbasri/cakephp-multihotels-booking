
<div class="form">
<?php echo $this->IForm->create('Chambre');?>

<h3>	<?php 
					if ($ave == 'A') {
					echo 'Ajout Chambre';
					}elseif ($ave == 'E') {;
					echo	'Modification Chambre';
					} else {
					echo	'Consultation Chambre';
					}
				?></h3>		

	<?php
		echo $this->IForm->input_('name');
	?>
<?php if ($ave !== 'V'){ echo $this->IForm->end_('Enregistrer'); }
				else {  echo '</form>' ;}
?>
<?php $liste_action = $this->Html->link('Chambres', array('action' => 'index'),array('class'=>'noid')) ;
		$this->RAction->register($liste_action);
?></div>