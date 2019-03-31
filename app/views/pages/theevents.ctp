<?php echo $html->css('Proweb-css-devis.css'); ?>
<h1>Formulaire de demande de devis</h1>

<?php 

 echo $this->Session->flash();
echo "<br/>";

echo $this->Form->create('Event',array('id'=>'event','url'=>'/pages/theevents'))?>
<div id="contenu">
        <div class="cl-left">
        <?php   
            echo $this->Form->input('civilite',array('label'=>'civilité','options'=>array('Mlle','Mme','Mr'))) ;
            echo $this->Form->input('nom') ;
            echo $this->Form->input('prenom',array('label'=>'prénom')) ;
            echo $this->Form->input('email',array('label'=>'E-mail'));
            echo $this->Form->input('telephone',array('label'=>'Téléphone'));
            echo $this->Form->input('telephone2',array('label'=>'GSM'));
            echo $this->Form->input('ville');
            echo $this->Form->input('pays',array('type'=>'select','options'=>$this->Mtc->pays()));

            echo $this->Form->input('commentaire',array('div' => 'commentaire','label'=>'Vos commentaires précisions sur l\'évenement','type'=>'textarea'));
        ?>
		<?php echo $this->Form->end('valider')?>
        </div>
        
		<div class="cl-right">
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
</div>

 <script type="text/javascript" language="javascript">
$(document).ready(function($) {
    $('#event').clearForm();
	});
</script>