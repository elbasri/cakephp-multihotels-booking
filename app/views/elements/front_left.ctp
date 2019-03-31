<!--[if IE 7]>
<style>
.chercheHotelBox .checkbox input{ border:none; overflow:hidden;width:14px;padding:0;margin:0; height:5px;   }
.chercheHotelBox select{ background:#eaeaea; }
</style>
<![endif]-->
<!--[if IE 8]>
<style>
.chercheHotelBox .checkbox input{ border:none; overflow:hidden;width:14px;padding:0;margin:0; height:14px;   }
</style>
<![endif]-->
<!--[if IE 9]>
<style>
.chercheHotelBox .checkbox input{ border:none; overflow:hidden;width:14px;padding:0;margin:0; height:14px;   }
</style>
<![endif]-->
<?php echo $html->css('Proweb-css-search.css'); ?>
<script>
$(document).ready(function() {

	function affichePlus(){

		dshow = false
		$("#detaile-id  input:text").each(function(i, val) {
			if($(this).val() != ''){
				dshow = true ;
			}
		});
		
		$("#detaile-id  input:checkbox").each(function(i, val) {
			if($(this).attr('checked')){
				dshow = true ;
			}
		});
	
		if(dshow){
			$("#voir_plus").click();
		}
	}
	
	/*   $("#s_du , #s_du_bis , #s_au , #s_au_bis"  ).datepicker({
						defaultDate: 1,
						dateFormat: 'yy-mm-dd',
						buttonImage: "<?php echo $this->Html->url('/img/calendar.gif')?>",
						buttonImageOnly: true ,
						changeMonth: true,
						numberOfMonths: 1,
						showOn: "both",
						minDate : new Date()
	}); */
	
	$('#selectPays').selectChain({
			target: $('#selectVille'),
			url: '<?php echo $this->Html->url('/villes/byPays')?>' ,
		     data: $('#selectPays').val(),
            type: 'post'
	});
	
	$("#voir_plus").click(function(){
			if ($("#detaile-id").is(":visible")){
				  $("#voir_plus").css("background","url(/img/bg_a_open.png)  0px 2px no-repeat"); 	
			}
			else{
				  $("#voir_plus").css("background","url(/img/bg_a_close.png)  0px 2px no-repeat"); 	
			}
		$("#detaile-id").fadeToggle();
	});
	
	affichePlus();
});	
	
</script>	
<script>
$(function() {
	var dates = $( ".from input, .to input" ).datepicker({
		defaultDate: 1,
		dateFormat: 'yy-mm-dd',
		buttonImage: "<?php echo $this->Html->url('/img/calendar.gif')?>",
		buttonImageOnly: true ,
		changeMonth: true,
		numberOfMonths: 1,
		showOn: "both",
		minDate : new Date(),
		onSelect: function( selectedDate ) {
			var option = this.id == "s_du" ? "minDate" : "maxDate",
				instance = $( this ).data( "datepicker" ),
				date = $.datepicker.parseDate(
					instance.settings.dateFormat ||
					$.datepicker._defaults.dateFormat,
					selectedDate, instance.settings );
			dates.not( this ).datepicker( "option", option, date );
			
            // Add one day
             date.setDate(date.getDate()+1);

            // Set the new date
            // $(".to input").datepicker('setDate', date);  
		} 
	});
});

$(function() {
	var dates = $( "#s_au_bis, #s_du_bis" ).datepicker({
		defaultDate: 1,
		dateFormat: 'yy-mm-dd',
		buttonImage: "<?php echo $this->Html->url('/img/calendar.gif')?>",
		buttonImageOnly: true ,
		changeMonth: true,
		numberOfMonths: 1,
		showOn: "both",
		minDate : new Date(),
		onSelect: function( selectedDate ) {
			var option = this.id == "s_du_bis" ? "minDate" : "maxDate",
				instance = $( this ).data( "datepicker" ),
				date = $.datepicker.parseDate(
					instance.settings.dateFormat ||
					$.datepicker._defaults.dateFormat,
					selectedDate, instance.settings );
			dates.not( this ).datepicker( "option", option, date );
			
            // Add one day
            date.setDate(date.getDate()+1);

            // Set the new date
            //$("#s_au_bis").datepicker('setDate', date);  
		} 
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
				<!--<div class="villePays">
					<span>Pays</span>
					<?php echo $this->Form->input('pay_id',array('id'=>'selectPays','empty'=>'Choisir Pays','div'=>false,'label'=>false))?>
				</div>-->
				
				<div class="villePays">
					<span>Ville</span>
					<?php echo $this->Form->input('ville_id',array('id'=>'selectVille','empty'=>'Choisir Ville','div'=>false,'label'=>false))?>
				</div>
			</div>
			<div class="datesBox">
				<div class="arrive from">
					<span class="titleArive">Arrivée le :</span>
					<?php echo $this->Form->input('du',array('id'=>"s_du",'class'=>'arriveInpt','div'=>false,'label'=>false))?>
				</div>
				
				<div class="arrive depart to">
					<span class="titleArive">Départ le :</span>
					<?php echo $this->Form->input('au',array('id'=>"s_au",'class'=>'arriveInpt','div'=>false,'label'=>false))?>
				</div>
			</div>
			
			<!--<div class="othersBox">
					
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
						<?php $i= 1;$aoptions =array() ;	
							  while($i<=24) :
								$aoptions[] = $i; 
								$i++;
							  endwhile ;
							echo $this->Form->input('adulte',array( 'options'=>$aoptions ,
									'type'=>'select','div'=>false,'label'=>false
									));
						?>
					</div>          
					<div class="chambres Enfants">
						<span>Enfants</span>
						<select><option>0</option>  <option>1</option> <option>2</option> <option>3</option> <option>4</option></select>
					</div>
					
                
						
			</div>-->
			<div class="clear"></div>
			
			
		<div class="clear"></div>
		<a id="voir_plus"> Option </a>
		<div class="FindBox"><input type="submit" class="srchhotBtn" value="" /></div>
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
					<?php  if(!in_array($this->action,array('hotels','riads','villas_appart')))	:
							   echo '<hr><h3>Classification</h3>';	
							   echo $this->Form->input('HotelType',
									array('options'=>$classifications,'type' => 'select','multiple' => 'checkbox','label'=>false)) ;
						   	endif; 
					?>
					<?php $condType = array(100,200);
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
							 $etoiles = array(5=>'Exception',4=>'Luxe',3=>'Charme',2=>'Confort',7=>'Exclusivité',0=>'Non classé') ;
							 echo '<h3>Catégorie Riad</h3>';
						    echo $this->Form->input('nbre_etoiles_r',
									array('options'=>$etoiles,'type' => 'select','multiple' => 'checkbox','label'=>false)) ;
						endif;			
					?>
			</div>
		     </div>
		</div>
		  <?php  if($this->Session->check('Search')) :
							echo 	$this->Html->link('Annuler la recherche','/pages/cancelSearch') ;
						  endif;
					?>
		
		</div>
	</form>

	
</div>
<div align="center">
<!--<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
 160.600 
<ins class="adsbygoogle"
     style="display:inline-block;width:160px;height:600px"
     data-ad-client="ca-pub-9084341276251709"
     data-ad-slot="1027733278"></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script>-->
</div>
<!--<iframe src="<?=$this->Html->url('/')?>app/webroot/newsletter/wm-register.php" style="width:100%; height:210px;text-align:left" frameborder="0" scrolling="no"></iframe>-->
<?php if(!empty($banner)) :?>
<div class="clear"></div>
<div id="banner_left" >
	<?php echo $banner['Banner']['content']?>
</div>
<?php endif;?>
<style>
#ui-datepicker-div{
	z-index : 1000 !important;
}
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



               