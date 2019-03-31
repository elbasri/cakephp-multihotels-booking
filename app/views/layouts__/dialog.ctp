<script>
function getDialogContent(url,sender){
		$.get(url, function(data) {
					$("#dialogSender").html(sender);
					$('#dialog_content').html(data);
					
					if(open){
						$('#sdialog').dialog('open');
					}
				$('#sdialog table.sortTable').dataTable ({
					"sScrollY": "400px",
					"bFilter": false,
					"bSort": false ,
					"bPaginate": false,
					"bInfo": false,
					//"bAutoWidth": false,
					"sScrollX": "100%"
				//	"sScrollXInner": "110%"

				});
				
		});
}


$('.input_search').live ('click' , function () { 
				var url = $(this).attr("href");
				var sender =$(this).attr("id");
		//		alert(sender);
				getDialogContent(url,sender);
				return false;
});
	
function setSelectEvent(){
	$('.tsearch tbody tr').live ('dblclick' , function () { 
			var firstTd =$(this).children('td:first');
			var selectedVal = firstTd.attr("id");
				selectedVal = selectedVal.substring(3);
			var sender = $("#dialogSender").html();
				sender = sender.substring(3);
			$("#val"+sender).val(selectedVal);
			$("#dis"+sender).val(firstTd.html());
			$('#sdialog').dialog('close');
			
	});	
}

jQuery(function($) {
	setSelectEvent();
	$('#sdialog').dialog({
        autoOpen: false,
		draggable: false,
		width: 900,
        //height: 600,
       // bgiframe: true,
        modal: true,
		position: 'top'
		});	
});	

// Code pour la gestion Acruds 
$('#btn_add_pop').click(function(){
		var action =$(this).attr("href");
		
		$.get(action, function(data) {
				$('#dialog_content').html(data);
				$('#sdialog').dialog('open');
			});
		return false;	
	});
	$('#btn_edit_pop').click(function(){
			var ligneId=$(".mydatatable .row_selected td:first").attr("id");
			
			if (!ligneId) {
				alert('Pas de selection!');
				return false;
			}
		ligneId=ligneId.substring(3);
		var action =$(this).attr("href");
		$.get(action +'/'+ ligneId, function(data) {
				$('#dialog_content').html(data);
				$('#sdialog').dialog('open');
			});
		return false;	
	});
</script>
<div id="sdialog">
	<div id="dialog_content" class="x11">
		<?=$content_for_layout?>
	</div>	
	<a id="dialogSender" style="visibility:hidden" href="#"></a>
</div>


		
		
	