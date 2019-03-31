<?php	$columns =array();
	$columns[] =array(
		'headerText' => $this->Paginator->sort('id') ,
	     'index'=>'/InventaireDisponibilite/id'
		);					

	$columns[] =array(
		'headerText' => $this->Paginator->sort('hotel_id') ,
	     'index'=>'/InventaireDisponibilite/hotel_id'
		);					

	$columns[] =array(
		'headerText' => $this->Paginator->sort('chambre_id') ,
	     'index'=>'/InventaireDisponibilite/chambre_id'
		);					

	$columns[] =array(
		'headerText' => $this->Paginator->sort('inventaire_id') ,
	     'index'=>'/InventaireDisponibilite/inventaire_id'
		);					

	$columns[] =array(
		'headerText' => $this->Paginator->sort('disponibilte') ,
	     'index'=>'/InventaireDisponibilite/disponibilte'
		);					

	$columns[] =array(
		'headerText' => $this->Paginator->sort('etat') ,
	     'index'=>'/InventaireDisponibilite/etat'
		);					

	$columns[] =array(
		'headerText' => $this->Paginator->sort('jour') ,
	     'index'=>'/InventaireDisponibilite/jour'
		);					

?>
<? 
	$this->ImozTable->rows = &$rows;
	$this->ImozTable->getTable($columns,'InventaireDisponibilite','sortTable');
	// Register crud actions 
	$this->RAction->register_default();
	//Register Search options
	$searchFields =array();
	$searchFields['name'] =array();
	$this->RAction->register_search($searchFields,'/inventaireDisponibilites','InventaireDisponibilite');
?>