<?php	$columns =array();
		
	$columns[] =array(
		'headerText' => $this->Paginator->sort('titre') ,
	     'index'=>'/Content/titre'
		);					
	$columns[] =array(
		'headerText' => $this->Paginator->sort('Parent','Parent.titre') ,
	     'index'=>'/Parent/titre'
		);					

?>
<? 
	$this->ImozTable->rows = &$rows;
	$this->ImozTable->getTable($columns,'Content','sortTable');
	// Register crud actions 
	$this->RAction->register_default();
	//Register Search options
	$searchFields =array();
	$searchFields['name'] =array();
	$this->RAction->register_search($searchFields,'/contents','Content');
?>