<?php	$columns =array();
	$columns[] =array(
		'headerText' => $this->Paginator->sort('Extra Right Values','name') ,
	     'index'=>'/Eright/name'
		);					

?>
<? 
	$this->ImozTable->rows = &$rows;
	$this->ImozTable->getTable($columns,'Eright','sortTable');
	// Register crud actions 
	$this->RAction->register_default();
	//Register Search options
	$searchFields =array();
	$searchFields['name'] =array();
	$this->RAction->register_search($searchFields,'/erights','Eright');
?>