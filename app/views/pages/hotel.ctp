﻿<script type="text/javascript"src="http://maps.google.com/maps?file=api&amp;v=2&amp;key=AIzaSyDHcpZwjEdlnFXEsFklpE9HyVpCKFtzW9o&sensor=true">
</script>		
	<div class="viewpage">
                        
	<div class="catBox">
	
		<div class="catBinfo prodviewbox">
			<h2><?php echo $h['Hotel']['name']?></h2>
			<span class="resultnum">
				<?php echo $h['Hotel']['adresse_rue'].' , '.$h['Ville']['name'].' , '.$h['Pay']['name'] ?>
			</span>
		</div><!--end catBinfo-->
		
		 <div class="priceinfoBox">
			<div class="stars"><img src="<?php echo $this->Html->url('/img/stars/star'.$h['Hotel']['nbre_etoiles'].'.png')?>" alt="stars" /></div>
			<div class="price-box">A partir de <span class="price">
							<?php echo $this->Front->ToDevise($h['Hotel']['hotelPrix'],$h['Devise'])?>
							<?php echo $this->Front->devise()?>
					</span> 
					
			</div>
		</div><!--end priceinfoBox-->
		
		<!--<a href="#" class="btnLink">Réserver</a>-->
		
		
	</div><!--end catBox-->
	
	<div class="viewsProdBox">
		
		<div class="prodpreview">
			<div id="slideshow"></div>
		</div>
		<div class="othersViews">
			<div id="thumbs">
				<ul class="thumbs noscript">
                <?php 
					  $k=0; 
					  foreach($h['HotelPhoto'] as $p) :  
					$k++; if($k==17){ break; }  
				?>
                       
						<li>
							<a class="thumb"  href="<?php  echo $this->Html->url('/files/images/'.$p['photo'])?>" >
								<img width="80" height="63" src="<?php  echo $this->Html->url('/files/images/'.$p['photo'])?>" />
							</a>
							
							<div class="caption">
							
							</div>
						</li>
					<?php endforeach;?>
				</ul>
		   </div>
		</div>
		<div class="otherImgNavi">
			<div id="controls"></div>
		</div>	
		<div id="loading"></div>
		<div class="clear"></div>
	</div>
	
	<div class="detailsBox">
		<ul class="tabnavigation">
			<li><a href="#second">Chambres et disponibilités</a></li>
			<li><a href="#h_desc">Description</a></li>
			<li><a href="#h_service">Services</a></li>
            <li><a href="#h_carte">carte/Emplacement </a></li>
            <!--<li><a href="#commentaires">commentaires</a></li>-->
		</ul>
		
		<div id="second" class="prod-desc">
				<?php  foreach ($h['Chambre'] as $c) :
						$idh=$h['Hotel']['id'];
							echo $this->element('hotel_chambre',array('c'=>$c,'idhot'=>$idh)) ;
					   endforeach;
				?>	
		</div>
		
		<div id="h_desc" class="prod-desc">
			<p><?php echo $h['Hotel']['description']?></p>			
			<?php echo $h['Hotel']['nbre_chambres']?> Chambres -  <?php echo $h['Hotel']['nbre_etages']?> Etages
			
		</div>
		<div id="h_service" class="prod-desc">
			<ul>
				<?php foreach($h['Service'] as $key=>$vals) :?>	
						<li><span style="color:#CC0066"><?php echo $key?></span>
							<ul>
								<?php foreach($vals as $s):?>
										<li><?php echo $s; ?></li>
								<?php endforeach;?>	
							</ul>
						</li>	
				<?php endforeach ;?>		
			</ul>
		</div>	
		<div id="h_carte" class="prod-desc">
			<div style="height:100%;width:100%">
				<div id="map_canvas" style="width:600px;height:450px"></div>
			</div>	
		</div>		
		<div id="commentaires" class="prod-desc">
			<div style="height:100%;width:100%">
			<p>	pas de commentaires pour cet hôtel pour le moment. <p>
			</div>	
		</div>	
		
	</div>
	
	
</div><!--end viewpage-->



<div id="search_popup" style="display:none">
<div class="right fleche"></div>
<h1 class="close"><a href="#" class="hide right">Fermer</a></h1>
<?php
	echo $this->Form->create('Search',array('url'=>'/pages/search'));			
	echo $this->Form->input('du',array('id'=>"s_du_bis",'label'=>'Arrivée'));
	echo $this->Form->input('au',array('id'=>"s_au_bis",'label'=>'Départ'));
//	echo $this->Form->end('OK',array('type'=>'button'));
?>
<div class="clear"> </div>
	<div class="right">
		<button class="btn_send" type="submit">Envoyez</button>
	</div>
