<?php	$columns =array();
	$columns[] =array(
		'headerText' => $this->Paginator->sort('Carte Credit','name') ,
	     'index'=>'/CarteCredit/name'
		);					

?>
<? 
	$this->ImozTable->rows = &$rows;
	$this->ImozTable->getTable($columns,'CarteCredit','sortTable');
	// Register crud actions 
	$this->RAction->register_default();
	//Register Search options
	$searchFields =array();
	$searchFields['name'] =array();
	$this->RAction->register_search($searchFields,'/carteCredits','CarteCredit');
?>