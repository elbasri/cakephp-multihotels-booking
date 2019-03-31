<?php
class Guide extends AppModel {
	var $name = 'Guide';
	var $displayField = 'titre';
	var $validate = array(
		'titre' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
	/*	'titreeng' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'titreesp' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),*/
	);
	
	var $hasMany = array(
		 'GuidePhoto' => array(
				 'className' => 'GuidePhoto',
				 'foreignKey' => 'guide_id',
				 'dependent'=> true,
			//	 'order' => 'GuidePhoto.chambre_id'
			),
			
	); 
	
	
}
?>