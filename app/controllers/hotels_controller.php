<?php
App::import('Controller', 'Cruds');
class HotelsController extends CrudsController {
	var $name = 'Hotels';
	var $pageTitle =  'Etablissement';
	
	
	
	function prix(){
			
	$datah= mysql_query("select id from hotels");
	while($rowh = mysql_fetch_array($datah))
		{
	$id=$rowh['id'];
	$min=0;
	$cont=0;
	$data= mysql_query("select tarif from inventaires i where i.hotel_id = $id and ladate >=curdate() and i.chambre_id in (select chambre_id from hotel_chambres hc where hc.hotel_id=$id )");

		while($row = mysql_fetch_array($data))
		{
			//echo $row['tarif']."<br>";
			if($cont==0){
				$min=$row['tarif'];
				$cont=1;
			}
			if($row['tarif']<=$min){
			$min=$row['tarif'];
			}
		}
		$q = mysql_query("update hotels set hotelPrix= $min where id=$id");
		if(!$q)
			echo "erreur dans le mis a jour de l'hotel Num: ".$id."<br>";
	}
	$this->Session->setFlash('Mise a jour avec succes');
	$this->redirect(array('controller'=>'hotels','action'=>'index'));
	}
	
	function search(){
		$c = $this->_catchSearch() ;
		$this->paginate['conditions'] = $this->_catchSearch();
		$this->index();
	
	}
	
	
	function _catchSearch() {
		$this->paginate['contain'] = array('Ville','Devise','HotelType');
		$this->paginate['fields'] = array('Hotel.id','Hotel.name','Hotel.active','HotelType.name','Ville.name','Devise.name');
		
		$conditions = array();
		
		if(!empty($this->data['Search']['name'])) {
			$conditions['Hotel.name LIKE'] = '%'.$this->data['Search']['name'].'%';
		}
		if(!empty($this->data['Search']['hotel_type_id'])) {
			$conditions['Hotel.hotel_type_id'] = $this->data['Search']['hotel_type_id'];
		}
		if(!empty($this->data['Search']['ville_id'])) {
			$conditions['Hotel.ville_id'] = $this->data['Search']['ville_id'];
		}
		return $conditions;

	}
	
	function photos($hotel_id){
		$this->loadModel('HotelPhoto') ;
		$photos = $this->HotelPhoto->find('all',array('conditions'=>array('HotelPhoto.hotel_id'=>$hotel_id)));
		$this->set('photos',$photos);
	}
	
	
	function inventaire($type,$annee,$mois,$hotel_id){
		$this->set(compact('type','annee','mois','hotel_id'));
		if($type=='tarif'){
			
		}
		$this->render(null,null,$type) ;
	}
	
	function _setAssociations(){
		$langues = $this->Hotel->Langue->find('list');
		$villes = $this->Hotel->Ville->find('list');
		$pays = $this->Hotel->Pay->find('list');
		$devises = $this->Hotel->Devise->find('list');
		$carteCredits = $this->Hotel->CarteCredit->find('list');
		/* $chambres = $this->Hotel->Chambre->find('list'); */
		$etoiles = $this->Hotel->etoiles;
		$hotelTypes=  $this->Hotel->HotelType->find('list');
		$this->set(compact('langues', 'villes','chambres','carteCredits', 'hotelTypes','pays', 'devises','etoiles'));
	}	

	function beforeFilter(){
		parent::beforeFilter() ;
		if(!empty($this->data['Hotel']['pw'])) :
				$this->Session->write('Hotel.pw',$this->data['Hotel']['pw']);
		endif ;
		
	}
	
	
	function beforeRender(){
		parent::beforeRender() ;
		if ($this->action == 'index'){
			if($this->Session->check('Hotel.pw')) :
					$this->Session->setFlash('Mot de passe : '.$this->Session->read('Hotel.pw')) ;
					$this->Session->delete('Hotel.pw');
			endif ;
		}
	}
	
	

}
?>