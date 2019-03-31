<?php

class PagesController extends Controller {

    var $name = 'Pages';
    var $helpers = array('Html', 'Session', 'Form', 'Front', 'Mtc');
    var $uses = array('Ville','HotelPhoto','Pay', 'Hotel', 'Chambre', 'Reservation', 'Inventaire', 'Banner', 'Featured', 'Slider', 'Promotion', 'Content', 'Guide', 'Activite','Produit','User','Achat','Resto','Reservationresto');
    var $components = array('Session', 'Mtc', 'Email');
    var $layout = 'front';
    var $layout_type = 'left';

    function demande($hotel_id, $chambre_id, $du, $au, $qte = 1) {
        $this->layout_type = 'full';
        $h = $this->Hotel->info_resa($hotel_id, $chambre_id);

        $dispo = $this->Inventaire->get_disponibilite($hotel_id, $this->Session->read('Search.du'), $this->Session->read('Search.au')
        );

        $this->set(compact('h', 'dispo', 'hotel_id', 'chambre_id', 'du', 'au', 'qte'));

        if (!empty($this->data)) :
            $this->Reservation->set($this->data);
            if ($this->Reservation->validates()) :
                $this->set('d', $this->data);
                $email = Configure::read('resa_mail');
                $this->_sendEmail('Nouvelle demande de réservation', 'demande', $email);
                $this->Session->setFlash(' Merci ! <br/>Votre demande a bien été envoyée, nous vous enverrons une réponse dans les plus brefs délais.', 'default', array('class' => 'flash_sucess'));
                $this->redirect('/');
            endif;
        endif;
    }

    function groupes() {

        $this->loadModel('Groupe');
        $this->layout_type = "full";
        $restaurations = $this->Groupe->restaurations;
        $hebergements = $this->Groupe->hebergements;
        $this->set(compact('restaurations', 'hebergements'));

        if (!empty($this->data)) :
            $this->Groupe->set($this->data);
            if ($this->Groupe->validates()) :
                $this->set('d', $this->data);
                $email = Configure::read('groupe_mail');
                $this->_sendEmail('OffreDealsHotels Groupe', 'groupe', $email);
                $this->Session->setFlash(' Merci ! <br/>Votre message a bien été envoyé, nous vous enverrons une réponse dans les plus brefs délais.', 'default', array('class' => 'flash_sucess'));

            //$this->redirect('/');
            endif;
        endif;

        //$metaDes = "Réservez vos vacances de groupes, voyage en groupe à prix bradés, incentive, seminaire, lancement de produit";
        //$this->set(compact('metaDes'));
        $metaDes = "Profitez des meilleures deals pour bénéficier d'un voyage pas cher organisé vers Marrakech et d'autres villes du Maroc.";
        $title_for_layout = "Voyage pas cher organisé vers Marrakech et d'autres villes du Maroc";
        @$metaKeys = "offredealshotels.com, hotels au maroc,hotel marrakech, hotel maroc, voyage marrakech pas cher, voyage organisé marrakech, voyage organisé maroc";
        $this->set(compact('metaDes', 'title_for_layout', 'metaKeys'));
    }
	function produits(){
		//$this->layout_type = "full";
        //$this->loadModel('Produit');
		$metaDes = "Profitez des meilleures deals pour bénéficier d'un voyage pas cher organisé vers Marrakech et d'autres villes du Maroc.";
        $title_for_layout = "Produits avec meilleurs promotions";
        @$metaKeys = "Bookingmarrakech.ma, hotels au maroc,hotel marrakech, hotel maroc, voyage marrakech pas cher, voyage organisé marrakech, voyage organisé maroc";
		
		$this->paginate['model'] = 'Produit';
			$this->paginate['Produit']['limit'] = 10;
			$this->paginate['Produit']['order'] = 'Produit.id desc';
			$produits = $this->paginate('Produit');
			
		$this->set(compact('produits','metaDes', 'title_for_layout', 'metaKeys'));
	}
	function produitsviews($id=null){
		//echo $id."dd";
		$this->layout_type = "full";
        //$this->loadModel('Produit');
        @$metaKeys = "Bookingmarrakech.ma, hotels au maroc,hotel marrakech, hotel maroc, voyage marrakech pas cher, voyage organisé marrakech, voyage organisé maroc";
		$this->set(compact('id'));
        /*if ($id == 5 or $id == 6 or $id == 4 or $id == 8) {
            $this->layout_type = "full";
        }*/
		//print_r ($this->Session->read('Devise'));
		$p=$this->Produit->read(null, $id);
		//print_r($p);
        $this->set('p', $p);
        $title_for_layout = $p['Produit']['titre'];
        $metaDes = $p['Produit']['titre'];
		$user=$this->User->read(null, 1);
		$tel1=$user['User']['tel1'];
		$tel2=$user['User']['tel2'];
		$email=$user['User']['email'];
		
		$this->set(compact('tel1','tel2','email','produits','metaDes', 'title_for_layout', 'metaKeys'));
		$test=0;
		if(isset($_POST['name']) and $_POST['name']!=""){
			$this->data['Achat']['name']=$_POST['name'];
			$this->data['Achat']['tel']=$_POST['tel'];
			$this->data['Achat']['email']=$_POST['email'];
			$this->data['Achat']['prix']=round($p['Produit']['prix']/$this->Session->read('Devise.taux'));
			$this->data['Achat']['devise']=$this->Session->read('Devise.code');
			$this->data['Achat']['produitid']=$p['Produit']['id'];
			$this->Achat->create();
			if ($this->Achat->save($this->data)){
				$test=1;
			}
		}
		$this->set("test",$test);
	}
	function restos(){
		//$this->layout_type = "full";
        //$this->loadModel('Produit');
		$metaDes = "Profitez des meilleures deals pour bénéficier d'un voyage pas cher organisé vers Marrakech et d'autres villes du Maroc.";
        $title_for_layout = "Resto et sorties avec meilleurs promotions";
        @$metaKeys = "Bookingmarrakech.ma, hotels au maroc,hotel marrakech, hotel maroc, voyage marrakech pas cher, voyage organisé marrakech, voyage organisé maroc";
		
		$this->paginate['model'] = 'Resto';
			$this->paginate['Resto']['limit'] = 10;
			$this->paginate['Resto']['order'] = 'Resto.id desc';
			$produits = $this->paginate('Resto');
		$this->set(compact('produits','metaDes', 'title_for_layout', 'metaKeys'));
	}
	function restosviews($id=null){
		//echo $id."dd";
		$this->layout_type = "full";
        //$this->loadModel('Produit');
        @$metaKeys = "Bookingmarrakech.ma, hotels au maroc,hotel marrakech, hotel maroc, voyage marrakech pas cher, voyage organisé marrakech, voyage organisé maroc";
		$this->set(compact('id'));
        /*if ($id == 5 or $id == 6 or $id == 4 or $id == 8) {
            $this->layout_type = "full";
        }*/
		//print_r ($this->Session->read('Devise'));
		$p=$this->Resto->read(null, $id);
		//print_r($p);
        $this->set('p', $p);
		$title_for_layout = $p['Resto']['titre'];
		$metaDes = $p['Resto']['titre'];
		$user=$this->User->read(null, 1);
		$tel1=$user['User']['tel1'];
		$tel2=$user['User']['tel2'];
		$email=$user['User']['email'];
		$this->set(compact('tel1','tel2','email','produits','metaDes', 'title_for_layout', 'metaKeys'));
		$test=0;
		if(isset($_POST['name']) and $_POST['name']!=""){
			$this->data['Reservationresto']['name']=$_POST['name'];
			$this->data['Reservationresto']['tel']=$_POST['tel'];
			$this->data['Reservationresto']['email']=$_POST['email'];
			$this->data['Reservationresto']['prix']=round($p['Resto']['prix']/$this->Session->read('Devise.taux'));
			$this->data['Reservationresto']['devise']=$this->Session->read('Devise.code');
			$this->data['Reservationresto']['restoid']=$p['Resto']['id'];
			$this->Reservationresto->create();
			if ($this->Reservationresto->save($this->data)){
				$test=1;
			}
		}
		$this->set("test",$test);
	}
	function blog(){
		$metaDes = "Profitez des meilleures deals pour bénéficier d'un voyage pas cher organisé vers Marrakech et d'autres villes du Maroc.";
        $title_for_layout = "Le blog officiel du bookingmarrakech.ma";
        @$metaKeys = "Bookingmarrakech.ma, hotels au maroc,hotel marrakech, hotel maroc, voyage marrakech pas cher, voyage organisé marrakech, voyage organisé maroc";
		
		//$contents = $this->Content->find('all');
		
			//$c = $this->_catchHotelSearch();
			//$c['Hotel.hotel_type_id'] = array(1);
			$this->paginate['model'] = 'Content';
			$this->paginate['Content']['limit'] = 10;
			$this->paginate['Content']['order'] = 'Content.id desc';
			$contents = $this->paginate('Content');
			
		$this->set(compact('contents','metaDes', 'title_for_layout', 'metaKeys'));
	}
    function contact() {
        $this->loadModel('Contact');
        $this->layout_type = "full";
        
          //$this->modelClass = "Contact";
          //App::import('Component', 'RecaptchaPlugin.Recaptcha');
          //$this->Recaptcha = new RecaptchaComponent();
          //debug($this->Recaptcha);
         

         // $this->helpers[] = 'RecaptchaPlugin.Recaptcha';
          
        
      
       $this->Contact->attach('Captcha.Validation');
        
        if (!empty($this->data)) :
            $this->Contact->set($this->data);
            if ($this->Contact->validates()) :
                $this->set('data', $this->data);
                $email = Configure::read('resa_mail');
                $this->_sendEmail('OffreDealsHotels Contact', 'contact', $email);
                $this->Session->setFlash(' Merci ! <br/>Votre message a bien été envoyé, nous vous enverrons une réponse dans les plus brefs délais.', 'default', array('class' => 'flash_sucess'));
            else:
                $this->Session->setFlash('Erreur de validation', 'default', array('class' => 'flash_sucess'));
            endif;

        endif;
    }

