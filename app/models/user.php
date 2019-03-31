<?php
class User extends AppModel {
	var $name = 'User';
	
	
	function beforeSave(){
		parent::beforeSave();
		if (!empty($this->data['User']['password'])){
			$this->data['User']['password'] =  Security::hash($this->data['User']['password'], null, true);
			return true ;
		}
		else {
			unset($this->data['User']['password']) ;
			return true ;
		}
	}
	
}
?>