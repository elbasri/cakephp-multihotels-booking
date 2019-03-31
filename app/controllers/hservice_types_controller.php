<?php
App::import('Controller', 'Cruds');
class HserviceTypesController extends CrudsController {

	var $name = 'HserviceTypes';
	function _catchSearch() {
		$conditions = array();
		
		if(!empty($this->data['HserviceType']['name'])) {
			$conditions['HserviceType.name LIKE'] = '%'.$this->data['HserviceType']['name'].'%';
		}
		return $conditions;

	}
	
	function _setAssociations(){
			}	

	

}
?>