    function contact_ajouter() {
        die("ss");
    }

    function contactEta() {
        echo $this->data['Contact']['email_eta'];
        $this->loadModel('Contact');
        if (!empty($this->data)) :
            $this->Contact->set($this->data);
            if ($this->Contact->validates()) :
                $this->set('d', $this->data);
                $email = Configure::read('resa_mail');
                /*  $this->_sendEmail('OffreDealsHotels Contact', 'contact',$email); */
                $this->_sendEmail('OffreDealsHotels Contact', 'contact', $email);


            endif;
        endif;
        $this->autoRender = false;
    }

    function affiliation() {
        $this->loadModel('Affiliation');
        $this->layout_type = "full";
        if (!empty($this->data)) :
            $this->Affiliation->set($this->data);
            if ($this->Affiliation->validates()) :
                $this->set('d', $this->data);
                $email = Configure::read('sales_mail');
                $this->_sendEmail('OffreDealsHotels Affiliation', 'affiliation', $email);
                $this->Session->setFlash(' Merci ! <br/>Votre message a bien été envoyé, nous vous enverrons une réponse dans les plus brefs délais.', 'default', array('class' => 'flash_sucess'));

            //$this->redirect('/');
            endif;
        endif;
    }

    function theevents() {
        $this->loadModel('Event');
        $this->layout_type = "full";
        if (!empty($this->data)) :
            $this->Event->set($this->data);
            if ($this->Event->validates()) :
                $this->set('d', $this->data);
                $email = Configure::read('event_mail');
                $this->_sendEmail('OffreDealsHotels Event', 'event', $email);
                $this->Session->setFlash(' Merci ! <br/>Votre message a bien été envoyé, nous vous enverrons une réponse dans les plus brefs délais.', 'default', array('class' => 'flash_sucess'));
            //Votre message a bien été envoyé, nous vous enverrons une réponse dans les plus brefs délais.
            //$this->redirect('/');
            endif;
        endif;
    }

    function events() {
        $this->layout_type = "full";
        //$pays = $this->Pay->find('list');
        //$this->set(compact('pays'));
        //$metaDes = "Evenementiel à Marrakech au maroc, soirées, mariage, baptême, anniversaire, seminaire, voyage incentive";
        //$this->set(compact('metaDes'));
        $metaDes = "Bénéficiez d'une meilleure organisation de mariage à Marrakech avec les professionnels de l'événementiel au Maroc";
        $title_for_layout = "Organisation mariage Marrakech avec les pros de l'événementiel";
        @$metaKeys = "offredealshotels.com, hotels au maroc,mariage maroc, organisation mariage marrakech, mariage marrakech, traiteur mariage marrakech";
        $this->set(compact('metaDes', 'title_for_layout', 'metaKeys'));
    }

    function promotions($id = null) {
        if ($id == 4 or $id == 0) {
            $this->layout_type = "left";
            $promotions = $this->Promotion->find('all', array('conditions' => array('Promotion.type' => $id), 'order' => 'rand()', 'group' => 'Promotion.hotel_id', 'limit' => 5, 'contain' => array('Hotel', 'Hotel.Devise', 'Hotel.Ville', 'Chambre')));
            $sliders = $this->Slider->find('all', array(
                'conditoins' => array('Slider.acccueil' => true),
                'contain' => array('Hotel'),
                'fields' => array('Slider.*', 'Hotel.id', 'Hotel.name')
                    ));
            $banner = $this->Banner->find('first', array('conditions' => array('Banner.action' => "home")));
			
			$c = $this->_catchHotelSearch();
			$c['Hotel.hotel_type_id'] = array(1);
			$this->paginate['model'] = 'Hotel';
			$this->paginate['Hotel']['limit'] = 10;
			$this->paginate['Hotel']['conditions'] = $c;
			$this->paginate['Hotel']['order'] = 'rand()';
			$hotels = $this->paginate('Hotel');
            $this->set(compact('promotions', 'sliders', 'banner', 'hotels'));
        } else {
            $this->redirect("http://www.offredealshotels.com/booking");
        }
    }

    function content($id) {
        $this->set(compact('id'));
        if ($id == 5 or $id == 6 or $id == 4 or $id == 8) {
            $this->layout_type = "full";
        }
        $this->set('p', $this->Content->read(null, $id));
        //$metaDes = "Location de voiture au Maroc et dans le monde entier online, véhicule pas cher Maroc, 4X4, courte ou longues durée, voiture avec ou sans chauffeur à des bons prix, promo à ne pas manquer.";
        //$this->set(compact('metaDes'));
        $metaDes = "Profitez des meilleures deals pour Location de voiture à Marrakech, Agadir et Casablanca ainsi que d'autres villes au Maroc.";
        $title_for_layout = "Agence de Location voiture à Marrakech, Agadir et Casablanca";
        @$metaKeys = "offredealshotels.com, hotels au maroc,location voiture marrakech, location voiture marrakech aéroport, location voiture agadir, location voiture casablanca";
        $this->set(compact('metaDes', 'title_for_layout', 'metaKeys'));
    }

  
    function activite() {
        $this->layout_type = 'right';
        $c = array();

        if (!empty($this->data['Activite']['ActiviteCategory'])) {
            $c['Activite.activite_category_id'] = $this->data['Activite']['ActiviteCategory'];
        }
        if (!empty($this->data['Activite']['ville_id'])) {
            $c['Activite.ville_id'] = $this->data['Activite']['ville_id'];
        }


        $this->paginate['model'] = 'Activite';
        $this->paginate['Activite']['limit'] = 10;
        $this->paginate['Activite']['conditions'] = $c;
        $activities = $this->paginate('Activite');

        $categories = $this->Activite->ActiviteCategory->find('list');
        $villes = $this->Activite->Ville->find('list');
        $this->set(compact('categories', 'activities', 'villes'));

        $metaDes = "Informations pratiques et touristiques pour un séjour au Maroc : restaurants, hôtels, spa et bien être, art de vivre & shopping";
		$title_for_layout = "Informations pratiques et touristiques pour un séjour au Maroc";
		@$metaKeys = "offredealshotels.com, hotels au maroc,maroc, marrakech, tourisme maroc, Informations pratiques, Informations touristiques";
        $this->set(compact('metaDes', 'title_for_layout', 'metaKeys'));
        
    }

    function guide($id = null) {
        $this->layout_type = 'right';
        $guides = $this->Guide->find('list');
        if ($id) {
            $this->set('g', $this->Guide->read(null, $id));
        }
        $this->set(compact('guides', 'id'));
        $metaDes = "retrouvez toutes les informations pour préparer votre voyage au Maroc, villes du Maroc,";
        $this->set(compact('metaDes'));
    }

