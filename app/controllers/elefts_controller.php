<?php
App::import('Controller', 'Cruds');
class EleftsController extends CrudsController {

	var $name = 'Elefts';
	function _catchSearch() {
		$conditions = array();
		
		if(!empty($this->data['Eleft']['name'])) {
			$conditions['Eleft.name LIKE'] = '%'.$this->data['Eleft']['name'].'%';
		}
		return $conditions;

	}
	
	function _setAssociations(){
			}	

	

}
?>