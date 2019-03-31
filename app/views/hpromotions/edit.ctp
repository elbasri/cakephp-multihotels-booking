
<div class="form">
<?php echo $this->IForm->create('Hpromotion');?>

<h3>	<?php 
					if ($ave == 'A') {
					echo 'Ajout Hotel en prommotion';
					}elseif ($ave == 'E') {;
					echo	'Modification Hotel en prommotion';
					} else {
					echo	'Consultation Hotel en prommotion';
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
<?php $liste_action = $this->Html->link('Hotel en promotion', array('action' => 'index'),array('class'=>'noid')) ;
		$this->RAction->register($liste_action,false);
?></div>