    function vols() {

        //$metaDes = "Billet avion – Vol : Réservez votre billet d'avion en ligne, promo jusqu’à -70%, Réservez à l'avance ou en dernière minute votre weekend, vols pas cher maroc";
        //$this->set(compact('metaDes'));
        $metaDes = "Profitez des meilleures deals pour bénéficier des vols pas cher entre Paris et Marrakech ainsi que d'autres villes au Maroc.";
        $title_for_layout = "Les meilleures deals sur des vols pas cher entre Paris et Marrakech";
        @$metaKeys = "offredealshotels.com, hotels au maroc,Vol marrakech pas cher, vol pas cher marrakech, paris marrakech pas cher";
        $this->set(compact('metaDes', 'title_for_layout', 'metaKeys'));
    }

    function home() {
        $featureds = $this->Featured->find('all', array('contain' => array('Hotel', 'Hotel.Ville','Hotel.HotelPhoto', 'Hotel.Devise')));
        $sliders = $this->Slider->find('all', array(
            'conditoins' => array('Slider.acccueil' => true),
            'contain' => array('Hotel', 'Hotel.Ville'),
            'fields' => array('Slider.*', 'Hotel.id', 'Hotel.name', 'Hotel.nbre_etoiles')
                ));
        $cond = array();
        $cond['Promotion.au >='] = date('Y-m-d');
        $cond['Hotel.active'] = true;
        $promotions = $this->Promotion->find('all', array('conditions' => $cond, 'order' => 'rand()', 'group' => 'Promotion.hotel_id', 'limit' => 5, 'contain' => array('Hotel','Hotel.HotelPhoto', 'Hotel.Devise', 'Hotel.Ville', 'Chambre')));
        $minPrices = array();
        foreach ($promotions as $promotion) {
            $this->_disponibilite($promotion['Promotion']['hotel_id']);
            $tmp = $this->viewVars['minPrices'];
            $minPrices[$promotion['Promotion']['hotel_id']] =  min(array_values($tmp));
        }
        $metaDes = "Jusqu'à 60% de réduction - Bénéficiez des meilleurs Deals pour passer vos vacances dans un hôtel, riad, villa ou appartement au Maroc.";
        $title_for_layout = 'Reservation hotel, riad, villa ou appartement au Maroc';
        @$metaKeys = "offredealshotels.com, hotels au maroc,hotel marrakech, hotel maroc, hôtel marrakech, hotel maroc, riad maroc, riad marrakech, location villa marrakech, location appartement, voyage organisé, mariage maroc, Vol marrakech, location voiture maroc";
        $this->set(compact('metaDes', 'title_for_layout', 'metaKeys'));
        //debug($sliders); exit;
		
			$c = $this->_catchHotelSearch();
			$c['Hotel.hotel_type_id'] = array(1);
			$this->paginate['model'] = 'Hotel';
			$this->paginate['Hotel']['limit'] = 10;
			$this->paginate['Hotel']['conditions'] = $c;
			$this->paginate['Hotel']['order'] = 'rand()';
			$hotels = $this->paginate('Hotel');
			
        $this->set(compact('featureds', 'promotions', 'sliders', 'minPrices', 'hotels'));
    }

    function mtc($id = null) {
        $this->layout = 'simple';
        $this->Reservation->id = $id;
        $r = $this->Reservation->read(null, $id);
//		debug($r);
//		die();
        $this->set('r', $r);
    }

    function binga($id = null) {
        $this->layout = 'simple';
        $this->Reservation->id = $id;
        $r = $this->Reservation->read(null, $id);
//		debug($r);
//		die();
        $this->set('r', $r);
    }
    function _catchHotelSearch() {
        $c = array();
        $c['Hotel.active'] = true;

        if (!empty($this->data)) :
            $this->search(false);
        else :
            $this->data['Search']['du'] = $this->Session->read('Search.du');
            $this->data['Search']['au'] = $this->Session->read('Search.au');
        endif;

        if ($this->Session->check('Search.du')) :
            $qte = empty($this->data['Search']['qte']) ? 1 : $this->data['Search']['qte'] + 1;
            $du = $this->Session->read('Search.du');
            $au = $this->Session->read('Search.au');
            $ids = $this->Inventaire->hotels_dispo($du, $au, $qte);
            $c['Hotel.id'] = $ids;
        endif;

        if (!empty($this->data['Search']['ville_id'])) :
            $c['Hotel.ville_id'] = $this->data['Search']['ville_id'];
        endif;

        if (!empty($this->data['Search']['ville_id'])) :
            $c['Hotel.ville_id'] = $this->data['Search']['ville_id'];
        endif;

        if (!empty($this->data['Search']['pay_id'])) :
            $c['Hotel.pay_id'] = $this->data['Search']['pay_id'];
        endif;

        if (!empty($this->data['Search']['name'])) :
            $c['Hotel.name LIKE'] = "%" . $this->data['Search']['name'] . "%";
        endif;

        if (!empty($this->data['Search']['HotelType'])) :
            $c['Hotel.hotel_type_id'] = $this->data['Search']['HotelType'];
        endif;

        if (!empty($this->data['Search']['prix_min'])) :
            $prix_min = $this->data['Search']['prix_min'];
            $curTaux = $this->Session->read('Devise.taux');
            $c[] = "Hotel.hotelPrix*Devise.taux/$curTaux >=$prix_min";
        endif;
        if (!empty($this->data['Search']['prix_max'])) :
            $prix_max = $this->data['Search']['prix_max'];
            $curTaux = $this->Session->read('Devise.taux');
            $c[] = "Hotel.hotelPrix*Devise.taux/$curTaux <=$prix_max";
        endif;

        if (!empty($this->data['Search']['nbre_etoiles_h'])) :
            $c['Hotel.nbre_etoiles'] = $this->data['Search']['nbre_etoiles_h'];
        endif;

        if (!empty($this->data['Search']['nbre_etoiles_r'])) :
            if ($this->data['Search']['nbre_etoiles_r'][0] == 2) {
                $c['Hotel.nbre_etoiles'] = array(1, 2);
            }
            if ($this->data['Search']['nbre_etoiles_r'][0] == 2) {
                $c['Hotel.nbre_etoiles'] = array(1, 2);
            } else {
                $c['Hotel.nbre_etoiles'] = $this->data['Search']['nbre_etoiles_r'];
            }
        endif;

        if (!empty($this->data['Search']['name'])) :
            $c['Hotel.name LIKE'] = "%" . $this->data['Search']['name'] . "%";
        endif;

        return $c;
    }

    function etablissement($etablissementIds=array()) {
        $c = $this->_catchHotelSearch();
        $this->paginate['model'] = 'Hotel';
        $this->paginate['Hotel']['limit'] = 10;
        $this->paginate['Hotel']['conditions'] = $c;
        
        if($etablissementIds === false) {
            $hotels = array();
        }
        else if($etablissementIds) {
            $this->paginate['Hotel']['conditions']['Hotel.id'] = $etablissementIds;
            $hotels = $this->paginate('Hotel');
        }
        else {
            $hotels = $this->paginate('Hotel');
        }
        
        $pageTitle = 'Hotels,riads,villas,apparts..';
        $sliders = $this->Slider->find('all', array(
            'contain' => array('Hotel'),
            'fields' => array('Slider.*', 'Hotel.id', 'Hotel.name')
         ));

        $this->set(compact('hotels', 'pageTitle', 'sliders'));
        $this->render(null, null, 'hotels');
    }
    
    function exclusivite() {
        $this->loadModel('HotelChambre');
		$etablissementIds = array();
        $tmp = $this->HotelChambre->find('all', array(
            'fields' => array('HotelChambre.hotel_id'),
            'conditions' => array(
                'HotelChambre.chambre_id' => 25
            )
        ));
        foreach ($tmp as $value) {
            $etablissementIds[] = $value['HotelChambre']['hotel_id'];
        }
        //debug($etablissementIds); die;
        if(empty($etablissementIds)) {
            $etablissementIds = false;
        }
		$this->etablissement($etablissementIds);
	}
    
