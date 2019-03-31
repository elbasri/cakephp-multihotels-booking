<?php	$columns =array();
	$columns[] =array(
		'headerText' => $this->Paginator->sort('id') ,
	     'index'=>'/ChambreCservice/id'
		);					

	$columns[] =array(
		'headerText' => $this->Paginator->sort('cservice_id') ,
	     'index'=>'/ChambreCservice/cservice_id'
		);					

	$columns[] =array(
		'headerText' => $this->Paginator->sort('chambre_id') ,
	     'index'=>'/ChambreCservice/chambre_id'
		);					

	$columns[] =array(
		'headerText' => $this->Paginator->sort('hotel_id') ,
	     'index'=>'/ChambreCservice/hotel_id'
		);					

?>
<? 
	$this->ImozTable->rows = &$rows;
	$this->ImozTable->getTable($columns,'ChambreCservice','sortTable');
	// Register crud actions 
	$this->RAction->register_default();
	//Register Search options
	$searchFields =array();
	$searchFields['name'] =array();
	$this->RAction->register_search($searchFields,'/chambreCservices','ChambreCservice');
?>