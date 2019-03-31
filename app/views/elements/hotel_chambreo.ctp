<div id="ch_<?php echo $c['id']?>" class="chambre_container">	
	<div class="chambre_header">
		<h1><?php echo $c['name']?>
			<span>- <?php echo $c['HotelChambre']['nbre']?>  Pers.</span>
			<span>- <?php echo $pensions[$c['HotelChambre']['pension']] ;  ?></span>
		</h1> 
		<div class="price-box">A partir de 
			<span class="price"><?php echo $this->Front->toDevise($c['tarif'],$h['Devise']) ?></span> 
			<?php echo  $this->Front->devise() ;?>	
		</div>
	</div>	

	<div class="chambre_promo left width-fix">
		<?php foreach($c['Promotion'] as $promo) :?>
			Du  <span><?php echo $promo['du']?></span>  Au  <span><?php echo $promo['au']?></span>
			<span><?php echo $promo['titre']?></span>
			<span class="promo_s"><?php echo $this->Front->promo($promo)?></span><br/>
		<?php endforeach ;?>
	</div>
	<div class="chambre_desc left">
		- <?php echo $c['description']?>
	</div>
	
	<div class="chambre_photo left">
				<?php  if(!empty($c['Photo']))  :
						$i = 0 ;
						foreach($c['Photo'] as $photo) :
								$p = ($i==0) ? $this->Html->image('/files/images/'.$photo,array('width'=>110,'height'=>70)) :  '' ; 
								echo $this->Html->link($p,'/files/images/'.$photo,array('rel'=>'pho'.$c['id'],'escape'=>false)) ;
							$i++; 	
						endforeach ;
				 endif;
				?>
	</div>	
	<div class="clear"></div>
	
	<div class="chambre_disponibilite">	
	<?php if (isset($dispo)) : ?>

		<?php   $etat = '' ;  
				$total = 0 ;
				$qte = 1 ;
				echo $this->Front->disponibilite($c['id'],$dispo,$etat,$total,$qte,$h['Devise']); 
				switch($etat){
					case  'disponible'    : 
							$url  = array('controller'=>'pages','action'=>'reserver',$c['HotelChambre']['hotel_id'],
							$c['id'],$this->Session->read('Search.du'),$this->Session->read('Search.au'));
							$qtes = array() ;
							
							for($i=1; $i <=  $qte ; $i++) :
								$qtes[$i] = $i ;
							endfor;
							echo $this->Html->link('Réserver',$url,array('id'=>'b'.$c['id'],'class'=>'btnLink btnReserver'));	
							echo $this->Html->link('Modifier les dates','#search_popup',array('class'=>'btnLink showDates','style'=>'clear:both'));
							echo $this->Form->input('qte',array('options'=>$qtes,'id'=>'ab'.$c['id']));
							
							
						break ;
					case  'indisponible' :   
						  
						   echo $this->Html->link('Modifier les dates','#search_popup',array('class'=>'btnLink showDates'));	
						break ;
						
					case  'demande'      :   
					/*	echo $this->Html->link('Modifier les dates','#search_popup',array('class'=>'btnLink showDates'));	*/
						$url  = array('controller'=>'pages','action'=>'demande',$c['HotelChambre']['hotel_id'],
						$c['id'],$this->Session->read('Search.du'),$this->Session->read('Search.au'));
						echo $this->Html->link('Demander la disponibilité',$url,array('class'=>'btnLink btnDemande'));
						echo $this->Html->link('Modifier les dates','#search_popup',array('class'=>'btnLink showDates','style'=>'clear:both'));
						break ;
					default : break;
			}	
				
		?>
			<div class="clear"></div>
			<div class="total_dispo">
					<span>Total :</span>
					<span class="price"><?php echo $total ?></span><?php echo $this->Front->devise() ?>
			</div>
		<?php 
			else :	
					echo $this->Html->link('Vérifier la disponibilité','#search_popup',array('rel'=>'#search_popup','class'=>'btnLink showDates'));	
					echo '<div class="clear"></div>';
			endif;
		?>
	</div>
	
	
	<div id="<?php echo 'ser_'.$c['id']?>" class="infos_services" style="display:none">
		<?php 	
				$i = 0;
				$s_preview = array();
				foreach($c['Service'] as $key=>$vals) :
		?>
			<div class="chambre_service">
				  <h3 style="color:#CC0066"><?php echo $key?></h3>
					<ul>
						<?php foreach($vals as $s) :?>
								<li><?php echo $s?></li>
								<?php if(($i%10 == 1)) :
										$s_preview[] = $s ;
									  endif;
								?>    
						<?php endforeach ;?>	
					</ul>
			</div>		
		<?php   $i++;
				endforeach;
		?>
		<a href="<?php echo 'pre_'.$c['id']?>" class="btn_toggle"> 
			Afficher moins
		</a>
	</div>	
	
	
	
	<div id="<?php echo 'pre_'.$c['id']?>" class="services_preview">
			<ul>
				<?php foreach($s_preview as $s) :?>
					<li><?php echo $s?></li>
				<?php endforeach; ?>
			</ul>	
		<a href="<?php echo 'ser_'.$c['id']?>" class="btn_toggle">
			Afficher plus
		</a>
	</div>
	
	

	
	
</div>

