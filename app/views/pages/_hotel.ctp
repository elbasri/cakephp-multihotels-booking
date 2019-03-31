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
			<div class="price-box">A partir de <span class="price">100</span> €</div>
		</div><!--end priceinfoBox-->
		
		
	</div><!--end catBox-->
	
	<div class="viewsProdBox">
		
		<div class="prodpreview">
			<div id="slideshow"></div>
		</div>
		<div class="othersViews">
			<div id="thumbs">
			<ul class="thumbs noscript">
				<?php foreach($photos as $p) :?>
					<li>
						<a class="thumb"  href="<?php  echo $this->Html->url('/uploads/'.$p['HotelPhoto']['photo'])?>" >
							<img width="106" height="63" src="<?php  echo $this->Html->url('/uploads/thumbs/'.$p['HotelPhoto']['photo'])?>" />
						</a>
						<div class="caption">
							Bllablabla
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
			<li><a href="#first">Description</a></li>
			<li><a href="#second">Opinion des clients</a></li>
			<li><a href="#third">Chambres et disponibilités</a></li>
						</ul>

		<div id="first" class="prod-desc">
			<p><?php echo $h['Hotel']['description']?></p>
			
			
		</div><!--end prod-desc-->
		
		
		<div id="second" class="prod-desc">
			
		</div><!--end prod-desc-->
		
	
		<div id="third" class="prod-desc">
	</a>
	<div class="caption">
	
	</div>

			<?php echo $h['Hotel']['nbre_chambres']?> Chambres -  <?php echo $h['Hotel']['nbre_etages']?> Etages

			<?php foreach($h['Hservice'] as $s):?>
					<?php echo $s['name'].' - ' ?>		
<?php
//print_r($h);
//exit();
?>
			<?php endforeach;?>
<?php foreach($h['Chambre'] as $c):?>
<div id="<?php echo $c['id'] ?>" class="chambre_container">

		<h1><?php echo $c['name'] ?>			<span>- 2  Pers.</span>
			<span>- pdj inclus</span>
		</h1> 
		<div class="price-box">A partir de 
			<span class="price">
													<?php echo $this->Front->ToDevise($h['Hotel']['hotelPrix'],$h['Hotel']['Devise'])?>
										<?php echo  $this->Front->devise()?>
			</span> 
			Dh	
		</div>

		
	<a href="<?php echo $h['Hotel']['id'] ?>/<?php echo $h['Hotel']['chambre_id']['chambre'] ?>" class="showDates btnLink">Réserver</a>

					<?php echo $c['name'] ?>		
	</li>
</div>
			<?php endforeach;?>									

									
<div class="chambre_desc left">

	<div class="chambre_photo left">
	</div>	
	<div class="clear"></div>
	
	<div class="chambre_disponibilite">	
<div class="clear"></div>	</div>
	
	
	<div id="ser_15" class="infos_services" style="display:none">		</div><!--end prod-desc-->
		

	</div><!--end detailsBox-->
	
		
</div><!--end viewpage-->
<div id="search_popup" style="display:none">
<div class="right fleche"></div>
<h1 class="close"><a href="#" class="hide right">Fermer</a></h1>
<form method="post" action="pages/search/" accept-charset="utf-8">
<div style="display:none;"><input type="hidden" name="_method" value="POST" />
</div><div class="input text"><label for="s_du_bis">Arrivée</label><input name="data[Search][du]" type="text" id="s_du_bis" />
</div><div class="input text"><label for="s_au_bis">Départ</label><input name="data[Search][au]" type="text" id="s_au_bis" />
</div><div class="clear"> </div>
	<div class="right">
		<button class="btn_send" type="submit">Envoyez</button>
	</div>
</form>
</div>
<script>
function initialize() {
			if (GBrowserIsCompatible()) {
				var latitude  = 34.0606947782712 ;
				var longitude =   -4.972429275512701 ;
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
			
			$('.btn_send').click(function(){
				url = $(this).attr('href');
			    qte_val =  $('#a' + $(this).attr("id")).val() ;
				url = url + '/' + qte_val ;
				window.location = url ;
				alert(url);
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

