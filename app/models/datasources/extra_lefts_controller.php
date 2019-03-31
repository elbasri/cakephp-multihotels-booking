<?php
App::import('Controller', 'Cruds');
class ExtraLeftsController extends CrudsController {

	var $name = 'ExtraLefts';
	function _catchSearch() {
		$conditions = array();
		
		if(!empty($this->data['ExtraLeft']['name'])) {
			$conditions['ExtraLeft.name LIKE'] = '%'.$this->data['ExtraLeft']['name'].'%';
		}
		return $conditions;

	}
	
	function _setAssociations(){
				$elefts = $this->ExtraLeft->Eleft->find('list');
		$extras = $this->ExtraLeft->Extra->find('list');
		$this->set(compact('elefts', 'extras'));
	}	

	

}
?>