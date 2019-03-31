<?php
App::import('Controller', 'Cruds');
class CservicesController extends CrudsController {

	var $name = 'Cservices';
	function _catchSearch() {
		$conditions = array();
		
		if(!empty($this->data['Cservice']['name'])) {
			$conditions['Cservice.name LIKE'] = '%'.$this->data['Cservice']['name'].'%';
		}
		return $conditions;

	}
	
	function _setAssociations(){
				$cserviceTypes = $this->Cservice->CserviceType->find('list');
		$this->set(compact('cserviceTypes'));
	}	

	

}
?>