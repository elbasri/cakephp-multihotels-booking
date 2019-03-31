
<?php echo $html->css('Proweb-css-activite'); ?>
<div class="ColumnRightActivite">
    <div class="Activite_left">
		<?php echo $this->Form->create('Activite',array('id'=>'activiteSearch','url'=>'/pages/activite'));?>	
        <h2  class="TitreLeft" >Plus d'informations:</h2>
     <label class="Villes">villes</label>
        <?php echo $this->Form->input('ville_id',array('label'=>false,'div'=>false,'empty'=>'Choisir ville'))?>
		<label class="Categories"> Catégories </label>
        <div class="DivCheck">
			<?php
				echo $this->Form->input('ActiviteCategory',
										array('div'=>false,'label'=>false,'options'=>$categories,'type' => 'select','multiple' => 'checkbox')
								);
			?>
        </div>
		 <input type="submit" value="" class="srchhotBtn">
		<?php echo $this->Form->end()?>
    </div> 
	<a class="iframe"  href="#contact-colorbox"> <img id="contactez-nous"  src="http://votrecodeur.com/img/contactez-nous.jpg" /></a>
    <div class="Activite_left">
	
        <h2  class="TitreLeft" >Video</h2>
		<ul class="gallery clearfix">
		<li>
		<a class="youtube" href="http://www.youtube.com/embed/MmejCEpKAYI"  title="flv">
	  <img width="" height="" src="http://votrecodeur.com/img/megavideo.png" />
	</a></li>
		</ul>
    
    </div>
	

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
<div id="contenu">


    <ul>
	<?php $i=0; ?>
	<?php foreach($activities as $ac) : /*debug($ac) ;*/?>
        <li>
            <div class="Hotel_img">
			<a href="<?php echo $this->Html->url('/files/images/'.$ac['Activite']['thumb'])?>" rel="pho16" class="cboxElement"> <img width="115" height="105" src="<?php echo $this->Html->url('/files/images/'.$ac['Activite']['thumb'])?>" /></a>
               
            </div>
            <div class="Cat_Ads_Tele">
                <h3><?php echo $ac['Activite']['titre']?></h3>
				<p>
                    <span>Catégories </span>: <?php echo $ac['ActiviteCategory']['titre']?>
                </p>
                <p>
                    <span>Adresse </span> : <?php echo $ac['Activite']['adresse'] .' '.$ac['Ville']['name']?>  
                </p>
				<p>
                    <span>Téléphone </span>: <?php echo $ac['Activite']['telephone']?>
				</p>
            </div>
            <div class="Apartir">
                <span>à partir de</span>
                <a><?php echo $this->Front->toDevise($ac['Activite']['prix'],$ac['Devise']).' '.$this->Front->devise()?></a>

            </div>
			<!-----  Affichage Contenu activité -->
			
			
			<div id="ac_<?php echo $ac['Activite']['id']?>" class="DescriptionHotel" >
					<?php echo $ac['Activite']['content']?>
					<a style="float:right" class="btn_toggle">(-)</a>
			</div>	
			
          
            <div class="DivContact">
                <a class="iframe contacts"  href="#contact-eta" alt="id_a<?php echo $ac['Activite']['id']?>"  >Contact</a>
            </div>
		</li>
       <?php endforeach ; ?>
    </ul>
</div>
<div id="Pagination">
		 <ul>
		 
			<?php 
			    echo    $this->Paginator->numbers(array('tag'=>'li','separator'=>null,'model'=>'Activite')) 
			?>	
		 </ul>
</div>
</div>

<div style="display:none;">
			<div class="contact-colorbox" id="contact-eta" >
				
				<div class="left">
						<?php echo $this->Form->create('Contact-eta',array('url'=>'','id'=>'contact_eta'));
							  echo $this->Form->input('email_eta', array('type'=>'hidden','value'=>'')) ;
							  echo $this->Form->input('nom') ;
							  echo $this->Form->input('prenom') ;
							  echo $this->Form->input('email') ;
							  echo '<div class="msg_commentaire">';
								  echo $this->Form->input('sujet',array('div'=>'sujectid')) ;
								  echo $this->Form->input('message',array('type'=>'textarea')) ;
							  echo "</div>";
							  
							echo $this->Form->submit('Envoyer',array('id' => 'validez','onclick' => ''));
			                echo $this->Form->end();
						?>
				<div id="resultat"></div>				  
				</div>
			</div>
	</div>

	
<script>
jQuery(document).ready(function($) {
	/*$("a.btn_toggle").click(function(){
					
					 div_id =  $(this).attr("href") ;
					$("#"+div_id).show("fast","swing", function(){}) ;
					$(this).parents('.DescriptionHotel').hide() ;
					return false;
				
	});
		*/		
    $('#Pagination a').live ('click' , function () {
			$('#activiteSearch').attr('action',$(this).attr('href'));
			$('#activiteSearch').submit();
			return false;
		});	
	$(".youtube").colorbox({iframe:true, innerWidth:625, innerHeight:500});	
	
	$('.contacts').click(function(){
		$('#ContactEmailEta').val($(this).attr('alt'));
	});
});
var options15 = { 
     target:'#resultat', 
     type:'POST',
     url:'/pages/contactEta', 
     DataType:'script',
     success:function(x) { 
	 alert(x);
     } 
    };
    $('#contact_eta').ajaxForm(options15);		
		
</script>




<?php 
/*
  <h1> Activités:</h1>
  <ul class="guide">
  <?php foreach ($categories as $key=>$val ) : ?>
  <li class ="<?php echo ($id==$key) ?  'current' :  '' ?>">
  <?php echo $this->Html->link($val,'/pages/activite/'.$key)?>
  </li>
  <?php endforeach;?>
  </ul>

  <?php if($id) : ?>

  <?php foreach($rows as $row) : ?>
  <h1><?php echo $row['Activite']['titre']?></h1>

  <div><?php echo $row['Activite']['content']?></div>

  <?php endforeach ;?>

  <?php endif;?> */
?>