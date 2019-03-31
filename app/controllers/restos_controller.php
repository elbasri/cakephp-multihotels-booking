<?php
App::import('Controller', 'Cruds');
class RestosController extends CrudsController {
	var $name = 'Restos';
	
	function _catchSearch() {
		$conditions = array();
		
		if(!empty($this->data['Search']['name'])) {
			$conditions['Resto.titre LIKE'] = '%'.$this->data['Search']['titre'].'%';
		}
		return $conditions;

	}
	
	function _setAssociations(){
		
		$Restos = $this->Resto->find('list',array('conditions'=>array('Resto.user_id'=>null)));
		$this->set(compact('Restos'));
		
	}


}
?>