<?php	
	$columns = array();
	

	foreach($rows as &$r) :
		$r['Reservation']['total']         = $r['Reservation']['qte'] * $r['Reservation']['montant'];
		$r['Reservation']['name'] 		   = $r['Reservation']['prenom'].' '.$r['Reservation']['nom'];
		$r['Reservation']['confirm_hotel'] = $r['Reservation']['confirm_hotel']  ?  'Oui'  :  'Non' ;
		$r['Reservation']['etat'] 		   = $etats[$r['Reservation']['etat']] ;
	endforeach ;
	
	
	$columns[] =array(
			'headerText' => $this->Paginator->sort('Num','id') ,
			'index'=>'/Reservation/id'
	);	
	
	$columns[] =array(
			'headerText' => $this->Paginator->sort('nom') ,
			'index'=>'/Reservation/name'
	);					

	$columns[] =array(
		'headerText' => $this->Paginator->sort('du') ,
	     'index'=>'/Reservation/du'
	);	
	$columns[] =array(
		'headerText' => $this->Paginator->sort('au') ,
	     'index'=>'/Reservation/au'
	);		
	$columns[] =array(
		'headerText' => $this->Paginator->sort('montant') ,
	     'index'=>'/Reservation/montant'
	);	
	$columns[] =array(
		'headerText' => $this->Paginator->sort('qte') ,
	     'index'=>'/Reservation/qte'
	);		
	
	$columns[] =array(
		 'headerText' => $this->Paginator->sort('total') ,
	     'index'=>'/Reservation/total'
	);	
	$columns[] =array(
		'headerText' => $this->Paginator->sort('payement') ,
	     'index'=>'/Reservation/payement'
		);
	$columns[] =array(
		 'headerText' => $this->Paginator->sort('devise_id') ,
	     'index'=>'/Devise/code'
	);
	
	$columns[] =array(
		'headerText' => $this->Paginator->sort('telephone') ,
	     'index'=>'/Reservation/telephone'
		);					

	$columns[] =array(
		'headerText' => $this->Paginator->sort('email') ,
	     'index'=>'/Reservation/email'
		);					

						

	$columns[] =array(
		'headerText' => $this->Paginator->sort('hotel_id') ,
	     'index'=>'/Hotel/name'
		);		
		

	$columns[] =array(
		'headerText' => $this->Paginator->sort('N° Transaction','transaction') ,
	     'index'=>'/Reservation/transaction'
	);	
	
	$columns[] =array(
		'headerText' => $this->Paginator->sort('Confirmation hotel','confirm_hotel') ,
	     'index'=>'/Reservation/confirm_hotel'
	);	
	$columns[] =array(
		'headerText' => $this->Paginator->sort('Etat','etat') ,
	     'index'=>'/Reservation/etat'
	);
	$columns[] =array(
		'headerText' => $this->Paginator->sort('Création','created') ,
	     'index'=>'/Reservation/created'
	)

?>
<?php 
	$this->ImozTable->rows = &$rows;
	$this->ImozTable->getTable($columns,'Reservation','sortTable');
	// Register crud actions 
	$this->RAction->register_default(true,false);
	//Register Search options
	$searchFields =array();
	$searchFields['Hotel.name'] =array('label'=>'Hotel');
	$searchFields['Reservation.num'] =array('label'=>'N°');
	$searchFields['Reservation.nom'] =array('label'=>'Nom');
	$searchFields['Reservation.email'] =array('label'=>'Email');
	$searchFields['Reservation.etat'] =array('options'=>$etats,'empty'=>'----');
	$this->RAction->register_search($searchFields,'/reservations','Reservation');
?>