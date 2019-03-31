<?php
class ChambreCservice extends AppModel {
	var $name = 'ChambreCservice';
	
	function saveBy($services,$hotel_id,$chambre_id ) {
		$dConditions = array('ChambreCservice.hotel_id'=>$hotel_id,'ChambreCservice.chambre_id'=>$chambre_id); 
		$this->deleteAll($dConditions);
		if (!empty($services)): 
			$vals = array() ;
			foreach ($services as $key=>$val) {
				$vals['ChambreCservice'][] =  array('chambre_id'=>$chambre_id,'hotel_id'=>$hotel_id,'cservice_id'=>$val);
			}
			$this->saveAll($vals['ChambreCservice']);
		endif ;	
		
	}
	
  
	var $belongsTo = array(
		'Hotel' => array(
			'className' => 'Hotel',
			'foreignKey' => 'hotel_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Cservice' => array(
			'className' => 'Cservice',
			'foreignKey' => 'cservice_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
?>