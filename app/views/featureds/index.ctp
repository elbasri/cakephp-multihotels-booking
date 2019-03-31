<?php	$columns =array();
		
$columns[] =array(
		'headerText' => $this->Paginator->sort('hotel_id') ,
	     'index'=>'/Hotel/name'
		);					

?>
<?php 
	$this->ImozTable->rows = &$rows;
	$this->ImozTable->getTable($columns,'Featured','sortTable');
	// Register crud actions 
	$this->RAction->register_default();
	//Register Search options
	$searchFields =array();
//	$searchFields['name'] =array();
//	$this->RAction->register_search($searchFields,'/featureds');
?>