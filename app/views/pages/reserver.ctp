<?php  

		$etat     = '' ;  
		$montant  = 0 ;
		$cDispo   = $this->Front->disponibilite($chambre_id,$dispo,$etat,$montant,$qte,$h['Devise']); 

		$apayer = $montant * $qte * $h['Hotel']['comission'] / 100 ;
		$id = $h['C']['id'];
	//			die($qte) ;

?>	
	<?php //die(print_r($h['C'])); ?>
<link href="<?php echo $this->Html->url('/css/Proweb-css-reservation.css')?>" rel="stylesheet" type="text/css" />
	
<div class="viewpage">

<div class="Pub">
		<div class="top_pub">
			<h6>Résumé de votre réservation</h6>
			<h3 class="nom-hotel"><?php echo $h['Hotel']['name']?></h3>
			<!--<div class="images_Pub">
				<?php  echo $this->Html->image('/files/images/'.$h['Hotel']['HotelPhoto'][count($h['Hotel']['HotelPhoto'])-1]['photo'],array(110,70)) ?>

			</div>  --> 
			<hr>
			<h3 class="sejour">Qte</h3>
			<h3 class="prix_depo"><?php echo $qte?></h3>
			<h3 class="sejour">Totale</h3>
			<h3 class="prix_depo"><?php echo  $montant*$qte ?> <?php echo $this->Front->devise()?></h3>
			<h3 class="sejour">Dépôt de garantie</h3>
			<h3 class="prix_depo"><?php echo  $apayer ?> <?php echo $this->Front->devise()?></h3>
			<h3 class="sejour">Reste à payer lors de votre séjour</h3>
			<h3 class="prix_sejour"><?php echo  ($montant*$qte)-$apayer ?> <?php echo $this->Front->devise()?></h3>
			
		</div>
		<div class="buttom_pub" >
            <h6 class="info">Information</h3>
         
            <p>
             Vous recevrez automatiquement un email de confirmation récapitulant le détail de votre réservation à imprimer et à présenter à l'hôtel à votre arrivée.
            
            </p>
        </div>
        <div id="info_groupe">
                <h6>Plus d'informations ?</h3>
                <!--<p>
               Nos experts de la réservation  sont a votre disposition pour répondre a vos attentes dans les plus brefs délais.
                </p>-->
                <span class="infos_span_groupe">
				<img class="icon_infos" alt="luxia booking" src="<?php echo $this->Html->url('/img/phone_groupe.png'); ?>"></span><span class="infos_texte">+212 524 ** ** 20   </span>
				<span class="infos_span_groupe"><img class="icon_infos" alt="luxia booking" src="<?php echo $this->Html->url('/img/print_groupe.png'); ?>"></span><span class="infos_texte">+212 661 ** ** 86</span>
                <span class="infos_span_groupe"><img class="icon_infos" alt="Booking Pro Script [French Version] By VotreCodeur.com" src="<?php echo $this->Html->url('/img/mail_groupe.png'); ?>"></span><span class="infos_texte">web@votrecodeur.com</span>
                <!--<span class="infos_span_groupe"><img class="icon_infos" alt="Booking Pro Script [French Version] By VotreCodeur.com" src="<?php echo $this->Html->url('/img/skype_groupe.png'); ?>"></span><span class="infos_texte">gx.coder</span>
                <span class="infos_span_groupe"><img class="icon_infos" alt="Booking Pro Script [French Version] By VotreCodeur.com" src="<?php echo $this->Html->url('/img/facebook_groupe.png'); ?>"></span><span class="infos_texte">zizwar0nline  </span>-->
       </div>
        
