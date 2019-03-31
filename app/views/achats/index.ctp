<?php	$columns =array();
		
	$columns[] =array(
		'headerText' => $this->Paginator->sort('name') ,
	     'index'=>'/Achat/name'
		);	
	$columns[] =array(
		'headerText' => $this->Paginator->sort('email') ,
	     'index'=>'/Achat/email'
		);		
	$columns[] =array(
		'headerText' => $this->Paginator->sort('tel') ,
	     'index'=>'/Achat/tel'
		);					
		
?>
<? 
	$this->ImozTable->rows = &$rows;
	$this->ImozTable->getTable($columns,'Achat','sortTable');
	// Register crud actions 
	$this->RAction->register_default(true,false,false);
	//Register Search options
	$searchFields =array();
	$searchFields['name'] =array();
	$this->RAction->register_search($searchFields,'/Achats','Achat');
?>