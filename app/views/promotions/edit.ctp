
<div class="form">
<?php echo $this->IForm->create('Promotion');?>

<h3>	<?php 
					if ($ave == 'A') {
					echo 'Ajout Promotion';
					}elseif ($ave == 'E') {;
					echo	'Modification Promotion';
					} else {
					echo	'Consultation Promotion';
					}
				?></h3>		

	<?php
		echo $this->IForm->input_('id');
		echo $this->IForm->input_('hotel_id');
		echo $this->IForm->input_('type');
		echo $this->IForm->input_('du');
		echo $this->IForm->input_('au');
		echo $this->IForm->input_('val1');
		echo $this->IForm->input_('val2');
	?>
<?php if ($ave !== 'V'){ echo $this->IForm->end_('Enregistrer'); }
				else {  echo '</form>' ;}
?>
<?php $liste_action = $this->Html->link('Promotions', array('action' => 'index'),array('class'=>'noid')) ;
		$this->RAction->register($liste_action,false);
?></div>