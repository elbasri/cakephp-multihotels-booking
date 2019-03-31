<?php	$columns =array();
	$columns[] =array(
		'headerText' => $this->Paginator->sort('Type Service Chambre','name') ,
	     'index'=>'/CserviceType/name'
		);					

?>
<? 
	$this->ImozTable->rows = &$rows;
	$this->ImozTable->getTable($columns,'CserviceType','sortTable');
	// Register crud actions 
	$this->RAction->register_default();
	//Register Search options
	$searchFields =array();
	$searchFields['name'] =array();
	$this->RAction->register_search($searchFields,'/cserviceTypes','CserviceType');
?>