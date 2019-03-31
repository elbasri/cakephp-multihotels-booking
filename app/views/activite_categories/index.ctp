<?php	$columns =array();

	$columns[] =array(
		'headerText' => $this->Paginator->sort("Categorie d'activité",'titre') ,
	     'index'=>'/ActiviteCategory/titre'
		);					

	
?>
<? 
	$this->ImozTable->rows = &$rows;
	$this->ImozTable->getTable($columns,'ActiviteCategory','sortTable');
	// Register crud actions 
	$this->RAction->register_default();
	//Register Search options
	$searchFields =array();
	$searchFields['name'] =array();
	$this->RAction->register_search($searchFields,'/activiteCategories','ActiviteCategory');
?>