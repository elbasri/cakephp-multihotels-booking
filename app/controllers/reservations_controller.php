<?php
App::import('Controller', 'Cruds');
class ReservationsController extends CrudsController {
	var $name = 'Reservations';
	var $helpers =  array('Front');
	
	
	function _catchSearch() {
	
		$etats = $this->Reservation->etats ;
		$this->set(compact('etats'));
		
		$conditions = array();
		
		if(!empty($this->data['Hotel']['name'])) {
			$conditions['Hotel.name LIKE'] = '%'.$this->data['Hotel']['name'].'%';
		}
		if(!empty($this->data['Reservation']['num'])) {
			$conditions['Reservation.id'] = $this->data['Reservation']['num'];
		}
		if(!empty($this->data['Reservation']['email'])) {
			$conditions['Reservation.email LIKE'] = '%'.$this->data['Reservation']['email'].'%';
		}
		if(!empty($this->data['Reservation']['nom'])) {
			$conditions['Reservation.nom LIKE'] = '%'.$this->data['Reservation']['nom'].'%';
		}
		if(!empty($this->data['Reservation']['etat'])) {
			$conditions['Reservation.etat'] = $this->data['Reservation']['etat'];
		}
		return $conditions;

	}
	
	function _setAssociations(){
		/*$pays = $this->Reservation->Pay->find('list');*/
		$hotels = $this->Reservation->Hotel->find('list');
		$chambres = $this->Reservation->Chambre->find('list');
		$etats = $this->Reservation->etats ;
		$this->set(compact('pays', 'hotels', 'chambres','etats'));
	}	


	function view($id){
		$this->Reservation->id = $id ;
		$r = $this->Reservation->find('first',array(
											'conditions'=>array('Reservation.id'=>$id) ,
											'contain'=>array('ReservationDetail','Devise','Chambre','Hotel')
										)
								);
		$h = $this->Reservation->Hotel->info_resa($r['Reservation']['hotel_id'],$r['Reservation']['chambre_id']);
		$this->set(compact('h','r'));
		$this->render(null,null,'reservation') ;
	}
	

}
?>