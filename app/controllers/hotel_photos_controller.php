<?php
App::import('Controller', 'Cruds');
class HotelPhotosController extends CrudsController {

	var $name = 'HotelPhotos';
	function _catchSearch() {
		$conditions = array();
		
		if(!empty($this->data['HotelPhoto']['name'])) {
			$conditions['HotelPhoto.name LIKE'] = '%'.$this->data['HotelPhoto']['name'].'%';
		}
		return $conditions;

	}
	
	function _setAssociations(){
				$hotels = $this->HotelPhoto->Hotel->find('list');
		$chambres = $this->HotelPhoto->Chambre->find('list');
		$this->set(compact('hotels', 'chambres'));
	}	

	

}
?>