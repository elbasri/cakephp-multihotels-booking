<?php
App::import('Controller', 'Cruds');
class HotelHservicesController extends CrudsController {

	var $name = 'HotelHservices';
	function _catchSearch() {
		$conditions = array();
		
		if(!empty($this->data['HotelHservice']['name'])) {
			$conditions['HotelHservice.name LIKE'] = '%'.$this->data['HotelHservice']['name'].'%';
		}
		return $conditions;

	}
	
	function _setAssociations(){
				$hotels = $this->HotelHservice->Hotel->find('list');
		$hservices = $this->HotelHservice->Hservice->find('list');
		$this->set(compact('hotels', 'hservices'));
	}	

	

}
?>