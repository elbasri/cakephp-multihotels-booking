<?php
App::import('Controller', 'Cruds');
class ExtrasController extends CrudsController {
	var $name = 'Extras';
	
	function _catchSearch() {
		$conditions = array();
		
		if(!empty($this->data['Extra']['name'])) {
			$conditions['Extra.name LIKE'] = '%'.$this->data['Extra']['name'].'%';
		}
		return $conditions;

	}
	
	function _setAssociations(){
		$extraTypes = $this->Extra->ExtraType->find('list');
		$elefts = $this->Extra->Eleft->find('list');
		$erights = $this->Extra->Eright->find('list');
		$this->set(compact('extraTypes', 'elefts','erights'));
	}	

	

}
?>