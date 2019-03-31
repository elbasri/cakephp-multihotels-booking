<h1>Services Chambre</h1>
<div class="form">
<div class="x8">
	<ul class="portlet-tab-nav">
		<!--<li class="<?= is_null($chambre_id)  ? 'portlet-tab-nav-active' : '' ?>">
				<?=$this->Html->link(' Service General','/hotel/cservice/')?>
		</li>-->
	
		<?php 	foreach ($chambres as $key=>$val ) : 
					$class= ($key == $chambre_id)  ? 'portlet-tab-nav-active' : '' ; 
		?>
			<li class="<?=$class?>">
				<?=$this->Html->link($val,'/hotel/cservice/'.$key)?>
			</li>
		<?php endforeach ;?>	
	</ul>
</div>	
	<?=$this->Form->create('Hotel',array('url'=>'/hotel/save'))?>
	<div class="x11">
		<fieldset>
			<legend></legend>
			<?=$this->Form->input('id')?>
			<?=$this->Form->hidden('chambre_id',array('value'=>$chambre_id))?>
			<?=$this->element('multi_select',array('fieldName'=>'Cservice'))?>
		</fieldset>
	</div>
	<!--<div class="clear"></div>-->
	<?=$this->Form->end('Enregistrer')?>
</div>