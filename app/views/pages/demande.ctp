<?php   
		$etat     = '' ;  
		$montant  = 0 ;
		
		$cDispo   = $this->Front->disponibilite($chambre_id,$dispo,$etat,$montant,$qte,$h['Devise']); 
		
		$apayer = $montant * $qte * $h['Hotel']['comission'] / 100 ;
?>	
<link href="<?php echo $this->Html->url('/css/Proweb-css-reservation.css')?>" rel="stylesheet" type="text/css" />
	
<div class="viewpage">

<div class="Pub">
		<div class="top_pub">
			<h6>Résumé de votre réservation</h6>
			<h3 class="nom-hotel"><?php echo $h['Hotel']['name']?></h3>
			<div class="images_Pub">
				<?php echo $this->Html->image('/uploads/thumbs/'.$h['Hotel']['photoHotel'])?>
			</div>    
			<ul id="item-list">
				<li> <?php echo $qte.' '.$h['C']['name']?></li>
			</ul>
			<h3 class="prix_pub"><?php echo  $montant*$qte ?> <?php echo $this->Front->devise()?></h3>
			<h3 class="depo">Dépôt de garantie</h3>
			<h3 class="prix_depo"><?php echo  $apayer ?> <?php echo $this->Front->devise()?></h3>
			<h3 class="sejour">Reste à payer lors de votre séjour</h3>
			<h3 class="prix_sejour"><?php echo  ($montant*$qte)-$apayer ?> <?php echo $this->Front->devise()?></h3>
			
		</div>
	
        <div id="info_groupe">
                <h6>Plus d'informations ?</h3>
                <p>
               Nos experts de la réservation  sont a votre disposition pour répondre a vos attentes dans les plus brefs délais.
                </p>
                <span class="infos_span_groupe">
				<img class="icon_infos" alt="Booking Pro Script [French Version] By VotreCodeur.com" src="<?php echo $this->Html->url('/img/phone_groupe.png'); ?>"></span><span class="infos_texte"><?php echo $tel1;?>   </span>
				<span class="infos_span_groupe"><img class="icon_infos" alt="Booking Pro Script [French Version] By VotreCodeur.com" src="<?php echo $this->Html->url('/img/phone_groupe.png'); ?>"></span><span class="infos_texte"><?php echo $tel2;?></span>
                <span class="infos_span_groupe"><img class="icon_infos" alt="Booking Pro Script [French Version] By VotreCodeur.com" src="<?php echo $this->Html->url('/img/mail_groupe.png'); ?>"></span><span class="infos_texte"><?php echo $email;?></span>
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
<p id="p-demande">
Afin que nous puissions vous renseigner sur la disponibilité de cette chambre,  veuillez remplir le formulaire ci-dessous: 
</p>
<?php 
	echo $this->Form->create('Demande',array('url'=>array('controller'=>'pages','action'=>'demande',$hotel_id,$chambre_id,$du,$au,$qte)));
	echo $this->Form->input('nom');	
	echo $this->Form->input('prenom');
	
	echo $this->Form->hidden('du',array('value'=>$du));
	echo $this->Form->hidden('au',array('value'=>$au));
	
	echo $this->Form->input('email');
	echo $this->Form->input('telephone');
	echo $this->Form->input('pays',array('options'=>$this->Mtc->pays()));
	
	echo "<div id='textarea'>	".$this->Form->input('commentaire_client',array('label'=>'Commentaires client','type'=>'textarea'))."</div>";

	echo $this->Form->end('Envoyer') ;
	echo "<br/>";
	echo $this->Session->flash();
?>





	</div>	
</div>



 <script type="text/javascript" language="javascript">
$(document).ready(function($) {
    $('#DemandeDemandeForm').clearForm();
	});
</script>












