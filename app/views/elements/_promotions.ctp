<div class="promosBox">
		<div class="promo-title">
			<h2>Promos  offres spèciales</h2>
		</div><!--end promo-title-->
		<div class="promo-Wrap">
			<?php foreach($promotions as $h) :?>		
			<div class="prod-entry">
				<div class="prod-img">
					<?php echo $this->Html->image('/uploads/thumbs/'.$h['Hotel']['photoHotel'])?>
				</div>
				
				<div class="prod-content">
					<h2 class="prop-title">
						<?php echo $this->Html->link($h['Hotel']['name'] ,'/pages/hotel/'.$h['Hotel']['id'])?>
					</h2>
					<span class="prop-ville"><?php echo $h['Hotel']['Ville']['name']?></span>
					<p class="prop-desc">
                           
						<?php echo $this->Front->truncate($h['Hotel']['description'],140)?>
					</p>
					<div class="price-box">
						<p>A partir de 
							<span class="price">
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