<?php	$columns =array();
		
$columns[] =array(
		'headerText' => $this->Paginator->sort('hotel_id') ,
	     'index'=>'/Hotel/name'
		);					

$columns[] =array(
		'headerText' => $this->Paginator->sort('Titre','name'),
	     'index'=>'/Slider/name'
);	
?>
<?php 
	$this->ImozTable->rows = &$rows;
	$this->ImozTable->getTable($columns,'Slider','sortTable');
	// Register crud actions 
	$this->RAction->register_default();
	//Register Search options
	$searchFields =array();
//	$searchFields['name'] =array();
//	$this->RAction->register_search($searchFields,'/featureds');
?>