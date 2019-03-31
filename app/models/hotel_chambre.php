<?php
class HotelChambre extends AppModel {
	var $name = 'HotelChambre';
	
	var $belongsTo = array(
		'Hotel' => array(
			'className' => 'Hotel',
			'foreignKey' => 'hotel_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Chambre' => array(
			'className' => 'Chambre',
			'foreignKey' => 'chambre_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
	);
		
		
	


	
	
}
?>