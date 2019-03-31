
<div class="form">
<?php echo $this->IForm->create('Featured');?>

<h3>	<?php 
					if ($ave == 'A') {
					echo 'Ajout Coup de coeur';
					}elseif ($ave == 'E') {;
					echo	'Modification Coup de coeur';
					} else {
					echo	'Consultation Coup de coeur';
					}
				?></h3>		

	<?php
		echo $this->IForm->input_('id');
		echo $this->IForm->input_search('Hotel');
		//echo $this->IForm->input_('order');
	?>
<?php if ($ave !== 'V'){ echo $this->IForm->end_('Enregistrer'); }
				else {  echo '</form>' ;}
?>
<?php $liste_action = $this->Html->link('Featureds', array('action' => 'index'),array('class'=>'noid')) ;
		$this->RAction->register($liste_action,false);
?></div>