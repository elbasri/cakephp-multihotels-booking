
  <style type="text/css">

#formdate input {
   
    border: 1px solid #DFDFDF;
    border-radius: 2px 2px 2px 2px;
    color: #333333;
    font-size: 20px;
    width: 138px;
}
#resform input{

   	float: left;
    height: 24px;
    width: 100%;
}

#resform label {
float: left;
width: 30px;

}
li {
    list-style: none outside none;
}

#formdate label {
float: left;
width: 30px;

}

#first input,select {
    float: left;
    height: 24px;
    width: 237px;
}

#first label  {

float: none;
}
.input {
    float: none;
    height: 24px;
    width: 18%;
}

  </style>

<script type="text/javascript" src="<?php echo $this->Html->url('/js/jquery-1-6.js')?>"></script>
<script type="text/javascript" src="<?php echo $this->Html->url('/js/jquery.form.js')?>"></script>
	</script>
<script type="text/javascript">
//	$(document).ready(function(){
//		var options={
//					target='#inline_example1',
//					url='/dispo/10'
//
//	};
//
//		$('#btdispo').click(function() {
//
//			$('#dateform').ajaxSubmit(options);
//			return false;
//
//		});
//		
//		
//	});
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
			<div class="price-box">A partir de <span class="price"><?php echo $h['Hotel']['hotelPrix']?></span> €</div>
		</div><!--end priceinfoBox-->
		
		<a href="#" class="btnLink"  rel="example1">Réserver</a>
		
		
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
			<li><a href="#first">Formulaire de reservation </a></li>
		
		
		
		<div id="first" class="prod-desc">
	
		<?php 
		
	echo '<h1>RESERVATION</h1>';
	//echo count($datedispo);
	//debug($datedispo);
	$s = strtotime($date2)-strtotime($date1);
 	$d = intval($s/86400); 
 	
 	setlocale (LC_TIME, 'fr_FR','fra'); 
 	
  	$cp=count($datedispo);
 
 	echo "<b>".$chambre."</b><br>" ;
	echo "<b>".$d."&nbsp;Nuits</b>&nbsp;Du&nbsp; :<b>".$date1."</b>&nbsp; Au &nbsp; <b>".$date2."</b><br>";
	$montant=0;
	
			for($i=0;$i < $cp-1;$i++)
			{
			if ($datedispo[$i]['Inventaire']['dispo']<= $datedispo[$i]['Inventaire']['attente'])
			{
			
			//$this->redirect('http://www.votrecodeur.com');
			 header('Location: http://www.votrecodeur.com');
			}

			echo strftime("%A",strtotime($datedispo[$i]['Inventaire']['ladate']))."&nbsp; &nbsp;&nbsp;"; 
			echo '<b>tarif : '.$datedispo[$i]['Inventaire']['tarif'].'&nbsp;€</b><br>';
		
			$montant=$montant+$datedispo[$i]['Inventaire']['tarif'];
		
			
			
			}
			echo '<b>Totale :'.$montant.'</b>';
      
	//echo $date1."suivi de : ".$date2;
	echo '<h1>Informations Client </h1>';
	echo $form->create('pages', array('action' => 'reservform/'.$idhotel.'/'.$idchambre));
   

    echo '<label for="nom">Nom :</label><br>';
  
    echo $form->input('nom', array('label' => false , 'type'=>'text','class'=>'')); 
    echo '<br>';   

    echo 'Prenom :<br>';
  
    echo $form->input('prenom', array('label' => false , 'type'=>'text','class'=>''));
	echo '<br>';   
    
    echo '<label for="prenom">Email :</label><br>';
   
    echo $form->input('email', array('label' => false , 'type'=>'text','class'=>''));
 	 echo '<br>';   
    
    echo '<label for="prenom">Tel :</label><br>';

    echo $form->input('tel', array('label' => false , 'type'=>'text','class'=>''));
    echo '<br>';   
    echo '<h1>Coordonnées bancaires </h1>';
    
    echo '<label for="prenom">Type de carte bancaire  :</label><br>';
    
      echo $form->input('carte', array('type'=>'select',
         'options'=> array(
            'visa'=>'Visa',
            'MasterCard'=>'MasterCard',
            'American Express'=>'American Express',
            'Maestro'=>'Maestro',
         ), 'label'=>false,'class'=>'','id'=>''));
         
    echo '<br>'; 
    echo '<label for="prenom">Numéro de carte bancaire  :</label><br>';

    echo $form->input('numBc', array('label' => false , 'type'=>'text','class'=>''));
    echo '<br>';    
         
    echo '<label for="prenom">Code CVV  :</label><br>';

    echo $form->input('codecvv', array('label' => false , 'type'=>'text','class'=>''));
    echo '<br><br>';  
     
    echo $this->Form->button('Envoyez', array('type'=>'submit','class'=>'suivant'));
   
    echo $form->end();
   echo $this->element('sql_dump');
    ?>
		
		


			
		</div><!--end prod-desc-->
		
		
		
		
	
		</div><!--end prod-desc-->
		
	</div><!--end detailsBox-->
	
	



<!--end viewpage-->



</div>

<script type="text/javascript">
			jQuery(document).ready(function($) {
				//$(".btnLink").colorbox({initialWidth:"150px", initialHeight:"150px", inline:true, href:"#inline_example1"});
				// We only want these styles applied when javascript is enabled
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