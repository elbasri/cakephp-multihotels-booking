<div class="form">
<?php echo $this->IForm->create('Activite');?>

<h3>	<?php 
					if ($ave == 'A') {
					echo 'Ajout Activite';
					}elseif ($ave == 'E') {;
					echo	'Modification Activite';
					} else {
					echo	'Consultation Activite';
					}
				?></h3>		

	<?php
		echo $this->IForm->input_('id');
		echo $this->IForm->input_('activite_category_id',array('label'=>'Catégorie'));
		echo '<div class="x5">'.$this->IForm->input('thumb',array('label'=>'Image')).'</div>';
        echo $this->IForm->input_('adresse',array('label'=>'Adresse'));
		echo $this->IForm->input_('telephone',array('label'=>'Téléphone'));

		echo $this->IForm->input_('prix',array());
		echo $this->IForm->input_('devise_id',array());
		echo $this->IForm->input_('ville_id',array());
		echo $this->IForm->input_('email');
		
	?>
	
	
<div class="portlet x11">

<?php echo $this->element('slate_language')?>	
	<div class="portlet-content">
			<?php
				echo '<div class="x10" id="dfr">'	;
					echo $this->IForm->input_('titre',array('label'=>'Titre Fr'));
					echo '<div class="clear"></div>'	;
					echo $this->Form->label('Contenu').'<br/>';
					echo $this->Form->input('content',array('label'=>false));
					echo $this->IForm->editor('content');
				echo '</div>' ;
				echo '<div class="x10" id="deng">'	;
					echo $this->IForm->input_('titreeng',array('label'=>'Titre Eng'));
					echo '<div class="clear"></div>'	;
					echo $this->Form->label('Contenu').'<br/>';
					echo $this->Form->input('contenteng',array('label'=>false));
					echo $this->IForm->editor('contenteng');
				echo '</div>' ;
				echo '<div class="x10" id="desp">'	;
					echo $this->IForm->input_('titreesp',array('label'=>'Titre Esp'));
					echo '<div class="clear"></div>'	;
					echo $this->Form->label('Contenu').'<br/>';
					echo $this->Form->input('contentesp',array('label'=>false));
					echo $this->IForm->editor('contentesp');
				echo '</div>' ;
			?>
	</div>
</div>	
	
<?php if ($ave !== 'V'){ echo $this->IForm->end_('Enregistrer'); }
				else {  echo '</form>' ;}
?>
<?php $liste_action = $this->Html->link('Activites', array('action' => 'index'),array('class'=>'noid')) ;
		$this->RAction->register($liste_action);
?></div>