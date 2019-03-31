<?php
App::import('Controller', 'Cruds');
class BannersController extends CrudsController {

	var $name = 'Banners';
	
	function _catchSearch() {
		$conditions = array();
		
		if(!empty($this->data['Search']['action'])) {
			$conditions['Banner.action'] = $this->data['Search']['action'];
		}
		return $conditions;

	}
	
	function _setAssociations(){
		$actions = $this->Banner->actions ;	
		$this->set(compact('actions'));
	}	

	
	

}
?>