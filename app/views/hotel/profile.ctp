<style>
	label{
		width : 140px !important;
		text-align : left !important;
	}
</style>
<h1>Profile </h1>
<div class="form">
	<?=$this->Form->create('Hotel',array('url'=>'/hotel/profile'))?>
	<div class="" >
		<fieldset>
			<legend>Contact</legend>
			<?php 
		echo $this->IForm->input('oldpw',array('label'=>'Ancien Mot de passe','type'=>'password','value'=>'','div'=>'x9')) ;	
	   echo $this->IForm->input('pw',array('label'=>'Nouveau Mot de passe','type'=>'password','value'=>'','div'=>'x9')) ;
	   echo $this->IForm->input('pw2',array('label'=>'Confirmer Mot de passe','type'=>'password','value'=>'','div'=>'x9')) ;
	?>
		</fieldset>
	</div>
	<div class="clear"></div>
	<?=$this->Form->end('Enregistrer')?>
</div>