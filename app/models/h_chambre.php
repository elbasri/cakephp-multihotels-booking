<?php
class HChambre extends AppModel {
	var $name = 'HChambre';
	var $useTable = 'Chambre' ;
	
	
	
	function getAll ($hotel_id){
			
	
	
		$this->hasMany['ChambreCservice']     =  array(
													'className' => 'ChambreCservice',
													'foreignKey' => 'chambre_id',
													'dependent' => false ,
													'conditions' => array('ChambreCservice.hotel_id'=>$hotel_id),
												);
		$this->hasMany['ChambreDescription']  = array(
													'className' => 'ChambreDescription',
													'foreignKey' => 'chambre_id',
													'dependent' => false ,
													'conditions' => array('ChambreDescription.hotel_id'=>$hotel_id),
												);
		$this->hasMany['HotelPhoto']  		  = array(
													'className' => 'HotelPhoto',
													'foreignKey' => 'chambre_id',
													'dependent' => false ,
													'conditions' => array('HotelPhoto.hotel_id'=>$hotel_id),
												);
												
		return $this->find('all')										
	
	}

}
?>