
<div class="form">
<?php echo $this->IForm->create('Guide');?>

<h3>	<?php 
					if ($ave == 'A') {
					echo 'Ajout Guide';
					}elseif ($ave == 'E') {;
					echo	'Modification Guide';
					} else {
					echo	'Consultation Guide';
					}
				?></h3>		

<?php
	echo $this->IForm->input_('id');
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
<?php $liste_action = $this->Html->link('Guides', array('action' => 'index'),array('class'=>'noid')) ;
		$this->RAction->register($liste_action);
?></div>