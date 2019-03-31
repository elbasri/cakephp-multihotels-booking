<?php	$columns =array();
		$columns[] =array(
		'headerText' => $this->Paginator->sort('Langue','name') ,
	     'index'=>'/Langue/name'
		);					

?>
<? 
	$this->ImozTable->rows = &$rows;
	$this->ImozTable->getTable($columns,'Langue','sortTable');
	// Register crud actions 
	$this->RAction->register_default();
	//Register Search options
	$searchFields =array();
	$searchFields['name'] =array();
	$this->RAction->register_search($searchFields,'/langues','Langue');
?>