<?php	
	$columns = array();
	
	foreach($rows as &$r) :
		$r['Reservation']['name']  = $r['Reservation']['prenom'].' '.$r['Reservation']['nom'];
		$r['Reservation']['total'] = ($r['Reservation']['qte'] * $r['Reservation']['montant']).' '.$r['Devise']['code'] ;
		$r['Reservation']['payement']  = $r['Reservation']['payement'].' '.$r['Devise']['code'] ;
		$r['Reservation']['adresse']  = $r['Reservation']['adresse'].' '.$r['Reservation']['ville'].' '.$r['Reservation']['pay'] ;
	
		$r['Reservation']['nbre']  = $r['Reservation']['nbre'].' (Nuits)';
		
		$r['Reservation']['etat'] = $etats[$r['Reservation']['etat']] ;
		
		$btnConfirm =  ($r['Reservation']['confirm_hotel'] == 0)
						? $this->Html->link('Confimer',
										array('controller'=>'hotel','action'=>'reservation_confirm',$r['Reservation']['id']))
									
								:   ''
						;
						
		$btnView= $this->Html->link('Voir',
										array('controller'=>'hotel','action'=>'reservation',$r['Reservation']['id'])
										,array('target'=>'_Blank')
						);
		$r['Reservation']['actions'] = 	$btnConfirm.' | '.$btnView ;			
	endforeach ;
	$columns[] =array(
			'headerText' => 'Numero' ,
			'index'=>'/Reservation/id'
	);	
	$columns[] =array(
			'headerText' => 'Client' ,
			'index'=>'/Reservation/name'
	);	
	$columns[] =array(
			'headerText' => 'Adresse' ,
			'index'=>'/Reservation/adresse'
	);	
	$columns[] =array(
		'headerText' => 'Du' ,
	     'index'=>'/Reservation/du'
	);	
	
	$columns[] =array(
		'headerText' => 'Au' ,
	     'index'=>'/Reservation/au'
	);		
	$columns[] =array(
		'headerText' => 'Durée' ,
	     'index'=>'/Reservation/nbre'
	);		
	$columns[] =array(
		'headerText' => 'Chambre' ,
	     'index'=>'/Chambre/name'
	);	
	$columns[] =array(
		'headerText' => 'Qte' ,
	     'index'=>'/Reservation/qte'
	);		
	$columns[] =array(
		 'headerText' => 'Total',
	     'index'=>'/Reservation/total'
	);	
	$columns[] =array(
		 'headerText' => 'Dep. Garantie',
	     'index'=>'/Reservation/payement'
	);	
	$columns[] =array(
		 'headerText' => 'Etat',
	     'index'=>'/Reservation/etat'
	);	

	$columns[] =array(
		 'headerText' => 'Actions' ,
	     'index'=>'/Reservation/actions'
	);

?>
<?php 
	$this->ImozTable->rows = &$rows;
	$this->ImozTable->getTable($columns,'Reservation','sortTable',false);
?>