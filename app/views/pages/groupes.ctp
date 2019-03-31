<?php echo $html->css('Proweb-css-activite.css'); ?>
<script type="text/javascript" language="javascript">
	$(document).ready(function(){
			var x="";
			$("#GroupeDescription").focus(function(){
			 x=$("#GroupeDescription").val().substr(0,3)
			if(x=="(Ex"){
			$("#GroupeDescription").val("");
			
			}
	});
		



		
	/*  $("#GroupeDu1,#GroupeAu1").datepicker({
						defaultDate: 1,
						dateFormat: 'yy-mm-dd',
						buttonImage: "/img/calendar.gif",
						buttonImageOnly: true ,
						changeMonth: true,
						numberOfMonths: 1,
						showOn: "both",
						minDate : new Date()
	}); */
		
		})
</script>




<div id="header_pub">
                <img src="<?php echo $this->Html->url("/img/pub_groupe.png"); ?>" alt="Booking Pro Script [French Version] By VotreCodeur.com"/>
</div>
<?php 

 echo $this->Session->flash();
echo "<br/>";
?>

            	<div class="col-left-groupe">
                    <div id="projets_groupe">
                        <h3>Votre projet de voyage :</h3>
                        <hr />
                        <p>Vous êtes un groupe + de 10 personnes  et souhaitez organiser votre voyage pour
                            groupe bénéficiant des tarifs spéciaux pour groupes ? Nous savons nous adapter en fonction des attentes
                            de nos chers clients. Alors n'hésitez pas à compléter votre demande devis voyage pour groupe !
                        </p>
                    </div>
<div class="groupe_form">						


	<h1> Demande Devis Groupe :</h1>

<hr>
<div class="form">
<?php echo $this->Form->create('Groupe',array('url'=>'/pages/groupes','id'=>'GroupeGroupesForm'));?>
	<?php
		echo $this->Form->input('nom',array('class'=>'form_nom validate[required,custom[onlyLetter]]','label'=>'Nom*'));
		echo $this->Form->input('prenom',array('class'=>'form_prenom','label'=>'Prénom'));
		echo $this->Form->input('nom_societe',array('class'=>'form_nomsociete','label'=>'Nom de la societ&eacute'));
		echo $this->Form->input('email',array('label'=>'Email*','class'=>'form_email validate[required,custom[email]]'));
		echo $this->Form->input('tel',array('label'=>'Tél*','class'=>'form_tem validate[required,custom[telephone]]'));
		echo $this->Form->input('fax',array('label'=>'Fax','class'=>'form_fax'));
		echo $this->Form->input('portable',array('label'=>'Portable','class'=>'form_email'));
		echo $this->Form->input('ville',array('label'=>'Ville','class'=>'form_email'));
		echo $this->Form->input('pays',array('options' =>$this->Mtc->pays(),'class'=>'fpays',  'label'=>'Pays') );
                
		echo "<hr class='ligne_1'>";
		echo $this->Form->input('du1',array('label'=>'Du','class'=>'du'));
		
		echo $this->Form->input('au1',array('label'=>'Au','class'=>'au'));
		echo $this->Form->input('ville_arrivee',array('label'=>'Ville souhaitée','class'=>'form_email'));
		echo $this->Form->input('type_sejour',array('label'=>'Type Séjour','class'=>'form_email'));
		echo "<div class='enfant_adulte'>";
	   echo $form->input('adulte', array('label'=>'Adulte','class'=>'form_adulte'));
		//echo $this->Form->input('adulte',array('label'=>false,'class'=>'form_email'));
		//echo $this->Form->input('enfant',array('label'=>false,'class'=>'form_email'));

		echo $form->input('enfant',array('label'=>'Enfant','class'=>'form_enfant'));
		echo "</div>";
		echo "<div class='divMoyAge'>";
		echo $this->Form->input('moyenne_age',array('label'=>'Moyenne d\'âge du Groupe ','class'=>'form_email'));
		echo "</div>";
		echo $this->Form->input('budget',array('label'=>'Budget/ Par/ Nuit','class'=>'form_email'));
		echo "<hr class='ligne_1'>";
		echo $this->Form->input('hotel_type_id',array('type'=>'select','label'=>'Type d\'hébergement','class'=>'type_heb','options'=>$hebergements));
		echo $this->Form->input('nbre_chambre',array('label'=>'Nb chambre','class'=>'form_email'));
		echo $this->Form->input('lit_supplement',array('label'=>'Lit supplémentaire','class'=>'form_email'));
		
		echo "<div class='div_select'>";
		
		echo $form->input('single', array('type' => 'text','label'=>'Single'));
	
	    echo $form->input('double', array('type' => 'text','label'=>'Double'));
	   
		echo $form->input('twin', array('type' => 'text','label'=>'Twin'));
	
        echo $form->input('triples', array('type' => 'text','label'=>'Triples'));
 
	    echo $form->input('quadriples', array('type' => 'text','label'=>'quadruples'));
		
	   echo "</div> ";
	
		echo $this->Form->input('restauration',array('type'=>'select','options' =>$restaurations,'label'=>'Restauration','class'=>'form_email'));
	
	?>
	
	
	

