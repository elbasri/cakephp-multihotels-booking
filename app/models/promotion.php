<?php
class Promotion extends AppModel {
	var $name = 'Promotion';
	var $order = 'Promotion.du' ;
	var $displayField  = 'Promotion.titre' ;
	
	var $types = array(
			   1=> 'x % de réduction' ,
	           2=> 'x nuits gratuites pour y nuits reservées',
			   3=> 'x % de réduction pour un séjour minimum y ',
			   4=> 'Early booking: x % de réduction pour une réservation de y jours avant arrivée!',
			   5=> 'x % de réduction pour une réservation de y jours avant arrivée avec au minimum z jour(s) reservés' ,
			   0=> 'Last booking  ( x % de réduction)' ,
			 );
	
	
	
	
	
	function getPromotions($hotel_id,$du=null,$au=null){
		if(!is_null($du)) :
			$c0['AND']  = array( 'Promotion.du <='=>$du,
								'Promotion.au >='=>$au
							);
			$c1['AND'] =  array(	'Promotion.du >='=>$du,
								'Promotion.du <='=>$au
							);
			$c2['AND'] =  array(	'Promotion.au <='=>$au,
								'Promotion.au >='=>$du
							);				
		    $cond['OR'] = array($c0,$c1,$c2) ;
		
		else : 
			$cond['Promotion.au >='] = date('Y-m-d') ;
		endif;
		
		$cond['Hotel_id'] 		= $hotel_id ;
		
		$promos = $this->find('all',array('conditions'=>$cond,'order'=>'Promotion.type ASC,Promotion.val1 ASC','contain'=>array('Chambre'))) ;
		$ret =  array() ;
		
		foreach($promos as $promo) :
			foreach($promo['Chambre']  as $p) :
				$ret[$p['id']][] = array( 'promotion_id' => $promo['Promotion']['id'] ,
										  'type' => $promo['Promotion']['type'] ,
										 'titre'=> $promo['Promotion']['titre'],
										 'val1'=> $promo['Promotion']['val1'] ,
										 'val2'=> $promo['Promotion']['val2'] ,
										  'val3'=> $promo['Promotion']['val3'] ,
										 'du'=> $promo['Promotion']['du'] ,
										 'au'=> $promo['Promotion']['au'] ,
										) ;
			endforeach;
		endforeach;	
	
		return $ret ;
	}
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	var $validate = array(
		'hotel_id' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'titre' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				'message' => 'Obligatoire',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'type' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'du' => array(
			'date' => array(
				'rule' => array('date'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'au' => array(
			'date' => array(
				'rule' => array('date'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'du1' => array(
			'date' => array(
				'rule' => array('date'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'au1' => array(
			'date' => array(
				'rule' => array('date'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'val1' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'val2' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				'message'=>'numeric' ,
			),
		),
		'val3' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				'message'=>'numeric' ,
			),
		),
	);
	
	function validateY($check){
		
		if($this->data['Promotion']['type'] == 1) :
			unset($this->$this->data['Promotion']['val2']) ;
			echo '1';
			return true;
		elseif (intval($this->data['Promotion']['val2']) > 0) :
		    return true ;
		else : 
			echo '3';
			return false ;
		endif; 
	
	}
	
	
	
	
	
	
	
		
	var $hasAndBelongsToMany = array(
		'Chambre' => array(
			'className' => 'Chambre',
			'joinTable' => 'promotion_chambres',
			'foreignKey' => 'promotion_id',
			'associationForeignKey' => 'chambre_id',
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
		'Hotel' => array(
			'className' => 'Hotel',
			'foreignKey' => 'hotel_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
?>