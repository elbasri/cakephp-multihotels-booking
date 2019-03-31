<script>
$(document).ready(function() {
	$('#btn_add_pop').click(function(){
		$('.divDialog').remove();
		$.get($(this).attr('href'), function(data) {
					$('#myDialog').html(data);});
			return false ;		
	});			
});
</script>

<div class="photos">
<h1>Photos</h1>
	<div class="x5"><?=$this->Html->link('Ajouter','/hotel/photo_add',array('id'=>'btn_add_pop'))?>	</div>
<div class="x8">


<?php   foreach($photos as $p) :?>	
<div class="x4">
	<?=$this->Html->image('/files/images/'.$p['HotelPhoto']['photo'],array('width'=>200, 'height'=>200));?>
	<h3><?=$p['Chambre']['name']?></h3>
	<span><?=$this->Html->link('Supprimer','/hotel/photo_delete/'.$p['HotelPhoto']['id'],array('id'=>'btn_add_pop'))?></span>
</div>	
	
<?php endforeach ; ?>
	
</div>
</div>
<div id="myDialog">
</div>
