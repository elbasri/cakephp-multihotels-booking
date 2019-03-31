<?php
App::import('Controller', 'Cruds');
class ProduitsController extends CrudsController {
	var $name = 'Produits';
	
	function _catchSearch() {
		$conditions = array();
		
		if(!empty($this->data['Search']['name'])) {
			$conditions['Produit.titre LIKE'] = '%'.$this->data['Search']['titre'].'%';
		}
		return $conditions;

	}
	
	function _setAssociations(){
		
		$produits = $this->Produit->find('list',array('conditions'=>array('Produit.user_id'=>null)));
		$this->set(compact('produits'));
		
	}


}
?>