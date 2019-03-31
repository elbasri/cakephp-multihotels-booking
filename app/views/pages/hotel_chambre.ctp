
<?php 

foreach ($chambres as $c) : ?>
<div class="chambre_container">	

	<h1><?php echo $c['name']; ?>  
		<a class="btnLink" href="<?php echo $this->Html->url('/pages/reservation/'.$idhotel.'/'.$c['id'])?>">Réserver</a>	
	</h1>
	<div class="price-box">A partir de <span class="price"><?php echo $c['tarif'] ?></span> €</div>
	<div class="chambre_desc">
		<?php 
		
		echo $c['description']?>
	</div>
	<div class="chambre_service1">
		<ul>
			<?php foreach($c['Service'] as $key=>$val) :?>
				<li><?php echo $val?></li>
			
			
			<?php endforeach ;?>	
			
		</ul>
		<div id="preview" class="preview"><b>date dispo:<?php echo $infos['pages']['date1'];?></b></div><br></br>
	</div>
	
</div>

<?php endforeach ;?>
