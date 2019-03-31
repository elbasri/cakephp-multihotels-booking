<?php
App::import('Controller', 'Acruds');
class GuidePhotosController extends AcrudsController {
	var $name = 'GuidePhotos';
	var $model_key = "guide_id" ;
	var $model_key_name = "Guide" ;
	
	function _catchSearch() {
		$conditions = array();
		
		/*if(!empty($this->data['Photo']['name'])) {
			$conditions['Photo.name LIKE'] = '%'.$this->data['Photo']['name'].'%';
		}*/
		return $conditions;

	}
	
	function _setAssociations(){
		/* $chambres = $this->HotelChambre->Chambre->find('list');
		$this->set(compact('chambres'));*/
	}	

	

	
	
	

}
?>