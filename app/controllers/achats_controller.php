<?php
App::import('Controller', 'Cruds');
class AchatsController extends CrudsController {
	var $name = 'Achats';
	var $uses=array('Achat','Produit');
	
	function _catchSearch() {
		$conditions = array();
		
		if(!empty($this->data['Search']['name'])) {
			$conditions['Achat.name LIKE'] = '%'.$this->data['Search']['name'].'%';
		}
		return $conditions;

	}
	
	function _setAssociations(){
		
		$produits = $this->Achat->find('list');
		$this->set(compact('produits'));
		
	}
	function view($id){
		$this->Achat->id = $id ;
		$r = $this->Achat->find('first',array(
											'conditions'=>array('Achat.id'=>$id)
										)
								);
		$p = $this->Produit->find('first',array(
											'conditions'=>array('Produit.id'=>$r['Achat']['produitid'])
										)
								);
		$this->set(compact('p','r'));
		$this->render(null,null,'achat') ;
	}

}
?>