<?php
App::import('Controller', 'Cruds');
class PromotionsController extends CrudsController {

	var $name = 'Promotions';
	function _catchSearch() {
		$conditions = array();
		
		if(!empty($this->data['Promotion']['name'])) {
			$conditions['Promotion.name LIKE'] = '%'.$this->data['Promotion']['name'].'%';
		}
		return $conditions;

	}
	
	function _setAssociations(){
		$hotels     = $this->Promotion->Hotel->find('list');
		$promoTypes = $this->Promotion->types ;
		$this->set(compact('hotels','promoTypes'));
	}	

	function view($id = null) {
		parent::view($id);
	}

	function add($model_id=null) {
		parent::add($model_id);
	}

	function edit($id = null) {
		parent::add($id);
	}	
	
	

}
?>