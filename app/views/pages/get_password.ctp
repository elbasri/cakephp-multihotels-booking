<script type="text/javascript" src="<?php echo $this->Html->url('/js/vanadium.js')?>"></script>
		<div id="msg">
				<?php echo $this->Session->flash(); ?>
		</div>

<div id="global_color">
<?php echo $form->create('Client',array('url'=>'/pages/getPassword','class'=>'form_login')); ?>
	<div class="content_front">
		<div class="login">
			<h2 class="h2_inscription" >Mot de passe oublié </h2>
			<div class="field">
				<label>Votre email:</label>
					<span class="input">
						<?php 	$attributes=array('label'=>false,'class'=>'text', 'id'=>'login_email', 'value'=>'', 'div'=>false);
								echo $form->input('login', $attributes); 
						?>
					</span>
			</div> <!-- .field -->

			<div id="submit_fix" class="submit_login">
				<button type="submit" id="login_close" class="btn bg_btn">Login</button>
			</div>
		</div>
	</div>
	<?php echo $this->Form->end(); ?>

	<?php echo $this->element("sql_dump");?>
</div>
<script>

$(document).ready(function() {
//	$('#password-id').focus(function() {
//		var value=$(this).val();
//		alert(value);
//	});
	$('#password-id').blur(function() {
		var value=$(this).val();
		$('#ClientPass').val(value);

		
	});
});
</script>