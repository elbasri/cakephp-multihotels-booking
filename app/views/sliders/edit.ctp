
<div class="form">
<?php echo $this->IForm->create('Slider');?>

<h3>	<?php 
					if ($ave == 'A') {
					echo 'Ajout Image Slider';
					}elseif ($ave == 'E') {;
					echo	'Modification Image Slider';
					} else {
					echo	'Consultation Image Slider';
					}
				?></h3>		

	<?php
		echo $this->IForm->input_('id');
		echo $this->IForm->input_('name',array('label'=>'Titre'));
		echo '<div class="x5">'.$this->IForm->input('photo').'</div>';
		echo $this->IForm->input_search('Hotel');
	    echo '<div class="clear"></div>' ;
		echo '<div class="x5"><label>Accueil</label>'.$this->IForm->input_('accueil',array('label'=>false,'div'=>false)).'</div>';
		echo '<div class="x5"><label>Hotel</label>'.$this->IForm->input_('hotel',array('label'=>false,'div'=>false)).'</div>';
		echo '<div class="x5"><label>Riad</label>'.$this->IForm->input_('riad',array('label'=>false,'div'=>false)).'</div>';
		echo '<div class="x5"><label>Apparts</label>'.$this->IForm->input_('appart',array('label'=>false,'div'=>false)).'</div>';
		
		
		//echo $this->IForm->input_('order');
	?>
<?php if ($ave !== 'V'){ echo $this->IForm->end_('Enregistrer'); }
				else {  echo '</form>' ;}
?>
<?php $liste_action = $this->Html->link('Featureds', array('action' => 'index'),array('class'=>'noid')) ;
		$this->RAction->register($liste_action,false);
?></div>