</div>



                </div><!--end col-right-->
                                    <div id="demande_detaille">
                        <h3>Détaillez votre demande ici :</h3>
                        <hr />
                        
                        
                        <p>
                       <?php  		
					    echo $form->input('description',array('label'=>false,'type' => 'textarea','value'=>'(Ex.: Transfert de/ vers l \' Aéreport, organisation de visites ou excursions, location de voitures, soirées, restaurants, spectacle.....)' )  ); ?>
                        </p>
                        
                        <?php
						echo "<div class='date_verification'>";
                        echo "<label id='date_decision_label'>Date de décision</label>";
                        echo $this->Form->input('date_decision',array('label'=>false,'class'=>'date_decision','id'=>'GroupD'));
                        
 						echo $this->Form->end('Enregistrer'); 
						echo "</div>";
						?>
                    </div>
         </div><!--end col-left-->
         
        

                
                <div class="col-right-groupe">
                    <img src="<?php echo $this->Html->url("/"); ?>img/right_photo_groupe.png" alt="Booking Pro Script [French Version] By VotreCodeur.com" class="pub_right_groupe"/>
                    <div id="info_groupe">
                        <h3>Plus d'informations ?</h3>
                        <hr />
                        <p>
                       Nos experts de la réservation de groupe sont a votre disposition pour répondre a vos attentes dans les plus brefs délais.
                        </p>
                        <span class="infos_span_groupe"><img src="<?php echo $this->Html->url("/"); ?>img/phone_groupe.png" alt="Booking Pro Script [French Version] By VotreCodeur.com" class="icon_infos"/></span><span class="infos_texte">+212 524 31 31 81</span>

                        <span class="infos_span_groupe"><img src="<?php echo $this->Html->url("/"); ?>img/print_groupe.png" alt="Booking Pro Script [French Version] By VotreCodeur.com" class="icon_infos"/></span><span class="infos_texte">+212 524 31 31 82</span>
                        <span class="infos_span_groupe"><img src="<?php echo $this->Html->url("/"); ?>img/mail_groupe.png" alt="Booking Pro Script [French Version] By VotreCodeur.com" class="icon_infos"/></span><span class="infos_texte">resa@votrecodeur.com</span>
                        <span class="infos_span_groupe"><img src="<?php echo $this->Html->url("/"); ?>img/skype_groupe.png" alt="Booking Pro Script [French Version] By VotreCodeur.com" class="icon_infos"/></span><span class="infos_texte">Booking Pro Script [French Version] Script de Centrale de résérvation profesionnel By VotreCodeur.com </span>
                        <span class="infos_span_groupe"><img src="<?php echo $this->Html->url("/"); ?>img/facebook_groupe.png" alt="Booking Pro Script [French Version] By VotreCodeur.com" class="icon_infos"/></span><span class="infos_texte">Booking Pro Script [French Version] Script de Centrale de résérvation profesionnel By VotreCodeur.com   </span>
                    </div>
                    <div id="engagement">
                        <h3>Nos engagements</h3>

                        <hr />
                        <p>
                        <ul>
                            <li><p>Devis gratuit et adapté  à  vos besoins.</p></li>
                            <li><p>Un interlocuteur unique pour un service personnalisé.</p></li>
                            <li><p>La compétence de professionnels de terrain</p></li>
                            <li><p> une éponse rapide</p></li>
                        </ul>
                        </p>
                    </div>
                </div><!--end col-right-->
 <script type="text/javascript" language="javascript">
$(document).ready(function($) {
    $('#GroupeGroupesForm').clearForm();

	});
</script>
            <script>
$(function() {
	var dates = $( "#GroupeDu1, #GroupeAu1,#GroupD" ).datepicker({
		defaultDate: 1,
		dateFormat: 'yy-mm-dd',
		buttonImage: "<?php echo $this->Html->url('/img/calendar.gif')?>",
		buttonImageOnly: true ,
		changeMonth: true,
		numberOfMonths: 1,
		showOn: "both",
		minDate : new Date(),
		onSelect: function( selectedDate ) {
			var option = this.id == "GroupeDu1" ? "minDate" : "maxDate",
				instance = $( this ).data( "datepicker" ),
				date = $.datepicker.parseDate(
					instance.settings.dateFormat ||
					$.datepicker._defaults.dateFormat,
					selectedDate, instance.settings );
			dates.not( this ).datepicker( "option", option, date );
			
            // Add one day
             date.setDate(date.getDate()+1);

            // Set the new date
            // $(".to input").datepicker('setDate', date);  
		} 
	});
});

$(function() {
	var dates = $( "#GroupeDu1, #GroupeAu1" ).datepicker({
		defaultDate: 1,
		dateFormat: 'yy-mm-dd',
		buttonImage: "<?php echo $this->Html->url('/img/calendar.gif')?>",
		buttonImageOnly: true ,
		changeMonth: true,
		numberOfMonths: 1,
		showOn: "both",
		minDate : new Date(),
		onSelect: function( selectedDate ) {
			var option = this.id == "GroupeAu1" ? "minDate" : "maxDate",
				instance = $( this ).data( "datepicker" ),
				date = $.datepicker.parseDate(
					instance.settings.dateFormat ||
					$.datepicker._defaults.dateFormat,
					selectedDate, instance.settings );
			dates.not( this ).datepicker( "option", option, date );
			
            // Add one day
            date.setDate(date.getDate()+1);

            // Set the new date
            //$("#s_au_bis").datepicker('setDate', date);  
		} 
	});
});
</script>    
		