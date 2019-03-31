<?php 
/*
if (!isset($_SESSION)) {
  session_start();
}

//include 'co.php';
    //$id=117;
      $sql = "SELECT * FROM `reservations` WHERE `reservations`.`id` =$id";
  /*    $data = mysql_query($sql) or die(mysql_error());

if($row = mysql_fetch_array($data))
        {
          $nom = $row['nom'];
          $prenom = $row['prenom'];
          $adresse = $row['adresse'];
          $email = $row['email'];
          $hotelid= $row['hotel_id'];
		  $du = $row['du'];
		  $au = $row['au'];
		  $chambreid = $row['chambre_id'];
		  $chambre="";
		  $qte=$row['qte'];
          $hotel="";
          $hotelemail="";
		  $tel=$row['telephone'];
		  $montant = $row['montant'];
		  $payement= $row['payement'];
		  $reste = $montant - $payement;
		  

         $sql = "SELECT * FROM `hotels` WHERE `hotels`.`id` =$hotelid";
      $data = mysql_query($sql) or die(mysql_error());
        if($rowto = mysql_fetch_array($data))
        {
		  $hotel= $rowto['name'];
          $hotelemail=$rowto['email'];
		  $hoteladresse=$rowto['adresse_rue'];
		  $conditions = $rowto['conditions'];
		  
		  $sql = "SELECT * FROM `chambres` WHERE `chambres`.`id` =$chambreid";
      $data = mysql_query($sql) or die(mysql_error());
        if($rowtodo = mysql_fetch_array($data))
        {
		$chambre = $rowtodo['name'];
		
		}
		$clientid = $row['client_id'];
		 $sql = "SELECT * FROM `clients` WHERE `clients`.`id` =$clientid";
      $data = mysql_query($sql) or die(mysql_error());
        if($rowtodo = mysql_fetch_array($data))
        {
		$adresseclient = $rowtodo['adresse'];
		}
		
		$deviseid = $row['devise_id'];
		 $sql = "SELECT * FROM `devises` WHERE `devises`.`id` =$deviseid";
      $data = mysql_query($sql) or die(mysql_error());
        if($rowtodona = mysql_fetch_array($data))
        {
		$devise = $rowtodona['name'];
		}
		
		$carte="";
        while($rows = mysql_fetch_array($data))
        {
		$carte .= "<br>".$rows['name'];
		}
$msg = <<<EOT
<!-- saved from url=(0103)https://api.binga.ma/bingaApi/order/acceptPrePayment.action;jsessionid=85E967B1FA716C375CDFCEA414F5E9A7 -->
<html><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<link rel="shortcut icon" href="https://api.binga.ma/bingaApi/resources/img/favicon.ico">
<script type="text/javascript" src="./billet/jquery.min.js"></script>
<link href="./billet/billet-style.css" rel="stylesheet" type="text/css"> 
<script type="text/javascript">
$(function() {
$("#imprimer").click(function() {
 $('.tr_print').css('display','none');
       window.print();
     $('.tr_print').css('display','table-row');   
});

});
</script>
<title> Confirmation d'Achat </title>
</head>
<body>
<div id="index" class="portlet-content">
									  	


<div class="viewpage" style="float: left; width: 20cm;">
<div id="logo_reservation" style="float: left;width: 100%;">
<h3><a class="logo" style="float: left; margin: 0 105px 0 29px;" href="/">
				
					<img alt="offredealshotels" src="http://www.offredealshotels.com/img/logo.png">
	</a>
</h3>
<h4 style="color: #231F20;float: right; font-family: arial;font-size: 17pt;width: 261pt;"> Confirmation de Réservation </h4>
</div>
	<div class="catBox">
		<div class="catBinfo prodviewbox">
			<h2 style="border-bottom: 1px solid #CCCCCC;color: #07759F;float: left;font-family: Verdana,Geneva,Arial,Helvetica,sans-serif;font-size: 12px;font-weight: bold;margin-left: 7px;padding-bottom: 10px;padding-top: 5px;text-transform: uppercase;width: 95%;">Hotel</h2>
			<span class="resultnum" style="float: left;width: 100%;">
            <ul style=" float: left; list-style: none outside none; margin: 0; padding: 0; width:100%;">
                  <li style="margin-bottom: 10px;text-align: justify;color:#545557;"> <span style="color: #FF0066;float: left;width: 70px;">Nom :  </span> $hotel </li>
                  <li> <span style="color: #FF0066;float: left;width: 70px;"> Adresse :</span> $hoteladresse</li>
            </ul>
			</span>
		</div>
	</div>
	
	<div class="client_info" style="float: left;width: 100%;">
			<h2 style="border-bottom: 1px solid #CCCCCC;color: #07759F;float: left;font-family: Verdana,Geneva,Arial,Helvetica,sans-serif;font-size: 12px;font-weight: bold;margin-left: 7px;padding-bottom: 10px;padding-top: 5px;text-transform: uppercase;width: 95%;"> Informations Client</h2>
    <!--        cette span entre la balise <p>-->
            
			<p style=" float: left; width: 100%;margin:5px 0 0 5px;color:#545557;"><span style=" color: #FF0066;  float: left;  width: 70px;">Nom :</span>
             $nom</p>
			<p style=" float: left; width: 100%;margin:5px 0 0 5px;color:#545557;"> <span style=" color: #FF0066;  float: left;  width: 70px;"> Adresse : </span>
               $adresse
			</p>
			<p style=" float: left; width: 100%;margin:5px 0 0 5px;color:#545557;"> <span style=" color: #FF0066;  float: left;  width: 70px;"> Telephone : </span> 
			  $tel
			</p>
			<p style=" float: left; width: 100%;margin:5px 0 0 5px;color:#545557;"><span style=" color: #FF0066;  float: left;  width: 70px;">Email :</span> 
			 $email
			</p>
	</div>
	
	<div class="resa_dates" style="float: left;width: 100%;">
		<h2 style="border-bottom: 1px solid #CCCCCC;color: #07759F;float: left;font-family: Verdana,Geneva,Arial,Helvetica,sans-serif;font-size: 12px;font-weight: bold;margin-left: 7px;padding-bottom: 10px;padding-top: 5px;text-transform: uppercase;width: 95%;">Dates</h2>
        
         <h3 style="background: url('/img/bg-li-reservation.png') no-repeat scroll 0 9px transparent;float: left;margin-left: 41pt; padding-left: 19px; width: 100%;color:#545557;">  
          <!--1 <span style="color:#eb068d;font-size:14pt;font-family:arial;"> Nuits </span> -->
          Du : <span style="color:#eb068d;font-size:10pt;font-family:arial;"> $du</span> 
          Au :<span style="color:#eb068d;font-size:10pt;font-family:arial;"> $au</span>  </h3>
	</div>
	
	<div class="chambre_reservation" style="float: left;width: 100%;">
		<table style="width:70%;margin-left:10pt;" cellpadding="0" cellspacing="0">
			<thead>
				<tr style="font-family:arial;font-size:12pt;color:#eb068d;background:#f0f0f0;">
					<th> Chambre </th>
					<!--<th>Prix par chambre et par nuit</th>-->
					<th>Quantité</th>
					<th>Total</th>
				</tr>	
			</thead>
			<tbody>
				<tr>
					<td style="border:1px solid #ccc;font-family:arial;font-size:12pt;color:#2b2829;text-align: center;padding:4px;" class="chambre">
						$chambre					
					</td>
					<!--<td style="border:1px solid #ccc;font-family:arial;font-size:12pt;color:#2b2829;text-align: center;padding:4px;">
							<table class="resa_detail"><thead><tr><th>Sam</th></tr></thead><tbody><tr class="0"><td> MAD</td></tr></tbody></table>					</td>-->
					<td class="qte" style="border:1px solid #ccc;font-family:arial;font-size:12pt;color:#2b2829;text-align: center;padding:4px;">
						$qte					</td>
					<td class="total" style="border:1px solid #ccc;font-family:arial;font-size:12pt;color:#2b2829;text-align: center;padding:4px;">
						$montant   
						MAD					</td>
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
			$payement			MAD			</p>
		</div>
		<div class="depot"> 
		<p style=" color: #545557;float: left; margin: 5px 0 0 5px; width: 100%;">
		    <span style="color:#eb068d;font-size:10pt;font-family:arial;">
			Reste à payer lors du séjour  :</span>
			$reste  $devise		</p>	
		</div>
	</div>
	
	<!--<div class="client_comment">
		<h2 style="border-bottom: 1px solid #CCCCCC;color: #07759F;float: left;font-family: Verdana,Geneva,Arial,Helvetica,sans-serif;font-size: 12px;font-weight: bold;margin-left: 7px;padding-bottom: 10px;padding-top: 5px;text-transform: uppercase;width: 95%;">Commentaire Client</h2>
		<p style=" color: #545557;    float: left;    margin: 5px 0 0 5px; width: 100%;">
					</p>
	</div>-->
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
					</p>
	</div>
	-->
	<div class="client_comment">
		<p>
					</p>
	</div>
<!--<div class="paiement_mode" style="float: left; width: 100%">	
	<h2 style="border-bottom: 1px solid #CCCCCC;color: #07759F;float: left;font-family: Verdana,Geneva,Arial,Helvetica,sans-serif;font-size: 12px;font-weight: bold;margin-left: 7px;padding-bottom: 10px;padding-top: 5px;text-transform: uppercase;width: 95%;">Mode de Paiement accepter par l'hotel</h2>
	<ul style=" float: left; list-style: none outside none; margin: 0; padding: 0; width:100%;">
					$carte
			</ul>
</div>-->
<!--	
<div class="extra_container" style="float: left;  width: 100%;">
	<h2 style="border-bottom: 1px solid #CCCCCC;color: #07759F;float: left;font-family: Verdana,Geneva,Arial,Helvetica,sans-serif;font-size: 12px;font-weight: bold;margin-left: 7px;padding-bottom: 10px;padding-top: 5px;text-transform: uppercase;width: 95%;">Tarifs et coûts supplémentaires</h2>
					<div class="extra" style="width:100%;float:left;">
					<h3 style="color: #eb068d;font-family: Tahoma,Geneva,sans-serif;font-size: 12px;font-weight: bold;    margin-top: 10px;padding-bottom: 5px;margin-left:60pt;"> Taxes locales </h3>
					<ul style=" float: left; list-style: none outside none; margin: 0; padding: 0; width:100%;">
													<li style="background: url('/img/bg-li-reservation.png') no-repeat scroll 0 5px transparent; color: #545557;    margin-bottom: 10px;    padding-left: 14px;    text-align: justify;	margin-left:40pt;">
								Taxes locale 								obligatoire fixe a 								17								DH par personne /nuit							</li>
											</ul>	
			</div>
					<div class="extra" style="width:100%;float:left;">
					<h3 style="color: #eb068d;font-family: Tahoma,Geneva,sans-serif;font-size: 12px;font-weight: bold;    margin-top: 10px;padding-bottom: 5px;margin-left:60pt;"> Politique Enfants </h3>
					<ul style=" float: left; list-style: none outside none; margin: 0; padding: 0; width:100%;">
													<li style="background: url('/img/bg-li-reservation.png') no-repeat scroll 0 5px transparent; color: #545557;    margin-bottom: 10px;    padding-left: 14px;    text-align: justify;	margin-left:40pt;">
								Lit supplémentaire enfant gratuit								jusqu au								6								ans							</li>
											</ul>	
			</div>
					<div class="extra" style="width:100%;float:left;">
					<h3 style="color: #eb068d;font-family: Tahoma,Geneva,sans-serif;font-size: 12px;font-weight: bold;    margin-top: 10px;padding-bottom: 5px;margin-left:60pt;"> repas obligatoire </h3>
					<ul style=" float: left; list-style: none outside none; margin: 0; padding: 0; width:100%;">
													<li style="background: url('/img/bg-li-reservation.png') no-repeat scroll 0 5px transparent; color: #545557;    margin-bottom: 10px;    padding-left: 14px;    text-align: justify;	margin-left:40pt;">
								Repas du Jour de l'An Obligatoire 								a partir de								0								DH par personne /nuit							</li>
											</ul>	
			</div>
					<div class="extra" style="width:100%;float:left;">
					<h3 style="color: #eb068d;font-family: Tahoma,Geneva,sans-serif;font-size: 12px;font-weight: bold;    margin-top: 10px;padding-bottom: 5px;margin-left:60pt;"> bebe </h3>
					<ul style=" float: left; list-style: none outside none; margin: 0; padding: 0; width:100%;">
													<li style="background: url('/img/bg-li-reservation.png') no-repeat scroll 0 5px transparent; color: #545557;    margin-bottom: 10px;    padding-left: 14px;    text-align: justify;	margin-left:40pt;">
								lit bebe gratuit 								jusqu au								2								ans							</li>
											</ul>	
			</div>
			
</div>-->
<div class="conditions">	
<h2 style="border-bottom: 1px solid #CCCCCC;color: #07759F;float: left;font-family: Verdana,Geneva,Arial,Helvetica,sans-serif;font-size: 12px;font-weight: bold;margin-left: 7px;padding-bottom: 10px;padding-top: 5px;text-transform: uppercase;width: 95%;">conditions</h2>
		<p style="color: #545557;    float: left;    line-height: 20px;    margin-left: 32px;    padding-bottom: 20px; text-align: justify; width: 90%;">$conditions</p>
<br><br><br>
<p><strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Pour confirmer cette reservation merci de se connecter dans votre compte, sur la platform d'
Accès professionnel :</strong><br>
<a href="http://offredealshotels.com/hotel/login">http://offredealshotels.com/hotel/login</a>
<br>
<br>Si vous avez pas reçu vos information d'authentification, ou vous avez des problemmes, merci de contactez nous sur: resa@offredealshotels.com
</p>
		</body></html>
EOT;
}
try {

                $to = "resa@offredealshotels.com,".$hotelemail;
//$to = "devnasser@gmail.com";
		$subject="Confirmation de Réservation ";
		$from = "resa@offredealshotels.com";
		$ip = isset($_SERVER['REMOTE_ADDR']) ? $_SERVER['REMOTE_ADDR'] : '';
		
		$body = "Mr  $nom payé la reservation:\n".
		"Hotel: $hotel \n\n".
		"Num de reservation: $id\n".
                "Nom: $nom \n".
                "Prenom: $prenom\n".
		"Adresse: $adresse \n".
		"Email: $hotelemail \n".
		"IP: $ip\n";	
		
		$headers  = 'MIME-Version: 1.0' . "\r\n";
		$headers .= 'Content-type: text/html; charset=utf-8' . "\r\n";
		$headers .= "From: $from \r\n";
		$headers .= "Reply-To: $from \r\n";
		
		mail($to, $subject, $msg,$headers);

} catch (Exception $e) {
	echo $e->getMessage();
}

}
?>