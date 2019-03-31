<script type="text/javascript" src="<?php echo $this->Html->url('/js/vanadium.js')?>"></script>
<?php echo $session->flash('auth'); ?>

<div id="global_color">
<?php echo $form->create('Client',array('url'=>'/clients/login','class'=>'form_login')); ?>
	<div class="content_front">
		<div class="login">
			<h2 class="h2_inscription" >Connectez-vous</h2>
			<div class="field">
				<label>Username:</label>
					<span class="input">
						<?php 	$attributes=array('label'=>false,'class'=>'text', 'id'=>'login_email', 'value'=>'', 'div'=>false);
								echo $form->input('login', $attributes); 
						?>
					</span>
			</div> <!-- .field -->
			<div class="field">
				<label>Password:</label>
					<span class="input">
						<?php $attributes=array('label'=>false,'class'=>'text','type'=>'password', 'id'=>'login_password', 'value'=>'', 'div'=>false);
							   echo $form->input('password', $attributes); 
						?>
					</span>
			</div>   <div class="field">
				<a style="" href="<?php echo $this->Html->url('/pages/getPassword')?>" id="forgot_my_password">Mot de passe oublié?</a>
			</div>
			<div id="submit_fix" class="submit_login">
				<button type="submit" id="login_close" class="btn bg_btn">Login</button>
			</div>
		</div>
	</div>
	<?php echo $this->Form->end(); ?>
	<div id="inscription_form" class="form">
		<div id="msg">
				<?php echo $this->Session->flash(); ?>
		</div>
		
		<?php echo $this->IForm->create('Client',array('url'=>'/clients/add'));?>
			<h2 class="h2_inscription" >Inscrivez-vous gratuitement</h2>
		<?php
		echo "<div class='field'>";
			echo $this->IForm->input_('login',array('label'=>'Email','class'=>':email'));
		echo "</div>";	
		echo "<div class='field'>";	
			echo $this->IForm->input_('password',array('id'=>'password-id'));
		echo "</div>";		
		echo $this->Form->input('pass',array('type'=>'hidden'));
		echo "<div id='submit_fix'>";
			echo $this->IForm->submit("Enregistrer",array('div'=>false,'class'=>'bg_btn'));
			//echo $this->IForm->end_('Enregistrer'); 
		echo "</div>";	
		echo $this->IForm->end(); 
		?>
	</div>
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