</form>
</div>
<script>
 /*function initialize() {
					  var myLatlng = new google.maps.LatLng(<?php echo $h['Hotel']['latitude'] ?>, <?php echo $h['Hotel']['longitude'] ?>);
					  var myOptions = {
						zoom: 8,
						center: myLatlng,
						mapTypeId: google.maps.MapTypeId.ROADMAP
					  }
					  var map = new google.maps.Map(document.getElementById("map_canvass"), myOptions);
					}

					function loadScript() {
					  var script = document.createElement("script");
					  script.type = "text/javascript";
					  script.src = "http://maps.google.com/maps/api/js?sensor=false&callback=initialize";
					  document.body.appendChild(script);
					}

					window.onload = loadScript;
*/

function initialize() {
			if (GBrowserIsCompatible()) {
				var latitude  = <?php echo $h['Hotel']['latitude'] ?> ;
				var longitude =  <?php echo $h['Hotel']['longitude'] ?> ;
				var map = new GMap2(document.getElementById("map_canvas"));
				map.setCenter(new GLatLng(latitude,longitude), 18);
				map.setUIToDefault();
				
  
			  var point = new GLatLng(latitude,longitude);
			  map.addOverlay(new GMarker(point));
			}
		}
	
	
</script>
<script type="text/javascript">
		 
			jQuery(document).ready(function($) {
			
				$("a.btn_toggle").click(function(){
					 div_id =  $(this).attr("href") ;
					$("#"+div_id).show("fast","swing", function(){}) ;
					$(this).parent().hide() ;
					return false;
				
				});
				
			
				$(".chambre_photo a").colorbox({width:"80%", height:"80%"});
				
				$('.showDates').click(function(){
								var pos = $(this).offset();  
								var width = $(this).width();
								var popwidth = $("#search_popup").width();
								$("#search_popup").css({ "left": (pos.left - 205) + "px", "top":pos.top + "px" });
								$('#search_popup').show();
								return false;
						}) ;
				
			$('.hide').click(function(){
				$('#search_popup').hide();
				return false;
			});
			
			$('.btnReserver').click(function(){
				url = $(this).attr('href');
			    qte_val =  $('#a' + $(this).attr("id")).val() ;
				url = url + '/' + qte_val ;
				window.location = url ;
				return false;
			});
			
			
			
			
			//	$('div.navigation').css({'width' : '185px', 'float' : 'left'});
			//	$('div.content2').css('display', 'block');

				// Initially set opacity on thumbs and add
				// additional styling for hover effect on thumbs
				var onMouseOutOpacity = 1.0;
				$('#thumbs ul.thumbs li').opacityrollover({
					mouseOutOpacity:   onMouseOutOpacity,
					mouseOverOpacity:  1.0,
					fadeSpeed:         'fast',
					exemptionSelector: '.selected'
				});
				
				// Initialize Advanced Galleriffic Gallery
				var gallery = $('#thumbs').galleriffic({
					delay:                     2500,
					numThumbs:                 8,
					preloadAhead:              10,
					enableTopPager:            false,
					enableBottomPager:         true,
					maxPagesToShow:            7,
					imageContainerSel:         '#slideshow',
					controlsContainerSel:      '#controls',
					captionContainerSel:       '#caption',
					loadingContainerSel:       '#loading',
					renderSSControls:          false,
					renderNavControls:         false,
					playLinkText:              'Play Slideshow',
					pauseLinkText:             'Pause Slideshow',
					prevLinkText:              '&lsaquo; Previous Photo',
					nextLinkText:              'Next Photo &rsaquo;',
					nextPageLinkText:          'Next &rsaquo;',
					prevPageLinkText:          '&lsaquo; Prev',
					enableHistory:             false,
					autoStart:                 false,
					syncTransitions:           true,
					defaultTransitionDuration: 0,
					onSlideChange:             function(prevIndex, nextIndex) {
						// 'this' refers to the gallery, which is an extension of $('#thumbs')
						this.find('ul.thumbs').children()
							.eq(prevIndex).fadeTo('fast', onMouseOutOpacity).end()
							.eq(nextIndex).fadeTo('fast', 1.0);
					},
					onPageTransitionOut:       function(callback) {
						this.fadeTo('fast', 0.0, callback);
					},
					onPageTransitionIn:        function() {
						this.fadeTo('fast', 1.0);
					}
				});
			});
				initialize() ;	
		</script>
		
<style>
#slideshow img{
	width:374px !important;
	height : 253px !important;
}
.pagination{
background: none repeat scroll 0 0 #EEEEEE;
    border: 1px solid #DDDDDD;
text-align: center;
}
.pagination a{
margin-left: 10px;
}
</style>
