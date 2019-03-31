<?php
class HotelExtra extends AppModel {
	var $name = 'HotelExtra';
	var $tmpIds  = array();
	
	
	function beforeSave(){
		parent::beforeSave();
		$d= $this->data['HotelExtra'] ;
		$this->tmpIds[]=$d ; 
		if (count($this->tmpIds) == 1 ) {
			$this->deleteAll(array('HotelExtra.hotel_id'=>$d['hotel_id'])) ;
		}
		return true ;
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
		'extra_id' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'eleft_id' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'eright_id' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
	);
	//The Associations below have been created with all possible keys, those that are not needed can be removed

	var $belongsTo = array(
		'Hotel' => array(
			'className' => 'Hotel',
			'foreignKey' => 'hotel_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Extra' => array(
			'className' => 'Extra',
			'foreignKey' => 'extra_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Eleft' => array(
			'className' => 'Eleft',
			'foreignKey' => 'eleft_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Eright' => array(
			'className' => 'Eright',
			'foreignKey' => 'eright_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
?>