<?php	$columns =array();
	
	$columns[] =array(
		'headerText' => $this->Paginator->sort('titre') ,
	     'index'=>'/Guide/titre'
		);					
?>
<? 
	$this->ImozTable->rows = &$rows;
	$this->ImozTable->getTable($columns,'Guide','sortTable');
	// Register crud actions 
	$this->RAction->register_default();
	
	$photos_action = $this->Html->link('Gallerie','/guide_photos/index') ;
	$this->RAction->register($photos_action);
	
	//Register Search options
	$searchFields =array();
	$searchFields['name'] =array();
	$this->RAction->register_search($searchFields,'/guides','Guide');
?>