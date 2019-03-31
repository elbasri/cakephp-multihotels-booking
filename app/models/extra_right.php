<?php
class ExtraRight extends AppModel {
	var $name = 'ExtraRight';
	var $validate = array(
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
		'Eright' => array(
			'className' => 'Eright',
			'foreignKey' => 'eright_id',
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