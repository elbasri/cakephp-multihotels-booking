<h1>Services hotel<h1>
<div class="form">
	<?=$this->Form->create('Hotel',array('url'=>'/hotel/save'))?>
	<div class="x11">
		<fieldset>
			<legend></legend>
			<?=$this->Form->input('id')?>
			<?=$this->element('multi_select')?>
		</fieldset>
	</div>
	<!--<div class="clear"></div>-->
	<?=$this->Form->end('Enregistrer')?>
</div>