<?php	$columns =array();
		

	$columns[] =array(
		'headerText' => $this->Paginator->sort('titre') ,
	     'index'=>'/Activite/titre'
		);
		
	$columns[] =array(
		'headerText' => $this->Paginator->sort('Catégorie','activite_category_id') ,
	     'index'=>'/ActiviteCategory/titre'
		);
?>
<? 
	$this->ImozTable->rows = &$rows;
	$this->ImozTable->getTable($columns,'Activite','sortTable');
	// Register crud actions 
	$this->RAction->register_default();
	//Register Search options
	$searchFields =array();
	$searchFields['titre'] =array();
	$searchFields['activite_category_id'] =array('label'=>'Catégorie','empty'=>'--Tout--');
	$this->RAction->register_search($searchFields,'/activites','Activite');
?>