<?php
class HotelController extends Controller {
	var $name = 'Hotel';
	var $layout =  'hotel';
	var $uses =  array('Hotel','Inventaire','Reservation','ChambreDescription','HotelExtra','Extra','Chambre','Promotion','HotelPhoto','Cservice') ; 
	var $helpers = array('Html','Session','ImozTable','Iresa','Form','RAction','IForm','Front');
	var $components = array('RequestHandler','Upload','Session','Auth','Email');
	var $hotel_id = '' ;
	
	
	
	
	function promotion_delete($id){
		if($this->Promotion->delete($id)) {
				$this->Session->setFlash('Suppression avec succes');
		}else {
			$this->Session->setFlash('Erreur de suppression');
		}
		
		$this->redirect(array('controller'=>'hotel','action'=>'promotions'));
	
	}
	
	
	function promotion_add(){
		if(!empty($this->data)){
			$this->data['Promotion']['hotel_id'] = $this->hotel_id ;
			$this->Promotion->create();
			if($this->Promotion->save($this->data)) :
				$this->redirect('/hotel/promotions');
			else :	
				$this->Session->setFlash('Erreur');			
			endif;
		}
		$chambres = $this->Session->read('HotelChambre');
		$this->set(compact('chambres'));
		$this->set('promoTypes',$this->Promotion->types);
	}
	
	function promotions(){
	    $c['Promotion.hotel_id']				  =    $this->hotel_id ;
	    $this->paginate['model']   				   =    'Promotion' ;
	    $this->paginate['Promotion']['conditions'] = $c ;
	    $this->paginate['Promotion']['limit'] 	  = 15;
	    $rows  = $this->paginate('Promotion') ;	
		$this->set('promoTypes',$this->Promotion->types);
		$this->set(compact('rows','pageTitle'));
	
	}
	
	
	
	
	function reservation($id){
		$this->Reservation->id = $id ;
		$r = $this->Reservation->find('first',array(
											'conditions'=>array('Reservation.id'=>$id) ,
											'contain'=>array('ReservationDetail','Devise','Chambre','Hotel')
										)
								);
		$h = $this->Hotel->info_resa($r['Reservation']['hotel_id'],$r['Reservation']['chambre_id']);
		$this->set(compact('h','r'));
	}
	
	function reservations(){
		$c['Reservation.hotel_id']    = $this->hotel_id ;
		//$c['Reservation.transaction <>'] = '';
		$this->paginate['model'] = 'Reservation' ;
		$this->paginate['Reservation']['conditions'] = $c ;
	    $this->paginate['Reservation']['limit'] = 15;
	    $rows  = $this->paginate('Reservation') ;	
		$etats = $this->Reservation->etats ;
		$this->set(compact('rows','pageTitle','etats'));
	}
	
	function reservation_confirm($id){
	     $this->Reservation->id = $id ;
		 $hotel_id = $this->Reservation->field('hotel_id');
		 if($this->hotel_id == $hotel_id ):
				$this->Reservation->saveField('confirm_hotel',true);
				$this->Session->setFlash('Réservation confirmer avec succées');
				$this->redirect($this->referer());
			
		 else  :
				$this->Session->setFlash("Erreur veuillez contactez l'administrateur");
				$this->redirect($this->referer());
		 endif ;
		 
	}
	
	
	function desc_chambre($chambre_id=null){
	//$this->data= $this->Hotel->find('first',array('recursive'=>-1,'conditions'=>array('Hotel.id'=>$this->hotel_id)));
		 $chambres = $this->Session->read('HotelChambre') ;
		 $tmpC =array('ChambreDescription.hotel_id'=>$this->hotel_id,'ChambreDescription.chambre_id'=>$chambre_id);
		 $this->data = $this->ChambreDescription->find('first',array('conditions'=>$tmpC));
		 $data= $this->ChambreDescription->find('first',array('conditions'=>$tmpC));
	
$idc = $chambre_id;
	$idh = $this->hotel_id;
			
		$data= mysql_query("SELECT * FROM chambre_descriptions WHERE chambre_id = '$idc' AND hotel_id = '$idh' ");
		$data = mysql_fetch_array($data);

		 $this->set(compact('data','chambres','chambre_id'));

	}
	
	
	function photo_add(){
			$this->layout = '' ;
			if (!empty($this->data['HotelPhoto']['photo']['name'])){
                    $destination = WWW_ROOT.'files'.DS.'images'.DS;
                    $file = $this->data['HotelPhoto']['photo'];
					$result = $this->Upload->upload($file, $destination);
					if(!$result) {
						 $this->data['HotelPhoto']['photo'] = $this->Upload->result;

					}

						$this->data['HotelPhoto']['hotel_id']=$this->hotel_id ; 
						$this->HotelPhoto->create();
					if(empty($this->data['HotelPhoto']['chambre_id']))
					{
					$this->data['HotelPhoto']['chambre_id'] = 0 ;
					}
						if ($this->HotelPhoto->save($this->data))
						{
					$this->Session->setFlash('Donnee sauvegarde avec succes');
						}
							else{
								$this->Session->setFlash('Erreur de Sauvegarde');
						}
						$this->redirect('/hotel/photos');
				}
			$chambres = $this->set('chambres',$this->Session->read('HotelChambre')) ;
	}

	
	
	
	function photo_delete($id){
		if ($this->HotelPhoto->delete($id)) {
				$this->Session->setFlash('Suppression avec succees');
		}else {
			$this->Session->setFlash('Erreur de suppression');
		}
		$this->redirect('/hotel/photos');
	
	}
	
