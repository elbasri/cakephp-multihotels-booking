<?php	$columns =array();
		
	$columns[] =array(
		'headerText' => $this->Paginator->sort('titre') ,
	     'index'=>'/Produit/titre'
		);	
	$columns[] =array(
		'headerText' => $this->Paginator->sort('prix') ,
	     'index'=>'/Produit/prix'
		);	
	$columns[] =array(
		'headerText' => $this->Paginator->sort('Date') ,
	     'index'=>'/Produit/created'
		);					
		
?>
<? 
	$this->ImozTable->rows = &$rows;
	$this->ImozTable->getTable($columns,'Produit','sortTable');
	// Register crud actions 
	$this->RAction->register_default();
	//Register Search options
	$searchFields =array();
	$searchFields['name'] =array();
	$this->RAction->register_search($searchFields,'/produits','Produit');
?>