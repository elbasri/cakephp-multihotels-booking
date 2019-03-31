<?php	$columns =array();
		$columns[] =array(
		'headerText' => $this->Paginator->sort('Chambre','name') ,
	     'index'=>'/Chambre/name'
		);					

?>
<? 
	$this->ImozTable->rows = &$rows;
	$this->ImozTable->getTable($columns,'Chambre','sortTable');
	// Register crud actions 
	$this->RAction->register_default();
	//Register Search options
	$searchFields =array();
	$searchFields['name'] =array();
	$this->RAction->register_search($searchFields,'/chambres','Chambre');
?>