	function photos($chambre_id=null){
		$this->set('chambres',$this->Session->read('HotelChambre'));	
		$this->set('chambre_id',$chambre_id);
				$photos = $this->HotelPhoto->find('all',array('conditions'=>array('HotelPhoto.hotel_id'=>$this->hotel_id)));
		$this->set('photos',$photos);
	}
	
	
	function profile(){
		if(!empty($this->data)){
			if(!empty($this->data['Hotel']['pw'])) :
				$this->Session->write('Hotel.pw',$this->data['Hotel']['pw']);
			endif ;
			if ($this->_ValidatePass($this->hotel_id )) :
					if($this->Hotel->save($this->data)) :
						if(!empty($this->data['Hotel']['pw'])) :
							$this->Session->setFlash('Votre Nouveau mot de passe : '.$this->Session->read('Hotel.pw')) ;
						endif ;
						$this->redirect('/hotel');
					endif ;		
			endif; 
				
		}else{
			$this->data = $this->Hotel->read(null,$this->hotel_id);
		}	
	}
	
	function _ValidatePass($hotel_id){
		$this->Hotel->id = $hotel_id;
		$oldPass = $this->Hotel->field('pw') ;
		$userPass  = $this->Auth->password($this->data['Hotel']['oldpw']); 
		$ret = true;
		if($userPass  != $oldPass) {
			$this->Session->setFlash('Ancien mot de passe incorrect');
			$ret = false ;
		}
		if($this->data['Hotel']['pw']  != $this->data['Hotel']['pw2']) {
			$this->Session->setFlash('Veuillez Confirmer votre nouveau mot de passe :');
				$ret = false ;
		}	
		return $ret ;
	}
	
	
	function login() {
		$this->layout="adminlogin";
		 if( !empty($this->data)) {
			
		}
    }

    function logout() {
		$this->Session->delete('HotelChambre');
        $this->redirect($this->Auth->logout());
    }
	
	
	
	function inventaire($type,$annee,$mois){
		$this->set(compact('type','annee','mois'));
		if($type=='tarif'){
			$devise_id = $this->Session->read('Auth.Hotel.devise_id');
			$this->Hotel->Devise->id = $devise_id;
			$this->set('devise',$this->Hotel->Devise->field('name'));
		}
		$this->render(null,null,$type) ;
	}
	
	function index(){
			//	debug($this->Session->read('HotelChambre'));
	}
	 
	function info_general(){
	    $this->data= $this->Hotel->find('first',array('conditions'=>array('Hotel.id'=>$this->hotel_id)));
		$carteCredits = $this->Hotel->CarteCredit->find('list');
		$etoiles = $this->Hotel->etoiles ; 
		$this->set(compact('carteCredits','etoiles')) ;	
	} 
	
	
	
	function description(){
		$this->data= $this->Hotel->find('first',array('recursive'=>-1,'conditions'=>array('Hotel.id'=>$this->hotel_id)));
	}
	
	function hservice(){
		$this->data = $this->Hotel->find('first',
			array('contain'=>array('Hservice'),'conditions'=>array('Hotel.id'=>$this->hotel_id))) ;
		$opts=$this->Hotel->Hservice->find('list',array('recursive'=>1,'fields'=>array('Hservice.id','Hservice.name','HserviceType.name')));
		$this->set('opts',$opts);
	}
	
