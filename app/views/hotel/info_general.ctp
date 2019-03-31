<style>
#HotelFermetureAuYear ,#HotelFermetureDuYear{
	visibility : hidden ;
}
</style>
<h1>Informations générales</h1>
<div class="form">
	<?=$this->Form->create('Hotel',array('url'=>'/hotel/save'))?>
	<div class="" >
		<fieldset>
			<legend>Contact</legend>
			<?php 
			   echo $this->IForm->input_('name',array('readonly'=>true,'label'=>'Hotel', "icon"=>"building.png")) ;
			   echo $this->IForm->input_('tel', array("icon"=>"telephone.png")) ;
			   echo $this->IForm->input_('fax', array("icon"=>"page_white_text.png")) ;
			   echo $this->IForm->input_('site_web', array("icon"=>"application.png")) ;
			   echo $this->IForm->input_('email', array("icon"=>"email.png")) ;
			   echo $this->IForm->input_('Langue.name',array('label'=>'Langue','readonly'=>true)) ;
			   	echo '<div class="clear"></div>' ;
				echo $this->IForm->input_('responsable_name',array('label'=>'Responsable'));
				echo $this->IForm->input_('responsable_tel',array('label'=>'Responsable Tel'));
			   
			?>
		</fieldset>
	</div>
	
	<div class="" >
		<fieldset>
			<legend>ADRESSE(SITUATION)</legend>
			<?php 
			   echo $this->IForm->input_('adresse_rue',array('label'=>'Nom Rue')) ;
			   echo $this->IForm->input_('adresse_rue_num',array('label'=>'Num Rue')) ;
			   echo $this->IForm->input_('adresse_cp',array('label'=>'CP')) ;
			   echo $this->IForm->input_('Ville.name',array('label'=>'Ville','readonly'=>true)) ;
			   echo $this->IForm->input_('Pay.name',array('label'=>'Pays','readonly'=>true)) ;
			   echo '<div class="clear"></div>';
			   echo $this->IForm->input_('longitude',array("icon"=>"map.png")) ;
			   echo $this->IForm->input_('latitude',array("icon"=>"map.png")) ;
			?>
		</fieldset>
	</div>
	<div class="clear"></div>
	<div class="">
		<fieldset>
			<legend>Détails de facturation</legend>
			<?php 
					echo $this->IForm->input_('Devise.name',array('label'=>'Devise','readonly'=>true)) ;
															echo $this->IForm->input_('hotelPrix');

					echo '<div class="clear"></div>' ;
					echo $this->IForm->input('CarteCredit',array('label'=>false,'type' => 'select','multiple' => 'checkbox')) ;

			?>
		</fieldset>
	</div>
	
	<div class="">
		<fieldset>
			<legend>Autre Details</legend>
			<?php 
					echo $this->IForm->input_('nbre_etoiles',array('disabled'=>'disabled','label'=>'Classification','type'=>'select','options'=>$etoiles));
					echo $this->IForm->input_('nbre_chambres');
					echo $this->IForm->input_('nbre_villas');
					echo $this->IForm->input_('nbre_suites');
					echo $this->IForm->input_('nbre_etages');
					echo $this->IForm->input_('checkin',array('type'=>'time'));
					echo $this->IForm->input_('checkout',array('type'=>'time'));

					echo '<div class="x8">' ;
						echo $this->IForm->label('Fermeture annuelle du ') ;
						echo $this->IForm->day('fermeture_du_day','',array('empty'=>true,'div'=>false,'name'=>'data[Hotel][fermeture_du_day]'));
						echo $this->IForm->month('fermeture_du_month','',array('empty'=>true,'div'=>false,'name'=>'data[Hotel][fermeture_du_month]'));
					echo '<span style="font-weight:bold">Au </span>';
						echo $this->IForm->day('fermeture_au_day','',array('empty'=>true,'div'=>false,'name'=>'data[Hotel][fermeture_au_day]'));
						echo $this->IForm->month('fermeture_au_month','',array('empty'=>true,'div'=>false,'name'=>'data[Hotel][fermeture_au_month]'));	
					echo '</div>' ;
					
			?>
		</fieldset>
	</div>
	<div class="clear"></div>
	<?=$this->Form->end('Enregistrer')?>
</div>