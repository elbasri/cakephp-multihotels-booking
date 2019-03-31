
<div class="form">
<?php echo $this->IForm->create('Hservice');?>

<h3>	<?php 
					if ($ave == 'A') {
					echo 'Ajout Hservice';
					}elseif ($ave == 'E') {;
					echo	'Modification Hservice';
					} else {
					echo	'Consultation Hservice';
					}
				?></h3>		

	<?php
		echo $this->IForm->input_('name');
		echo $this->IForm->input_('hservice_type_id');
		echo $this->IForm->input('Hotel');
	?>
<?php if ($ave !== 'V'){ echo $this->IForm->end_('Enregistrer'); }
				else {  echo '</form>' ;}
?>
<?php $liste_action = $this->Html->link('Hservices', array('action' => 'index'),array('class'=>'noid')) ;
		$this->RAction->register($liste_action);
?></div>