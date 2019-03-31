<?php	$columns =array();
	
	$columns[] =array(
		'headerText' => $this->Paginator->sort('Classification','name') ,
	     'index'=>'/HotelType/name'
		);					

?>
<? 
	$this->ImozTable->rows = &$rows;
	$this->ImozTable->getTable($columns,'HotelType','sortTable');
	// Register crud actions 
	$this->RAction->register_default();
	//Register Search options
	$searchFields =array();
	$searchFields['name'] =array();
	$this->RAction->register_search($searchFields,'/hotelTypes','HotelType');
?>