</div>

	
	<div class="chambre_reservation">
    	<div class="catBox">
			<div class="catBinfo prodviewbox">
				<h2 ><?php echo $h['Hotel']['name']?></h2>
				<span class="resultnum">
					<?php echo $h['Hotel']['adresse_rue'].' , '.$h['Ville']['name'].' , '.$h['Pay']['name'] ?>
				</span>
				<div class="resa_du"> Du <span>	<?php echo $du?> </span> </div>
				<div class="resa_au"> Au <span>	<?php echo $au?> </span> </div>
			</div>
		</div>
		
		<table border="1" bordercolor="#D1D2D3" class="chambre_table">
			<thead>
				<tr class="tete_tab">
					<th  align="center"> Chambre </th>
					<th align="center">Prix par chambre et par nuit</th>
					<th align="center">Quantité</th>
					<th align="center">Total</th>
				</tr>	
			</thead>
			<tbody>
				<tr>
					<td align="center"  class="chambre">
                    
						<?php echo $h['C']['name']  ?>
						<br/>
						<?php echo $h['C']['HotelChambre']['nbre']  ?> Personnes .
						<?php echo $pensions[$h['C']['HotelChambre']['pension']] ?> 
					</td>
					<td align="center" class="dispo">
							<?php echo $cDispo?>
					</td>
					<td align="center" class="qte">
						<?php echo $qte ?>
					</td>
					<td align="center" class="total">
						<?php echo $montant*$qte ?>  <?php echo $this->Front->devise() ?>
					</td>
				</tr>
			</tbody>
		</table>
	</div>
<div id="columnsright">
<?php 		  /**
echo $this->Session->flash();
echo $this->Form->create('Reservation',array('url'=>array('controller'=>'pages','action'=>'reserverClient',$hotel_id,$chambre_id,$du,$au,$qte)));
echo '<h6 class="info_client_h6">Identifiez-vous</h6>';
echo '<div class="info_client">';
echo $this->Form->input('username',array('div'=>'left-res','label'=>'Login'));
echo $this->Form->input('password',array('div'=>'left-res','label'=>'Mot de passe'));
echo $this->Form->hidden('hotel_id',array('value'=>$hotel_id));
echo $this->Form->hidden('chambre_id',array('value'=>$chambre_id));
echo $this->Form->hidden('du',array('value'=>$du));
echo $this->Form->hidden('au',array('value'=>$au));
echo $this->Form->hidden('montant',array('value'=>$montant));
echo $this->Form->hidden('qte',array('value'=>$qte));
echo $this->Form->hidden('devise_id',array('value'=>$this->Session->read('Devise.id')));
echo $this->Form->hidden('payement',array('value'=>$apayer));
echo "</div>";
echo $this->Form->end('Se connecter');
echo "</div>";
**/
?>
<div class="field" style='display:none;'>
<a style="" href="/pages/getPassword" id="forgot_my_password">Mot de passe oublié?</a>
</div>
</div>
<div id="columnsright">	
	<?php 
		  echo $this->Form->create('Reservation',array('url'=>array('controller'=>'pages','action'=>'reserver',$hotel_id,$chambre_id,$du,$au,$qte)));
		  echo '<h6 class="info_client_h6"> Informations client</h6>';
		  echo '<div class="info_client">';	
		  
		  echo $this->Form->input('civilite',array('label'=>'Civilité','options'=>array(1=>'Mme',2=>'Mlle',3=>'Mr')));
		  echo $this->Form->input('nom',array('div'=>'left-res','label'=>'Nom'));
		  echo $this->Form->input('prenom',array('div'=>'left-res','label'=>'Prénom'));
		
	      echo $this->Form->input('adresse',array('div' => 'Adresseid', 'label'=>'Adresse','type'=>'texarea')); 
		
		  
		  echo $this->Form->input('ville',array('div'=>'left-vil','label'=>'Ville'));
		   echo $this->Form->input('pay',array('label'=>'Pays','options'=>$this->Mtc->pays()));
		  echo $this->Form->input('email',array('div'=>'left-res','label'=>'Email'));
		  echo $this->Form->input('telephone',array('div'=>'left-res','label'=>'Telephone'));
		  
		  echo "</div>"; 
		  
		  
		  
		  echo '<div class="col-bottom">';
			  echo '<div class="commentaire_clt">';
				echo $this->Form->input('commentaire_client',array('label'=>'Commentaires client'));
			  echo "</div>";
			  echo '<div class="accept_conditions">';
				$condLink = $this->Html->link('Termes et conditions','/pages/content/4',array('target'=>'_Blank')) ; 
				echo '<div class="clear"></div><br/><br/><br/><br/><br/><br/>';
				echo $this->Form->input('conditions',array('type'=>'checkbox','label'=>false,'div'=>false));
				
			  
			  echo "J'accepte les $condLink et la politique d'annulation " ;
			  echo "</div><br>";
			  echo '<div class="clear"></div>';
			  
			  echo '<div>
			<table><tbody>
			<tr>
				<td><input name="payment_getway" value="mtc" required="" type="radio"></td>
				<td style="text-align:left;"><img height="80" src="http://aquarium-depot.ca/img/cms/PAYPAL-LOGOS.jpg" width="300" /></td>
			</tr>
			<tr>
				<td><input name="payment_getway" value="binga" required="" type="radio"></td>
				<td style="text-align:left;"><img height="50" src="https://privatbank.ua/img/WU_new.png" width="300" />
									</td>
			</tr>
		</tbody></table></div>';
			  
			  echo $this->Form->hidden('hotel_id',array('value'=>$hotel_id));
			  echo $this->Form->hidden('chambre_id',array('value'=>$chambre_id));
			  echo $this->Form->hidden('du',array('value'=>$du));
			  echo $this->Form->hidden('au',array('value'=>$au));
			  echo $this->Form->hidden('montant',array('value'=>$montant));
			  echo $this->Form->hidden('qte',array('value'=>$qte));
			  echo $this->Form->hidden('devise_id',array('value'=>$this->Session->read('Devise.id')));
			  echo $this->Form->hidden('payement',array('value'=>$apayer));
			  $_au = new DateTime($au);
			  $_du = new DateTime($du);
			  $i = 0 ;
			  while ($_au > $_du) :
					$prix = $dispo[$chambre_id][$_du->format('Y-m-d')]['prix'] ;
					$prix = $this->Front->toDevise($prix,$h['Devise']);
					echo $this->Form->hidden("ReservationDetail.$i.prix",array('value'=>$prix));
					echo $this->Form->hidden("ReservationDetail.$i.ladate",array('value'=>$_du->format('Y-m-d')));
			   $_du->modify("+1 day");
			   $i++ ;
			  endwhile ;
			  
		  echo "</div>";
		  echo $this->Form->end('Continuer');

	?>
