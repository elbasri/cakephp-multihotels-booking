<?php
App::import('Controller', 'Acruds');
class HotelChambresController extends AcrudsController {
	var $name = 'HotelChambres';
	
	var $model_key = "hotel_id" ;
	var $model_key_name = "Hotel" ;
	
	function _catchSearch() {
		$conditions = array();
		
		/*if(!empty($this->data['Photo']['name'])) {
			$conditions['Photo.name LIKE'] = '%'.$this->data['Photo']['name'].'%';
		}*/
		return $conditions;

	}
	
	function _setAssociations(){
		$chambres = $this->HotelChambre->Chambre->find('list');
		$pensions = $this->HotelChambre->Chambre->pensions    ;
		$this->set(compact('chambres','pensions'));
	}	

	

	
	
	

}
?>