    function all_inclusive() {
        $this->loadModel('HotelChambre');
		$etablissementIds = array();
        $tmp = $this->HotelChambre->find('all', array(
            'fields' => array('HotelChambre.hotel_id'),
            'conditions' => array(
                'HotelChambre.pension' => 5
            )
        ));
        foreach ($tmp as $value) {
            $etablissementIds[] = $value['HotelChambre']['hotel_id'];
        }
        //debug($etablissementIds); die;
        if(empty($etablissementIds)) {
            $etablissementIds = false;
        }
		$this->etablissement($etablissementIds);
	}
    	function riadessaouira() {
$metaDes = "la liste des riads a essaouira, OffreDealsHotels a selectionner pour vous des riads de luxe pas cher dans toute la region de essaouira ";
        $title_for_layout = 'riad essaouira - liste des riads a essaouira';
        @$metaKeys = "offredealshotels.com, hotels au maroc,riad, essaouira, riad essaouira, mogador, riyad essaouira, riad luxe essaouira, riad luxe pas cher essaouira, riad maroc, voyage essaouira";
        $this->set(compact('metaDes', 'title_for_layout', 'metaKeys'));
		$this->data = array();
		$this->data['Search']['HotelType']	= '5';
		$this->data['Search']['adulte'] = 0;
		$this->data['Search']['au'] = '';
		$this->data['Search']['du'] = '';
		$this->data['Search']['name'] = '';
		$this->data['Search']['pay_id'] = 1;
		$this->data['Search']['prix_max'] = '';
		$this->data['Search']['prix_min'] = '';
		$this->data['Search']['qte'] = 0;
		$this->data['Search']['ville_id'] = 93;
		$this->etablissement();
	}
    function deals() {
    $metaDes = "les meilleurs deals des hotels a marrakech et dans tout le maroc, OffreDealsHotels a negocier pour vous les meilleurs deals dans toute le maroc avec des réductions incroyables jusqu'a -70%";
        $title_for_layout = 'deal hotel marrakech - les meilleurs deals au marrakech';
        @$metaKeys = "offredealshotels.com, hotels au maroc,hotel deal, deal marrakech, marrakech, hotel deal  marrakech, deal riad marrakech, deal maroc, hotel pas cher marrakech, deal vacances, deal maroc, hotel luxe pas cher marrakech, riad luxe pas cher marrakech, riad pas cher maroc, hotel pas cher maroc, deal maroc";
        $this->set(compact('metaDes', 'title_for_layout', 'metaKeys'));
		$this->data = array();
		$this->data['Search']['HotelType']	= '';
		$this->data['Search']['adulte'] = 0;
		$this->data['Search']['au'] = '';
		$this->data['Search']['du'] = '';
		$this->data['Search']['name'] = '';
		$this->data['Search']['pay_id'] = 1;
		$this->data['Search']['prix_max'] = '';
		$this->data['Search']['prix_min'] = '';
		$this->data['Search']['qte'] = 0;
		$this->data['Search']['ville_id'] = 139;
		$this->etablissement();
	}
	 function petitbudget() {
    $metaDes = "les offres les moins cher des hotels a marrakech et dans tout le maroc, OffreDealsHotels vous propose des offres correspondant a tout le monde";
        $title_for_layout = 'hotel petit budget - les hotels les moins cher au maroc';
        @$metaKeys = "offredealshotels.com, hotels au maroc,hotel petit budget, hotel deal  marrakech, deal riad marrakech, hotel petit budget maroc, hotel moins cher marrakech, riad pas cher, hotel marrakech pas cher, hotel maroc pas cher, hotel luxe pas cher marrakech, riad luxe pas cher marrakech, riad pas cher maroc";
        $this->set(compact('metaDes', 'title_for_layout', 'metaKeys'));
		$this->data = array();
		$this->data['Search']['HotelType']	= '';
		$this->data['Search']['adulte'] = 0;
		$this->data['Search']['au'] = '';
		$this->data['Search']['du'] = '';
		$this->data['Search']['name'] = '';
		$this->data['Search']['pay_id'] = 1;
		$this->data['Search']['prix_max'] = '400.00';
		$this->data['Search']['prix_min'] = '';
		$this->data['Search']['qte'] = 0;
		$this->data['Search']['ville_id'] = '';
		$this->etablissement();
	}
function marrakech() {
$metaDes = "la liste des hotels a marrakech, OffreDealsHotels a selectionner pour vous des riads et hotels dans toute la region de marrakech ";
        $title_for_layout = 'hotel marrakech - liste des hotels a marrakech';
        @$metaKeys = "offredealshotels.com, hotels au maroc,hotel, marrakech, hôtel marrakech, hotel marrakech, riad marrakech, hotel luxe marrakech, riad luxe marrakech, riad pas cher, hotel pas cher marrakech, hotel maroc";
        $this->set(compact('metaDes', 'title_for_layout', 'metaKeys'));
$this->data = array();
$this->data['Search']['HotelType']	= '';
$this->data['Search']['adulte'] = 0;
$this->data['Search']['au'] = '';
$this->data['Search']['du'] = '';
$this->data['Search']['name'] = '';
$this->data['Search']['pay_id'] = 1;
$this->data['Search']['prix_max'] = '';
$this->data['Search']['prix_min'] = '';
$this->data['Search']['qte'] = 0;
$this->data['Search']['ville_id'] = 91;
$this->etablissement();


}
function riadmarrakech() {
$metaDes = "la liste des riads a marrakech, OffreDealsHotels a selectionner pour vous des riads de luxe pas cher dans toute la region de marrakech avec des réductions incroyables";
        $title_for_layout = 'riad marrakech - liste des riadss a marrakech';
        @$metaKeys = "offredealshotels.com, hotels au maroc,riad, marrakech, ryad, marrakesh, riad marrakech, ryad marrakech, riad marrakesh, riad luxe marrakech, riad pas cher, riad maroc";
        $this->set(compact('metaDes', 'title_for_layout', 'metaKeys'));
$this->data = array();
$this->data['Search']['HotelType']	= '5';
$this->data['Search']['adulte'] = 0;
$this->data['Search']['au'] = '';
$this->data['Search']['du'] = '';
$this->data['Search']['name'] = '';
$this->data['Search']['pay_id'] = 1;
$this->data['Search']['prix_max'] = '';
$this->data['Search']['prix_min'] = '';
$this->data['Search']['qte'] = 0;
$this->data['Search']['ville_id'] = 91;
$this->etablissement();

}
function appartementmarrakech() {
$metaDes = "la liste des appartement a marrakech, OffreDealsHotels a selectionner pour vous des appartements de luxe pas cher pour votre séjour dans toute la region de marrakech avec des reductions incroyables ";
        $title_for_layout = 'appartement a marrakech - liste des appartements a marrakech';
        @$metaKeys = "offredealshotels.com, hotels au maroc,appart, appartement, marrakech, marrakesh, appartement marrakech, appart marrakech, appart marrakesh, appartement luxe marrakech, appart luxe marrakech, appartement pas cher, appartement pas cher marrakech, appartement haut atlas, appartement atlas, appartement maroc";
        $this->set(compact('metaDes', 'title_for_layout', 'metaKeys'));
$this->data = array();
$this->data['Search']['HotelType']	= '4';
$this->data['Search']['adulte'] = 0;
$this->data['Search']['au'] = '';
$this->data['Search']['du'] = '';
$this->data['Search']['name'] = '';
$this->data['Search']['pay_id'] = 1;
$this->data['Search']['prix_max'] = '';
$this->data['Search']['prix_min'] = '';
$this->data['Search']['qte'] = 0;
$this->data['Search']['ville_id'] = 91;
$this->etablissement();
}
function riadfes() {
$metaDes = "la liste des riads a fes, OffreDealsHotels a selectionner pour vous des riads de luxe pas cher  dans toute la region de fes avec des réductions incroyables";
        $title_for_layout = 'riads a fes - liste des riads a fes';
        @$metaKeys = "offredealshotels.com, hotels au maroc,riad, ryad, fes, riad fes, ryad fes, riad fez, riad luxe fes, ryad luxe fes, riad pas cher, riad pas cher fes, hotel moulay yacoub, appartement moulay yacoub, riad maroc";
        $this->set(compact('metaDes', 'title_for_layout', 'metaKeys'));
$this->data = array();
$this->data['Search']['HotelType']	= '5';
$this->data['Search']['adulte'] = 0;
$this->data['Search']['au'] = '';
$this->data['Search']['du'] = '';
$this->data['Search']['name'] = '';
$this->data['Search']['pay_id'] = 1;
$this->data['Search']['prix_max'] = '';
$this->data['Search']['prix_min'] = '';
$this->data['Search']['qte'] = 0;
$this->data['Search']['ville_id'] = 95;
$this->etablissement();


}
function appartementfes() {
$metaDes = "la liste des appartement a fes, OffreDealsHotels a selectionner pour vous des appartements de luxe pas cher pour votre séjour dans toute la region de fes avec des prix trés raisonables ";
        $title_for_layout = 'appartement a fes - liste des appartements a fes';
        @$metaKeys = "offredealshotels.com, hotels au maroc,appart, appartement, fes, appartement fes, appart fes, appart fez, appartement luxe fes, appart luxe fes, appartement pas cher, appartement pas cher fes, appartement sidi harazem, appartement moulay yacoub, appartement maroc";
        $this->set(compact('metaDes', 'title_for_layout', 'metaKeys'));
$this->data = array();
$this->data['Search']['HotelType']	= '4';
$this->data['Search']['adulte'] = 0;
$this->data['Search']['au'] = '';
$this->data['Search']['du'] = '';
$this->data['Search']['name'] = '';
$this->data['Search']['pay_id'] = 1;
$this->data['Search']['prix_max'] = '';
$this->data['Search']['prix_min'] = '';
$this->data['Search']['qte'] = 0;
$this->data['Search']['ville_id'] = 95;
$this->etablissement();

}
function casablanca() {
$metaDes = "la liste des hotels a casablanca, OffreDealsHotels a selectionner pour vous des riads et hotels a casablanca avec des reductions jusqu'a -60%";
        $title_for_layout = 'hotel casablanca - liste des hotels a casablanca';
        @$metaKeys = "offredealshotels.com, hotels au maroc,hotel, casablanca, hôtel casablanca, hotel casablanca, hotel luxe casablanca, riad casablanca, hotel maroc, salon casablanca, affaires casablanca";
        $this->set(compact('metaDes', 'title_for_layout', 'metaKeys'));
		$this->data = array();
		$this->data['Search']['HotelType']	= '';
		$this->data['Search']['adulte'] = 0;
		$this->data['Search']['au'] = '';
		$this->data['Search']['du'] = '';
		$this->data['Search']['name'] = '';
		$this->data['Search']['pay_id'] = 1;
		$this->data['Search']['prix_max'] = '';
		$this->data['Search']['prix_min'] = '';
		$this->data['Search']['qte'] = 0;
		$this->data['Search']['ville_id'] = 98;
		$this->etablissement();
	}
	
function agadir() {
$metaDes = "la liste des hotels a agadir, OffreDealsHotels a selectionner pour vous des riads et hotels dans toute la region d'agadir ";
        $title_for_layout = 'hôtels a agadir - reservez votre hotel a agadir';
        @$metaKeys = "offredealshotels.com, hotels au maroc,hotel, agadir, hôtel agadir, hotel luxe agadir, plage agadir, hotel agadir, riad agadir, hotel maroc, voyage agadir, surf agadir";
         $this->set(compact('metaDes', 'title_for_layout', 'metaKeys'));
		$this->data = array();
		$this->data['Search']['HotelType']	= '';
		$this->data['Search']['adulte'] = 0;
		$this->data['Search']['au'] = '';
		$this->data['Search']['du'] = '';
		$this->data['Search']['name'] = '';
		$this->data['Search']['pay_id'] = 1;
		$this->data['Search']['prix_max'] = '';
		$this->data['Search']['prix_min'] = '';
		$this->data['Search']['qte'] = 0;
		$this->data['Search']['ville_id'] = 94;
		$this->etablissement();
	}
function tanger() {
$metaDes = "la liste des hotels a tanger, OffreDealsHotels a selectionner pour vous des riads et hotels dans toute la region de tanger ";
        $title_for_layout = 'hotel tanger - liste des hotels a tanger';
        @$metaKeys = "offredealshotels.com, hotels au maroc,hotel, tanger, hôtel tanger, hotel luxe tanger, plage tanger, hotel tanger, hotel nord maroc, hotel maroc, voyage tanger, surf tanger";
         $this->set(compact('metaDes', 'title_for_layout', 'metaKeys'));
		$this->data = array();
		$this->data['Search']['HotelType']	= '';
		$this->data['Search']['adulte'] = 0;
		$this->data['Search']['au'] = '';
		$this->data['Search']['du'] = '';
		$this->data['Search']['name'] = '';
		$this->data['Search']['pay_id'] = 1;
		$this->data['Search']['prix_max'] = '';
		$this->data['Search']['prix_min'] = '';
		$this->data['Search']['qte'] = 0;
		$this->data['Search']['ville_id'] = 96;
		$this->etablissement();
	}
function essaouira() {
$metaDes = "la liste des hotels a essaouira, OffreDealsHotels a selectionner pour vous des riads et hotels dans toute la region de essaouira ";
        $title_for_layout = 'hotel essaouira - liste des hotels a essaouira';
        @$metaKeys = "offredealshotels.com, hotels au maroc,hotel, essaouira, hôtel essaouira, mogador, hotel essaouira, riad essaouira, hotel luxe essaouira, riad luxe essaouira, hotel maroc, voyage essaouira";
        $this->set(compact('metaDes', 'title_for_layout', 'metaKeys'));
		$this->data = array();
		$this->data['Search']['HotelType']	= '';
		$this->data['Search']['adulte'] = 0;
		$this->data['Search']['au'] = '';
		$this->data['Search']['du'] = '';
		$this->data['Search']['name'] = '';
		$this->data['Search']['pay_id'] = 1;
		$this->data['Search']['prix_max'] = '';
		$this->data['Search']['prix_min'] = '';
		$this->data['Search']['qte'] = 0;
		$this->data['Search']['ville_id'] = 93;
		$this->etablissement();
	}


function fes() {
$metaDes = "la liste des hotels a fes, OffreDealsHotels a selectionner pour vous des riads et hotels dans toute la region de fes ";
        $title_for_layout = 'hotels a fes - liste des hotels a fes';
        @$metaKeys = "offredealshotels.com, hotels au maroc,hotel, fes, hôtel fes, hotel fes, riad fes, hotel luxe fes, riad luxe fes, riad pas cher, hotel pas cher fes, hotel moulay yacoub, appartement moulay yacoub, hotel maroc";
        $this->set(compact('metaDes', 'title_for_layout', 'metaKeys'));
$this->data = array();
$this->data['Search']['HotelType']	= '';
$this->data['Search']['adulte'] = 0;
$this->data['Search']['au'] = '';
$this->data['Search']['du'] = '';
$this->data['Search']['name'] = '';
$this->data['Search']['pay_id'] = 1;
$this->data['Search']['prix_max'] = '';
$this->data['Search']['prix_min'] = '';
$this->data['Search']['qte'] = 0;
$this->data['Search']['ville_id'] = 95;
$this->etablissement();


}
    function villas_appart() {
        $c = $this->_catchHotelSearch();
        $c['Hotel.hotel_type_id'] = array(6);
        $this->paginate['model'] = 'Hotel';
        $this->paginate['Hotel']['limit'] = 10;
        $this->paginate['Hotel']['conditions'] = $c;
        $this->paginate['Hotel']['order'] = 'rand()';
        $hotels = $this->paginate('Hotel');
        //$pageTitle = 'Villas-Appart';
        $sliders = $this->Slider->find('all', array(
            'conditions' => array('Slider.appart' => true),
            'contain' => array('Hotel'),
            'fields' => array('Slider.*', 'Hotel.id', 'Hotel.name')
                ));
        $this->set(compact('hotels', /*'pageTitle',*/ 'sliders'));
        
        $metaDes = "Profitez des meilleures deals pour location de villa au Maroc à des prix pas cher pour passer votre séjour au Maroc.";
        $title_for_layout = "Réservation ou location pas cher de villa à Marrakech et Agadir";
        @$metaKeys = "offredealshotels.com, hotels au maroc,villa marrakech, location villa marrakech, location villa agadir, location villa marrakech pas cher";
        $this->set(compact('metaDes', 'title_for_layout', 'metaKeys'));
        
        $this->render(null, null, 'hotels');
        //$metaDes = "Location villa en exclusivité, villa palmeraie, villa marrakech, appartement marrakech, appartement haut standing, appartement pas cher, villa avec piscine, villa luxe, villa pas cher";
        //$this->set(compact('metaDes'));
    }
    
