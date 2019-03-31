<?php
class ClientController extends Controller {
	var $name = 'Client';
	//var $layout =  'hotel';
	var $uses =  array('Client') ; 
	var $helpers = array('Html','Session','ImozTable','Iresa','Form','RAction','IForm','Front');
	var $components = array('RequestHandler','Upload','Session','Auth','Email');
	

	
	function login() {
		//$this->layout="adminlogin";
		 if( !empty($this->data)) {
		}
    }

    function logout() {
	
        $this->redirect($this->Auth->logout());
    }
	

	function beforeFilter(){
		parent ::beforeFilter();
		
			//Configure AuthComponent
		$this->Auth->userModel = 'Client';
		$this->Auth->fields = array('username' => 'login','password' => 'password');	
        $this->Auth->authorize = 'actions';
		
        $this->Auth->loginAction = array('controller' => 'client', 'action' => 'login');
        $this->Auth->logoutRedirect = array('controller' => 'client', 'action' => 'index');
        $this->Auth->loginRedirect = array('controller' => 'client', 'action' => 'info_general');
	$this->Auth->userScope = array('Hotel.active' => true);
	
	}
	

	
	
	
}
?>