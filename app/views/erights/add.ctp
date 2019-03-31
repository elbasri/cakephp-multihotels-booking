
<div class="form">
<?php echo $this->IForm->create('Eright');?>

<h3>	<?php 
					if ($ave == 'A') {
					echo 'Ajout Eright';
					}elseif ($ave == 'E') {;
					echo	'Modification Eright';
					} else {
					echo	'Consultation Eright';
					}
				?></h3>		

	<?php
		echo $this->IForm->input_('name');
	?>
<?php if ($ave !== 'V'){ echo $this->IForm->end_('Enregistrer'); }
				else {  echo '</form>' ;}
?>
<?php $liste_action = $this->Html->link('Erights', array('action' => 'index'),array('class'=>'noid')) ;
		$this->RAction->register($liste_action);
?></div>