    function villas() {
        $c = $this->_catchHotelSearch();
        $c['Hotel.hotel_type_id'] = array(10);
        $this->paginate['model'] = 'Hotel';
        $this->paginate['Hotel']['limit'] = 10;
        $this->paginate['Hotel']['conditions'] = $c;
        $this->paginate['Hotel']['order'] = 'rand()';
        $hotels = $this->paginate('Hotel');
        //$pageTitle = 'Villas-Appart';
        $sliders = $this->Slider->find('all', array(
            'conditions' => array('Slider.appart' => true),
            'contain' => array('Hotel'),
            'fields' => array('Slider.*', 'Hotel.id', 'Hotel.name')
                ));
        $this->set(compact('hotels', /*'pageTitle',*/ 'sliders'));
        
        $metaDes = "Profitez des meilleures deals pour location d'appartement à Marrakech, Agadir, Tetouan et Martil pour passer des bons vacances au Maroc.";
        $title_for_layout = "location vacances d'appartement à Marrakech, Agadir, Tetouan et Martil au Maroc";
        @$metaKeys = "offredealshotels.com, hotels au maroc,hotel maroc, appart marrakech, location appartement marrakech, location appartement martil, location appartement tetouan, location vacances marrakech, location vacances agadir";
        $this->set(compact('metaDes', 'title_for_layout', 'metaKeys'));
        
        $this->render(null, null, 'hotels');
        //$metaDes = "Location villa en exclusivité, villa palmeraie, villa marrakech, appartement marrakech, appartement haut standing, appartement pas cher, villa avec piscine, villa luxe, villa pas cher";
        //$this->set(compact('metaDes'));
    }
	
