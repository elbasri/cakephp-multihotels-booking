<style>
.e1 {
    background-color: #90CC55;
}
.portlet{
	margin-top : 18px !important
}	
</style>
<?=$this->Iresa->links($type,$annee,$mois,'Minimum Stay',$hotel_id)?>
<div class="clear"></div>

<?php $this->Iresa->inventaires($type,$annee,$mois,$hotel_id)?>

<?php 
	
	$dispo_ac = $this->Html->link('Tarif', array('action' => 'inventaire','tarif',$annee,$mois,$hotel_id),array('class'=>'noid')) ;
	$min_stay_ac = $this->Html->link('Disponibilité', array('action' => 'inventaire','dispo',$annee,$mois,$hotel_id),array('class'=>'noid')) ;
	
	$this->RAction->register($dispo_ac);
	$this->RAction->register($min_stay_ac);

?>