
<div class="form">
<?php echo $this->IForm->create('Reservation');?>

<h3>	<?php 
					if ($ave == 'A') {
					echo 'Ajout Reservation';
					}elseif ($ave == 'E') {;
						echo	'Modification Reservation n:'.$this->data['Reservation']['id'];
						
					} else {
						echo	'Consultation Reservation'.$this->data['Reservation']['id'];
						
					}
				?></h3>		

	<?php
		echo $this->IForm->input_('id');
		echo $this->IForm->input_('nom');
		echo $this->IForm->input_('prenom');
		
		echo $this->IForm->input_('telephone');
		echo $this->IForm->input_('email');
		echo  '<div class="x5">';
			echo $this->IForm->input('etat',array('options'=>$etats));
		echo '</div>'		  ;
		echo  '<div class="x5">';
			echo $this->IForm->label('Confirmation hotel') ;
			echo $this->IForm->input('confirm_hotel',array('label'=>false));
		echo '</div>'		  ;
		echo $this->IForm->input_('hotel_id',array('disabled='=>'disabled='));
		echo $this->IForm->input_('chambre_id',array('disabled='=>'disabled='));
	?>
<?php if ($ave !== 'V'){ echo $this->IForm->end_('Enregistrer'); }
				else {  echo '</form>' ;}
?>
<?php $liste_action = $this->Html->link('Reservations', array('action' => 'index'),array('class'=>'noid')) ;
		$this->RAction->register($liste_action,false);
?></div>