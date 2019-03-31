
<div class="form">
<?php echo $this->IForm->create('Banner');?>

<h3>	<?php 
					if ($ave == 'A') {
					echo 'Ajout Banner';
					}elseif ($ave == 'E') {;
					echo	'Modification Banner';
					} else {
					echo	'Consultation Banner';
					}
				?></h3>		

	<?php
		echo $this->IForm->input_('id');

		echo $this->IForm->input_('action',array('options'=>$actions));
		echo '<div class="x10">'	;
			echo $this->Form->label('Contenu').'<br/>';
			echo $this->Form->textarea("content",array('label'=>false));					echo $this->IForm->editor("content");
		echo  '</div>'	;
	
	?>
<?php if ($ave !== 'V'){ echo $this->IForm->end_('Enregistrer'); }
				else {  echo '</form>' ;}
?>
<?php $liste_action = $this->Html->link('Banners', array('action' => 'index'),array('class'=>'noid')) ;
		$this->RAction->register($liste_action,false);
?></div>