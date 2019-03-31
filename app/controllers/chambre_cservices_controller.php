<?php
App::import('Controller', 'Cruds');
class ChambreCservicesController extends CrudsController {

	var $name = 'ChambreCservices';
	function _catchSearch() {
		$conditions = array();
		
		if(!empty($this->data['ChambreCservice']['name'])) {
			$conditions['ChambreCservice.name LIKE'] = '%'.$this->data['ChambreCservice']['name'].'%';
		}
		return $conditions;

	}
	
	function _setAssociations(){
		$cservices = $this->ChambreCservice->Cservice->find('list');
		$chambres = $this->ChambreCservice->Chambre->find('list');
		$hotels = $this->ChambreCservice->Hotel->find('list');
		$this->set(compact('cservices', 'chambres', 'hotels'));
	}	

	

}
?>