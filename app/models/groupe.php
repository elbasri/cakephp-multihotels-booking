<?php
class Groupe extends AppModel {
	var $name = 'Groupe';
	var $useTable = false ;
	var $restaurations =  array(
			1 => 'Petit déjeuner non inclus' ,
			2 => 'Petit déjeuner  inclus' ,
			3 => 'Demi Pension' ,
			4 => 'Pension Complète' ,
			5=> 'All inclusive' ,
	);
	
	var $hebergements = array(
			1 => 'Hôtel'   ,
			2 => 'riad'    ,
			3 => 'palais'  ,
			4 => 'villa'   ,
			5 => 'auberge' ,
			6 => 'kasbah'  ,
			7 => 'Gîte'    ,
			8=>  'Autre'   ,
		);
	
	
	var $validate = array(
		'nom' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				'message' => ' ',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'du1' => array(
			'notempty' => array(
				'rule' => array('date'),
				'message' => ' ',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'au1' => array(
			'notempty' => array(
				'rule' => array('date'),
				'message' => ' ',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'prenom' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				'message' => ' ',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
	
		'email' => array(
			'email' => array(
				'rule' => array('email'),
				'message' => ' ',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'tel' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				'message' => ' ',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		
		
		'ville' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				'message' => ' ',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'pays' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				'message' => ' ',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		
		'ville_arrivee' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				'message' => ' ',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'type_sejour' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				'message' => ' ',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'description' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				'message' => ' ',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'adulte' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				'message' => ' ',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		
		'moyenne_age' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				'message' => ' ',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'budget' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				'message' => ' ',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'hotel_type_id' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				'message' => ' ',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'nbre_chambre' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				'message' => ' ',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'lit_supplement' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				'message' => ' ',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		
		'restauration' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				'message' => ' ',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
	);
	//The Associations below have been created with all possible keys, those that are not needed can be removed
/*
	var $belongsTo = array(
		'HotelType' => array(
			'className' => 'HotelType',
			'foreignKey' => 'hotel_type_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);*/
}
?>