	function cservice($chambre_id=null){
		$this->loadModel('ChambreCservice');
		$tmpConditions = array();
		$tmpConditions['ChambreCservice.hotel_id'] = $this->hotel_id ; 
		$tmpConditions['ChambreCservice.chambre_id'] = $chambre_id ; 
		
		$tmp = $this->ChambreCservice->find('all',array('contain'=>array('Cservice'),
				'conditions'=>$tmpConditions ));
		
		foreach($tmp as $row){
			$this->data['Cservice'][] = array('id'=>$row['Cservice']['id'] ,'name'=> $row['Cservice']['name']);
		}
		
		$Cconditions = array();
		if (!is_null($chambre_id)) {
		//	$tmpIds = $this->ChambreCservice->find('all',array('recursive'=>-1,'conditions'=>array(''))) ;
		//	$Cconditions['Cservice.id NOT '] = Set::extract($tmpIds,'/ChambreCservice/cservice_id');
		//	debug($Cconditions);
		}
		
		$opts=$this->Cservice->find('list',array('conditions'=>$Cconditions,'recursive'=>1,'fields'=>array('Cservice.id','Cservice.name','CserviceType.name')));
		$this->set('opts',$opts);
		$this->set('chambres',$this->Session->read('HotelChambre'));
		$this->set('chambre_id',$chambre_id);
	}
	
	
	function extra(){
		$this->Hotel->Devise->id = $this->Session->read('Auth.Hotel.devise_id');
		$devise = $this->Hotel->Devise->field('code');
			
		$extraVals=$this->HotelExtra->find('all',array('recursive'=>-1,'conditions'=>array('HotelExtra.hotel_id'=>$this->hotel_id)));
		foreach($extraVals  as $row) : 
			$this->data['HotelExtra'][$row['HotelExtra']['extra_id']] = $row['HotelExtra'];
		endforeach ;
		$extras = $this->Extra->ExtraType->find('all',array('recursive'=>2));
			
		foreach($extras  as &$extra) : 
			foreach ($extra['Extra'] as &$row):
				foreach ($row['Eright'] as &$right):
					$right ['name'] = str_replace('$',$devise,$right ['name']) ;
				endforeach ;	
			endforeach ;	
		endforeach ;	
		
		
		$this->set('extras',$extras);
	}
	
	function saveExtra(){
		if (!empty($this->data['HotelExtra'])) :
			$vals = array();
			foreach($this->data['HotelExtra'] as $id=>$row):
				if($row['eleft_id']==6) {
					$row['val'] = 0; 
				}
				if ($row['val'] >= 0){	
					$row['hotel_id'] =  $this->hotel_id;
					$vals[]  = $row;
				}
			endforeach ;
			
			$this->HotelExtra->saveAll($vals);
		endif;
		$this->redirect($this->referer());
	}
	
	
	function saveDesc(){
		if(!empty($this->data)){
			$this->data['ChambreDescription']['hotel_id'] = $this->hotel_id ;
			$idc = $this->data['ChambreDescription']['chambre_id'];
			$idh = $this->data['ChambreDescription']['hotel_id'];
			$desfr = mysql_real_escape_string($this->data['ChambreDescription']['description']);
			$deseng = mysql_real_escape_string($this->data['ChambreDescription']['descriptioneng']);
			$desesp = mysql_real_escape_string($this->data['ChambreDescription']['descriptionesp']);

			$qoe = mysql_query("SELECT id FROM chambre_descriptions WHERE chambre_id = $idc AND hotel_id = $idh ");
			$count = mysql_num_rows($qoe);
			$id = mysql_fetch_array($qoe);
			$id = $id['id'];
			if($count > 0)
			{
				$q = mysql_query("UPDATE `chambre_descriptions` SET `description`='$desfr', `chambre_id`='$idc', `hotel_id`='$idh', `descriptioneng`='$deseng', `descriptionesp`='$desesp' WHERE id = $id");

			}
			else
			{
							$q = mysql_query("INSERT INTO `chambre_descriptions` ( `description`, `chambre_id`, `hotel_id`, `descriptioneng`, `descriptionesp`) VALUES ( '$desfr', '$idc', '$idh', '$deseng', '$desesp')");

			}

			if ($q){
				$this->Session->setFlash('Donnee sauvegarde avec succes');
			}
			else{
				$this->Session->setFlash('Erreur de Sauvegarde');
			} 
		}
		$this->redirect($this->referer());
	}
	
	function save(){
		if(!empty($this->data)){
			
			$this->data['Hotel']['id'] = $this->hotel_id ;
			if ($this->Hotel->save($this->data)){
				$this->Session->setFlash('Donnee sauvegarde avec succes');
			}
			else{
				$this->Session->setFlash('Erreur de Sauvegarde');
			} 
		}
		$this->redirect($this->referer());
	}
	
