<?php
App::import('Controller', 'Cruds');
class CarteCreditsController extends CrudsController {
	var $name = 'CarteCredits';
	
	function _catchSearch() {
		$conditions = array();
		
		if(!empty($this->data['Search']['name'])) {
			$conditions['CarteCredit.name LIKE'] = '%'.$this->data['Search']['name'].'%';
		}
		return $conditions;

	}
	
	function _setAssociations(){
		
	}	

	function beforeRender(){
		parent::beforeRender() ;
		$this->set('title_for_layout','Mode de paiement');
	
	}
	

}
?>