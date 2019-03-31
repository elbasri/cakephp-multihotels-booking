<h1><?php echo $title ?></h1>
<?php	
	 foreach($rows as &$row) : 
		$row['HotelChambre']['bb'] = ($row['HotelChambre']['bb'])  ?   'BB' :  'BO'  ;
		$row['HotelChambre']['pension'] =$pensions[$row['HotelChambre']['pension']] ;
	 endforeach ;

		$columns =array();
		
		$columns[] =array(
			'headerText' => 'Chambre' ,
			'index'=>'/Chambre/name'
		);				
		
		$columns[] =array(
			'headerText' => 'Nbre Personne' ,
			'index'=>'/HotelChambre/nbre'
		);					
		
		$columns[] =array(
			'headerText' => 'Pension' ,
			'index'=>'/HotelChambre/pension'
		);	
		
		
		
?>
<?php 
	$this->ImozTable->rows = &$rows;
	$this->ImozTable->getTable($columns,'HotelChambre','mydatatable',false);
	// Register acrud actions 
	$this->RAction->register_defaulta($hotel_id);
	
?>

