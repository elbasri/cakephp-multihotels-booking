<?php	$columns =array();
	$columns[] =array(
		'headerText' => $this->Paginator->sort('Nom','name') ,
	     'index'=>'/Hotel/name'
		);	
	
?>
<?php 
	$this->ImozTable->rows = &$rows;
	$this->ImozTable->getTable($columns,'Hotel','tsearch');
	// Register crud actions 
	
	$searchFields['name'] =array('label'=>'Nom');
	$this->RAction->register_search($searchFields,'/hotels/search','Hotel');
?>