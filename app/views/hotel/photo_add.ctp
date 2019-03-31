<script>
jQuery(function($) {
   $('.divDialog').dialog({
        autoOpen: true,
		width: 800,
        //height: 500,
        bgiframe: true,
        modal: true,
		position: 'top',
        title:'Photo Hotel'
        });
		
});
</script>
<div class="form divDialog">
<?php echo $this->IForm->create('HotelPhoto',array('url'=>'/hotel/photo_add','type'=>'file'));?>

	<?php
		echo $this->IForm->input_('chambre_id',array('empty'=>'Photo principale'));
		echo $this->Form->input('photo',array('label'=>false,'type'=>'file'));
		echo $this->IForm->end_('Enregistrer');
	?>

</DIV>