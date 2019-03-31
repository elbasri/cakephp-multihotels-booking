<?php	$columns =array();
	$columns[] =array(
		'headerText' => $this->Paginator->sort('Service','name') ,
	     'index'=>'/Cservice/name'
		);					

	$columns[] =array(
		'headerText' => $this->Paginator->sort('Type','cservice_type_id') ,
	     'index'=>'/CserviceType/name'
		);					

?>
<? 
	$this->ImozTable->rows = &$rows;
	$this->ImozTable->getTable($columns,'Cservice','sortTable');
	// Register crud actions 
	$this->RAction->register_default();
	//Register Search options
	$searchFields =array();
	$searchFields['name'] =array();
	$this->RAction->register_search($searchFields,'/cservices','Cservice');
?>