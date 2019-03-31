<?php
class Extra extends AppModel {
	var $name = 'Extra';
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
		'extra_type_id' => array(
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
		'ExtraType' => array(
			'className' => 'ExtraType',
			'foreignKey' => 'extra_type_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
	
	var $hasAndBelongsToMany = array(
				'Eleft' =>array(
							 'className' => 'Eleft',
							 'joinTable' => 'extra_lefts',
							 'foreignKey' => 'extra_id',
							 'associationForeignKey' => 'eleft_id',
							 'unique' => true
							),
				'Eright' =>array(
							 'className' => 'Eright',
							 'joinTable' => 'extra_rights',
							 'foreignKey' => 'extra_id',
							 'associationForeignKey' => 'eright_id',
							 'unique' => true
							),			
				);
	

}
?>