<?php
App::import('Controller', 'Cruds');
class HotelCarteCreditsController extends CrudsController {

	var $name = 'HotelCarteCredits';
	function _catchSearch() {
		$conditions = array();
		
		if(!empty($this->data['HotelCarteCredit']['name'])) {
			$conditions['HotelCarteCredit.name LIKE'] = '%'.$this->data['HotelCarteCredit']['name'].'%';
		}
		return $conditions;

	}
	
	function _setAssociations(){
				$hotels = $this->HotelCarteCredit->Hotel->find('list');
		$carteCredits = $this->HotelCarteCredit->CarteCredit->find('list');
		$this->set(compact('hotels', 'carteCredits'));
	}	

	

}
?>