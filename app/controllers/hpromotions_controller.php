<?php
App::import('Controller', 'Cruds');
class HpromotionsController extends CrudsController {
	var $name = 'Hpromotions';
	
	function _catchSearch() {
		$conditions = array();
		
		if(!empty($this->data['Featured']['name'])) {
			$conditions['Featured.name LIKE'] = '%'.$this->data['Featured']['name'].'%';
		}
		return $conditions;

	}
	
	function _setAssociations(){
		//$hotels = $this->Featured->Hotel->find('list');
		$this->set(compact('hotels'));
	}	

	
	

}
?>