<?php	$columns =array();
	$columns[] =array(
		'headerText' => $this->Paginator->sort('Ville','name') ,
	     'index'=>'/Ville/name'
		);					
	$columns[] =array(
		'headerText' => $this->Paginator->sort('ordre') ,
	     'index'=>'/Ville/ordre'
	);	
		
	$columns[] =array(
		'headerText' => $this->Paginator->sort('Pays','pay_id') ,
	     'index'=>'/Pay/name'
		);					

?>
<?php 
	$this->ImozTable->rows = &$rows;
	$this->ImozTable->getTable($columns,'Ville','sortTable');
	// Register crud actions 
	$this->RAction->register_default();
	//Register Search options
	$searchFields =array();
	$searchFields['name'] =array();
	$this->RAction->register_search($searchFields,'/villes','Ville');
?>