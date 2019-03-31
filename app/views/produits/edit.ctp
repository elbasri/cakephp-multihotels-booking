<div class="form">

	<?php echo $this->IForm->create('Produit');?>
	<h3>	<?php if ($ave == 'A') {
					echo 'Ajout Produit';
					}elseif ($ave == 'E') {;
					echo	'Modification Produit';
					} else {
					echo	'Consultation Produit';
					}
				?>
	</h3>		
<?php
	echo $this->IForm->input_('id');
	
?>

<div class="portlet x11">
<?php //echo $this->element('slate_language')?>	
	<div class="portlet-content">
			<?php
				echo '<div class="x10" id="dfr">'	;
					echo $this->IForm->input_('titre',array('label'=>'Titre','style'=>'width:100%'));
					echo $this->IForm->input_('desc',array('label'=>'Description','style'=>'margin-left:5px;width:100%'));
					 if ($ave == 'A')
						echo $this->IForm->input_('prix',array('label'=>'Le Prix','value'=>'0','style'=>'width:100%'));
					else
						echo $this->IForm->input_('prix',array('label'=>'Le Prix','style'=>'width:100%'));
					echo $this->IForm->input_('star',array('label'=>'Niveau','options'=>array('2'=>'2 étoiles','3'=>'3 étoiles','4'=>'4 étoiles','5'=>'5 étoiles'),'style'=>'width:100%;margin-left:5px'));
					echo '<div class="clear"></div>';
					echo $this->IForm->input_('carte',array('label'=>'Carte/Maps','style'=>'margin-left:5px;width:100%'));
					echo $this->IForm->input_('image',array('label'=>'L\'image','style'=>'width:100%','id'=>'SliderPhoto'));
					echo "<a onclick='openFileBrowserSliderPhoto(); return false;'>Selectionner</button></a>";
					echo '<div class="clear"></div>';
					echo $this->Form->label('Détails').'<br/>';
					echo $this->Form->textarea('produit',array('label'=>false));
					echo $this->IForm->editor('produit');
				echo '</div>' 
			?>
	</div>
</div>
<script>
$('#SliderPhoto').focus( function() {
  //alert(1);
  $(this).attr('readonly', 'true');
  //.prop('readonly', true);
});

$('#SliderPhoto').blur( function() {
  //$(this).prop('readonly', false);
  $(this).removeAttr('readonly');
});
</script>
	
<?php if ($ave !== 'V'){ echo $this->IForm->end_('Enregistrer'); }
				else {  echo '</form>' ;}
?>
<?php $liste_action = $this->Html->link('Contents', array('action' => 'index'),array('class'=>'noid')) ;
		$this->RAction->register($liste_action);
?></div>