<?php echo $html->css('Proweb-css-search.css'); ?>
<script>
$(document).ready(function() {
  $("#s_du , #s_du_bis , #s_au , #s_au_bis"  ).datepicker({
						defaultDate: 1,
						dateFormat: 'yy-mm-dd',
						buttonImage: "<?php echo $this->Html->url('/img/calendar.gif')?>",
						buttonImageOnly: true ,
						changeMonth: true,
						numberOfMonths: 1,
						showOn: "both",
						minDate : new Date()
	});
	
	
	
	
	$('#selectPays').selectChain({
			target: $('#selectVille'),
			url: '<?php echo $this->Html->url('/villes/byPays')?>' ,
		     data: $('#selectPays').val(),
            type: 'post'
	});
	
	$("#voir_plus").click(function(){ 
			if ($("#detaile-id").is(":visible")) 
			 {
				  $("#voir_plus").css('background','url(/img/bg_a_open.png)  0px 2px no-repeat') ;
			}else {
				$("#voir_plus").css('background','url(/img/bg_a_close.png)  0px 2px no-repeat') ;
			}
			$("#detaile-id").fadeToggle();
		
	});
});	
	
</script>	


<div class="chercheHotelBox">
<?php  	  $action = 'etablissement' ;
          if(in_array($this->action,array('hotels','riads','villas_appart'))) :
				$action = $this->action ;
		  endif;
		  echo  $this->Form->create('Search',array('url'=>"/pages/$action",'id'=>'hotelSearch'));
?>
	<div class="chercheHotelwrap">
		<h2 class="srchTitle">recherche hotels</h2>
		<div class="searchIndent">
			<div class="ville-pays">	
				<div class="villePays">
					<span>Pays</span>
					<?php echo $this->Form->input('pay_id',array('id'=>'selectPays','empty'=>'Choisir Pays','div'=>false,'label'=>false))?>
				</div>
				
				<div class="villePays">
					<span>Ville</span>
					<?php echo $this->Form->input('ville_id',array('id'=>'selectVille','empty'=>'--------','div'=>false,'label'=>false))?>
				</div>
			</div>
			<div class="datesBox">
				<div class="arrive">
					<span class="titleArive">Arrivée le :</span>
					<?php echo $this->Form->input('du',array('id'=>"s_du",'class'=>'arriveInpt','div'=>false,'label'=>false))?>
				</div>
				
				<div class="arrive depart">
					<span class="titleArive">Départ le :</span>
					<?php echo $this->Form->input('au',array('id'=>"s_au",'class'=>'arriveInpt','div'=>false,'label'=>false))?>
				</div>
			</div>
			
			<div class="othersBox">
					<div class="chambres">
								<span>Chambres</span>
						<?php 
							echo $this->Form->input('qte',array( 'options'=>array(1,2,3,4,5,6,7,8,9,10,11,12) ,
									'type'=>'select','class'=>'arriveInpt','div'=>false,'label'=>false
									));
						?>
                   </div>
					<div class="chambres adultes">
						<span>Adultes</span>
						
						<select>
							<option>1</option>
							<option>2</option>
							<option>3</option>
							<option>4</option>
						</select>
					</div>          
					<div class="chambres Enfants">
						<span>Enfants</span>
						<select>
							<option>0</option>
							<option>2</option>
							<option>3</option>
							<option>4</option>
						</select>
					</div>
                  <?php  if($this->Session->check('Search')) :
							echo 	$this->Html->link('Annuler la recherche','/pages/cancelSearch') ;
						  endif;
					?>
						
			</div>
			<div class="clear"></div>
			<a id="voir_plus"> Option </a>
			<div id ="detaile-id">
				<?php 
				echo $this->Form->input('name',array('div'=>'nom-etablissment','label'=>"Nom d'établissment")) ;
						
						echo '<div class="prix_search">' ;
							echo $this->Form->input('prix_min',array('label'=>"Prix Min")) ; 
							echo $this->Form->input('prix_max',array('label'=>"Prix Max")) ;
							echo '<span>'.$this->Front->devise().'</span>';
						echo  '</div>'	;
				?>
				
				<div class="clear"></div>
				
				<div id="search_plus">
					
					<?php  if($this->action =='etablissement')	:?>
					<hr>
					<?php 
							  echo '<h3>Classification</h3>';	
							  echo $this->Form->input('HotelType',
							  array('options'=>$classifications,'type' => 'select','multiple' => 'checkbox','label'=>false)) ;
						   	endif; 
					?>
			
					<?php   $condType = array(100,200);
						 if	(!empty($this->Paginator->params['paging']['Hotel']['defaults']['conditions']['Hotel.hotel_type_id'])) :
							$condType	= $this->Paginator->params['paging']['Hotel']['defaults']['conditions']['Hotel.hotel_type_id'] ;
						endif;		
						
					?>
					
					<?php   
						    if( in_array('1',$condType))  : 
								   $etoiles = array(5=>5,4=>4,3=>3,2=>2,1=>1,0=>'Non classé') ;
								  echo '<h3>Catégorie Hotel</h3>';
								   echo $this->Form->input('nbre_etoiles_h',
											array('options'=>$etoiles,'type' => 'select','multiple' => 'checkbox','label'=>false)) ;
							endif;		
					?>
			
					<?php
						if( in_array('5',$condType))  : 
							 $etoiles = array(5=>'Confort',4=>'Charme',3=>'Luxe',2=>'Exception',1=>'Exclusivité',0=>'Non classé') ;
							 echo '<h3>Catégorie Riad</h3>';
						    echo $this->Form->input('nbre_etoiles_r',
									array('options'=>$etoiles,'type' => 'select','multiple' => 'checkbox','label'=>false)) ;
						endif;			
					?>
			</div>
		     </div>
		</div>
		<div class="clear"></div>
	<div class="FindBox">
				
				<input type="submit" class="srchhotBtn" value="" />
				<!--<a class="optionsBtn" href="#">options</a>-->
	</div>
</div>
<?php echo $this->Form->end() ?>
</div>

<style>
#search_plus div.checkbox{
	float: left;
    height: 20px;
    padding: 2px 0;
    width: 150px;
}	
#search_plus div.input{
	height: auto !important;
}	
#search_plus h3{
	margin : 5px;
	font-weight :bold ;
}
input {float:right}
</style>
               