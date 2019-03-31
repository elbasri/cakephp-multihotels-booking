<h1>Extra</h1>
<div class="form">
<?=$this->Form->create('HotelExtra',array('url'=>'/hotel/saveExtra'))?>

<?php foreach ($extras as $et) :?>



<div class="" >
		<fieldset>
			<legend><?=$et['ExtraType']['name']?></legend>
	<?php foreach($et['Extra'] as $e) :?>		
   		<div class="x10">
			<?php  	$elefts=  $this->IForm->selectList($e['Eleft']);
					$erights = $this->IForm->selectList($e['Eright']);
			?>
				<div >	
					<label><?=$e['name'] ?></label>
				
					<?=$this->Form->input('HotelExtra.'.$e['id'].'.eleft_id',array('div'=>false,'label'=>false,'options'=>$elefts));?>
					
					<?=$this->Form->input('HotelExtra.'.$e['id'].'.val',array('size'=>10,'label'=>false,'div'=>false)) ;?>
					
					<?=$this->Form->input('HotelExtra.'.$e['id'].'.eright_id',array('label'=>false,'div'=>false,'options'=>$erights)) ;?>
				</div>
			<?=$this->Form->hidden('HotelExtra.'.$e['id'].'.extra_id',array('value'=>$e['id']))?>
		</div>	
	<?php endforeach ;?>		
	</fieldset>
</div>





<?php endforeach ;?>


<div class="clear"></div>
<?=$this->Form->end('Enregistrer')?>
</div>