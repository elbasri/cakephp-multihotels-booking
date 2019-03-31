<?php
App::import('Controller', 'Cruds');
class ErightsController extends CrudsController {

	var $name = 'Erights';
	function _catchSearch() {
		$conditions = array();
		
		if(!empty($this->data['Eright']['name'])) {
			$conditions['Eright.name LIKE'] = '%'.$this->data['Eright']['name'].'%';
		}
		return $conditions;

	}
	
	function _setAssociations(){
			}	

	

}
?>