
<div class="form">
<?php echo $this->IForm->create('Achat');?>

<h3>	<?php 
					if ($ave == 'A') {
					echo 'Ajout Achat';
					}elseif ($ave == 'E') {;
					echo	'Modification Achat';
					} else {
					echo	'Consultation Achat';
					}
				?></h3>		

	<?php
		echo $this->IForm->input_('titre');
		echo $this->IForm->textarea('Achat');
		echo $this->IForm->input_('user_id');
	?>
<?php if ($ave !== 'V'){ echo $this->IForm->end_('Enregistrer'); }
				else {  echo '</form>' ;}
?>
<?php $liste_action = $this->Html->link('Achats', array('action' => 'index'),array('class'=>'noid')) ;
		$this->RAction->register($liste_action);
?></div>