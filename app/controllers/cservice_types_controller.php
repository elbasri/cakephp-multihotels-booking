<?php
App::import('Controller', 'Cruds');
class CserviceTypesController extends CrudsController {

	var $name = 'CserviceTypes';
	function _catchSearch() {
		$conditions = array();
		
		if(!empty($this->data['CserviceType']['name'])) {
			$conditions['CserviceType.name LIKE'] = '%'.$this->data['CserviceType']['name'].'%';
		}
		return $conditions;

	}
	
	function _setAssociations(){
			}	

	

}
?>