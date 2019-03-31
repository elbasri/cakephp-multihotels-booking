<div class="header">
            <div class="navigationmenu">
            	<ul>
                	<li><a href="<?php echo $this->Html->url('/')?>">accueil</a></li>
<!--                    <li><a href="<?php echo $this->Html->url('/pages/hotels')?>">hotels</a></li>-->
                   <li><?php echo $html->link("hotels",array('controller' => 'pages','action' => 'hotels','suffixe' => Inflector::slug("hotels", '-'))); ?></li> 
                    <li><a href="<?php echo $this->Html->url('/pages/riads')?>">riads</a></li>
					<li><a href="<?php echo $this->Html->url('/pages/villas')?>">villas</a></li>
					<li><a href="<?php echo $this->Html->url('/pages/villas_appart')?>">Résidence</a></li>
					<li><a href="<?php echo $this->Html->url('/pages/loisirs')?>">loisirs</a></li>
					<li><a href="/deals">Deals</a></li>
					<!--<li><a href="<?php echo $this->Html->url('/pages/groupes')?>">groupes</a></li>-->
					
                    
					<li><a href="<?php echo $this->Html->url('/pages/content/13')?>">Pourquoi nous?</a></li>
                    <li style="background:none;">
						<a href="<?php echo $this->Html->url('/pages/content/12')?>">Comment ça marche?</a>
					</li>
                </ul><div style="float:right">
							 <?php 
						echo $this->Form->create('Config',array('id'=>'deviseForm','url'=>'/pages/changeDevise')) ;
						echo $this->Form->input('devise_id',array('label'=>''));
						echo $this->Form->end()
					?></div>
					
            </div><!--end navigationmenu-->
			
			<div class="hedl2">
			<h2><a href="<?php echo $this->Html->url('http://votrecodeur.com/')?>" class="logo">
				
					<img src="<?php echo $this->Html->url('/img/logo.png')?>" alt="Booking Pro Script [French Version] By VotreCodeur.com" /></a>
					
					
			</h2>
             <div class="clinetareaBox">
   <a href="http://votrecodeur.com/deals/" target="_blank"><img   src="<?php echo $this->Html->url('/img/nosdeals.jpg')?>" style="height:100px;width:250px"/></a>
   <a href="http://votrecodeur.com/deals/excursions.php" target="_blank"><img   src="<?php echo $this->Html->url('/img/nosexcursions.jpeg')?>" style="height:100px;width:200px"/></a>
            </div><!--end clinetareaBox-->

           
	<!--<div id="deviseBox">
				  <?php 
						echo $this->Form->create('Config',array('id'=>'deviseForm','url'=>'/pages/changeDevise')) ;
						echo $this->Form->input('devise_id',array('label'=>'Devise'));
						echo $this->Form->end()
					?>
			</div> -->      
    
            
            <div class="clear"></div>
            
          
            
          
            
            </div>
            
            
<!--  -->
                
</div>
<div style="display:none;">

<div class="contact-colorbox" id="contact-colorbox">		
	  <div class="left">
			<?php echo $this->Form->create('Contact',array('url'=>'/pages/contact','id'=>'contact_form'));
			
				  echo $this->Form->input('nom') ;
				  echo $this->Form->input('prenom') ;
				  echo $this->Form->input('email') ;
				  echo '<div class="msg_commentaire">';
					  echo $this->Form->input('sujet',array('div'=>'sujectid')) ;
					  echo $this->Form->input('message',array('type'=>'textarea')) ;
				  echo "</div>";
				  
				  echo $this->Form->end('Envoyer') ;
			?>
			
			
	  </div>
	  
</div>
</div>


</div>


 <script>
 
$(document).ready(function(){
$(".Hotel_img a").colorbox({width:"80%", height:"80%"});

	$("#ConfigDeviseId").change(function(){
		
		$("#deviseForm").submit();
	});
	$(".iframe").colorbox({inline:true, width:"50%"});
	//$(".moncompteiframe").colorbox({iframe:true, width:"600", height:"70%"});
	
//	$('#login_close').click(function(){
//	$.colorbox.close();
//	
//	
//	});

});	

var _gaq = _gaq || [];
_gaq.push(['_setAccount', 'UA-30019215-1']);
_gaq.push(['_trackPageview']);

(function() {
  var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
  ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
  var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
})();

</script>