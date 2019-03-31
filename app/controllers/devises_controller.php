<?php
App::import('Controller', 'Cruds');
class DevisesController extends CrudsController {

	var $name = 'Devises';
	function _catchSearch() {
		$conditions = array();
		
		if(!empty($this->data['Devise']['name'])) {
			$conditions['Devise.name LIKE'] = '%'.$this->data['Devise']['name'].'%';
		}
		return $conditions;

	}
	
	function _setAssociations(){
			}	

	

}
?>