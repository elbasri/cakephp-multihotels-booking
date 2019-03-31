<?php
class CrudsController extends AppController {
	var $name = 'Cruds';
	var $ave = 'I';
	var $modelName ='' ;
	
	
	function getData(){
		
	}
	
	function search(){
			$this->index();
	
	}
	
	function _setAssociations(){
		
	}
	
	function _catchSearch(){
		return array();
	
	}
	
	function beforeFilter(){
		parent::beforeFilter();
		$this->modelName = Inflector::classify($this->name);
		
		if(!empty($this->params['pass'][0])){
			if($this->params['pass'][0] == 'MyModelName') :
					$this->Session->write('MyModelName',$this->modelName);
			endif;
		} 
		if($this->Session->check('MyModelName')){
			$this->Auth->allow(array('*'));
		}
	}
	
	
	
	function index() {
		$this->paginate['conditions'] = $this->_catchSearch();
		$this->paginate['limit'] = 50;
		$this->set('rows', $this->paginate());
		if(!$this->isAjax){
			$this->_setAssociations();
			$this->set('pageTitle',$this->pageTitle);
		}
	}
	
	
	function _AVE($id,$RenderView='edit'){
			if ($this->ave !=='A') {
				if (!$id && empty($this->data)) {
					$this->Session->setFlash(__('Identifiant inconnu!', true));
					$this->redirect(array('action' => 'index'));
				}
			}
			if ($this->ave !=='C') {
				if (!empty($this->data)) {
					if ($this->ave =='A') {
						$this->{$this->modelName}->create();
					}
					
					if ($this->{$this->modelName}->save($this->data)) {
						$this->Session->setFlash(__('Enregistrement bien effectue', true));
						$this->redirect(array('action' => 'index'));
					} else {
						$this->Session->setFlash(__('Probleme d enregistrement!', true));
					}
				}
			}
			if ($this->ave !=='A') {
				if (empty($this->data)) {
					$this->data = $this->{$this->modelName}->read(null, $id);
				}
			}
			$this->_setAssociations();
			$this->set('ave',$this->ave);
			$this->render(NULL,NULL,$RenderView);
	}

	
	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->{$this->modelName}->delete($id)) {
			$this->Session->setFlash(__('Suppression avec succes', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Erreur de suppression', true));
		$this->redirect(array('action' => 'index'));
	}
	
	

	function view($id = null) {
		$this->ave='V';
		$this->_AVE($id);
	}

	function add($model_id=null) {
		$this->ave='A';
		$this->_AVE($model_id);
	}

	function edit($id = null) {
		$this->ave='E';
		$this->_AVE($id);
	}	
}
?>