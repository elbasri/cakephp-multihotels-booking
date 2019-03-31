<div class="photos">
		<div class="x8">
		<?php   foreach($photos as $p) :?>	
			<div class="x4">
				<?=$this->Html->image('/files/images/'.$p['HotelPhoto']['photo'],array('width'=>140, 'height'=>100));?>
				<h3><?=$p['Chambre']['name']?></h3>
				
			</div>	
		<?php endforeach ; ?>
		</div>
</div>
