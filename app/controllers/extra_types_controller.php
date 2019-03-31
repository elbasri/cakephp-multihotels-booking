<?php
App::import('Controller', 'Cruds');
class ExtraTypesController extends CrudsController {

	var $name = 'ExtraTypes';
	function _catchSearch() {
		$conditions = array();
		
		if(!empty($this->data['ExtraType']['name'])) {
			$conditions['ExtraType.name LIKE'] = '%'.$this->data['ExtraType']['name'].'%';
		}
		return $conditions;

	}
	
	function _setAssociations(){
			}	

	

}
?>