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
    <div class="Activite_left">
        <h2  class="TitreLeft" >module video</h2>
        <img width="134" height="122" src="http://votrecodeur.com/img/megavideo.png" />
    </div>

    <div class="Activite_left">
        <h2  class="TitreLeft" >module Météo</h2>
      
        <div class="Meteo"></div>
        <div class="MeteoText">
            <p>
                Temps clair	<br />		Vent : NO à 16 km/h	<br />	Humidité : 61%
            </p>
        </div>
    </div>      
</div>
<div id="contenu">


    <ul>
	<?php foreach($activities as $ac) : /*debug($ac) ;*/?>
        <li>
            <div class="Hotel_img">
			
                <img width="115" height="105" src="	<?php echo $this->Html->url('/files/Images/'.$ac['Activite']['thumb'])?>" />
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
			<?php echo $ac['Activite']['content']?>
            <p class="DescriptionHotel">
                <a href="#">(plus)</a>
			</p>
            <div class="DivContact">
                <a href=""> Contact </a>
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

<script>
$(window).load(function() {
    $('#Pagination a').live ('click' , function () { 
	
			$('#activiteSearch').attr('action',$(this).attr('href'));
			$('#activiteSearch').submit();
			return false;
		});	
	

});
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