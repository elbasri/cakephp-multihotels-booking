<?php echo $session->flash('auth'); ?>
<?php echo $form->create('Hotel',array('url'=>'/hotel/login')); ?>
<div class="content_front">
	<div class="pad">
		<div class="field">
			<label>Username:</label>
			<div class="">
				<span class="input">
					<?php 	$attributes=array('label'=>false,'class'=>'text', 'id'=>'login_email', 'value'=>'', 'div'=>false);
							echo $form->input('login', $attributes); 
					?>
				</span>
			</div>
		</div> <!-- .field -->
		<div class="field">
			<label>Password:</label>
			<div class="">
				<span class="input">
					<?php $attributes=array('label'=>false,'class'=>'text','type'=>'password', 'id'=>'login_password', 'value'=>'', 'div'=>false);
						   echo $form->input('pw', $attributes); 
					?>
					<a style="" href="javascript:;" id="forgot_my_password">Forgot password?</a>
				</span>
			</div>
		</div> <!-- .field -->
		<div class="field">
					<span class="label">&nbsp;</span>
					<div class=""><button type="submit" class="btn">Login</button></div>
		</div> <!-- .field -->
	</div>
</div>
<?php echo $this->Form->end(); ?>

