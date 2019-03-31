<?php	
	foreach($rows as &$r) :
		$r['Banner']['action'] = $actions[$r['Banner']['action']] ;
	endforeach ;
	
    $columns =array();
/*
	$columns[] =array(
		'headerText' => $this->Paginator->sort('content') ,
	     'index'=>'/Banner/content'
		);	
*/		
	$columns[] =array(
		'headerText' => 'Page' ,
	     'index'=>'/Banner/action'
		);			
				

?>
<?php 
	$this->ImozTable->rows = &$rows;
	$this->ImozTable->getTable($columns,'Banner','sortTable');
	// Register crud actions 
	$this->RAction->register_default();
	//Register Search options
	$searchFields =array();
	$searchFields['action'] =array('empty'=>true);
	$this->RAction->register_search($searchFields,'/banners');
?>