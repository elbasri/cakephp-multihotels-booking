
<div class="form">
<?php echo $this->IForm->create('Hotel');?>

<h3>	<?php 
					if ($ave == 'A') {
					echo 'Ajout Hotel';
					}elseif ($ave == 'E') {;
					echo	'Modification Hotel';
					} else {
					echo	'Consultation Hotel';
					}
				?></h3>		

	<?php
		echo $this->IForm->input_('name');
		echo $this->IForm->input_('tel');
		echo $this->IForm->input_('fax');
		echo $this->IForm->input_('site_web');
		echo $this->IForm->input_('email');
		echo $this->IForm->input_('langue_id');
		echo $this->IForm->input_('adresse_rue');
		echo $this->IForm->input_('adresse_rue_num');
		echo $this->IForm->input_('adresse_cp');
		echo $this->IForm->input_('ville_id');
		echo $this->IForm->input_('pay_id');
		echo $this->IForm->input_('longitude');
		echo $this->IForm->input_('latitude');
		echo $this->IForm->input_('devise_id');
		echo $this->IForm->input_('checkin');
		echo $this->IForm->input_('checkout');
		echo $this->IForm->input_('description');
		echo $this->IForm->input_('nbre_etoiles');
		echo $this->IForm->input_('nbre_chambres');
		echo $this->IForm->input_('nbre_villas');
		echo $this->IForm->input_('nbre_suite');
		echo $this->IForm->input_('nbre_etages');
	?>
<?php if ($ave !== 'V'){ echo $this->IForm->end_('Enregistrer'); }
				else {  echo '</form>' ;}
?>
<?php $liste_action = $this->Html->link('Hotels', array('action' => 'index'),array('class'=>'noid')) ;
		$this->RAction->register($liste_action);
?></div>