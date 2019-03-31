<div class="promosBox">
		<div class="promo-title">
			<h2>Promos &amp; offres spèciales</h2>
		</div><!--end promo-title-->
		<div class="promo-Wrap">
			<?php foreach($promotions as $h) :?>		
			<div class="prod-entry">
				<div class="prod-img">
					<img src="<?php echo $this->Html->url('/uploads/thumbs/'.$h['Hotel']['HotelPhoto'][0]['photo']); ?>"/>
				</div>
				
				<div class="prod-content">
					<h2 class="prop-title">
						<?php //echo $this->Html->link($h['Hotel']['name'] ,'/pages/hotel/'.$h['Hotel']['id'])?>
						<?php echo $html->link($h['Hotel']['name'],array('controller' => 'pages','action' => 'hotel','id' => $h['Hotel']['id'],'suffixe' => Inflector::slug($h['Hotel']['name'].'-'.$h['Hotel']['nbre_etoiles'].' etoiles -', '-'))); ?> 
						
					</h2>
					<span class="prop-ville"><?php echo $h['Hotel']['Ville']['name']?></span>
					<p class="prop-desc">
                           
						<?php echo $this->Front->truncate($h['Hotel']['description'],140)?>
					</p>
					<div class="price-box">
						<p>A partir de 
							<span class="price">
										<?php switch($h['Promotion']['type']){
											   case 1 : 
													
											   case 2 :
											}
										?>
										<?php echo $this->Front->ToDevise($h['Hotel']['hotelPrix'],$h['Hotel']['Devise'])?>
										<?php echo  $this->Front->devise()?>
							</span> 
						</p>
					</div>
				</div>
			</div>
			<?php endforeach;?>
		</div>
</div>