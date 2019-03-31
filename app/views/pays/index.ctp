<?php	$columns =array();
					

	$columns[] =array(
		'headerText' => $this->Paginator->sort('Pays','name') ,
	     'index'=>'/Pay/name'
		);					

?>
<? 
	$this->ImozTable->rows = &$rows;
	$this->ImozTable->getTable($columns,'Pay','sortTable');
	// Register crud actions 
	$this->RAction->register_default();
	//Register Search options
	$searchFields =array();
	$searchFields['name'] =array();
	$this->RAction->register_search($searchFields,'/pays','Pay');
?>