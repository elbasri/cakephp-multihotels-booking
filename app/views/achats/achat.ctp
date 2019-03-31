<div class="viewpage" style="float: left; width: 20cm;">
<div id="logo_reservation" style="float: left;width: 100%;">
<h3><a class="logo" style="float: left; margin: 0 105px 0 29px;" href="/">Bookingmarrakech.ma
	</a>
</h3>
<h4 style="color: #231F20;float: right; font-family: arial;font-size: 17pt;width: 261pt;" > Détails d'achat </h4>
</div>
	<div class="catBox">
		<div class="catBinfo prodviewbox">
			<h2 style="border-bottom: 1px solid #CCCCCC;color: #07759F;float: left;font-family: Verdana,Geneva,Arial,Helvetica,sans-serif;font-size: 12px;font-weight: bold;margin-left: 7px;padding-bottom: 10px;padding-top: 5px;text-transform: uppercase;width: 95%;">Produit</h2>
			<span class="resultnum" style="float: left;width: 100%;">
            <ul style=" float: left; list-style: none outside none; margin: 0; padding: 0; width:100%;" >
                  <li style="margin-bottom: 10px;text-align: justify;color:#545557;" > <span style="color: #FF0066;float: left;width: 70px;" >Titre :  </span><?php echo $p['Produit']['titre']?>  </li>
                  <li> <span style="color: #FF0066;float: left;width: 70px;"> Prix :</span><?php echo $p['Produit']['prix']." "; ?> </li>
            </ul>
			</span>
		</div>
	</div>
	
	<div class="client_info" style="float: left;width: 100%;">
			<h2 style="border-bottom: 1px solid #CCCCCC;color: #07759F;float: left;font-family: Verdana,Geneva,Arial,Helvetica,sans-serif;font-size: 12px;font-weight: bold;margin-left: 7px;padding-bottom: 10px;padding-top: 5px;text-transform: uppercase;width: 95%;"> Informations Client</h2>
    <!--        cette span entre la balise <p>-->
            
			<p style=" float: left; width: 100%;margin:5px 0 0 5px;color:#545557;"><span style=" color: #FF0066;  float: left;  width: 70px;">Nom :</span>
            <?php echo $r['Achat']['name'] ?></p>
			<p style=" float: left; width: 100%;margin:5px 0 0 5px;color:#545557;"> <span style=" color: #FF0066;  float: left;  width: 70px;"> Telephone : </span> 
			<?php echo $r['Achat']['tel'] ?> 
			</p>
			<p style=" float: left; width: 100%;margin:5px 0 0 5px;color:#545557;"><span style=" color: #FF0066;  float: left;  width: 70px;">Email :</span> 
			<?php echo $r['Achat']['email'] ?> 
			</p>
			<p style=" float: left; width: 100%;margin:5px 0 0 5px;color:#545557;"><span style=" color: #FF0066;  float: right;"><a href="<?=$this->Html->url('/produit/').$p['Produit']['id']?>">Cliquer ici pour afficher les détails du produit</a></span> 
			</p>
	</div>

</div>	
