<?php
App::import('Controller', 'Cruds');
class ActiviteCategoriesController extends CrudsController {

	var $name = 'ActiviteCategories';
	function _catchSearch() {
		$conditions = array();
		
		if(!empty($this->data['ActiviteCategory']['name'])) {
			$conditions['ActiviteCategory.name LIKE'] = '%'.$this->data['ActiviteCategory']['name'].'%';
		}
		return $conditions;

	}
	
	function _setAssociations(){
			}	

	

}
?>