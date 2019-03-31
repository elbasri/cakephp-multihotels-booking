<?php
class HotelPhoto extends AppModel {
	var $name = 'HotelPhoto';
	var $order = 'HotelPhoto.chambre_id';
	
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
		'photo' => array(
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
	

	var $belongsTo = array(
		/*'Hotel' => array(
			'className' => 'Hotel',
			'foreignKey' => 'hotel_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),*/
		'Chambre' => array(
			'className' => 'Chambre',
			'foreignKey' => 'chambre_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
?>