<?php	$columns =array();
				
	$columns[] =array(
		'headerText' => $this->Paginator->sort('Extra','name') ,
	     'index'=>'/Extra/name'
		);					

	$columns[] =array(
		'headerText' => $this->Paginator->sort('Type','extra_type_id') ,
	     'index'=>'/ExtraType/name'
		);					

?>
<? 
	$this->ImozTable->rows = &$rows;
	$this->ImozTable->getTable($columns,'Extra','sortTable');
	// Register crud actions 
	$this->RAction->register_default();
	//Register Search options
	$searchFields =array();
	$searchFields['name'] =array();
	$this->RAction->register_search($searchFields,'/extras','Extra');
?>