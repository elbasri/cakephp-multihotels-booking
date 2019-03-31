<div class="form">
<?php echo $this->IForm->create('HotelChambre');?>
<?php
		echo $this->IForm->input_('id');
		echo $this->IForm->input_('chambre_id');
		echo $this->IForm->input_('nbre',array('label'=>'Nbre Pers.'));
		
		
		echo $this->IForm->input_('pension',array('options'=>$pensions));
		
		
		echo '<div class="clear"></div>';
	    /*echo $this->Form->label('Pension complete');
		echo $this->IForm->input_('pension',array('label'=>false));*/
		echo '<div class="clear"></div>';
		
		echo $this->IForm->hidden('hotel_id');
		
		
	?>
<?php if ($ave !== 'V'){ echo $this->IForm->end_('Enregistrer'); }
				else {  echo '</form>' ;}
?>
</div>