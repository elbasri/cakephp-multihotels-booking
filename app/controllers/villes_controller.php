<?php
App::import('Controller', 'Cruds');
class VillesController extends CrudsController {

	var $name = 'Villes';
	function _catchSearch() {
		$conditions = array();
		
		if(!empty($this->data['Search']['name'])) {
			$conditions['Ville.name LIKE'] = '%'.$this->data['Search']['name'].'%';
		}
		return $conditions;

	}
	
	function _setAssociations(){
		$pays = $this->Ville->Pay->find('list');
		$this->set(compact('pays'));
	}	
	
	
	function beforeFilter(){
		parent :: beforeFilter() ;
		$this->Auth->allow(array('byPays'));
	}
	

	function byPays() {
		$this->layout = '' ;
		// Configure::write('debug', 0); 
		  $pays_id = $this->data['Search']['pay_id'];
		  $results = $this->Ville->find('list',
			  array('conditions'=>array('Ville.pay_id'=>$pays_id)));
		  $villes[] = array('id'=>'', 'label'=>'------');
		  
		  foreach($results as $k => $v){
			  $villes[] = array('id'=>$k,'label'=>$v);
		  }
		echo json_encode($villes) ;
		exit(1);
    }

	

}
?>