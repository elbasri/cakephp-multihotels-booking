<?php
class AcrudsController extends AppController {
	var $name = 'Acruds';
	var $ave = 'I';
	var $modelName ='' ;
	var $model_key = "modele_id" ;
	var $model_key_name = "Modele" ;

	function beforeFilter(){
		parent::beforeFilter();
		$this->modelName = Inflector::classify($this->name);
	}
	
	
	
	function index($model_key_id) {
		$this->{$this->modelName}->{$this->model_key_name}->id = $model_key_id ;
		$displayField = $this->{$this->modelName}->{$this->model_key_name}->displayField ;
		$title  = $this->{$this->modelName}->{$this->model_key_name}->field($displayField); 
		$this->set('title',$title);
		$conditions = $this->_catchSearch();
		$conditions[$this->modelName.'.'.$this->model_key] = $model_key_id ;
		//$this->paginate['limit'] = 50;
		
		$this->set('rows', $this->{$this->modelName}->find('all',array('conditions'=>$conditions)));
		if(!$this->isAjax){
			$this->_setAssociations();
		}
		$this->set($this->model_key ,$model_key_id);
	}

	
	function view($model_key_id=null,$id = null){
		$this->ave='V';
		$this->_AVE($id,'edit',$model_key_id);
	}

	function add($model_key_id=null){
		$this->ave='A';
		$this->_AVE($model_key_id,'edit',$model_key_id);
	}

	function edit($model_key_id=null,$id = null) {
		$this->ave='E';
		$this->_AVE($id,'edit',$model_key_id);
	}	
	
	function _AVE($id,$RenderView='edit',$model_key_id){
			if ($this->ave !=='A') {
				if (!$id && empty($this->data)) {
					$this->Session->setFlash(__('Identifiant inconnu!', true));
					$this->redirect(array('action' => 'index'));
				}
			}
			if (!empty($this->data[$this->modelName][$this->model_key])){
				$model_key_id = $this->data[$this->modelName][$this->model_key];
			}
			if ($this->ave !=='C') {
				if (!empty($this->data)) {
					if ($this->ave =='A') {
						$this->{$this->modelName}->create();
					}					
					if ($this->{$this->modelName}->save($this->data)) {
						$this->Session->setFlash(__('Enregistrement bien effectue', true));
						$this->redirect(array('action' => 'index',$model_key_id));
					} else {
						$this->Session->setFlash(__('Probleme d enregistrement!', true));
						$this->redirect(array('action' => 'index',$model_key_id));
					}
				}
			}
			if ($this->ave !=='A') {
				if (empty($this->data)) {
					$this->data = $this->{$this->modelName}->read(null, $id);
				}
			}
			
			$this->set('ave',$this->ave);
			$this->data[$this->modelName][$this->model_key] = $model_key_id ;
			$this->_setAssociations();
			$this->render(NULL,NULL,$RenderView);
	}

	
	function delete($bll = null,$id= null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->{$this->modelName}->id = $id;
		$model_key_id = $this->{$this->modelName}->field($this->model_key);
		if ($this->{$this->modelName}->delete($id)) {
			$this->Session->setFlash(__('Suppression avec succes', true));
			$this->redirect(array('action' => 'index',$model_key_id));
		}
		$this->Session->setFlash(__('Erreur de suppression', true));
		$this->redirect(array('action' => 'index',$model_key_id));
	}
}
?>