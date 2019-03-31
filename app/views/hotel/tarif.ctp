<style>
.e1{
	background-color : #3B5998 !important ;
	color : #EEEEEE ;
}	
</style>
<?=$this->Iresa->links($type,$annee,$mois,'Tarif en '.$devise)?>
<script>
function changeEtatTD(sender){
	sender.removeClass("e0");
	sender.removeClass("e1");
	sender.removeClass("e2");
	 
	tmpClass = 'e1' ;
	tmpVal =   $("#val_tarif").val();
	sender.addClass(tmpClass);
	sender.html(tmpVal);
}

function changeEtatRow(sender){
	var i=1;
	var debut_date = sender.siblings('.chambre_date').val() ; 
	debut_date = debut_date.substring(0,8);
	sender.parent('td').siblings('.n').each(function(){
		changeEtatTD($(this));
		if (!$(this).attr("id")){
			var id = "c" + debut_date ;
			if (i<10){
				id = id + "0" + i ;
			}else {
				id = id + i ;
			}
			
			$(this).attr("id",id);
		}
		i++; 
	});
	
}

function updateTD(sender){
	ladate = sender.attr("id").substring(1);
	chambre=  sender.siblings('.chambre_bb').children('.chambre_id').val() ;
	//console.debug(chambre);
	
	val =   $("#val_tarif").val();
	
	
	url = "<?=$this->Html->url('/hotel/saveTarif')?>" ;
	url = url + '/'	+ ladate + '/' + val  + '/' + chambre ;
	$.get(url, function(data){
			if (data == "ok") {
				changeEtatTD(sender);
			} 
	});
}

function updateROW(sender){
	ladate   =  sender.siblings('.chambre_date').val();
	chambre  =  sender.siblings('.chambre_id').val();

	val =   $("#val_tarif").val();
    if (val <= 0){
		return false;
	}
	url = "<?=$this->Html->url('/hotel/saveTarifs')?>" ;
	url = url + '/'	+ ladate + '/' + val  + '/' + chambre ;
	$.get(url, function(data){
			if (data == "ok") {
				changeEtatRow(sender);
			} 
	});
}


function updateCol(sender){
	var ladate=sender.attr("id").substring(1);
	val =   $("#val_tarif").val();
    if (val <= 0){
		return false;
	}
	url = "<?=$this->Html->url('/hotel/saveTarifCol')?>" ;
	url = url + '/'	+ ladate + '/' + val   ;
	$.get(url, function(data){
		if (data == "ok") {
	    	changeEtatCol(sender,val) ;
		}	
	});
	
}

function changeEtatCol(sender,val){
	var ladate = "c"+sender.attr("id").substring(1) ;
	$('td[id$="'+ladate+'"]').each(function(){
		$(this).html(val);	
	});
}

jQuery(function($) {
	$("a.chambre_bb").live('click' , function (){
		updateROW($(this));
		return false;
	});
	
	
	$("td.d").live('click' , function (){
			updateCol($(this));

			return false ;
	});
	
	$("td.n").live('click' , function (){
		//changeEtatTD($(this));
		updateTD($(this));
	});
});	
</script>

<div class="x5">
	<?php echo $this->Form->input('Tarif',array('id'=>'val_tarif','div'=>false));?>
	<span><?php echo $devise?></span>
</div>

<?php $this->Iresa->inventaires($type,$annee,$mois)?>

