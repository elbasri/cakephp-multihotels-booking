<?php	$columns =array();
	$columns[] =array(
		'headerText' => $this->Paginator->sort('Extra Left Values','name') ,
	     'index'=>'/Eleft/name'
		);					

?>
<? 
	$this->ImozTable->rows = &$rows;
	$this->ImozTable->getTable($columns,'Eleft','sortTable');
	// Register crud actions 
	$this->RAction->register_default();
	//Register Search options
	$searchFields =array();
	$searchFields['name'] =array();
	$this->RAction->register_search($searchFields,'/elefts','Eleft');
?>