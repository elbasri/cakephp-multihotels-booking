<?=$this->Iresa->links($type,$annee,$mois,'Minimum Stay')?>
<div class="clear"></div>
<script>
function changeEtatTD(sender){
	sender.removeClass("e0");
	sender.removeClass("e1");
	sender.removeClass("e2");
	 
	tmpClass = 'e1' ;
	tmpVal =   $("#val_stay").val();
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
	console.debug(chambre);
	
	val =   $("#val_stay").val();
	 if (val < 0){
		return false;
	}
	
	url = "<?=$this->Html->url('/hotel/saveTarif')?>" ;
	url = url + '/'	+ ladate + '/' + val  + '/' + chambre +'/min_stay' ;
	$.get(url, function(data){
			if (data == "ok") {
				changeEtatTD(sender);
			} 
	});
}

function updateROW(sender){
	ladate   =  sender.siblings('.chambre_date').val() ;
	chambre  =  sender.siblings('.chambre_id').val()   ;
	val =   $("#val_stay").val();
    if (val < 0){
		return false;
	}
		alert(val);

	url = "<?=$this->Html->url('/hotel/saveTarifs')?>" ;
	url = url + '/'	+ ladate + '/' + val  + '/' + chambre +'/min_stay' ;
	$.get(url, function(data){
			if (data == "ok") {
				changeEtatRow(sender);
			} 
	});
}

function updateCol(sender){
	var ladate=sender.attr("id").substring(1);
	val =   $("#val_stay").val();
    if (val < 0){
		return false;
	}
	
	url = "<?=$this->Html->url('/hotel/saveTarifCol')?>" ;
	url = url + '/'	+ ladate + '/' + val + '/min_stay' ;
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
	
	
	$("a.chambre_bb").click(function(){
	    if($("#val_stay").val() < 0 ){
			return false ;
		}
		updateROW($(this));
		return false;
	});
	
	$("td.d").live('click' , function (){
			updateCol($(this));
			return false ;
	});
	
	$("td.n").click(function(){
		if($("#val_stay").val() < 0 ){
			return false ;
		}
		updateTD($(this));
	});
	
});	
</script>


<div class="x5">
<?=$this->Form->input('Min Stay',array('id'=>'val_stay','value'=>1,'div'=>false));?>

</div>
<?php $this->Iresa->inventaires($type,$annee,$mois)?>