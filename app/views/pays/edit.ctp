
<div class="form">
<?php echo $this->IForm->create('Pay');?>

<h3>	<?php 
					if ($ave == 'A') {
					echo 'Ajout Pay';
					}elseif ($ave == 'E') {;
					echo	'Modification Pay';
					} else {
					echo	'Consultation Pay';
					}
				?></h3>		

	<?php
		echo $this->IForm->input_('id');
		echo $this->IForm->input_('name');
	?>
<?php if ($ave !== 'V'){ echo $this->IForm->end_('Enregistrer'); }
				else {  echo '</form>' ;}
?>
<?php $liste_action = $this->Html->link('Pays', array('action' => 'index'),array('class'=>'noid')) ;
		$this->RAction->register($liste_action);
?></div>