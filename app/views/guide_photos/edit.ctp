<div class="form">
<?php echo $this->IForm->create('GuidePhoto');?>
<?php
		echo $this->IForm->input_('id');
		echo $this->IForm->input('photo');
		echo $this->IForm->hidden('guide_id');
		
		
	?>
<?php if ($ave !== 'V'){ echo $this->IForm->end_('Enregistrer'); }
				else {  echo '</form>' ;}
?>
</div>