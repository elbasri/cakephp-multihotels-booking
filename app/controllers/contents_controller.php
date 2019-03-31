<?php
App::import('Controller', 'Cruds');
class ContentsController extends CrudsController {
	var $name = 'Contents';
	
	function _catchSearch() {
		$conditions = array();
		
		if(!empty($this->data['Search']['name'])) {
			$conditions['Content.titre LIKE'] = '%'.$this->data['Search']['titre'].'%';
		}
		return $conditions;

	}
	
	function _setAssociations(){
		
		$contents = $this->Content->find('list',array('conditions'=>array('Content.content_id'=>null)));
		$this->set(compact('contents'));
		
	}	


}
?>