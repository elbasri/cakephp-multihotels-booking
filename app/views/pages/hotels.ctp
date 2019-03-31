<?php //die(print_r($hotels)); ?>
<?php //echo $this->element('slider',array('sliders'=>$sliders))?>

<div class="contentL2">
	<div class="prodListbox">
		<div class="catBox">
			<div class="catBinfo">
				<h2><?php //echo $pageTitle?></h2>
				<span class="resultnum">
					    <!--<?php echo $this->Paginator->counter(array( 'format' => '%count% ' ));?>
						trouvés--> 
				</span>
			</div>
			
			<div class="quantBox" id="hotel_tri">
				<span>Trier par :</span>
					<?php echo $this->Paginator->sort('Prix', 'hotelPrix')?>
					<?php echo ($this->action !=='villas_appart') ?  $this->Paginator->sort('Etoile','nbre_etoiles')  : '' ?>
			</div>
		</div>
                            
		<divdiv class="prodlist promo-Wrap">
		
			<?php foreach($hotels as $h) :?>
				<div class="prod-entry prod-lis-entry">
					<div class="prodListImg prod-img" style="height:200px; width:340px">

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
									<img src="<?=$this->Html->url('/')?>files/images/<?php echo $tof ;?>" style="height:200px; width:350px" />
									
									</a>
									<?php
								}
								else {
									echo $this->Html->image('/img/imglist.jpg');
								}
						?>
					</div><!--end prodListImg-->
					<div class="prod-content prod-list-content" style=" width:130px">
							<h2 class="prop-title">
								<!--<a href="<?php echo $this->Html->url('/pages/hotel/'.$h['Hotel']['id'])?>">
								<?php //echo $h['Hotel']['name']?></a>
--><p style="font-size:14px"><?php echo $html->link($h['Hotel']['name'],array('controller' => 'pages','action' => 'hotel','id' => $h['Hotel']['id'],'suffixe' => Inflector::slug($h['Hotel']['name'].'-'.$h['Hotel']['nbre_etoiles'].' etoiles -'.$h['Ville']['name'], '-'))); ?> </p>
								
								<?php if(!empty($h['Promotion'])) :?>
									<span class="prop-promo">  offre spéciale ! </span>
									<font style="color:#ff0000">
									<!--<?php switch($h['Promotion']['type']){
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
										-->
										</font><br/>
							<?php endif ; ?>
							</h2>
								<br>
							<p style="font-size:14px"><strong>Ville</strong> <span class="prop-ville"><?php echo $h['Ville']['name']?></span></p><br>
						
							<p class="prop-desc" style="text-align:justify">
								<?php  
									echo $this->Front->truncate($h['Hotel']['description'],100) ;
								?>
							</p>
							
					</div><!--end prod-content-->
					<div class="priceinfoBox" >
					<?php if($this->action !=='villas_appart'){ ?>
							<div align="center" class="stars"><img alt="stars" src="<?php 
				$iUrl = ($h['Hotel']['hotel_type_id'] ==  5 || $h['Hotel']['hotel_type_id'] ==  7  ) ? 'riad'	: '' ; 
				echo $this->Html->url('/img/stars/star'.$h['Hotel']['nbre_etoiles'].$iUrl.'.png');
									?>">
								</div>
							<?php } ?>	
							<div class="price-box">A partir de 
									<span class="price"><?php echo $this->Front->toDevise($h['Hotel']['hotelPrix'],$h['Devise'])?></span>
									<?php echo $this->Front->devise() ;?>
							</div>
							<div class="right">
<!--								<a class="btnLink" href="<?php echo $this->Html->url('/pages/hotel/'.$h['Hotel']['id'])?>">-->
<!--									Info & Tarifs-->
<!--								</a>-->
						<?php echo $html->link("Info & Tarifs",array('controller' => 'pages','action' => 'hotel','id' => $h['Hotel']['id'],'suffixe' => Inflector::slug($h['Hotel']['name'].'-'.$h['Hotel']['nbre_etoiles'].' etoiles -', '-')),array("class"=>"btnLink")); ?> 
								
							</div>	
					</div><!--end priceinfoBox-->
				</div><!--end prod-entry-->
			<?php endforeach;?>	
<?php if($this->params['paging']['Content']['count']>10){?>		
			<div class="pagenavi">
				<ul id="hotel_paginate">
						<li>  <?php echo $this->Paginator->first('<<'); ?></li>
						<li>  <?php echo $this->Paginator->prev('<',array('model'=>'Hotel')) ?></li>
						<?php echo $this->Paginator->numbers(array('tag'=>'li','separator'=>null,'model'=>'Hotel')) ?>	
						<li>  <?php echo $this->Paginator->next('>',array('model'=>'Hotel')) ?></li>
						<li>  <?php echo $this->Paginator->last('>>'); ?></li>
				</ul>			
			</div><!--end pagenavi-->
<?php } ?>
		</div><!--end prodlist-->
			   
	</div><!--end prodListbox-->
	
	
	
</div>
        
<script>
	jQuery(document).ready(function($) {
				$("#hotel_paginate a,#hotel_tri a").click(function(){
						var url = $(this).attr('href');
							$("#hotelSearch").attr('action',url) ;
							$("#hotelSearch").submit() ;
								return false;
						});
				});
</script>
<?php //die(print_r($h['HotelPhoto'])); ?>
