<?php
class Event extends AppModel {
	var $name = 'Event';
	var $useTable = false ;
	
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
		'telephone' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				'message' => ' ',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'telephone2' => array(
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
		'commentaire' => array(
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