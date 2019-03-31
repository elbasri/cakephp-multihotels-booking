
<div class="form">
<?php echo $this->IForm->create('ExtraRight');?>

<h3>	<?php 
					if ($ave == 'A') {
					echo 'Ajout Extra Right';
					}elseif ($ave == 'E') {;
					echo	'Modification Extra Right';
					} else {
					echo	'Consultation Extra Right';
					}
				?></h3>		

	<?php
		echo $this->IForm->input_('id');
		echo $this->IForm->input_('eright_id');
		echo $this->IForm->input_('extra_id');
	?>
<?php if ($ave !== 'V'){ echo $this->IForm->end_('Enregistrer'); }
				else {  echo '</form>' ;}
?>
<?php $liste_action = $this->Html->link('Extra Rights', array('action' => 'index'),array('class'=>'noid')) ;
		$this->RAction->register($liste_action);
?></div>