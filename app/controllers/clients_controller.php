<?php
class ClientsController extends AppController {
	var $name = 'Clients';
	var $helpers = array('Html','Session','ImozTable','Iresa','Form','RAction','IForm','Front','Mtc');
	var $layout = 'front' ;
	var $layout_type = 'left' ;
	var $components = array('RequestHandler','Upload','Session','Auth','Email');

	
	/**
 * Enter description here ...
 * @author Administrateur
 *
 *
	
 */
	
	
	function beforeFilter(){
		parent ::beforeFilter();
		//$this->Auth->allow(array('*'));
		$this->Auth->allow('add');
		//Configure AuthComponent
		$this->Auth->userModel = 'Client';
		$this->Auth->fields = array('username' => 'login','password' => 'password');	
        //$this->Auth->authorize = 'actions';
		
        $this->Auth->loginAction = array('controller' => 'clients', 'action' => 'login');
        $this->Auth->logoutRedirect = array('controller' => 'pages', 'action' => 'home');
        $this->Auth->loginRedirect = array('controller' => 'clients', 'action' => 'compte');
		

	}
	
  function login()
	{
		echo $this->data['Client']['password'];
 		$layout_type="left";
		// $this->layout='layout_vide';
		$this->set(compact('layout_type')); 
	}
 	
	function logout()
	{
		$this->redirect($this->Auth->logout());
	}
	
	function add()
	{
	if(!empty($this->data))
		{
			
			$this->Session->write("password",$this->data['Client']['password']);
			$res=$this->Client->find('count',array('conditions'=>array('Client.login'=>$this->data['Client']['login'])));
			if($res==0){
			 $this->Client->save($this->data);
			 $this->Auth->Session->write($this->Auth->sessionKey . '.id', $this->Client->getLastInsertID());
			 $email=$this->data['Client']['login'];
			 $pwd=$this->data['Client']['pass'] ;
			 $nom="";
			 $this->set(compact('pwd','email','nom'));
			 /*$this->Email->to	= $this->data['Client']['login'] ;
			 $this->Email->subject  = "Confirmation d'inscription sur le site offredealshotels.com";
			 $this->Email->template = "Vous etes inscrit sur le site http://offredealshotels.com";
			 $this->Email->sendAs   = 'html'; 
			 $this->Email->send();*/
	         $this->redirect($this->Auth->redirect()); 
		
			}
			else {
				$this->Session->setFlash('Compte déja existant', 'default', array('class' => 'msg'));
				    $this->redirect($this->referer());
			}
		}
		$layout_type="left";
		$this->set(compact('layout_type'));
		

	}
	
	function compte()
	{	
		$id=$this->Auth->user("id");
		if(!empty($this->data))
		{
//			    $this->Client->read(null, $id);
//    			$this->Client->save($this->data);
		$nom=$this->data['Client']['nom'];
		$prenom=$this->data['Client']['prenom'];
		$civilite=$this->data['Client']['civilite'];
		$adresse=$this->data['Client']['adresse'];
		$code=$this->data['Client']['code_postale'];
		$pays=$this->data['Client']['pays'];
		$ville=$this->data['Client']['ville'];
		$tel=$this->data['Client']['tel'];
			$this->Client->updateAll(
    array('Client.nom' =>"'$nom'",'Client.prenom' =>"'$prenom'",'Client.civilite' =>"'$civilite'",'Client.adresse' =>"'$adresse'",'Client.tel' =>"'$tel'",'Client.ville_id' =>"'$ville'",'Client.pay_id' =>"'$pays'",'Client.code_postal' =>"'$code'"),
    array('Client.id' =>$id)
    );
			
		}
		$layout_type="left";
		//$user=$this->Auth->user();
		$this->loadModel('Pay');
		$pays=$this->Pay->find("list");
		$user=$this->Client->find("first",array('conditions' => array('Client.id'=>$id)));
		$this->set(compact('layout_type','user','pays'));
	}


	function reservations()
	{
		$layout_type="left";
		$id=$this->Auth->user("id");
		$email=$this->Auth->user("login");
		$this->loadModel('Reservation');
		$res=$this->Reservation->find("all",array('conditions' => array('Reservation.client_id'=>$id)));
		//debug($res);
		//die();
		$this->set(compact('layout_type','email','res'));
	}
	

	
}
?>