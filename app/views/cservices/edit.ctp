
<div class="form">
<?php echo $this->IForm->create('Cservice');?>

<h3>	<?php 
					if ($ave == 'A') {
					echo 'Ajout Cservice';
					}elseif ($ave == 'E') {;
					echo	'Modification Cservice';
					} else {
					echo	'Consultation Cservice';
					}
				?></h3>		

	<?php
		echo $this->IForm->input_('id');
		echo $this->IForm->input_('name');
		echo $this->IForm->input_('cservice_type_id');
		
	?>
<?php if ($ave !== 'V'){ echo $this->IForm->end_('Enregistrer'); }
				else {  echo '</form>' ;}
?>
<?php $liste_action = $this->Html->link('Cservices', array('action' => 'index'),array('class'=>'noid')) ;
		$this->RAction->register($liste_action);
?></div>