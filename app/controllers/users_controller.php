<?php
class UsersController extends AppController {
		//var $uses = a;
	
	
	function login(){
		$this->layout = 'adminlogin' ;
	}
	
	function logout(){
		$this->redirect($this->Auth->logout());
	}
	
	function profile(){
		if(!empty($this->data)){
			$user_id =  $this->Session->read('Auth.User.id')  ;
			$this->data['User']['id']  = $user_id ;
			if ($this->_ValidatePass($user_id)) :
					if($this->User->save($this->data)) :
						$this->redirect('/hotels');
					endif ;		
			endif; 
		}
	}
	
	function _ValidatePass($user_id){
	
		$this->User->id = $user_id;
		$oldPass = $this->User->field('password') ;
		$userPass  = $this->Auth->password($this->data['User']['oldpassword']); 
		$ret = true;
		
		if($userPass  != $oldPass) {
			$this->Session->setFlash('Ancien mot de passe incorrect');
			$ret = false ;
		}
		
		if($this->data['User']['password']  != $this->data['User']['password2']) {
			$this->Session->setFlash('Veuillez Confirmer votre nouveau mot de passe :');
				$ret = false ;
		}	
		
		return $ret ;
	}
	
}
?>