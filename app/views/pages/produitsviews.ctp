<div class="viewpage">
                        
	<div class="catBox">
	
		<div class="catBinfo prodviewbox" style="width:70%">
			<h2><?php echo $p['Produit']['titre']?></h2>
			<span class="resultnum">
				<?php echo $p['Produit']['desc'] ?>
			</span>
		</div><!--end catBinfo-->
		
		 <div class="priceinfoBox">
			<div class="stars"><img src="<?php echo $this->Html->url('/img/stars/star'.$p['Produit']['star'].'.png')?>" alt="stars" /></div>
			<div class="price-box">Prix <span class="price">
							<?php echo round($p['Produit']['prix']/$this->Session->read('Devise.taux'))?>
							<?php echo $this->Front->devise()?>
					</span> 
					
			</div>
		</div><!--end priceinfoBox-->
		
		<!--<a href="#" class="btnLink">Réserver</a>-->
		
		
	</div><!--end catBox-->
	<?php if($test==1){ ?>
		<h1 style="color:red">Votre commande est maintenant en cours de traitement et vous serez avisé quand vos produits seront prêts à vous être envoyés.</h1>
	<?php }?>
	
	<div class="viewsProdBox">
		
		<div class="prodpreview" style="width:70%">
			<img style="width:100%;height:300px; box-shadow: 2px 2px 2px 2px #000; " src="<?php echo $p['Produit']['image'];?>" />
		</div>
		<div class="othersViews" style="width:28%">
<div id="info_groupe">	
<fieldset><legend><strong><h3>Acheter ce produit</h3></strong></legend>
<form method="POST" action="#"> 
<table >
<tr>
<td width="40%"><label for='name'><strong>Nom </strong></label></td>
<td><input type="text" name="name"></td>
</tr>
<tr>
<td><label for='tel'><strong>Telephone: </strong></label></td>
<td><input type="text" name="tel"></td>
</tr>
<tr>
<td><label for='email'><strong>Email: </strong></label></td>
<td><input type="text" name="email"> </td>
</tr>

<tr><td></td><td><input type="submit" value="Envoyer" name='submit' onclick=""></td></tr>
</table>
<td><label for='email'></label></td>

</form>
</fieldset>
</div>
<div id="info_groupe">
			
			<h3>Contactez-nous</h3>
			<hr>
			<span class="infos_span_groupe">
				<img class="icon_infos" alt="Booking Pro Script [French Version] By VotreCodeur.com" src="<?php echo $this->Html->url('/img/phone_groupe.png'); ?>"></span><span class="infos_texte"><?php echo $tel1;?>   </span>
				<span class="infos_span_groupe"><img class="icon_infos" alt="Booking Pro Script [French Version] By VotreCodeur.com" src="<?php echo $this->Html->url('/img/phone_groupe.png'); ?>"></span><span class="infos_texte"><?php echo $tel2;?></span>
                <span class="infos_span_groupe"><img class="icon_infos" alt="Booking Pro Script [French Version] By VotreCodeur.com" src="<?php echo $this->Html->url('/img/mail_groupe.png'); ?>"></span><span class="infos_texte"><?php echo $email;?></span>
			<!--<span class="infos_span_groupe"><img class="icon_infos" alt="Booking Pro Script [French Version] By VotreCodeur.com" src="http://votrecodeur.com/img/skype_groupe.png"></span><span class="infos_texte">Booking Pro Script [French Version] Script de Centrale de résérvation profesionnel By VotreCodeur.com </span>
			<span class="infos_span_groupe"><img class="icon_infos" alt="Booking Pro Script [French Version] By VotreCodeur.com" src="http://votrecodeur.com/img/facebook_groupe.png"></span><span class="infos_texte">Booking Pro Script [French Version] Script de Centrale de résérvation profesionnel By VotreCodeur.com   </span>
			<a class="validation" href="#valideration_text"  title="confirmation">fffsssssss</a>-->
	</div>
	
		</div>
		<div class="otherImgNavi">
			<div id="controls"></div>
		</div>	
		<div id="loading"></div>
		<div class="clear"></div>
	</div>
	
	<div class="detailsBox" style="width:100%">
		<ul class="tabnavigation">
			<li><a href="#second">Plus de détails</a></li>
            <li><a href="#h_carte">carte/Emplacement </a></li>
            <!--<li><a href="#commentaires">commentaires</a></li>-->
		</ul>
		
		<div id="second" class="prod-desc" style="width:100%">
				<?php echo $p['Produit']['produit'];?>
		</div>
		<div id="h_carte" class="prod-desc" style="width:100%">
			<?php echo $p['Produit']['carte'];?>
		</div>
		
	</div>
	
	
</div><!--end viewpage-->


