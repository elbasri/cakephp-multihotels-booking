<div class="cdc-box">
		<div class="cdc-tilte promo-title">
			<h2>Coups de coeur</h2>
		</div><!--end cdc-tilte-->
		
		<div class="cdc-wrap">
			<?php foreach($featureds as $h) : ?>

			  <div class="prod-entry">
				<div class="prod-img">
					<img src="<?php echo $this->Html->url('/files/images/'.$h['Hotel']['HotelPhoto'][0]['photo']); ?>" alt="prod-img" />
				</div><!--end prod-img-->

					<div class="prod-content">
						<h2 class="prop-title"><!--
							<a href="<?php echo $this->Html->url('/pages/hotel/'.$h['Hotel']['id'])?>">
								<?php echo  $h['Hotel']['name']?>
							</a>
						--><?php echo $html->link($h['Hotel']['name'],array('controller' => 'pages','action' => 'hotel','id' => $h['Hotel']['id'],'suffixe' => Inflector::slug($h['Hotel']['name'].'-'.$h['Hotel']['nbre_etoiles'].' etoiles -', '-'))); ?> 
							
						</h2>
						<span class="prop-ville">
							<?php echo  $h['Hotel']['Ville']['name']?>
						</span>
						<!--<p class="prop-desc">Paco est Khadija vous accueilleront dans leur riad marocain traditionnel</p>-->
						<div class="price-box">
							<p>A partir de 
								<span class="price">
										<?php echo $this->Front->ToDevise($h['Hotel']['hotelPrix'],$h['Hotel']['Devise'])?>
										<?php echo  $this->Front->devise()?>
								</span> 
							</p>
						</div>
					</div><!--end prod-content-->
			    </div><!--end prod-entry-->
			<?php endforeach; ?> 
		</div><!--end cdc-wrap-->
		
</div><!--end cdc-box-->
	
<div class="clear"></div>
       