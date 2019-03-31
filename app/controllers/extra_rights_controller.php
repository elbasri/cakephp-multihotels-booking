<?php
App::import('Controller', 'Cruds');
class ExtraRightsController extends CrudsController {

	var $name = 'ExtraRights';
	function _catchSearch() {
		$conditions = array();
		
		if(!empty($this->data['ExtraRight']['name'])) {
			$conditions['ExtraRight.name LIKE'] = '%'.$this->data['ExtraRight']['name'].'%';
		}
		return $conditions;

	}
	
	function _setAssociations(){
				$erights = $this->ExtraRight->Eright->find('list');
		$extras = $this->ExtraRight->Extra->find('list');
		$this->set(compact('erights', 'extras'));
	}	

	

}
?>