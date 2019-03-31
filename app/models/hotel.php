<?php
class Hotel extends AppModel {
	var $name = 'Hotel';
	var $etoiles =  array(0=>'',1=>'*',2=>'**',3=>'***',4=>'****',5=>'*****');
	var $order = 'Hotel.name' ;
	var $actionAs='containable';
	
	var $virtualFields = array(
			'photoHotel' => '(SELECT photo  FROM bookinghotel_photos h where chambre_id is null 
							  and h.hotel_id = Hotel.id limit 1)' ,
		 //'hotelPrix' => ' (COALESCE((select MIN(tarif) from inventaires i where i.hotel_id = Hotel.id and ladate >=curdate()), 0 ) )'				  
			 //'chambre' => ' (SELECT count(chambre_id)  FROM hotel_chambres h where chambre_id=25 and h.hotel_id = Hotel.id)'				  
		);
 
	
		
	function info_resa($hotel_id,$chambre_id){
			$h =   $this->find('first',array(
						  'conditions' => array('Hotel.id'=>$hotel_id)  ,
						  'contain'    => array(
												'Devise','Chambre.HotelPhoto' ,'Chambre','Ville','Pay','CarteCredit','HotelExtra','HotelExtra.Eright',
												'HotelExtra.Eleft','HotelExtra.Extra','HotelExtra.Extra.ExtraType'
							)
			));
					
			foreach($h['Chambre'] as $key=>$c) : 
					if($c['id'] ==  $chambre_id) {
						$h['C'] = $c ;
					}
			endforeach ;	
			$h['Extra']  = array() ;
			foreach($h['HotelExtra'] as $e) :
				$extraType    = $e['Extra']['ExtraType']['name'] ;
				$h['Extra'][$extraType][] = array( 'name'=> $e['Extra']['name'] ,
												   'val' => $e['val'] ,
												  'right'=>$e['Eright']['name'] ,
												  'left' =>$e['Eleft']['name'] 
											);
			endforeach ;
			
		return $h ;	
	}
	
	
	
	function hotelInfo($hotel_id){
		
		$h	= $this->find('first',array(
							'conditions'=>array('Hotel.id'=>$hotel_id) ,
						   'contain'=>array('Hservice','Hservice.HserviceType','HotelPhoto','ChambreDescription','ChambreCservice.Cservice',
												'ChambreCservice.Cservice.CserviceType'
												,'Ville','Pay','Chambre','Devise')
				));
		$Inventaire = ClassRegistry::init('Inventaire');
		$tarifs = $Inventaire->find('all',array('group'=>array('Inventaire.chambre_id') ,
													  'recursive' => -1 ,  	
													   'fields' => array('Min(tarif) as tarif','chambre_id'),
														'conditions'=>array('hotel_id'=>$hotel_id,'ladate >=curdate()'),
														'order' => 'chambre_id'
		));
		$Promotion 				=  ClassRegistry::init('Promotion');
		$promos = $Promotion->getPromotions($hotel_id) ;
		$h['Service']  = array() ;
		
		foreach($h['Hservice'] as $hs){
				$h['Service'][$hs['HserviceType']['name']][] = $hs['name'] ;
		}
		
		foreach($h['Chambre'] as &$c)	:
				$c['Promotion'] =  !empty($promos[$c['id']])  ?  $promos[$c['id']] :  array() ;
				$c['Service'] = array();
				$c['Photo'] =  array();
				$c['description'] = '' ;
				
				/* Photo des chambres */
				foreach($h['HotelPhoto'] as $p): 
					if($c['id'] == $p['chambre_id']) :
						$c['Photo'][] = $p['photo'];
					endif;
				endforeach ;
				
				//Service des chambres
				foreach($h['ChambreCservice'] as $s): 
						$service_id = $s['Cservice']['id'] ;
						$service_type = $s['Cservice']['CserviceType']['name'] ;
					if($c['id'] == $s['chambre_id']) :
						$c['Service'][$service_type][$service_id] = $s['Cservice']['name'];
					 elseif (empty($s['chambre_id'])) :
						$c['Service'][$service_type][$service_id] = $s['Cservice']['name'];
					endif;
				endforeach ;
				//Description des chambres		
				foreach( $h['ChambreDescription'] as $d) : 
					if($c['id'] == $d['chambre_id']) :
						$c['description'] = $d['description'];
						/* Si la chmabre n'as pas de description => avoir la description  general */
					elseif (empty($d['chambre_id'])) :
						$c['description'] = $d['description'];
					endif;
				endforeach ;
				
				//Tarifs des chambres
				foreach($tarifs as $t) :
					if($c['id'] == $t['Inventaire']['chambre_id']) :
						$c['tarif'] = $t[0]['tarif'];
					endif;	
				endforeach;
				
				if (empty($c['tarif'])) :
					$c['tarif'] = 0;
				endif;
		endforeach ;
		
	  
	  unset($h['ChambreCservice']);	
	  unset($h['ChambreDescription']);	
      
	  return $h ;
	}
	
	
	function getChambreList($hotel_id){
		$hcs = $this->find('first',array(
										//'fields'     =>  array('Hotel.id','Chambre.id','Chambre.name'),
										'contain'    =>  'Chambre' , 
										'conditions' =>   array('Hotel.id'=>$hotel_id)
									)
					);
		$tmp = array() ; 			
		if(!empty($hcs)): 
			foreach($hcs['Chambre'] as $c){
				$tmp [$c['id']]  = $c['name'] ;
			}
		endif;	
		return $tmp;
	}
	
	
	function getChambreBB($hotel_id){
		 $tmp = $this->query("SELECT chambre_id,pension FROM bookinghotel_chambres c  where hotel_id=$hotel_id");
		 $ret=  array();
		
		 foreach($tmp as $t) :
			$ret[$t['c']['chambre_id']] = $this->Chambre->pensions[$t['c']['pension']] ;
		 endforeach ;
		 
		 return $ret ;
		 
	}
	
	
	
	function saveCservices(){
		if(isset($this->data['Hotel']['Cservice'])) {
				$hotel_id = $this->data['Hotel']['id'];
				$chambre_id = empty($this->data['Hotel']['chambre_id'])  ?  null  : $this->data['Hotel']['chambre_id'] ;
				$this->ChambreCservice->saveBy($this->data['Hotel']['Cservice'],$hotel_id,$chambre_id);
		} 
	}
	
	
	
	function beforeSave(){
		parent::beforeSave();
		if (!empty($this->data['Hotel']['pw'])){
			$this->data['Hotel']['pw'] =  Security::hash($this->data['Hotel']['pw'], null, true);
		}
		else {
			unset($this->data['Hotel']['pw']) ;
		}
		$this->saveCservices();
		return true ;
	}
	
	
	
	
	var $hasMany = array(
		 'ChambreCservice' => array(
				 'className' => 'ChambreCservice',
				 'foreignKey' => 'hotel_id',
				 'dependent'=> true,
				 'order' => 'ChambreCservice.chambre_id'
			),
			'HotelPhoto' => array(
				 'className' => 'HotelPhoto',
				 'foreignKey' => 'hotel_id',
				 'dependent'=> true,
				 'order' => 'HotelPhoto.chambre_id'
			),
			'ChambreDescription' => array(
				 'className' => 'ChambreDescription',
				 'foreignKey' => 'hotel_id',
				 'dependent'=> true,
				 'order' => 'ChambreDescription.chambre_id'
			),
			'HotelExtra' => array(
				 'className' => 'HotelExtra',
				 'foreignKey' => 'hotel_id',
				 'conditions' => 'HotelExtra.val is not null',
				 'dependent'=> true,
				 //'order' => 'ChambreDescription.chambre_id'
			),
			
			'Promotion' => array(
				 'className' => 'Promotion',
				 'foreignKey' => 'hotel_id',
				 'conditions' => 'Promotion.au >= CURDATE()',
				 'dependent'=> true,
				 //'order' => 'ChambreDescription.chambre_id'
			),
	); 
	
	
	function updateTarif(){
		$sqlQtr = "update hotels Hotel set hotelPrix=COALESCE(
					(
					select MIN(tarif) from bookinginventaires i where i.hotel_id = Hotel.id  and ladate >=curdate() and i.chambre_id in
					 (select chambre_id from bookinghotel_chambres hc where hc.hotel_id=Hotel.id )
					)
				,hotelPrix)" ;
		$this->query($sqlQtr);
	}
	
	var $hasAndBelongsToMany = array(
		'CarteCredit' => array(
			'className' => 'CarteCredit',
			'joinTable' => 'hotel_carte_credits',
			'foreignKey' => 'hotel_id',
			'associationForeignKey' => 'carte_credit_id',
			'unique' => true,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'finderQuery' => '',
			'deleteQuery' => '',
			'insertQuery' => ''
		),
		'Chambre' => array(
			'className' => 'Chambre',
			'joinTable' => 'hotel_chambres',
			'foreignKey' => 'hotel_id',
			'associationForeignKey' => 'chambre_id',
			'unique' => true,
			'conditions' => '',
			'fields' => '',
			'order' => 'Chambre.id',
			'limit' => '',
			'offset' => '',
			'finderQuery' => '',
			'deleteQuery' => '',
			'insertQuery' => ''
		),
		'Hservice' => array(
			'className' => 'Hservice',
			'joinTable' => 'hotel_hservices',
			'foreignKey' => 'hotel_id',
			'associationForeignKey' => 'hservice_id',
			'unique' => true,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'finderQuery' => '',
			'deleteQuery' => '',
			'insertQuery' => ''
		),
	);
	
	var $belongsTo = array(
		'Langue' => array(
			'className' => 'Langue',
			'foreignKey' => 'langue_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'HotelType' => array(
			'className' => 'HotelType',
			'foreignKey' => 'hotel_type_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Ville' => array(
			'className' => 'Ville',
			'foreignKey' => 'ville_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Pay' => array(
			'className' => 'Pay',
			'foreignKey' => 'pay_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Devise' => array(
			'className' => 'Devise',
			'foreignKey' => 'devise_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);

}
?>