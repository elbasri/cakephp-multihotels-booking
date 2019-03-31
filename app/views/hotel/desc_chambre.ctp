<h1>Description Chambre</h1>
<div class="form">
<div class="x8">
	<ul class="portlet-tab-nav">
		<!--<li class="<?= is_null($chambre_id)  ? 'portlet-tab-nav-active' : '' ?>">
				<?=$this->Html->link(' Description General','/hotel/desc_chambre/')?>
		</li>-->
	
		<?php 	foreach ($chambres as $key=>$val ) : 
					$class= ($key == $chambre_id)  ? 'portlet-tab-nav-active' : '' ; 
		?>
			<li class="<?=$class?>">
				<?=$this->Html->link($val,'/hotel/desc_chambre/'.$key)?>
			</li>
		<?php endforeach ;?>	
	</ul>
</div>	
	<?=$this->Form->create('ChambreDescription',array('url'=>'/hotel/saveDesc'))?>
	<div class="x11">
		<fieldset>
			<legend></legend>
				<?=$this->Form->input('id')?>
				<?=$this->Form->input('description',array('value'=>$data['description'],'style'=>'width:800px','rows'=>10,'cols'=>30, "label"=>"description francais"))?>
				<!--<?=$this->Form->input('descriptioneng',array('value'=>$data['descriptioneng'],'style'=>'width:800px','rows'=>10,'cols'=>30,"label"=>"description english"))?>
				<?=$this->Form->input('descriptionesp',array('value'=>$data['descriptionesp'],'style'=>'width:800px','rows'=>10,'cols'=>30,"label"=>"description espagnol"))?>
				-->
				<?=$this->Form->hidden('chambre_id',array('value'=>$chambre_id))?>
				
		
		</fieldset>
	</div>
	<!--<div class="clear"></div>-->
	<?=$this->Form->end('Enregistrer')?>
</div>