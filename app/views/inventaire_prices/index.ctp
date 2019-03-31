<?php	$columns =array();
	$columns[] =array(
		'headerText' => $this->Paginator->sort('id') ,
	     'index'=>'/InventairePrice/id'
		);					

	$columns[] =array(
		'headerText' => $this->Paginator->sort('hotel_id') ,
	     'index'=>'/InventairePrice/hotel_id'
		);					

	$columns[] =array(
		'headerText' => $this->Paginator->sort('chambre_id') ,
	     'index'=>'/InventairePrice/chambre_id'
		);					

	$columns[] =array(
		'headerText' => $this->Paginator->sort('inventaire_id') ,
	     'index'=>'/InventairePrice/inventaire_id'
		);					

	$columns[] =array(
		'headerText' => $this->Paginator->sort('prix') ,
	     'index'=>'/InventairePrice/prix'
		);					

	$columns[] =array(
		'headerText' => $this->Paginator->sort('jour') ,
	     'index'=>'/InventairePrice/jour'
		);					

?>
<? 
	$this->ImozTable->rows = &$rows;
	$this->ImozTable->getTable($columns,'InventairePrice','sortTable');
	// Register crud actions 
	$this->RAction->register_default();
	//Register Search options
	$searchFields =array();
	$searchFields['name'] =array();
	$this->RAction->register_search($searchFields,'/inventairePrices','InventairePrice');
?>