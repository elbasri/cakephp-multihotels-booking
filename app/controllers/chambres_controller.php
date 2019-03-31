<?php
App::import('Controller', 'Cruds');
class ChambresController extends CrudsController {

	var $name = 'Chambres';
	function _catchSearch() {
		$conditions = array();
		
		if(!empty($this->data['Chambre']['name'])) {
			$conditions['Chambre.name LIKE'] = '%'.$this->data['Chambre']['name'].'%';
		}
		return $conditions;

	}
	
	function _setAssociations(){
			}	

	

}
?>