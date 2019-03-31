<h1><?php echo $title ?></h1>
<?php	
	 foreach($rows as &$row) : 
		$row['GuidePhoto']['photo'] = $this->Html->image('/files/_thumbs/Images/'.$row['GuidePhoto']['photo']) ;
	 endforeach ;

		$columns =array();
		
		$columns[] =array(
			'headerText' => 'Photo' ,
			'index'=>'/GuidePhoto/photo'
		);				
?>
<?php 
	$this->ImozTable->rows = &$rows;
	$this->ImozTable->getTable($columns,'GuidePhoto','mydatatable',false);
	// Register acrud actions 
	$this->RAction->register_defaulta($guide_id);
	
?>

