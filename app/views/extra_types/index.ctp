<?php	$columns =array();

	$columns[] =array(
		'headerText' => $this->Paginator->sort('Type Extra','name') ,
	     'index'=>'/ExtraType/name'
		);					

?>
<? 
	$this->ImozTable->rows = &$rows;
	$this->ImozTable->getTable($columns,'ExtraType','sortTable');
	// Register crud actions 
	$this->RAction->register_default();
	//Register Search options
	$searchFields =array();
	$searchFields['name'] =array();
	$this->RAction->register_search($searchFields,'/extraTypes','ExtraType');
?>