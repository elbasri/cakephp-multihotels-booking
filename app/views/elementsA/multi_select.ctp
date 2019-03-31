<?php
if (!isset($modelName))	{
	$modelName = 'Hotel' ;	
}	
if (!isset($fieldName))	{
    $fieldName = 'Hservice' ;
}
$selectedItems = array() ;
$selectVals = array(); 
if (!empty($this->data[$fieldName])) {
	$selectVals=  Set::extract($this->data,"/$fieldName/id") ;
  foreach ($this->data[$fieldName] as  $vals) :
	$selectedItems[$vals['id']] =  $vals['name'] ;
  endforeach ;
}
?>
<script>
$(document).ready(function() {
	$('#select-from option:selected').each( function() {
            $(this).attr("disabled",true);
			$(this).attr("selected",false);
	});	

    $('#select-add').click(function(){
        $('#select-from option:selected').each( function() {
                $('#select-to').append("<option value='"+$(this).val()+"'>"+$(this).text()+"</option>");
            $(this).attr("disabled",true);
			$(this).attr("selected",false);
        });
		return false;
    });
	
    $('#select-remove').click(function(){
        $('#select-to option:selected').each( function() {
           // $('#select-from option').append("<option value='"+$(this).val()+"'>"+$(this).text()+"</option>");
			 var value = $(this).val() ;
			 $('#select-from option[value="'+value+'"]').attr("disabled",false);
			 $(this).remove();
        });
		return false;
    });
	
	$('.form form').submit(function() {
		$('#select-to option').each( function() {
				$(this).attr("selected",true);
		})
		return true;
	});
	
	
});
</script>
<style>
select{
	width : 300px;
	height : 300px;
} 
</style>
<div  style="float:left; width:310px;">
<?=$this->Form->input('d',
	array('options'=>$opts,'selected'=>$selectVals,'multiple'=>'multiple','label'=>false,'div'=>false,'id'=>'select-from')) ;
?>
</div>
<div style="float: left; padding-top: 150px; width: 80px;">
<?=$this->Html->link('Rajouter ->','#',array('id'=>'select-add')) ;?>
</div>
<div style="float: left; padding-top: 150px; width: 70px;">
<?=$this->Html->link('<-Retirer','#',array('id'=>'select-remove')) ;?>
</div>
<div style="float:left; width:310px;">
<?=$this->Form->input($fieldName,
		array('options'=>$selectedItems,'selected'=>array(),'multiple'=>'multiple','label'=>false,'div'=>false,'id'=>'select-to')) ;
?>