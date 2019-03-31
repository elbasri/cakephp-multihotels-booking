<?php	$columns =array();
	$columns[] =array(
		'headerText' => $this->Paginator->sort('id') ,
	     'index'=>'/HotelCarteCredit/id'
		);					

	$columns[] =array(
		'headerText' => $this->Paginator->sort('hotel_id') ,
	     'index'=>'/HotelCarteCredit/hotel_id'
		);					

	$columns[] =array(
		'headerText' => $this->Paginator->sort('carte_credit_id') ,
	     'index'=>'/HotelCarteCredit/carte_credit_id'
		);					

?>
<? 
	$this->ImozTable->rows = &$rows;
	$this->ImozTable->getTable($columns,'HotelCarteCredit','sortTable');
	// Register crud actions 
	$this->RAction->register_default();
	//Register Search options
	$searchFields =array();
	$searchFields['name'] =array();
	$this->RAction->register_search($searchFields,'/hotelCarteCredits','HotelCarteCredit');
?>