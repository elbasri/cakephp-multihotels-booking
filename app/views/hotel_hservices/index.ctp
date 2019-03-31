<?php	$columns =array();
	$columns[] =array(
		'headerText' => $this->Paginator->sort('id') ,
	     'index'=>'/HotelHservice/id'
		);					

	$columns[] =array(
		'headerText' => $this->Paginator->sort('hotel_id') ,
	     'index'=>'/HotelHservice/hotel_id'
		);					

	$columns[] =array(
		'headerText' => $this->Paginator->sort('hservice_id') ,
	     'index'=>'/HotelHservice/hservice_id'
		);					

?>
<? 
	$this->ImozTable->rows = &$rows;
	$this->ImozTable->getTable($columns,'HotelHservice','sortTable');
	// Register crud actions 
	$this->RAction->register_default();
	//Register Search options
	$searchFields =array();
	$searchFields['name'] =array();
	$this->RAction->register_search($searchFields,'/hotelHservices','HotelHservice');
?>