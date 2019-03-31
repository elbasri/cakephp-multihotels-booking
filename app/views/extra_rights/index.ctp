<?php	$columns =array();
	$columns[] =array(
		'headerText' => $this->Paginator->sort('id') ,
	     'index'=>'/ExtraRight/id'
		);					

	$columns[] =array(
		'headerText' => $this->Paginator->sort('eright_id') ,
	     'index'=>'/ExtraRight/eright_id'
		);					

	$columns[] =array(
		'headerText' => $this->Paginator->sort('extra_id') ,
	     'index'=>'/ExtraRight/extra_id'
		);					

?>
<? 
	$this->ImozTable->rows = &$rows;
	$this->ImozTable->getTable($columns,'ExtraRight','sortTable');
	// Register crud actions 
	$this->RAction->register_default();
	//Register Search options
	$searchFields =array();
	$searchFields['name'] =array();
	$this->RAction->register_search($searchFields,'/extraRights','ExtraRight');
?>