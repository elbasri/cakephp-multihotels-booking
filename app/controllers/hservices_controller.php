<?php
App::import('Controller', 'Cruds');
class HservicesController extends CrudsController {

	var $name = 'Hservices';
	function _catchSearch() {
		$conditions = array();
		
		if(!empty($this->data['Hservice']['name'])) {
			$conditions['Hservice.name LIKE'] = '%'.$this->data['Hservice']['name'].'%';
		}
		return $conditions;

	}
	
	function _setAssociations(){
				$hserviceTypes = $this->Hservice->HserviceType->find('list');
		//$hotels = $this->Hservice->Hotel->find('list');
		$this->set(compact('hserviceTypes'));
	}	

	

}
?>