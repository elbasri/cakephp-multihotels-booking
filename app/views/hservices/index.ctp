<?php	$columns =array();
					
	$columns[] =array(
		'headerText' => $this->Paginator->sort('Service Hotel','name') ,
	     'index'=>'/Hservice/name'
		);					

	$columns[] =array(
		'headerText' => $this->Paginator->sort('Type','hservice_type_id') ,
	     'index'=>'/HserviceType/name'
		);					

?>
<? 
	$this->ImozTable->rows = &$rows;
	$this->ImozTable->getTable($columns,'Hservice','sortTable');
	// Register crud actions 
	$this->RAction->register_default();
	//Register Search options
	$searchFields =array();
	$searchFields['name'] =array();
	$this->RAction->register_search($searchFields,'/hservices','Hservice');
?>