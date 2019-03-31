<div id="nivoSlider" class="sliderhome">
						<?php
							foreach($sliders as $p) :
								$myImg =	$this->Html->image('/files/images/'.$p['Slider']['photo'] ,array(
														'title'=>$p['Hotel']['name'] ,'style'=>'width:100%','height'=>363 , 'alt'=>$p['Hotel']['name'] 
													));
													$nasser= str_replace('&','',$p['Slider']['name']);
													$nasser=str_replace(':','',$nasser);
													$nasser=str_replace(' ','-',$nasser);
								echo  $this->Html->link($myImg,'/'.$nasser.'-'.$p['Slider']['hotel_id'],array('escape'=>false))	;				
							endforeach ;
						?>
						
						
                    </div>
                    
<style>
#nivoSlider {
    position:relative;
    width:100% !important; /* Change this to your images width */
    height:363px; /* Change this to your images height */
    background:url(images/loading.gif) no-repeat 50% 50%;
}
#nivoSlider a {
    border:0;
    display:block;
}
</style>

<script type="text/javascript">
$(window).load(function() {
    $('#nivoSlider').nivoSlider({
		//effect:  'random', // Specify sets like: 'fold,fade,sliceDown'
		slices:15, // For slice animations
        boxCols: 8, // For box animations
        boxRows: 4, // For box animations
        animSpeed:500, // Slide transition speed
        pauseTime:3000, // How long each slide will show
        startSlide:0, // Set starting Slide (0 index)
        directionNav:false, // Next & Prev navigation
        directionNavHide:true, // Only show on hover
        controlNav:false, // 1,2,3... navigation
        controlNavThumbs:false, // Use thumbnails for Control Nav
        controlNavThumbsFromRel:false, // Use image rel for thumbs
        controlNavThumbsSearch: '.jpg', // Replace this with...
        controlNavThumbsReplace: '_thumb.jpg', // ...this in thumb Image src
        keyboardNav:true, // Use left & right arrows
        pauseOnHover:true, // Stop animation while hovering
        manualAdvance:false, // Force manual transitions
        captionOpacity:0.8, // Universal caption opacity
        prevText: '', // Prev directionNav text
        nextText: '', // Next directionNav text
        beforeChange: function(){}, // Triggers before a slide transition
        afterChange: function(){}, // Triggers after a slide transition
        slideshowEnd: function(){}, // Triggers after all slides have been shown
        lastSlide: function(){}, // Triggers when last slide is shown
        afterLoad: function(){} // Triggers 
	
	
	});
});
</script>

