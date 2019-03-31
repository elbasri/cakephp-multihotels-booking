<?php echo $html->css('Proweb-css-affiliation.css'); ?>
<img src="http://votrecodeur.com/img/affiliation.jpg" />
<div id="affiliation-contenu">
<div class="hotelire">
<p class="hotelire-p">Hôtelires, vous désirez être présents parmi notre sélection d'hôtels, envoyez nous un email à commercial@votrecodeur.com ou remplissez le formulaire ci-dessous et rejoignez la sélection Booking Pro Script [French Version] Script de Centrale de résérvation profesionnel By VotreCodeur.com !</p>
</div>
<?php 

 echo $this->Session->flash();
echo "<br/>";
?>

<div class="hotelire2">
	<div id="affiliation-contenu">
	<?php 
	
	 echo $this->Form->create('Affiliation',array('id'=>'aff' ,'url'=>'/pages/affiliation')) ;
	 echo $this->Form->input('nom') ;
	 echo $this->Form->input('prenom') ;
	 echo $this->Form->input('poste',array('label'=>'Email')) ;
	 echo $this->Form->input('hotel') ;
	 echo $this->Form->input('adresse') ;
	 echo $this->Form->input('ville') ;
	 echo $this->Form->input('pays',array('options'=>$this->Mtc->pays())) ;
	  echo $this->Form->input('telephone') ;
	  echo $this->Form->input('site') ;
	  echo $this->Form->input('commentaire',array('div'=>'commentaire','type'=>'textarea')) ; 
	?>

	<?php echo $this->Form->end('Envoyer')?>
	</div>
</div>
<div id="info_groupe">
	<h3>Plus d'informations ?</h3>
	<hr>
	<p>
   Nos experts de la réservation de groupe sont a votre disposition pour répondre a vos attentes dans les plus brefs délais.
	</p>
	<span class="infos_span_groupe"><img class="icon_infos" alt="Booking Pro Script [French Version] By VotreCodeur.com" src="http://votrecodeur.com/img/phone_groupe.png"></span><span class="infos_texte">+212 524 31 31 81</span>
	<span class="infos_span_groupe"><img class="icon_infos" alt="Booking Pro Script [French Version] By VotreCodeur.com" src="http://votrecodeur.com/img/print_groupe.png"></span><span class="infos_texte">+212 524 31 31 82</span>
	<span class="infos_span_groupe"><img class="icon_infos" alt="Booking Pro Script [French Version] By VotreCodeur.com" src="http://votrecodeur.com/img/mail_groupe.png"></span><span class="infos_texte">resa@votrecodeur.com</span>
	<span class="infos_span_groupe"><img class="icon_infos" alt="Booking Pro Script [French Version] By VotreCodeur.com" src="http://votrecodeur.com/img/skype_groupe.png"></span><span class="infos_texte">Booking Pro Script [French Version] Script de Centrale de résérvation profesionnel By VotreCodeur.com </span>
	<span class="infos_span_groupe"><img class="icon_infos" alt="Booking Pro Script [French Version] By VotreCodeur.com" src="http://votrecodeur.com/img/facebook_groupe.png"></span><span class="infos_texte">Booking Pro Script [French Version] Script de Centrale de résérvation profesionnel By VotreCodeur.com   </span>
 </div>
 </div>
 <script type="text/javascript" language="javascript">
$(document).ready(function($) {
    $('#aff').clearForm();

	});
</script>