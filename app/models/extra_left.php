<?php
class ExtraLeft extends AppModel {
	var $name = 'ExtraLeft';
	var $validate = array(
		'elefts_id' => array(
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
	);
	//The Associations below have been created with all possible keys, those that are not needed can be removed

	var $belongsTo = array(
		'Elefts' => array(
			'className' => 'Elefts',
			'foreignKey' => 'elefts_id',
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
		)
	);
}
?>