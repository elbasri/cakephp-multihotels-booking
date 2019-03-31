
<div class="form">
<?php echo $this->IForm->create('CarteCredit');?>

<h3>	<?php 
					if ($ave == 'A') {
					echo 'Ajout Carte Credit';
					}elseif ($ave == 'E') {;
					echo	'Modification Carte Credit';
					} else {
					echo	'Consultation Carte Credit';
					}
				?></h3>		

	<?php
		echo $this->IForm->input_('name');
		echo $this->IForm->input('Hotel');
	?>
<?php if ($ave !== 'V'){ echo $this->IForm->end_('Enregistrer'); }
				else {  echo '</form>' ;}
?>
<?php $liste_action = $this->Html->link('Carte Credits', array('action' => 'index'),array('class'=>'noid')) ;
		$this->RAction->register($liste_action);
?></div>