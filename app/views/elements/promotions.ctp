<div class="promosBox">
		<div class="promo-title">
			<h2><strong>Promos &amp; offres spèciales</strong></h2>
		</div><!--end promo-title-->
		<div class="promo-Wrap">
			<?php foreach($promotions as $h) :?>		
			<div class="prod-entry">
				<div class="prod-img" style="height:200px; width:400px">
					<a href="<?php echo Inflector::slug($h['Hotel']['name'].'-'.$h['Hotel']['nbre_etoiles'].' etoiles -', '-'), '-'.$h['Hotel']['id'] ?>"><img src="<?php echo $this->Html->url('/files/images/'.$h['Hotel']['HotelPhoto'][0]['photo']); ?>" style="height200px; width:400px"/></a>
				</div>
				
				<div class="prod-content">
					<h2 class="prop-title">
						<?php //echo $this->Html->link($h['Hotel']['name'] ,'/pages/hotel/'.$h['Hotel']['id'])?>
						<p style="font-size:14px"><?php echo $html->link($h['Hotel']['name'],array('controller' => 'pages','action' => 'hotel','id' => $h['Hotel']['id'],'suffixe' => Inflector::slug($h['Hotel']['name'].'-'.$h['Hotel']['nbre_etoiles'].' etoiles -', '-'))); ?> </p>
						<?php if(!empty($h['Promotion'])) :?>
									<span class="prop-promo">  offre spéciale ! </span><br><br>
									<p style="color:#ff0000" >
									<?php switch($h['Promotion']['type']){
											   case 1 : 
													echo $h['Promotion']['val1'].'% de réduction'; break;
											   case 2 :
													echo $h['Promotion']['val1'].' nuits gratuites pour '.$h['Promotion']['val2'].' nuits reservées'; break;
											   case 3 :
													echo 'Early booking: '.$h['Promotion']['val1'].'% de réduction pour une réservation de '.$h['Promotion']['val2'].' jours avant arrivée!'; break;
											   case 4 :
													echo $h['Promotion']['val1'].'% de réduction pour un séjour minimum '.$h['Promotion']['val2']; break;
											   case 5 :
													echo $h['Promotion']['val1'].'% de réduction pour une réservation de '.$h['Promotion']['val1'].'% jours avant arrivée avec au minimum '.$h['Promotion']['val3'].' jour(s) reservés'; break;
											   case 0 :
													echo ' 	Last booking ('.$h['Promotion']['val1'].'% de réduction)';
											}
										?>
										</p>
							<?php endif ; ?>
					</h2>
					<p style="font-size:14px"><strong>Ville</strong> <span class="prop-ville"><?php echo $h['Hotel']['Ville']['name']?></span></p><br>
					<p class="prop-desc">
                          
						<?php echo $this->Front->truncate($h['Hotel']['description'],90)?>
					</p>
					<div class="price-box">
						<p>A partir de 
							<span class="price">
										<?php switch($h['Promotion']['type']){
											   case 1 : 
													
											   case 2 :
											   
											   case 3 :
											   
											   case 4 :
											   
											   case 5 :
											   
											   case 6 :
											}
										?>
										<?php echo $this->Front->ToDevise($h['Hotel']['hotelPrix'],$h['Hotel']['Devise'])?>
										<?php echo  $this->Front->devise()?>
							</span> 
						</p>
						<a href="<?php echo Inflector::slug($h['Hotel']['name'].'-'.$h['Hotel']['nbre_etoiles'].' etoiles -', '-'), '-'.$h['Hotel']['id'] ?>"><img alt="" src="<?=$this->Html->url('/')?>/files/images/bouton-reserver.png" style="width: 200px; height: 50px;"></a></p>
					</div>
				</div>
			</div>
			<?php endforeach;?>
			
		<div class="promo-title">
			<h2><strong>Nos derniers Hotels</strong></h2>
		</div>
			<?php foreach($hotels as $h) :?>
			<div class="prod-entry">
				<div class="prod-img" style="height:200px; width:400px">
					<?php

				$cc= count($h['HotelPhoto']);

			for($i=0;$i<=$cc;$i++)
					{
					if($h['HotelPhoto'][$i]['chambre_id'] == 0)
					{
					$tof = $h['HotelPhoto'][$i]['photo'];
					break;
					}
					}

						  if(strlen($tof)>0)  {?>
									<a href="/<?php echo Inflector::slug($h['Hotel']['name'].'-'.$h['Hotel']['nbre_etoiles'].' etoiles -'.$h['Ville']['name'], '-'), '-'.$h['Hotel']['id'] ?>">
									<img src="<?=$this->Html->url('/')?>/files/images/<?php echo $tof ;?>" style="height200px; width:400px" />
									
									</a>
									<?php
								}
								else {
									echo $this->Html->image('/img/imglist.jpg');
								}
						?>
				</div>
				<div class="prod-content">
					<h2 class="prop-title">
						<?php //echo $this->Html->link($h['Hotel']['name'] ,'/pages/hotel/'.$h['Hotel']['id'])?>
						<p style="font-size:14px"><?php echo $html->link($h['Hotel']['name'],array('controller' => 'pages','action' => 'hotel','id' => $h['Hotel']['id'],'suffixe' => Inflector::slug($h['Hotel']['name'].'-'.$h['Hotel']['nbre_etoiles'].' etoiles -'.$h['Ville']['name'], '-'))); ?> </p>
						<?php if(!empty($h['Promotion'])) :?>
									<span class="prop-promo">  offre spéciale ! </span><br><br>
									<p style="color:#ff0000" >
									<?php switch($h['Promotion']['type']){
											   case 1 : 
													echo $h['Promotion']['val1'].'% de réduction'; break;
											   case 2 :
													echo $h['Promotion']['val1'].' nuits gratuites pour '.$h['Promotion']['val2'].' nuits reservées'; break;
											   case 3 :
													echo 'Early booking: '.$h['Promotion']['val1'].'% de réduction pour une réservation de '.$h['Promotion']['val2'].' jours avant arrivée!'; break;
											   case 4 :
													echo $h['Promotion']['val1'].'% de réduction pour un séjour minimum '.$h['Promotion']['val2']; break;
											   case 5 :
													echo $h['Promotion']['val1'].'% de réduction pour une réservation de '.$h['Promotion']['val1'].'% jours avant arrivée avec au minimum '.$h['Promotion']['val3'].' jour(s) reservés'; break;
											   case 0 :
													echo ' 	Last booking ('.$h['Promotion']['val1'].'% de réduction)';
											}
										?>
										</p>
							<?php endif ; ?>
					</h2>
					<p style="font-size:14px"><strong>Ville</strong> <span class="prop-ville"><?php echo $h['Ville']['name']?></span></p><br>
					<p class="prop-desc">
                          
						<?php  
									echo $this->Front->truncate($h['Hotel']['description'],100) ;
								?>
					</p>
					<div class="price-box">
						<p>A partir de 
							<span class="price">
										<?php echo $this->Front->toDevise($h['Hotel']['hotelPrix'],$h['Devise'])?></span>
									<?php echo $this->Front->devise() ;?>
							</span> 
						</p>
						<a href="<?php echo Inflector::slug($h['Hotel']['name'].'-'.$h['Hotel']['nbre_etoiles'].' etoiles -', '-'), '-'.$h['Hotel']['id'] ?>"><img alt="" src="<?=$this->Html->url('/')?>/files/images/bouton-reserver.png" style="width: 200px; height: 50px;"></a></p>
					</div>
				</div>
			</div>
			<?php endforeach;?>
			
		</div>
</div>