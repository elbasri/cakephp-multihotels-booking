<?php	$columns =array();
		
	$columns[] =array(
		'headerText' => $this->Paginator->sort('titre') ,
	     'index'=>'/Resto/titre'
		);	
	$columns[] =array(
		'headerText' => $this->Paginator->sort('prix') ,
	     'index'=>'/Resto/prix'
		);	
	$columns[] =array(
		'headerText' => $this->Paginator->sort('Date') ,
	     'index'=>'/Resto/created'
		);					
		
?>
<? 
	$this->ImozTable->rows = &$rows;
	$this->ImozTable->getTable($columns,'Resto','sortTable');
	// Register crud actions 
	$this->RAction->register_default();
	//Register Search options
	$searchFields =array();
	$searchFields['name'] =array();
	$this->RAction->register_search($searchFields,'/Restos','Resto');
?>