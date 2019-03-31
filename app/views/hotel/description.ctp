<h1>Description Hotel</h1>
<div class="form">
	<?=$this->Form->create('Hotel',array('url'=>'/hotel/save/'))?>
	<div class="x11">
		<fieldset>
			<legend></legend>
			<?php 
			   echo $this->Form->input('description',array('type'=>'textarea','style'=>'width:800px','rows'=>10,'cols'=>30,"label"=>"description francais")) ;
			?>
		</fieldset>
		
		<!--<fieldset>
			<legend></legend>
			<?php 
			   echo $this->Form->input('descriptioneng',array('type'=>'textarea','style'=>'width:800px','rows'=>10,'cols'=>30, 'label'=>"Description English")) ;
			?>
		</fieldset>
		
		<fieldset>
			<legend></legend>
			<?php 
			   echo $this->Form->input('descriptionesp',array('type'=>'textarea','style'=>'width:800px','rows'=>10,'cols'=>30, 'label'=>"Description Espagnol"));
			?>
		</fieldset>-->
	</div>
	<div class="clear"></div>
	<?=$this->Form->end('Enregistrer')?>
</div>