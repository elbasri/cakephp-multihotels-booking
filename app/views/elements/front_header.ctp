<!-- <div align="center"><h1>C'est un Demo du Script Simulaire de Booking.com, Dévelopé Par VotreCodeur.com <br><a href="http://www.votrecodeur.com/Composants/view/11/BookingPro_Script_de_reservation_Professionnel_similaire_de_Booking_com_Booking_Pro_Script_French_Version" style="color:red">Cliquer ici Pour 	Acheter Ce Script</a></h1></div>-->
<?php
$lien = "http://".$_SERVER['SERVER_NAME'];
$titre= $title_for_layout;
?>
<div class="header">
            <div class="navigationmenu">
			<a href="<?=$this->Html->url('/')?>"><button class="button logo"><h1>Booking System</h1></button></a>
            	<div style="float:right;margin-left:3px">
					<div><?php 
						echo $this->Form->create('Config',array('id'=>'deviseForm','url'=>'/pages/changeDevise')) ;
						echo $this->Form->input('devise_id',array('label'=>''));
						echo $this->Form->end()
					?>
					</div>
					<div>
						<a rel="nofollow" href="http://www.facebook.com/share.php?u=<?php echo $lien;?>" title="pargater " target="_blank" ><img src="<?=$this->Html->url('/img/')?>f.png"></a>
						<a rel="nofollow" href="https://twitter.com/intent/tweet?source=<?php echo $lien;?>&text=<?php echo $titre;?>: <?php echo $lien;?>" target="_blank" title="partager sur twitter"><img src="<?=$this->Html->url('/img/')?>t.png"></a>
						<a rel="nofollow" href="https://plus.google.com/share?url=<?php echo $lien;?>" target="_blank" title="partager sur google plus"><img src="<?=$this->Html->url('/img/')?>g.png"></a>					
					</div>
					</div>
					<ul>

                	<li><a href="<?php echo $this->Html->url('/liste-des-hotels')?>"><button class="button rose">Hotels</button></a></li>
                	<li><a href="<?php echo $this->Html->url('/produits_shopping')?>"><button class="button rose">Produits</button></a></li>
                	<li><a href="<?php echo $this->Html->url('/restos_sorties')?>"><button class="button rose">Restos et sorties</button></a></li>
                	<li><a href="<?php echo $this->Html->url('/blog')?>"><button class="button rose">Blog</button></a></li>
<!--                    <li><a href="<?php echo $this->Html->url('/pages/hotels')?>">hotels</a></li>-->
                   <!--<li><?php echo $html->link("hotels",array('controller' => 'pages','action' => 'hotels','suffixe' => Inflector::slug("hotels", '-'))); ?></li> 
                    <li><a href="<?php echo $this->Html->url('/pages/riads')?>">riads</a></li>
					<li><a href="<?php echo $this->Html->url('/pages/villas')?>">villas</a></li>
					<li><a href="<?php echo $this->Html->url('/pages/villas_appart')?>">Résidence</a></li>
					<li><a href="<?php echo $this->Html->url('/pages/content/5')?>">Qui sommes-nous</a></li>
					<li><a href="http://deals.votrecodeur.com/" target="_blank">Deals</a></li>
					
                    
					<li><a href="<?php echo $this->Html->url('/pages/content/13')?>">Pourquoi nous?</a></li>
                    <li style="background:none;">
						<a href="<?php echo $this->Html->url('/pages/contact')?>">Contactez-nous</a>
					</li>-->
                </ul>
					
            </div><!--end navigationmenu-->
			<?php
				if(isset($sliders)){?>
			<div class="hedl2">
			 
					<?php echo $this->element('slider',array('sliders'=>$sliders,'hotels'=>$hotels));?>
				
				 
			 
             <div class="clinetareaBoxs" >



<!--<img src="<?=$this->Html->url('/')?>/images/axia.png" alt="Nous Contacter" width="150"/>-->


            </div><!--end clinetareaBox-->

           
	<!--<div id="deviseBox">
				  <?php 
						echo $this->Form->create('Config',array('id'=>'deviseForm','url'=>'/pages/changeDevise')) ;
						echo $this->Form->input('devise_id',array('label'=>'Devise'));
						echo $this->Form->end()
					?>
			</div> --> 
<!--<div class="languageBox">
            	<ul>
                	<li>
					<a class="francais" href="fr">Francais</a></li>
                    <li style="margin:0px;"><a class="anglais" href="en">English</a></li>
                </ul>
            </div>	-->		
    
            
          
            
            </div>
				<?php }?>
            
<!--  -->
                
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


</script>