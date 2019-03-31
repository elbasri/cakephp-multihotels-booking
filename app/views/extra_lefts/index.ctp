<?php	$columns =array();
					
	$columns[] =array(
		'headerText' => $this->Paginator->sort('elefts_id') ,
	     'index'=>'/ExtraLeft/elefts_id'
		);					

	$columns[] =array(
		'headerText' => $this->Paginator->sort('extra_id') ,
	     'index'=>'/ExtraLeft/extra_id'
		);					

?>
<? 
	$this->ImozTable->rows = &$rows;
	$this->ImozTable->getTable($columns,'ExtraLeft','sortTable');
	// Register crud actions 
	$this->RAction->register_default();
	//Register Search options
	$searchFields =array();
	$searchFields['name'] =array();
	$this->RAction->register_search($searchFields,'/extraLefts','ExtraLeft');
?>