<?php	$columns =array();
	$columns[] =array(
		'headerText' => $this->Paginator->sort('id') ,
	     'index'=>'/HotelExtra/id'
		);					

	$columns[] =array(
		'headerText' => $this->Paginator->sort('hotel_id') ,
	     'index'=>'/HotelExtra/hotel_id'
		);					

	$columns[] =array(
		'headerText' => $this->Paginator->sort('extra_id') ,
	     'index'=>'/HotelExtra/extra_id'
		);					

	$columns[] =array(
		'headerText' => $this->Paginator->sort('val') ,
	     'index'=>'/HotelExtra/val'
		);					

	$columns[] =array(
		'headerText' => $this->Paginator->sort('eleft_id') ,
	     'index'=>'/HotelExtra/eleft_id'
		);					

	$columns[] =array(
		'headerText' => $this->Paginator->sort('eright_id') ,
	     'index'=>'/HotelExtra/eright_id'
		);					

?>
<? 
	$this->ImozTable->rows = &$rows;
	$this->ImozTable->getTable($columns,'HotelExtra','sortTable');
	// Register crud actions 
	$this->RAction->register_default();
	//Register Search options
	$searchFields =array();
	$searchFields['name'] =array();
	$this->RAction->register_search($searchFields,'/hotelExtras','HotelExtra');
?>