	function loisirs() {
        $c = $this->_catchHotelSearch();
        $c['Hotel.hotel_type_id'] = array(4);
        $this->paginate['model'] = 'Hotel';
        $this->paginate['Hotel']['limit'] = 10;
        $this->paginate['Hotel']['conditions'] = $c;
        $this->paginate['Hotel']['order'] = 'rand()';
        $hotels = $this->paginate('Hotel');
        //$pageTitle = 'Villas-Appart';
        $sliders = $this->Slider->find('all', array(
            'conditions' => array('Slider.appart' => true),
            'contain' => array('Hotel'),
            'fields' => array('Slider.*', 'Hotel.id', 'Hotel.name')
                ));
        $this->set(compact('hotels', /*'pageTitle',*/ 'sliders'));
        
        $metaDes = "Profitez des meilleures deals pour location d'appartement à Marrakech, Agadir, Tetouan et Martil pour passer des bons vacances au Maroc.";
        $title_for_layout = "location vacances d'appartement à Marrakech, Agadir, Tetouan et Martil au Maroc";
        @$metaKeys = "offredealshotels.com, hotels au maroc,hotel maroc, appart marrakech, location appartement marrakech, location appartement martil, location appartement tetouan, location vacances marrakech, location vacances agadir";
        $this->set(compact('metaDes', 'title_for_layout', 'metaKeys'));
        
        $this->render(null, null, 'hotels');
        //$metaDes = "Location villa en exclusivité, villa palmeraie, villa marrakech, appartement marrakech, appartement haut standing, appartement pas cher, villa avec piscine, villa luxe, villa pas cher";
        //$this->set(compact('metaDes'));
    }

    function hotels() {
        $c = $this->_catchHotelSearch();
        $c['Hotel.hotel_type_id'] = array(1);
        $this->paginate['model'] = 'Hotel';
        $this->paginate['Hotel']['limit'] = 10;
        $this->paginate['Hotel']['conditions'] = $c;
        $this->paginate['Hotel']['order'] = 'rand()';
        $hotels = $this->paginate('Hotel');
        //$pageTitle = 'Hôtels';
        $sliders = $this->Slider->find('all', array(
            'conditions' => array('Slider.hotel' => true),
            'contain' => array('Hotel'),
            'fields' => array('Slider.*', 'Hotel.id', 'Hotel.name')
                ));
        $this->set(compact('hotels', /*'pageTitle',*/ 'sliders'));
        //$metaDes = "Hotel de charme, hotel pas cher à Marrakech, hotel de luxe à Marrakech, hotel design à Marrakech, hotel de charme à Marrakech,";
        //$this->set(compact('metaDes'));
        $metaDes = "Profitez des meilleures deals sur les hôtels de luxe au maroc à des prix pas cher pour passer vos vacances au Maroc.";
        $title_for_layout = 'Reservez un hotel de luxe pas cher a Marrakech ou Agadir';
        @$metaKeys = "offredealshotels.com, hotels au maroc,hotel marrakech, hotel maroc, hotel agadir, booking maroc, booking marrakech, hotel essaouira, hotel luxe marrakech, hotel marrakech pas cher, hotel agadir pas cher, luxury hotel marrakech, riad maroc";
        $this->set(compact('metaDes', 'title_for_layout', 'metaKeys'));
    }

    function riads() {
        $c = $this->_catchHotelSearch();
        $metaDes = "Réservez parmi notre selection de riad pas cher et riad de luxe, auberge, kasbah, gite  Réservation & Confirmation immédiate Meilleurs deals et meilleurs tarifs Garantis promotion jusqu’à moins 60%.";
        $this->set(compact('metaDes'));
        if (isset($c['Hotel.nbre_etoiles'])) {
            // if (in_array(7,$c['Hotel.nbre_etoiles'])) {//$c['Hotel.chambre']=" LEFT JOIN `chambres` AS `Chambre` ON (`Chambre`.`chambre_id` = `25`)";
            // }
        }

        $c['Hotel.hotel_type_id'] = array(5, 3, 2, 8, 7);
        $this->paginate['model'] = 'Hotel';
        $this->paginate['Hotel']['limit'] = 10;
        $this->paginate['Hotel']['conditions'] = $c;
        $this->paginate['Hotel']['order'] = 'rand()';
        $hotels = $this->paginate('Hotel');
        //$pageTitle = 'Riads';
        $sliders = $this->Slider->find('all', array(
            'conditions' => array('Slider.riad' => true),
            'contain' => array('Hotel'),
            'fields' => array('Slider.*', 'Hotel.id', 'Hotel.name')
                ));
        // debug($hotels);

        $this->set(compact('hotels', /*'pageTitle',*/ 'sliders'));
        
        $metaDes = "Profitez des meilleures deals sur les riad de luxe à marrakech medina à des prix pas cher pour passer votre séjour au Maroc.";
        $title_for_layout = "Réservation ou location pas cher d'un riad de luxe à Marrakech medina";
        @$metaKeys = "offredealshotels.com, hotels au maroc,riad marrakech, riad essaouira, riad fes, riad maroc, riad marrakech pas cher, riad luxe marrakech, location riad marrakech, séjour marrakech pas cher, riad marrakech medina, luxury riad marrakech, guest house marrakech";
        $this->set(compact('metaDes', 'title_for_layout', 'metaKeys'));
        
        $this->render(null, null, 'hotels');
    }
    
    public function topSecret() {
        //debug('ici');
        $hotels = $this->Hotel->find('all', array(
            'conditions' => array(
                'active' => 0,
                "name_top_secret <> ''"
            ) 
        ));
        $pageTitle = 'Hotels top secret';
        //debug($hotels); die;
        $this->set(compact('hotels', 'pageTitle'));
    }

    //function hotel($hotel_id)
       function hotel() {
        $hotel_id = $this->params['id'];
						$photos = $this->HotelPhoto->find('all',array('conditions'=>array('HotelPhoto.hotel_id'=>$hotel_id)));
						$chambre = $this->Chambre->find('all',array('conditions'=>array('Chambre.hotel_id'=>$hotel_id)));

        $h = $this->Hotel->hotelInfo($hotel_id);
        $this->_disponibilite($hotel_id);

        $title_for_layout = $h['Hotel']['name'] . ' | ' . $h['Ville']['name'];
        $metaKeys = $h['Hotel']['name'] . ', hotel ' . $h['Ville']['name'] . ', riad ' . $h['Ville']['name'] . ', hotel maroc'. ', riad maroc, booking maroc, hotel luxe maroc, riad luxe maroc, hotel pas cher maroc, riad pas cher maroc ' ;
         $metaDes =$h['Hotel']['name']. ' - ' . $h['Ville']['name']. ' - Maroc';
       $pensions = $this->Hotel->Chambre->pensions;
        
        $this->set(compact('h','pensions','photos','chambre',  'title_for_layout', 'metaKeys', 'metaDes'));

    }
    
    private function _disponibilite($hotel_id) {
        if ($this->Session->check('Search.du')) {
            $du = $this->Session->read('Search.du');
            $au = $this->Session->read('Search.au');
        }
        else {
            $du = date('Y-m-d');
            $lastDay = $this->Inventaire->find('first', array(
                'fields' => array('max(ladate) AS last_day'),
                'conditions'=>array(
                    'hotel_id'=>$hotel_id,
                    'ladate >= curdate()'
                ),
                'recursive' => -1 , 
            ));
            $au = $lastDay[0]['last_day'];
        }
        
        $dispo = $this->Inventaire->get_disponibilite($hotel_id, $du, $au);
        //debug($dispo);
        
        
        $minPrices = array();
        foreach($dispo as $chambreId=>$chambre) {
            $minPrice = 0;
            foreach ($chambre as $jour) {
                if($minPrice==0) {
                    $minPrice=$jour['prix'];
                }
                if($minPrice>$jour['prix']) {
                    $minPrice=$jour['prix'];
                }
                $minPrices[$chambreId]=$minPrice;
            }
        }
        
        $minStays = array();
        foreach($dispo as $chambreId=>$chambre) {
            $minPrice = 0;
            foreach ($chambre as $jourId=>$jour) {
                $minStays[$chambreId][$jourId]=$jour['min_stay'];
            }
        }
        
        $minStaysSorted = array();
        foreach($minStays as $chambreId => $jours) {
            ksort($jours);
            $minStay = $this->_minStay($hotel_id, $chambreId, $jours);
            if($minStay) {
                $minStaysSorted[$chambreId] = $minStay;
            }
            
        }
        
        
        if ($this->Session->check('Search.du')) {
            $this->set('dispo', $dispo);
        }
        
        //debug($minStaysSorted);
        $this->set(compact('minPrices'));
        $this->set(array('minStays' => $minStaysSorted));
        //return $minPrices;
    }
    
