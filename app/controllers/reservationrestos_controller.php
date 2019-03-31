<?php
App::import('Controller', 'Cruds');
class ReservationrestosController extends CrudsController {
	var $name = 'Reservationrestos';
	var $uses=array('Reservationresto','Resto');
	
	function _catchSearch() {
		$conditions = array();
		
		if(!empty($this->data['Search']['name'])) {
			$conditions['Reservationresto.name LIKE'] = '%'.$this->data['Search']['name'].'%';
		}
		return $conditions;

	}
	
	function _setAssociations(){
		
		$produits = $this->Reservationresto->find('list');
		$this->set(compact('produits'));
		
	}
	function view($id){
		$this->Reservationresto->id = $id ;
		$r = $this->Reservationresto->find('first',array(
											'conditions'=>array('Reservationresto.id'=>$id)
										)
								);
		$p = $this->Resto->find('first',array(
											'conditions'=>array('Resto.id'=>$r['Reservationresto']['restoid'])
										)
								);
		$this->set(compact('p','r'));
		$this->render(null,null,'reservation') ;
	}

}
?>