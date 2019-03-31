<?php   
		$cDispo   = $this->Front->resa_detail($r);
		$total  =  $r['Reservation']['montant']*$r['Reservation']['qte'];
		$apayer =  $total*$h['Hotel']['comission']/100;
?>	


<div class="viewpage" style="float: left; width: 20cm;">
<div id="logo_reservation" style="float: left;width: 100%;">
<h3><a class="logo" style="float: left; margin: 0 105px 0 29px;" href="/">Bookingmarrakech.ma
	</a>
</h3>
<h4 style="color: #231F20;float: right; font-family: arial;font-size: 17pt;width: 261pt;" > Confirmation de Réservation </h4>
</div>
	<div class="catBox">
		<div class="catBinfo prodviewbox">
			<h2 style="border-bottom: 1px solid #CCCCCC;color: #07759F;float: left;font-family: Verdana,Geneva,Arial,Helvetica,sans-serif;font-size: 12px;font-weight: bold;margin-left: 7px;padding-bottom: 10px;padding-top: 5px;text-transform: uppercase;width: 95%;">Hotel</h2>
			<span class="resultnum" style="float: left;width: 100%;">
            <ul style=" float: left; list-style: none outside none; margin: 0; padding: 0; width:100%;" >
                  <li style="margin-bottom: 10px;text-align: justify;color:#545557;" > <span style="color: #FF0066;float: left;width: 70px;" >Nom :  </span><?php echo $h['Hotel']['name']?>  </li>
                  <li> <span style="color: #FF0066;float: left;width: 70px;"> Adresse :</span><?php echo $h['Hotel']['adresse_rue'].' , '.$h['Ville']['name'].' , '.$h['Pay']['name'] ?> </li>
            </ul>
			</span>
		</div>
	</div>
	
	<div class="client_info" style="float: left;width: 100%;">
			<h2 style="border-bottom: 1px solid #CCCCCC;color: #07759F;float: left;font-family: Verdana,Geneva,Arial,Helvetica,sans-serif;font-size: 12px;font-weight: bold;margin-left: 7px;padding-bottom: 10px;padding-top: 5px;text-transform: uppercase;width: 95%;"> Informations Client</h2>
    <!--        cette span entre la balise <p>-->
            
			<p style=" float: left; width: 100%;margin:5px 0 0 5px;color:#545557;"><span style=" color: #FF0066;  float: left;  width: 70px;">Nom :</span>
            <?php echo $r['Reservation']['prenom'] ?>  <?php echo $r['Reservation']['nom'] ?> </p>
			<p style=" float: left; width: 100%;margin:5px 0 0 5px;color:#545557;"> <span style=" color: #FF0066;  float: left;  width: 70px;"> Adresse : </span>
             <?php echo $r['Reservation']['adresse'] ?>  <?php echo $r['Reservation']['ville'] ?> 
					<?php echo $r['Reservation']['pay'] ?> 
			</p>
			<p style=" float: left; width: 100%;margin:5px 0 0 5px;color:#545557;"> <span style=" color: #FF0066;  float: left;  width: 70px;"> Telephone : </span> 
			<?php echo $r['Reservation']['adresse'] ?> 
			</p>
			<p style=" float: left; width: 100%;margin:5px 0 0 5px;color:#545557;"><span style=" color: #FF0066;  float: left;  width: 70px;">Email :</span> 
			<?php echo $r['Reservation']['email'] ?> 
			</p>
	</div>
	
	<div class="resa_dates" style="float: left;width: 100%;">
		<h2 style="border-bottom: 1px solid #CCCCCC;color: #07759F;float: left;font-family: Verdana,Geneva,Arial,Helvetica,sans-serif;font-size: 12px;font-weight: bold;margin-left: 7px;padding-bottom: 10px;padding-top: 5px;text-transform: uppercase;width: 95%;">Dates</h2>
        
         <h3 style="background: url('/img/bg-li-reservation.png') no-repeat scroll 0 9px transparent;float: left;margin-left: 41pt; padding-left: 19px; width: 100%;color:#545557;">  
          <?php echo $r['Reservation']['nbre'] ?> <span style="color:#eb068d;font-size:14pt;font-family:arial;"> Nuits </span> 
          Du : <span style="color:#eb068d;font-size:10pt;font-family:arial;"><?php echo $r['Reservation']['du'] ?></span> 
          Au :<span style="color:#eb068d;font-size:10pt;font-family:arial;"><?php echo $r['Reservation']['au'] ?></span>  </h3>
	</div>
	
	<div class="chambre_reservation" style="float: left;width: 100%;">
		<table cellpadding="0" style="width:70%;margin-left:10pt;" cellspacing="0">
			<thead>
				<tr style="font-family:arial;font-size:12pt;color:#eb068d;background:#f0f0f0;">
					<th> Chambre </th>
					<th>Prix par chambre et par nuit</th>
					<th>Quantité</th>
					<th>Total</th>
				</tr>	
			</thead>
			<tbody>
				<tr>
					<td style="border:1px solid #ccc;font-family:arial;font-size:12pt;color:#2b2829;text-align: center;padding:4px;" class="chambre">
						<?php echo $h['C']['name']  ?>
						<br/>
						<?php echo $h['C']['HotelChambre']['nbre']  ?> Personnes .						
					</td>
					<td style="border:1px solid #ccc;font-family:arial;font-size:12pt;color:#2b2829;text-align: center;padding:4px;">
							<?php echo $cDispo?>
					</td>
					<td class="qte" style="border:1px solid #ccc;font-family:arial;font-size:12pt;color:#2b2829;text-align: center;padding:4px;">
						<?php echo $r['Reservation']['qte']?>
					</td>
					<td class="total" style="border:1px solid #ccc;font-family:arial;font-size:12pt;color:#2b2829;text-align: center;padding:4px;">
						<?php echo $total ?>  
						<?php echo $r['Devise']['code'] ?>
					</td>
				</tr>
			</tbody>
		</table>
	</div>
	
	<div class="paimenet_info" style="float: left;width: 100%;">
		<h2 style="border-bottom: 1px solid #CCCCCC;color: #07759F;float: left;font-family: Verdana,Geneva,Arial,Helvetica,sans-serif;font-size: 12px;font-weight: bold;margin-left: 7px;padding-bottom: 10px;padding-top: 5px;text-transform: uppercase;width: 95%;">Paiement</h2>
		<div class="depot"> 
		
		   <p style=" color: #545557;float: left; margin: 5px 0 0 5px;width: 100%;">
           <span style="color:#eb068d;font-size:10pt;font-family:arial;"> 
		   
		   Dépôt de garantie  :</span>
			<?php echo  $apayer ?>
			<?php echo $r['Devise']['code']?>
			</p>
		</div>
		<div class="depot"> 
		<p style=" color: #545557;float: left; margin: 5px 0 0 5px; width: 100%;">
		    <span style="color:#eb068d;font-size:10pt;font-family:arial;">
			Reste à payer lors du séjour  :</span>
			<?php echo  $total-$apayer ?>
			<?php echo $r['Devise']['code']?>
		</p>	
		</div>
	</div>
	
	<div class="client_comment">
		<h2 style="border-bottom: 1px solid #CCCCCC;color: #07759F;float: left;font-family: Verdana,Geneva,Arial,Helvetica,sans-serif;font-size: 12px;font-weight: bold;margin-left: 7px;padding-bottom: 10px;padding-top: 5px;text-transform: uppercase;width: 95%;">Commentaire Client</h2>
		<p style=" color: #545557;    float: left;    margin: 5px 0 0 5px; width: 100%;">
			<?php echo $r['Reservation']['commentaire_client']?>
		</p>
	</div>
	<!--
	<div class="client_comment">
		<h2 style="    border-bottom: 1px solid #CCCCCC;
    color: #07759F;
    float: left;
    font-family: Verdana,Geneva,Arial,Helvetica,sans-serif;
    font-size: 12px;
    font-weight: bold;
    margin-left: 7px;
    padding-bottom: 10px;
    padding-top: 5px;
    text-transform: uppercase;
    width: 95%;">Commentaire Etablissement</h2>
		<p>
			<?php echo $r['Reservation']['commentaire_hotel']?>
		</p>
	</div>
	-->
	<div class="client_comment">
		<p>
			<?php echo $r['Reservation']['commentaire_hotel']?>
		</p>
	</div>
