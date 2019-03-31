
<div class="form">
<?php echo $this->IForm->create('Guide');?>

<h3>	<?php 
					if ($ave == 'A') {
					echo 'Ajout Guide';
					}elseif ($ave == 'E') {;
					echo	'Modification Guide';
					} else {
					echo	'Consultation Guide';
					}
				?></h3>		

	<?php
		echo $this->IForm->input_('titre');
		echo $this->IForm->input_('content');
		echo $this->IForm->input_('titreeng');
		echo $this->IForm->input_('titreesp');
		echo $this->IForm->input_('contenteng');
		echo $this->IForm->input_('contentesp');
	?>
<?php if ($ave !== 'V'){ echo $this->IForm->end_('Enregistrer'); }
				else {  echo '</form>' ;}
?>
<?php $liste_action = $this->Html->link('Guides', array('action' => 'index'),array('class'=>'noid')) ;
		$this->RAction->register($liste_action);
?></div>