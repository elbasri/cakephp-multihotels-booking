<style>
	label{
		width : 140px !important;
		text-align : left !important;
	}
</style>
<h1>Profile </h1>
<div class="form">
	<?=$this->Form->create('User')?>
	<div class="" >
		<fieldset>
			<legend>Administrareur</legend>
			
	<?php 
		echo $this->IForm->input('oldpassword',array('label'=>'Ancien Mot de passe','type'=>'password','value'=>'','div'=>'x9')) ;	
	   echo $this->IForm->input('password',array('label'=>'Nouveau Mot de passe','type'=>'password','value'=>'','div'=>'x9')) ;
	   echo $this->IForm->input('password2',array('label'=>'Confirmer Mot de passe','type'=>'password','value'=>'','div'=>'x9')) ;
	   echo '<div class="clear"></div>';
	   echo $this->IForm->input('tel1',array('label'=>'Tel 1','value'=>$tel1)) ;
	   echo $this->IForm->input('tel2',array('label'=>'Tel 2')) ;
	   echo $this->IForm->input('email',array('label'=>'Email')) ;
	?>
		</fieldset>
	</div>
	<div class="clear"></div>
	<?=$this->Form->end('Enregistrer')?>
</div>