	function saveTarifs($date,$value,$chambre_id,$field='tarif',$attente = 0){
		$rows =array(); 
		$tDate = new DateTime($date);
		$nbre_days = $tDate->format('t');
		
		$countC['Inventaire.ladate >='] = $tDate->format('Y-m-d') ;
		$countC['Inventaire.ladate <='] = $tDate->format('Y-m-').$nbre_days ;
		$countC['Inventaire.hotel_id'] = $this->hotel_id ;
		$countC['Inventaire.chambre_id'] = $chambre_id ;
		
		$tmp = $this->Inventaire->find('all',array('conditions'=>$countC,'order'=>'Inventaire.ladate asc'));
		$ret = false ;
		if (!($field =='tarif')){
			if (empty($tmp)){
				echo '1 ';
				exit(1);
				$ret =true ;
			}
			
		}
		if (!$ret)	:
			for($i=1;$i<=$nbre_days;$i++) :
				 if (!empty($tmp[$i-1]['Inventaire']['id'])) {
					$row['id']	= $tmp[$i-1]['Inventaire']['id'] ;
				 }
				 
				 $row['hotel_id']	= $this->hotel_id ;
				 $row['chambre_id']	= $chambre_id ;
				 if ($field == 'dispo'){
					$row['attente'] = $attente;
				 }
				 $row[$field]	= $value ;
				 $row['ladate']	=  $tDate->format('Y-m-d');
				 $rows[] = $row ;
				 $tDate->modify("+1 day");
			endfor;
			
		
		   
			if($this->Inventaire->saveAll($rows)){
			   echo "ok" ;
			}else{
				echo '1' ;
			 }
			exit(1);
		endif;
	}
	
	
		function saveTarif($date,$value,$chambre_id,$field='tarif',$attente = 0){
			 $conditions = array();
			 $conditions['Inventaire.chambre_id'] =  $chambre_id;	
			 $conditions['Inventaire.ladate']     =  $date;
			 $conditions['Inventaire.hotel_id']   =  $this->hotel_id;
			 $this->data = $this->Inventaire->find('first',array('recursive'=>-1,'conditions'=>$conditions));
			 
			 if(!empty($this->data)){
				$this->data['Inventaire'][$field] = $value ;
				 if ($field == 'dispo'){
					$this->data['Inventaire']['attente'] = $attente;
				 }
				$this->Inventaire->save($this->data);
				echo "ok" ;
			 }else{
				echo '1' ;
			 }
			 exit(1);
		}
		
		function saveTarifCol($date,$value,$field='tarif',$attente=0){
			$conditions = array();
			$conditions['Inventaire.ladate'] =$date;
			$conditions['Inventaire.hotel_id'] = $this->hotel_id ;
			$tmp = $this->Inventaire->find('all',array('recursive'=>-1,'conditions'=>$conditions));
			$chambre = $this->Session->read('HotelChambre');
			if (count($tmp) == count($chambre)) {
				echo 1;
			}else{
				$ids = Set::extract('/Inventaire/id',$tmp);
				$fields = array();
				$fields['Inventaire.'.$field] = $value ;
				if ($field == 'dispo'){
					$fields['Inventaire.attente'] = $attente ;
				 }
				if ( $this->Inventaire->updateAll($fields,array('Inventaire.id'=>$ids))){
					echo "ok" ;
				}else{
					echo 1 ;
				} 
			} 
			//debug($this->Session->read('Auth.Hotel'));
			exit(1);
		}
		
		
	
	
	function beforeFilter(){
		parent ::beforeFilter();
		
			//Configure AuthComponent
		$this->Auth->userModel = 'Hotel';
		$this->Auth->fields = array('username' => 'login','password' => 'pw');	
        //$this->Auth->authorize = 'actions';
		
        $this->Auth->loginAction = array('controller' => 'hotel', 'action' => 'login');
        $this->Auth->logoutRedirect = array('controller' => 'hotel', 'action' => 'index');
        $this->Auth->loginRedirect = array('controller' => 'hotel', 'action' => 'info_general');
		$this->Auth->userScope = array('Hotel.active' => true);
		
		$this->hotel_id = $this->Session->read('Auth.Hotel.id');
		$hotelChambres = $this->Session->read('HotelChambre');
		if (empty($hotelChambres)) {
			$this->Session->write('HotelChambre',$this->Hotel->getChambreList($this->hotel_id));
		}
	}
	
	function beforeRender(){
		parent::beforeRender();
		$this->set('pensions',$this->Chambre->pensions) ;
		$this->set('title_for_layout','');
	}
	
	
	
}
?>