<div class="mode_paiement">	
	<h6 class="info_client_h6">Mode de Paiement accepté par l'l'hôtel<span class="security"></span></h3>
	<ul>
		<?php foreach($h['CarteCredit'] as $cc) :?>
			<li><?php echo $cc['name']?></span></li>
		<?php endforeach;?>
	</ul>
</div>
	
<div class="extra_container">
	<h6 class="info_client_h6">Tarifs et coûts supplémentaires</h2>
    <?php $i=0; ?>
		<?php foreach($h['Extra'] as $key=>$extras) : ?>
        
        
			<div class="extra">
					<h3> <?php echo $key ?> </h3>
					<ul>
						<?php foreach($extras  as $e) :?>
							<li>
								<?php echo $e['name']?>
								<?php echo $e['left']?>
								<?php echo $this->Front->toDevise($e['val'],$h['Devise']) ?>
								<?php echo str_replace('$',$this->Front->devise(),$e['right']) ;?>
							</li>
						<?php endforeach ;?>
					</ul>	
			</div>
            
		<?php endforeach ;?>
	
</div>
<div class="conditions">	
<h6 class="info_client_h6"> Conditions de réservation et frais d'annulation</h3>
		<p><?php echo nl2br($h['Hotel']['conditions'])?></p>
</div>

</div>	
</div>
