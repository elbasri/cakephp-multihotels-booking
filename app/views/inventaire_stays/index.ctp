<?php	$columns =array();
	$columns[] =array(
		'headerText' => $this->Paginator->sort('id') ,
	     'index'=>'/InventaireStay/id'
		);					

	$columns[] =array(
		'headerText' => $this->Paginator->sort('hotel_id') ,
	     'index'=>'/InventaireStay/hotel_id'
		);					

	$columns[] =array(
		'headerText' => $this->Paginator->sort('chambre_id') ,
	     'index'=>'/InventaireStay/chambre_id'
		);					

	$columns[] =array(
		'headerText' => $this->Paginator->sort('inventaire_id') ,
	     'index'=>'/InventaireStay/inventaire_id'
		);					

	$columns[] =array(
		'headerText' => $this->Paginator->sort('minimum') ,
	     'index'=>'/InventaireStay/minimum'
		);					

	$columns[] =array(
		'headerText' => $this->Paginator->sort('jour') ,
	     'index'=>'/InventaireStay/jour'
		);					

?>
<? 
	$this->ImozTable->rows = &$rows;
	$this->ImozTable->getTable($columns,'InventaireStay','sortTable');
	// Register crud actions 
	$this->RAction->register_default();
	//Register Search options
	$searchFields =array();
	$searchFields['name'] =array();
	$this->RAction->register_search($searchFields,'/inventaireStays','InventaireStay');
?>