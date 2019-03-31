
<div class="form">
<?php echo $this->IForm->create('ActiviteCategory');?>

<h3>	<?php 
					if ($ave == 'A') {
					echo 'Ajout Activite Category';
					}elseif ($ave == 'E') {;
					echo	'Modification Activite Category';
					} else {
					echo	'Consultation Activite Category';
					}
				?>
</h3>		

<div class="portlet x11">
<?php echo $this->element('slate_language')?>	

	<div class="portlet-content">	
		<?php
			echo $this->IForm->input_('id');
			
			echo '<div class="x10" id="dfr">'	;
				echo $this->IForm->input_('titre');
			echo '</div>' ;
			
			echo '<div class="x10" id="deng">'	;
				echo $this->IForm->input_('titreeng');
			echo '</div>' ;
			
			echo '<div class="x10" id="desp">'	;
				echo $this->IForm->input_('titreesp');
			echo '</div>' ;	
		?>
	</div>	
</div>	
<?php if ($ave !== 'V'){ echo $this->IForm->end_('Enregistrer'); }
				else {  echo '</form>' ;}
?>
<?php $liste_action = $this->Html->link('Activite Categories', array('action' => 'index'),array('class'=>'noid')) ;
		$this->RAction->register($liste_action);
?></div>