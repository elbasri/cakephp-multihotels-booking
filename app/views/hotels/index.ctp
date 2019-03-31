<?php	

	foreach($rows as &$r) :
		$r['Hotel']['active']  = $r['Hotel']['active'] ? $this->Html->image('/images/icons/accept.png') :  '';
	endforeach;
	
	$columns =array();
	$columns[] =array(
		'headerText' => $this->Paginator->sort('Nom','name') ,
	     'index'=>'/Hotel/name'
		);	
	$columns[] =array(
		'headerText' => $this->Paginator->sort('Type','hotel_type_id') ,
	     'index'=>'/HotelType/name'
		);
		
	$columns[] =array(
		'headerText' => $this->Paginator->sort('Ville','ville_id') ,
	     'index'=>'/Ville/name'
		);
	$columns[] =array(
		'headerText' => $this->Paginator->sort('Devise','devise_id') ,
	     'index'=>'/Devise/name'
		);
	$columns[] =array(
		'headerText' => $this->Paginator->sort('active') ,
	     'index'=>'/Hotel/active'
	);

?>
<?php 
	$this->ImozTable->rows = &$rows;
	$this->ImozTable->getTable($columns,'Hotel','sortTable');
	// Register crud actions 
	$this->RAction->register_default();
	
	//Register Search options
	$searchFields =array();
	$searchFields['name'] =array('label'=>'Nom');
	$searchFields['ville_id'] =array('label'=>'Ville','empty'=>'--Tout--');
	$searchFields['hotel_type_id'] =array('empty'=>'--Tout--','label'=>'Classification');
	
	$this->RAction->register_search($searchFields,'/hotels','Hotel');
	
	// other actions
	$tarif_action = $this->Html->link('Tarifs/Dispo/Stay', array('action' => 'inventaire','tarif',date('Y'),date('m'))) ;
	$photos_action = $this->Html->link('Photos', array('action' => 'photos')) ;
	$this->RAction->register($tarif_action);
	$this->RAction->register($photos_action);
	
	$chambres_action = $this->Html->link('Chambres','/hotel_chambres/index') ;
	$this->RAction->register($chambres_action);
?>


