<script>
$(document).ready(function() {
		$('#promoForm').submit(function() {
			$('div.promo:hidden').each(function(i){
					$(this).children('div.input').remove();
			}) ;
			
			return true;
		
		});


	   	$(".datePicker").datepicker({
						defaultDate: 1,
						dateFormat: 'yy-mm-dd',
						buttonImage: "<?php echo $this->Html->url('/img/calendar.gif')?>",
						buttonImageOnly: true ,
						changeMonth: true,
						numberOfMonths: 1,
						showOn: "both",
						minDate : new Date()
	});
		
       function afficheVal(){
				div_id ='s_' + $('#PromotionType').val();
				$("#" + div_id).show();
	   }

		$('#PromotionType').change(function() {
				div_id ='s_' + $(this).val();
				$('div.promo').hide();
				$("#" + div_id).show();
			
		});
		
		
		
		afficheVal() ;

}) ;
</script>
<div class="form">
<?php echo $this->IForm->create('Promotion',array('id'=>'promoForm','url'=>'/hotel/promotion_add'));?>

<h3>Ajouter Promotion</h3>		

	<?php
		echo $this->IForm->input_('id');
		
		echo $this->IForm->input('Chambre');
		echo '<div class="clear"></div>';
			echo $this->IForm->input('titre',array('style'=>'width:80%','rows'=>1,'div'=>array('class'=>'x8')));
		echo $this->IForm->input_('du',array('label'=>'Reservation du','type'=>'text','class'=>'datePicker'));
		echo $this->IForm->input_('au',array('label'=>'Reservation au','type'=>'text','class'=>'datePicker'));
		echo $this->IForm->input_('type',array('label'=>'Promotion','options'=>$promoTypes,'empty'=>false,'div'=>array('class'=>'x10 input select')));
		
		
	?>
		
		
		
<?php
	echo '<div id="s_1" style="display:none" class="promo">' ;
		echo $this->IForm->input_('val1',array('label'=>'%')); 
	echo '</div>' ;
?>

<?php
	echo '<div id="s_0" style="display:none" class="promo">' ;
		echo $this->IForm->input_('val1',array('label'=>'%')); 
	echo '</div>' ;
?>

<?php 
	echo '<div id="s_2" style="display:none" class="promo">' ;
	  echo $this->IForm->input_('val1',array('label'=>'Nombre de nuit(s) gratuite(s)')); 
	  echo $this->IForm->input_('val2',array('label'=>'Nombre de nuit(s) reservée(s)'));
	echo '</div>' ;  
?>


<?php 
	echo '<div id="s_3" style="display:none" class="promo">' ;
	  echo $this->IForm->input_('val1',array('label'=>'Pourcentage (%)')); 
	  echo $this->IForm->input_('val2',array('label'=>'Séjour Minimum'));
	echo '</div>' ;    
?>


<?php 
	echo '<div id="s_4" style="display:none" class="promo">' ;
	//    echo $this->IForm->input_('du1',array('type'=>'text','class'=>'datePicker','label'=>'Réservation du'));
	//	echo $this->IForm->input_('au1',array('type'=>'text','class'=>'datePicker','label'=>'Réservation au'));	
	    echo $this->IForm->input_('val1',array('label'=>'Pourcentage (%)')); 
	    echo $this->IForm->input_('val2',array('label'=>'jour(s) avant arrivée'));
	echo '</div>' ;      
?>

<?php 
	echo '<div id="s_5" style="display:none" class="promo">' ;
	  //    echo $this->IForm->input_('du1',array('type'=>'text','class'=>'datePicker','label'=>'Réservation du'));
	  //	echo $this->IForm->input_('au1',array('type'=>'text','class'=>'datePicker','label'=>'Réservation au'));	
	    echo $this->IForm->input_('val1',array('label'=>'Pourcentage (%)')); 
	    echo $this->IForm->input_('val2',array('label'=>'jour(s) avant arrivée'));
		 echo $this->IForm->input_('val3',array('label'=>'Séjour Minimum'));
	echo '</div>' ;      
?>

		
<?php
		echo $this->IForm->end_('Enregistrer'); 
?>				
<?php $liste_action = $this->Html->link('Promotions', array('action' => 'index'),array('class'=>'noid')) ;
		$this->RAction->register($liste_action,false);
?></div>