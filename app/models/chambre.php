<?php
class Chambre extends AppModel {
	var $name = 'Chambre';
	var $order = 'Chambre.name';
	
	var $pensions =  array(
			1 => 'pdj non inclus' ,
			2 => 'pdj inclus' ,
			3 => 'Demi Pension' ,
			4 => 'Pension Complète' ,
			5=> 'All inclusive' ,
	);
	
	var $validate = array(
		'name' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
	);
	//The Associations below have been created with all possible keys, those that are not needed can be removed
	
	var $hasMany = array(
		'ChambreCservice' => array(
			'className' => 'ChambreCservice',
			'foreignKey' => 'chambre_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		),
		'ChambreDescription' => array(
			'className' => 'ChambreCservice',
			'foreignKey' => 'chambre_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		),
		'HotelPhoto' => array(
			'className' => 'HotelPhoto',
			'foreignKey' => 'chambre_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		),
		
	);
	
	
	
	

}
?>