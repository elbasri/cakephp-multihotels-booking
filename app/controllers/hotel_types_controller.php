<?php
App::import('Controller', 'Cruds');
class HotelTypesController extends CrudsController {

	var $name = 'HotelTypes';
	function _catchSearch() {
		$conditions = array();
		
		if(!empty($this->data['HotelType']['name'])) {
			$conditions['HotelType.name LIKE'] = '%'.$this->data['HotelType']['name'].'%';
		}
		return $conditions;

	}
	
	function _setAssociations(){
			}	

	

}
?>