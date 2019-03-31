<?php	$columns =array();
	$columns[] =array(
		'headerText' => $this->Paginator->sort('annee') ,
	     'index'=>'/Inventaire/annee'
		);					
	$columns[] =array(
		'headerText' => $this->Paginator->sort('mois') ,
	     'index'=>'/Inventaire/mois'
		);					
	$columns[] =array(
		'headerText' => $this->Paginator->sort('nbre_jour') ,
	     'index'=>'/Inventaire/nbre_jour'
		);					

?>
<? 
	$this->ImozTable->rows = &$rows;
	$this->ImozTable->getTable($columns,'Inventaire','sortTable');
	// Register crud actions 
	$this->RAction->register_default();
	//Register Search options
	$searchFields =array();
	$searchFields['name'] =array();
	$this->RAction->register_search($searchFields,'/inventaires','Inventaire');
?>