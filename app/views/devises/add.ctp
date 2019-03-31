
<div class="form">
<?php echo $this->IForm->create('Devise');?>

<h3>	<?php 
					if ($ave == 'A') {
					echo 'Ajout Devise';
					}elseif ($ave == 'E') {;
					echo	'Modification Devise';
					} else {
					echo	'Consultation Devise';
					}
				?></h3>		

	<?php
		echo $this->IForm->input_('name');
		echo $this->IForm->input_('taux');
	?>
<?php if ($ave !== 'V'){ echo $this->IForm->end_('Enregistrer'); }
				else {  echo '</form>' ;}
?>
<?php $liste_action = $this->Html->link('Devises', array('action' => 'index'),array('class'=>'noid')) ;
		$this->RAction->register($liste_action);
?></div>