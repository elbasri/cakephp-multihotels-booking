	
	<link href="<?php echo $this->Html->url('/css/Proweb-css-guide.css')?>" rel="stylesheet" type="text/css" />
	
<div style=" width: 160px;float:left">	
	<ul class="guide">
		 <li class="first">Ville du Maroc</li>
		<?php foreach ($guides as $key=>$val ) : ?>
			<li class ="<?php echo ($id==$key) ?  'current' :  '' ?>">
				<?php echo $this->Html->link($val,'/pages/guide/'.$key)?>
			</li>
		<?php endforeach;?>
	</ul>

	<div class="Activite_left">
	    <h2  class="TitreLeft" >Météo</h2>
<?php require_once 'Class/gwapic.class.php'; 
$Gwa = new Gwapic();
$Gwa->MeasureUnit = "C";
$Gwa->Language = "fr";
$Gwa->GetWeatherData('MARRAKECH, NH, MAROC');
$Gwa_Current = $Gwa->GetCurrentWeather();
 $Infos = $Gwa->GetInfos();

?>
         <div class="Meteo">
		   <img src="<?php echo $Gwa_Current["Icon"]; ?>">
		 </div>
         <div class="MeteoText">
            <p><span class="ville-meteo" > Marrakech</span>
             <span class="meteo-degre" ><?php  echo $Gwa_Current["Temp".$Gwa->MeasureUnit];?>&deg;</span>
			<span class="ville-meteo" >	<?php echo strtoupper($Gwa->MeasureUnit);?></span>
		
             </p>
			 
         </div> 
<span class="meteo-wind"><?php echo $Gwa_Current["Wind"]; ?></span>
<span class="meteo-humidity"><?php echo $Gwa_Current["Humidity"]; ?></span>	
	</div>	
</div>		

<div id="contenu_guide">
		<h1><?php  echo $g['Guide']['titre'] ?> </h1>
			<div class="img_guide">
					
					<div id="guideGallery"></div>
					<div id="thumbs">
						<ul class="thumbs noscript">
						<?php 
							  foreach($g['GuidePhoto'] as $p) :  
						 ?>
								<li>
									<a class="thumb"  href="<?php  echo $this->Html->url('/files/images/'.$p['photo'])?>" >
										<img width="106" height="63" src="<?php  echo $this->Html->url('/files/_thumbs/Images/'.$p['photo'])?>" />
									</a>
									<div class="caption">
									
									</div>
								</li>
							<?php endforeach;?>
						</ul>
				   </div>
				
					<div id="controls"> </div>
					
					<div id="loading"></div>
					<div class="clear"></div>
			</div>
		<h4> Déscription</h4>
		<div class="description">
			<?php  echo $g['Guide']['content'] ?>
		</div>
</div>

<script type="text/javascript">
			jQuery(document).ready(function($) {
				
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
					numThumbs:                 3,
					preloadAhead:              10,
					enableTopPager:            false,
					enableBottomPager:         true,
					maxPagesToShow:            7,
					imageContainerSel:         '#guideGallery',
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
		</script>
<style>
.thumbs{
	width :100% ;
	border:none !important ;
}
.thumbs li{
	display : block ;
	float  : left;
	padding: 12px;
}

#guideGallery img{
	  height: 270px !important;
      width: 420px !important;
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

