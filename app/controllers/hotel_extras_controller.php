<?php
App::import('Controller', 'Cruds');
class HotelExtrasController extends CrudsController {
	
	var $name = 'HotelExtras';
	
	
	function _catchSearch() {
		$conditions = array();
		if(!empty($this->data['Search']['name'])) {
			$conditions['HotelExtra.name LIKE'] = '%'.$this->data['Search']['name'].'%';
		}
		return $conditions;

	}
	
	function _setAssociations(){
				$hotels = $this->HotelExtra->Hotel->find('list');
		$extras = $this->HotelExtra->Extra->find('list');
		$elefts = $this->HotelExtra->Eleft->find('list');
		$erights = $this->HotelExtra->Eright->find('list');
		$this->set(compact('hotels', 'extras', 'elefts', 'erights'));
	}	

	

}
?>