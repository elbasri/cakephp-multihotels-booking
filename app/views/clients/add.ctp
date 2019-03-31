
<div class="form">
<div id="msg">
<?php echo $this->Session->flash(); ?>
</div>
<?php echo $this->IForm->create('Client');?>


	<?php
		echo $this->IForm->input_('login');
		echo $this->IForm->input_('password');
		
	
	?>
<?php echo $this->IForm->end_('Enregistrer'); 
?>
</div>