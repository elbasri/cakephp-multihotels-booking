<style>
.e1{
	background-color : #90CC55 !important ;
	color : #EEEEEE ;
}
.e2 {
    background-color: #E13535;
}
.e3 {
    background-color: orange !important;
}
.portlet{
	margin-top : 18px !important
}	
</style>

<?=$this->Iresa->links($type,$annee,$mois,'Disponibilité',$hotel_id)?>
<div class="clear"></div>

<?php $this->Iresa->inventaires($type,$annee,$mois,$hotel_id)?>

<?php 
	
	$dispo_ac = $this->Html->link('Tarif', array('action' => 'inventaire','tarif',$annee,$mois,$hotel_id),array('class'=>'noid')) ;
	$min_stay_ac = $this->Html->link('Min Stay', array('action' => 'inventaire','min_stay',$annee,$mois,$hotel_id),array('class'=>'noid')) ;
	
	$this->RAction->register($dispo_ac);
	$this->RAction->register($min_stay_ac);

?>