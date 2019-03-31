
<div class="form">
<?php $this->IForm->create('Banner');?>

<h3>	<?php 
					if ($ave == 'A') {
					echo 'Ajout ';
					}elseif ($ave == 'E') {;
					echo	'Modification Banner';
					} else {
					echo	'Consultation Banner';
					}
				?></h3>		

	<?php
		echo $this->IForm->textarea("content");
		echo $this->IForm->input_('action');
	?>
<?php if ($ave !== 'V'){ echo $this->IForm->end('Enregistrer'); }
				else {  echo '</form>' ;}
?>
<?php $liste_action = $this->Html->link('Banner', array('action' => 'index'),array('class'=>'noid')) ;
		$this->RAction->register($liste_action,false);
?></div>