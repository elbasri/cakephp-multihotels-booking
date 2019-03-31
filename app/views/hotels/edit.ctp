<div class="form">
<?php echo $this->IForm->create('Hotel');?>

<h1>	<?php 
					if ($ave == 'A') {
						echo 'Ajout Hotel';
					}elseif ($ave == 'E') {;
						echo	'Modification Hotel';
					} else {
						echo	'Consultation Hotel';
					}
			
				?>
</h1>
	<?php
		
		echo $this->IForm->input_('id');
		echo "<FIELDSET>";
		echo '<LEGEND align=top> Informations GENERAL </LEGEND> ';
		echo $this->IForm->input_('name', array('label'=>'Nom',"icon"=>"building.png"));
		echo $this->IForm->input_('tel', array("icon"=>"telephone.png"));
		echo $this->IForm->input_('fax', array("icon"=>"page_white_text.png"));
		echo $this->IForm->input_('site_web', array("icon"=>"application.png"));
		echo $this->IForm->input_('langue_id');
		echo $this->IForm->input_('hotel_type_id',array('label'=>'Classification'));
		echo $this->IForm->input_('devise_id', array("icon"=>"money.png"));
		echo $this->IForm->input_('comission', array("icon"=>"money.png"));
		
		echo $this->IForm->input_('email', array("icon"=>"email.png"));
		echo $this->IForm->input_('pw', array("label"=>"Mot de passe",'value'=>''));
		echo '<div class="x5"><label>Active</label>'.$this->IForm->input_('active',array('label'=>false,'div'=>false)).'</div>';
		echo '<div class="clear"></div>' ;
		echo $this->IForm->input_('responsable_name',array('label'=>'Responsable'));
		echo $this->IForm->input_('responsable_tel',array('label'=>'Responsable Tel'));
		echo $this->IForm->input_('login',array('label'=>'Login'));
		echo "</FIELDSET>";
		
		echo "<FIELDSET>";
		echo '<LEGEND align=top> ADRESSE (SITUATION) </LEGEND> ';
		echo $this->IForm->input_('pay_id',array('label'=>'Pays'));
		echo $this->IForm->input_('ville_id');
		echo $this->IForm->input_('adresse_rue');
		echo $this->IForm->input_('adresse_rue_num');
		echo $this->IForm->input_('adresse_cp',array('label'=>'CP'));
		echo '<div class="clear"></div>';
		echo $this->IForm->input_('latitude', array("icon"=>"map.png"));
		echo $this->IForm->input_('longitude', array("icon"=>"map.png"));
		echo "</FIELDSET>";
		
		echo "<FIELDSET>";
		echo '<LEGEND align=top> CHECK IN/OUT </LEGEND> ';
			echo $this->IForm->input_('checkin', array('type'=>'time',"icon"=>"door_in.png"));
			echo $this->IForm->input_('checkout', array('type'=>'time',"icon"=>"door_out.png"));
			echo '<div class="x8">' ;
						echo $this->IForm->label('Fermeture annuelle du ') ;
						echo $this->IForm->day('fermeture_du_day','',array('empty'=>true,'div'=>false,'name'=>'data[Hotel][fermeture_du_day]'));
						echo $this->IForm->month('fermeture_du_month','',array('empty'=>true,'div'=>false,'name'=>'data[Hotel][fermeture_du_month]'));
					echo '<span style="font-weight:bold">Au </span>';
						echo $this->IForm->day('fermeture_au_day','',array('empty'=>true,'div'=>false,'name'=>'data[Hotel][fermeture_au_day]'));
						echo $this->IForm->month('fermeture_au_month','',array('empty'=>true,'div'=>false,'name'=>'data[Hotel][fermeture_au_month]'));	
					echo '</div>' ;	
		echo "</FIELDSET>";
		
		echo "<FIELDSET>";
		echo '<LEGEND align=top> CAPACITES </LEGEND> ';
		echo $this->IForm->input_('nbre_etoiles', array('type'=>'select','options'=>$etoiles,"icon"=>"star.png"));
		echo $this->IForm->input_('nbre_chambres');
		echo $this->IForm->input_('nbre_villas');
		echo $this->IForm->input_('nbre_suites');
		echo $this->IForm->input_('nbre_etages');
		echo '<div class="clear"></div>' ;
		echo '<div class="x11">'.$this->IForm->input('CarteCredit').'</div>';
		//echo '<div class="x11">'.$this->IForm->input('Chambre',array('size'=>10,'style'=>'width:80%')).'</div>';
		echo "</FIELDSET>";
		
		echo "<FIELDSET>";
		echo '<LEGEND align=top>Conditions et frais d\'annulation</LEGEND> ';
			echo $this->IForm->input_('conditions',array('cols'=>80));
		echo "</FIELDSET>";
		
		echo "<FIELDSET>";
		echo '<LEGEND align=top>....</LEGEND> ';
		echo $this->IForm->input_('description',array('cols'=>80));
		echo "</FIELDSET>";
		
	?>
	
<?php if ($ave !== 'V'){ echo $this->IForm->end_('Enregistrer'); }
				else {  echo '</form>' ;}
?>
<?php $liste_action = $this->Html->link('Hotels', array('action' => 'index'),array('class'=>'noid')) ;
		$this->RAction->register($liste_action);
?></div>