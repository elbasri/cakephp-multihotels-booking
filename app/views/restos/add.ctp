
<div class="form">
<?php echo $this->IForm->create('Produit');?>

<h3>	<?php 
					if ($ave == 'A') {
					echo 'Ajout Produit';
					}elseif ($ave == 'E') {;
					echo	'Modification Produit';
					} else {
					echo	'Consultation Produit';
					}
				?></h3>		

	<?php
		echo $this->IForm->input_('titre');
		echo $this->IForm->textarea('produit');
		echo $this->IForm->input_('user_id');
	?>
<?php if ($ave !== 'V'){ echo $this->IForm->end_('Enregistrer'); }
				else {  echo '</form>' ;}
?>
<?php $liste_action = $this->Html->link('Produits', array('action' => 'index'),array('class'=>'noid')) ;
		$this->RAction->register($liste_action);
?></div>