    private function _minStay($hotelId, $chambreId, $jours) {
        $nbJours = count($jours);
        $i = 0;
        $result = array();
        $rest = 0;
        $lastDay = '';
        foreach($jours as $jour=>$minStay) {
            $tmp = ($i + $minStay) - $nbJours;
            if ($tmp  > $rest) {
                $rest = $tmp;
                $result['rest'] = $rest;
                $result['min_stay'] = $minStay;
                $result['day'] = $jour;
            }
            
            $i++;
            if($i == $nbJours) {
                $lastDay = $jour;
            }
        }
        if($result) {
            $du = date('Y-m-d', strtotime($lastDay . ' + 1 days'));
            $au = date('Y-m-d', strtotime($lastDay . ' + ' . $result['rest'] . ' days'));
            //$du = date("Y-m-d", strtotime($du));
            //$au = date("Y-m-d", strtotime($au));
            $dispo = $this->Inventaire->get_disponibilite($hotelId, $du, $au);
            //echo "[$lastDay][$du][$au]";
            $price = 0;
            if(!empty($dispo[$chambreId]))
            foreach($dispo[$chambreId] as $jour) {
                $price += $jour['prix'];
            }
            $result['price'] = $price;
            $result['au'] = $au;
        }
        
        return $result;
    }

    function reserver($hotel_id, $chambre_id, $du, $au, $qte = 1) {
       
	   $this->Session->write('Search.du', $du);
        $this->Session->write('Search.au', $au);
        $this->layout_type = 'full';
        $client_id = "";
        if (!empty($this->data)) {
            $this->loadModel('Client');
            $client = $this->Client->find("first", array('conditions' => array('Client.login' => $this->data['Reservation']['email'])));

            if ($client != 1) {
                $this->data['Client']['login'] = $this->data['Reservation']['email'];
                $this->data['Client']['civilite'] = $this->data['Reservation']['civilite'];
                $this->data['Client']['nom'] = $this->data['Reservation']['nom'];
                $this->data['Client']['prenom'] = $this->data['Reservation']['prenom'];
                $this->data['Client']['adresse'] = $this->data['Reservation']['adresse'];
                $this->data['Client']['ville_id'] = $this->data['Reservation']['ville'];
                $this->data['Client']['pay_id'] = $this->data['Reservation']['pay'];
                $pwd = uniqid();
                $this->data['Client']['password'] = Security::hash($pwd, null, true);

                if ($this->Client->save($this->data)) {
                    $client_id = $this->Client->id;
                    $email = $this->data['Client']['login'];
                    $nom = $this->data['Client']['nom'];
                    $this->set(compact('pwd', 'email', 'nom'));
                    /*$this->Email->to = $this->data['Client']['login'];
                    $this->Email->subject = "Vous etes inscrit sur le site offredealshotels.com";
                    $this->Email->template = "Vous etes inscrit sur le site http://offredealshotels.com";
                    $this->Email->sendAs = 'html';
                    $this->Email->send();*/
                }
            } else {
                $client_id = $client['Client']['id'];
            }

            $this->data['Reservation']['client_id'] = $client_id;
            if ($this->Reservation->saveAll($this->data)) {

                $reservation_id = $this->Reservation->id;
                if($_POST['payment_getway'] == 'mtc')
{
	$this->redirect('/pages/mtc/' . $reservation_id);

}
elseif ($_POST['payment_getway'] == 'binga') {
	$this->redirect('/pages/binga/' . $reservation_id);

}

                            }
            /*
              }
              else {
              $this->Session->setFlash('Vous étes déja inscrit', 'default', array('class' => 'msg'));
              $this->redirect($this->referer());
              }
             */
        }
        $h = $this->Hotel->info_resa($hotel_id, $chambre_id);
        $dispo = $this->Inventaire->get_disponibilite($hotel_id, $this->Session->read('Search.du'), $this->Session->read('Search.au')
        );

        $this->set(compact('h', 'dispo', 'hotel_id', 'chambre_id', 'du', 'au', 'qte'));
    }

    function reserverClient($hotel_id, $chambre_id, $du, $au, $qte = 1) {

        $this->layout_type = 'full';
        $this->loadModel("Client");
        $this->data['Reservation']['password'] = Security::hash($this->data['Reservation']['password'], null, true);
        $res = $this->Client->find("first", array('conditions' => array('Client.login' => $this->data['Reservation']['username'], 'Client.password' => $this->data['Reservation']['password'])));
        //debug($res);
        if (is_array($res) == 1) {
            $this->data['Reservation']['client_id'] = $res['Client']['id'];
            $this->data['Reservation']['civilite'] = $res['Client']['civilite'];
            $this->data['Reservation']['nom'] = $res['Client']['nom'];
            $this->data['Reservation']['prenom'] = $res['Client']['prenom'];
            $this->data['Reservation']['adresse'] = $res['Client']['adresse'];
            $this->data['Reservation']['pay'] = $res['Client']['pay_id'];
            $this->data['Reservation']['ville'] = $res['Client']['ville_id'];
            $this->data['Reservation']['email'] = $res['Client']['login'];
            $this->data['Reservation']['tel'] = $res['Client']['tel'];
            $this->data['Reservation']['hotel_id'] = $hotel_id;
            $this->data['Reservation']['du'] = $du;
            $this->data['Reservation']['au'] = $au;
            $this->data['Reservation']['conditions'] = "1";
            if ($this->Reservation->saveAll($this->data)) {
                $reservation_id = $this->Reservation->id;
                $this->redirect('/pages/mtc/' . $reservation_id);
            }
        } else {
            $this->Session->setFlash('Identifiants incorrectes', 'default', array('class' => 'msg'));
            $this->redirect($this->referer());
        }

        /**

          if(!empty($this->data)){
          if ($this->Reservation->saveAll($this->data)) {
          $reservation_id = $this->Reservation->id ;
          //$this->redirect('/pages/mtc/'.$reservation_id);
          }
          }
         *
         */
    }

    function reservation($id) {
        $this->layout = 'simple';
        $this->Reservation->id = $id;
        $r = $this->Reservation->find('first', array(
            'conditions' => array('Reservation.id' => $id),
            'contain' => array('ReservationDetail', 'Devise', 'Chambre', 'Hotel')
                )
        );
        $h = $this->Hotel->info_resa($r['Reservation']['hotel_id'], $r['Reservation']['chambre_id']);
        $this->set(compact('h', 'r'));
    }

    function dispo($hotel_id, $du, $au) {
        $c = array();
        $c['Inventaire.hotel_id'] = $hotel_id;
        $c['Inventaire.date>='] = $hotel_id;
        $c['Inventaire.hotel_id'] = $hotel_id;
        $this->Inventaire->find('all', array('conditions' => $c));
    }

    function search($redirect = true) {
        if (!empty($this->data['Search'])) :
            if (!empty($this->data['Search']['du']) && !empty($this->data['Search']['au'])) :
                $du = $this->data['Search']['du'];
                $au = $this->data['Search']['au'];
                if (new DateTime($du) < new DateTime($au)) :
                    $this->Session->write('Search.du', $du);
                    $this->Session->write('Search.au', $au);
                else :
                    $this->Session->delete('Search.au');
                    $this->Session->delete('Search.du');
                endif;
            endif;

        else :
            $this->Session->delete('Search');
        endif;
        if ($redirect) :
              $this->redirect($this->referer());
        endif;
    }

    function changeDevise() {
        $devise_id = $this->data['Config']['devise_id'];
        $d = $this->Hotel->Devise->find('first', array('conditions' => array('Devise.id' => $devise_id)));
        $this->Session->write('Devise', $d['Devise']);
        $this->redirect($this->referer());
    }

