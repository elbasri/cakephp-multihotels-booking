<?=$this->Iresa->links($type,$annee,$mois,'Disponibilité')?>
<div class="clear"></div>
<script>
function changeEtatTD(sender){
	sender.removeClass("e0");
	sender.removeClass("e1");
	sender.removeClass("e2");
	sender.removeClass("e3");
	 
	 
	tmpClass = 'e' + $("#select_dispo").val();
	tmpVal =   $("#val_dispo").val();
	
	if (tmpClass =='e2'){
		tmpVal = 0 ;
	}
	sender.addClass(tmpClass);
	sender.html(tmpVal);
}

function changeEtatRow(sender){
	sender.parent('td').siblings('.n').each(function(){
		changeEtatTD($(this));
	});
	
}

function updateTD(sender){
	ladate = sender.attr("id").substring(1);
	chambre=  sender.siblings('.chambre_bb').children('.chambre_id').val() ;
	
	val =   $("#val_dispo").val();
	attente = 0 ;
	
	if (val < 1 ) {
		return false ;
	}
	if ($("#select_dispo").val() == 2){
		val = 0;
	}
	if ($("#select_dispo").val() == 3){
		attente = 1 ;
	}
	
	url = "<?=$this->Html->url('/hotel/saveTarif')?>" ;
	url = url + '/'	+ ladate + '/' + val  + '/' + chambre + '/dispo/' + attente;
	
	$.get(url, function(data){
			if (data == "ok") {
				changeEtatTD(sender);
			} 
	});
}

function updateROW(sender){
	ladate   =  sender.siblings('.chambre_date').val();
	chambre  =  sender.siblings('.chambre_id').val() ;
	val =   $("#val_dispo").val();
	if (val < 1 ) {
		return false ;
	}
	
	attente = 0 ;
	if ($("#select_dispo").val() == 2){
		val = 0;
	}
	
	if ($("#select_dispo").val() == 3){
		attente = 1 ;
	}
	url = "<?=$this->Html->url('/hotel/saveTarifs')?>" ;
	url = url + '/'	+ ladate + '/' + val  + '/' + chambre +'/dispo/' + attente;
	
	$.get(url, function(data){
			if (data == "ok") {
				changeEtatRow(sender);
			} 
	});
}

function updateCol(sender){
	var ladate=sender.attr("id").substring(1);
	val =   $("#val_dispo").val();
	if (val < 1 ) {
		return false ;
	}
	if ($("#select_dispo").val() == 2){
		val = 0;
	}
	attente = 0 ;
	
	url = "<?=$this->Html->url('/hotel/saveTarifCol')?>" ;
	url = url + '/'	+ ladate + '/' + val + '/dispo/' + attente ;
	$.get(url, function(data){

		if (data == "ok") {
		
	    	changeEtatCol(sender,val) ;
		}	
	});
	
}

function changeEtatCol(sender,val){
	var ladate = "c"+sender.attr("id").substring(1) ;
	$('td[id$="'+ladate+'"]').each(function(){
		changeEtatTD($(this));	
	});
}

jQuery(function($) {
	$("#select_dispo").change(function(){
	        val = $(this).val();

			tmp = 'e' + val ;
			$(this).attr("class",tmp);
			if(val==2){
				$("#val_dispo").attr("readonly",true);
				$("#val_dispo").val(1);
			}else{
				$("#val_dispo").attr("readonly",false);
				$("#val_dispo").val(1);
			}
			
	});
	
	$("a.chambre_bb").click(function(){
		updateROW($(this));
		return false;
	});
		
	$("td.d").live('click' , function (){
			updateCol($(this));
			return false ;
	});
	
	$("td.n").click(function(){
		updateTD($(this));
	});
	
});	
</script>
<div class="x10">
	<?=$this->Form->input('disponibilite',array('id'=>'val_dispo','value'=>1,'div'=>false));?>
	<select id="select_dispo" class="e1"> 
		<option selected="true" value="1" class="e1">Disponible</option> 
		<option value="2" class="e2">Non disponible</option> 
		<option value="3" class="e3">En demande de disponibilite</option> 
	</select> 
</div>
<?php $this->Iresa->inventaires($type,$annee,$mois)?>
