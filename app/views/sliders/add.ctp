
<div class="form">
<?php echo $this->IForm->create('Featured');?>

<h3>	<?php 
					if ($ave == 'A') {
					echo 'Ajout Featured';
					}elseif ($ave == 'E') {;
					echo	'Modification Featured';
					} else {
					echo	'Consultation Featured';
					}
				?></h3>		

	<?php
		echo $this->IForm->input_('hotel_id');
		echo $this->IForm->input_('order');
	?>
<?php if ($ave !== 'V'){ echo $this->IForm->end_('Enregistrer'); }
				else {  echo '</form>' ;}
?>
<?php $liste_action = $this->Html->link('Featureds', array('action' => 'index'),array('class'=>'noid')) ;
		$this->RAction->register($liste_action,false);
?></div>