    function cancelSearch() {
        $this->Session->delete('Search');
        $this->redirect($this->referer());
    }

    function beforeRender() {
        parent::beforeRender();
        $this->data['Search']['du'] = $this->Session->read('Search.du');
        $this->data['Search']['au'] = $this->Session->read('Search.au');
        if (!$this->Session->check('Devise')) {
            echo $this->Session->check('Devise');
            $d = $this->Hotel->Devise->find('first', array('conditions' => array('Devise.taux' => 1)));
            $this->Session->write('Devise', $d['Devise']);
        }
        $this->data['Config']['devise_id'] = $this->Session->read('Devise.id');
        $devises = $this->Hotel->Devise->find('list', array('order' => 'Devise.name'));
        $pays = $this->Pay->find('list');
		        $villes = $this->Ville->find('list');

        $classifications = $this->Hotel->HotelType->find('list');
        $this->set('classifications', $classifications);

       if (!empty($this->data['Search']['pay_id'])) :
            $villes = $this->Pay->Ville->find('list', array('conditions' => array('Ville.pay_id' => $this->data['Search']['pay_id'])));
        endif;

        $banner = $this->Banner->find('first', array('conditions' => array('Banner.action' => $this->action)));

        $this->set('layout_type', $this->layout_type);
        $pensions = $this->Chambre->pensions;
        $this->set(compact('devises', 'pays', 'pensions', 'villes', 'banner'));
    }

    function mtcUpdate() {
        $updateURL = "http://www.offredealshotels.com/bookingmtcUpdate";
        $SLKSecretkey = Configure::read('mtcKey');
        ;
        $this->Reservation->id = $this->params['url']["cartId"];
        $cartId = $this->params['url']["cartId"];
        $checksumMTC = $this->params['url']["checksum"];
        $email = $this->Reservation->field('email');

        $orderNumber = $this->Reservation->field('transaction');
        $totalAmountTx = $this->params['url']["totalAmountTx"];
        $storeId = Configure::read('mtcStoreId');

        $dataMD5 = $updateURL . $storeId . $cartId . $totalAmountTx . $email . $SLKSecretkey;
        $checksum = MD5($this->Mtc->utf8entities(rawurlencode($dataMD5)));
        $msg = "";
        if ($checksum == $checksumMTC && is_numeric($orderNumber) == "True") {
            /* echo "Votre commande a bien été traitée sous la référence n° : " . $cartId . " et le paiement n° : " . $orderNumber ; */
            $msg = "Votre commande a bien été traitée sous la référence n° : " . $cartId . " et le paiement n° : " . $orderNumber;
        } else {
            /* echo "Echec de traitement de la demande !" ; */
            $msg = "Echec de traitement de la demande !";
        }
        $this->set(compact('msg'));
        /* exit(1); */
    }

    function mtcBook() {
        $bookURL = "http://www.offredealshotels.com/bookingmtcBook";
        $SLKSecretkey = Configure::read('mtcKey');
        $storeId = Configure::read('mtcStoreId');
        $cartId = $_POST["cartId"];
        $email = $_POST["email"];
        $totalAmountTx = $_POST["totalAmountTx"];
        $checksumMTC = $_POST["checksum"];
        $orderNumber = $_POST["orderNumber"];
        $dataMD5 = $bookURL . $storeId . $cartId . $totalAmountTx . $email . $SLKSecretkey;
        $checksum = MD5($this->Mtc->utf8entities(rawurlencode($dataMD5)));

        /* 	echo "1;" . $cartId . ";20111201;2" ;

          $this->Email->to  = 'ali@lifemoz.com';
          $this->Email->send($checksum.'#'.print_r($_POST,true)) ;
         */
        if ($checksum == $checksumMTC) {
            echo "1;" . $cartId . ";" . date('Ymd') . ";2";
            $this->_confirmPaiement($cartId, $orderNumber);
        } else {
            echo "0;Null;Null";
        }
        exit(1);
    }

    function getPassword() {
        if (!empty($this->data)) {
            $this->loadModel('Client');
            $res = $this->Client->find("count", array('conditions' => array('Client.login' => $this->data['Client']['login'])));
            $email = $this->data['Client']['login'];
            if ($res != 0) {
                $pwd = uniqid();
                $pwdCrypt = Security::hash($pwd, null, true);
                $this->Client->updateAll(array('Client.password' => "'$pwdCrypt'"), array('Client.login' => $this->data['Client']['login']));
                $this->Session->setFlash('Un email vous a été envoyé avec votre nouveau mot de passe', 'default', array('class' => 'flash_sucess'));
                $this->set(compact('pwd', 'email'));
                $this->_sendEmail('Votre nouveau mot de passe offredealshotels.com', 'forgotpwd', $this->data['Client']['login']);
                $this->redirect($this->referer());
            } else {
                $this->Session->setFlash("vous n'êtes pas inscrit", 'default', array('class' => 'flash_sucess'));
                $this->redirect($this->referer());
            }
        }
    }
	
	function prixc($idc,$idh){
	$min=0;
	$cont=0;
	$data= mysql_query("select tarif from inventaires i where i.hotel_id = $idh and ladate >=curdate() and i.chambre_id =$idc");

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
		echo $min;
	}

    function _confirmPaiement($reservation_id, $transaction) {
        $this->Reservation->id = $reservation_id;
        $this->Reservation->saveField('transaction', $transaction);
        $client_mail = $this->Reservation->field('email');

        $this->reservation($reservation_id);
        $h = $this->viewVars['h'];

        $admin_mail = Configure::read('resa_mail');
        $hotel_mail = $h['Hotel']['email'];

        $pensions = $this->Chambre->pensions;
        $this->set('pensions', $pensions);

//			$this->_sendEmail('Reservation OffreDealsHotels.com','client_resa',$client_mail);
//			$this->_sendEmail('Nouvelle Réservation OffreDealsHotels.com','admin_resa',$admin_mail);
//			$this->_sendEmail('Nouvelle Réservation OffreDealsHotels.com','hotel_resa',$hotel_mail);

        $this->_sendEmail('Reservation OffreDealsHotels.com', 'client_resa', $client_mail);
        $this->_sendEmail('Nouvelle Réservation OffreDealsHotels.com', 'admin_resa', $admin_mail);
        $this->_sendEmail('Nouvelle Réservation OffreDealsHotels.com', 'hotel_resa', $hotel_mail);
    }

    function _sendEmail($subject, $view, $email) {

     
        $this->Email->from = 'resa@offredealshotels.com';
        $this->Email->to = $email;


        $this->Email->subject = $subject;
        $this->Email->template = $view;
        $this->Email->sendAs = 'html';
        /* 	$this->Email->smtpOptions = array(
          'port'=>'465',
          'timeout'=>'30',
          'host' => 'ssl://smtp.gmail.com',
          'username'=>'h.bannari@gmail.com',
          'password'=>'',
          );

          $this->Email->delivery = 'smtp';
         */
        $this->Email->send();
    }

    function newd() {
        $this->loadModel('News');
        if ($this->RequestHandler->isAjax()) {

            $this->data['News']['email'] = $_POST["email"];

            if ($this->News->save($this->data)) {

                echo 1;
            } else {

                echo 0;
            }

            Configure::write('debug', 0);

            $this->autoRender = false;

            exit();
        }
    }

    public function rss() {
        $this->layout = false;
        $items = array();

        $conditions = array();
        $conditions['Promotion.au >='] = date('Y-m-d');
        $conditions['Hotel.active'] = true;
        $promotions = $this->Promotion->find('all', array('conditions' => $conditions, 'order' => 'rand()', 'group' => 'Promotion.hotel_id', 'contain' => array('Hotel', 'Hotel.Devise', 'Hotel.Ville', 'Chambre')));

        //debug($promotions[0]); exit;
        $items = $promotions;

        $this->set(compact('items'));
        $this->header('Content-Type: application/rss+xml');
    }

    function captcha_image() {
        App::import('Vendor', 'captcha/captcha');
        $captcha = new captcha();
        $captcha->show_captcha();
    }
    
    function newsletter() {
        $email = $_GET['email'];
        if(Validation::email($email)) {
            //$email = Configure::read('resa_mail');
            $this->set('email', $_GET['email']);
            $this->_sendEmail('Nouvelle demande d\'inscription newsletter', 'newsletter', 'newsletter@offredealshotels.com');
            echo ' Merci ! Votre demande à bien été prise en compte';
        }
        else {
            echo 'Erreur d\'inscription: email invalide';
        }
        exit();
    }
    
    function ventes_flash() {
        $this->layout_type = 'full';
    }

}

