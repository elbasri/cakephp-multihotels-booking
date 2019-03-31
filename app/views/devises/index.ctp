<?php	$columns =array();
	$columns[] =array(
		'headerText' => $this->Paginator->sort('Devise','name') ,
	     'index'=>'/Devise/name'
		);					
	$columns[] =array(
		'headerText' => $this->Paginator->sort('code') ,
	     'index'=>'/Devise/code'
		);
	
	
	$columns[] =array(
		'headerText' => $this->Paginator->sort('Taux','taux') ,
	     'index'=>'/Devise/taux'
		);					

?>
<?php 
	$this->ImozTable->rows = &$rows;
	$this->ImozTable->getTable($columns,'Devise','sortTable');
	// Register crud actions 
	$this->RAction->register_default();
	//Register Search options
	$searchFields =array();
	$searchFields['name'] =array();
	$this->RAction->register_search($searchFields,'/devises','Devise');
?>