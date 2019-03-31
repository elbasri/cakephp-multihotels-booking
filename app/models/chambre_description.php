<?php
class ChambreDescription extends AppModel {
	var $name = 'ChambreDescription';
	//The Associations below have been created with all possible keys, those that are not needed can be removed
	

	var $belongsTo = array(
		'Chambre' => array(
			'className' => 'Chambre',
			'foreignKey' => 'chambre_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
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