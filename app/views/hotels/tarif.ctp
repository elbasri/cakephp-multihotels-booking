<style>
.e1{
	background-color : #3B5998 !important ;
	color : #EEEEEE ;
}
.portlet{
	margin-top : 18px !important
}	
</style>
<?=$this->Iresa->links($type,$annee,$mois,'Tarif',$hotel_id)?>



<?php $this->Iresa->inventaires($type,$annee,$mois,$hotel_id)?>


<?php 
	
	$dispo_ac = $this->Html->link('Disponibilité', array('action' => 'inventaire','dispo',$annee,$mois,$hotel_id),array('class'=>'noid')) ;
	$min_stay_ac = $this->Html->link('Min Stay', array('action' => 'inventaire','min_stay',$annee,$mois,$hotel_id),array('class'=>'noid')) ;
	
	$this->RAction->register($dispo_ac);
	$this->RAction->register($min_stay_ac);

?>