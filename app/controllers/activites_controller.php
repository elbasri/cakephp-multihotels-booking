<?php
App::import('Controller', 'Cruds');
class ActivitesController extends CrudsController {

	var $name = 'Activites';
	function _catchSearch() {
		$conditions = array();
		
		if(!empty($this->data['Search']['titre'])) {
			$conditions['Activite.name LIKE'] = '%'.$this->data['search']['titre'].'%';
		}
		
		if(!empty($this->data['Search']['activite_category_id'])) {
			$conditions['Activite.activite_category_id'] = $this->data['Search']['activite_category_id'];
		}
		
		return $conditions;

	}
	
	function _setAssociations(){
		$activiteCategories = $this->Activite->ActiviteCategory->find('list');
		$devises = $this->Activite->Devise->find('list');
		$villes = $this->Activite->Ville->find('list') ;
		$this->set(compact('activiteCategories','devises','villes'));
	}	

	

}
?>