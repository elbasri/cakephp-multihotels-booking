
<div class="form">
<?php echo $this->IForm->create('Content');?>

<h3>	<?php 
					if ($ave == 'A') {
					echo 'Ajout Content';
					}elseif ($ave == 'E') {;
					echo	'Modification Content';
					} else {
					echo	'Consultation Content';
					}
				?></h3>		

	<?php
		echo $this->IForm->input_('titre');
		echo $this->IForm->textarea('content');
		echo $this->IForm->input_('content_id');
	?>
<?php if ($ave !== 'V'){ echo $this->IForm->end_('Enregistrer'); }
				else {  echo '</form>' ;}
?>
<?php $liste_action = $this->Html->link('Contents', array('action' => 'index'),array('class'=>'noid')) ;
		$this->RAction->register($liste_action);
?></div>