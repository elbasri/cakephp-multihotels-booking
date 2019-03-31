<?php
App::import('Controller', 'Cruds');
class PaysController extends CrudsController {

	var $name = 'Pays';
	function _catchSearch() {
		$conditions = array();
		
		if(!empty($this->data['Pay']['name'])) {
			$conditions['Pay.name LIKE'] = '%'.$this->data['Pay']['name'].'%';
		}
		return $conditions;

	}
	
	function _setAssociations(){
			}	

	

}
?>