<div class="paiement_mode" style=  "float: left; width: 100%">	
	<h2 style="border-bottom: 1px solid #CCCCCC;color: #07759F;float: left;font-family: Verdana,Geneva,Arial,Helvetica,sans-serif;font-size: 12px;font-weight: bold;margin-left: 7px;padding-bottom: 10px;padding-top: 5px;text-transform: uppercase;width: 95%;">Mode de Paiement accepter par l'hotel</h2>
	<ul style=" float: left; list-style: none outside none; margin: 0; padding: 0; width:100%;" >
		<?php foreach($h['CarteCredit'] as $cc) :?>
			<li style="float: left;width: 100%;	color:#545557;"><?php echo $cc['name']?></li>
		<?php endforeach;?>
	</ul>
</div>
	
<div class="extra_container" style="float: left;  width: 100%;">
	<h2 style="border-bottom: 1px solid #CCCCCC;color: #07759F;float: left;font-family: Verdana,Geneva,Arial,Helvetica,sans-serif;font-size: 12px;font-weight: bold;margin-left: 7px;padding-bottom: 10px;padding-top: 5px;text-transform: uppercase;width: 95%;">Tarifs et coûts supplémentaires</h2>
		<?php foreach($h['Extra'] as $key=>$extras) : ?>
			<div class="extra" style="width:100%;float:left;">
					<h3 style="color: #eb068d;font-family: Tahoma,Geneva,sans-serif;font-size: 12px;font-weight: bold;    margin-top: 10px;padding-bottom: 5px;margin-left:60pt;"> <?php echo $key ?> </h3>
					<ul style=" float: left; list-style: none outside none; margin: 0; padding: 0; width:100%;" >
						<?php foreach($extras  as $e) :?>
							<li style="background: url('/img/bg-li-reservation.png') no-repeat scroll 0 5px transparent; color: #545557;    margin-bottom: 10px;    padding-left: 14px;    text-align: justify;	margin-left:40pt;">
								<?php echo $e['name']?>
								<?php echo $e['left']?>
								<?php echo $this->Front->toDevise($e['val'],$h['Devise'],$r['Devise']) ?>
								<?php echo str_replace('$',$r['Devise']['code'],$e['right']) ;?>
							</li>
						<?php endforeach ;?>
					</ul>	
			</div>
		<?php endforeach ;?>
	
</div>
<div class="conditions">	
<h2 style="border-bottom: 1px solid #CCCCCC;color: #07759F;float: left;font-family: Verdana,Geneva,Arial,Helvetica,sans-serif;font-size: 12px;font-weight: bold;margin-left: 7px;padding-bottom: 10px;padding-top: 5px;text-transform: uppercase;width: 95%;">conditions</h2>
		<p style="color: #545557;    float: left;    line-height: 20px;    margin-left: 32px;    padding-bottom: 20px; text-align: justify; width: 90%;"><?php echo nl2br($h['Hotel']['conditions'])?></p>
</div>
	
</div>	
