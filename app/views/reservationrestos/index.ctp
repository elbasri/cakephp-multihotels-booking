<?php	$columns =array();
		
	$columns[] =array(
		'headerText' => $this->Paginator->sort('name') ,
	     'index'=>'/Reservationresto/name'
		);	
	$columns[] =array(
		'headerText' => $this->Paginator->sort('email') ,
	     'index'=>'/Reservationresto/email'
		);		
	$columns[] =array(
		'headerText' => $this->Paginator->sort('tel') ,
	     'index'=>'/Reservationresto/tel'
		);					
		
?>
<? 
	$this->ImozTable->rows = &$rows;
	$this->ImozTable->getTable($columns,'Reservationresto','sortTable');
	// Register crud actions 
	$this->RAction->register_default(true,false,false);
	//Register Search options
	$searchFields =array();
	$searchFields['name'] =array();
	$this->RAction->register_search($searchFields,'/Reservationrestos','Reservationresto');
?>