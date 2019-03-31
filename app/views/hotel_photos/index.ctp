<?php	$columns =array();
	$columns[] =array(
		'headerText' => $this->Paginator->sort('id') ,
	     'index'=>'/HotelPhoto/id'
		);					

	$columns[] =array(
		'headerText' => $this->Paginator->sort('hotel_id') ,
	     'index'=>'/HotelPhoto/hotel_id'
		);					

	$columns[] =array(
		'headerText' => $this->Paginator->sort('chambre_id') ,
	     'index'=>'/HotelPhoto/chambre_id'
		);					

	$columns[] =array(
		'headerText' => $this->Paginator->sort('photo') ,
	     'index'=>'/HotelPhoto/photo'
		);					

	$columns[] =array(
		'headerText' => $this->Paginator->sort('thumb') ,
	     'index'=>'/HotelPhoto/thumb'
		);					

?>
<? 
	$this->ImozTable->rows = &$rows;
	$this->ImozTable->getTable($columns,'HotelPhoto','sortTable');
	// Register crud actions 
	$this->RAction->register_default();
	//Register Search options
	$searchFields =array();
	$searchFields['name'] =array();
	$this->RAction->register_search($searchFields,'/hotelPhotos','HotelPhoto');
?>