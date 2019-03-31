<?php
class Client extends AppModel {
	var $name = 'Client';
	
	
//	function beforeSave(){
//		parent::beforeSave();
//		if (!empty($this->data['Client']['password'])){
//			echo $this->data['Client']['password'];
//			die();
//			$this->data['Client']['password'] =  Security::hash($this->data['Client']['password'], null, true);
//			return true ;
//		}
//		else {
//			unset($this->data['Client']['password']) ;
//			return true ;
//		}
//	}
			
}
?>