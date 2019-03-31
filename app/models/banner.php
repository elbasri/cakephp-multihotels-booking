<?php
class Banner extends AppModel {
	var $name = 'Banner';
	var $validate = array(
		'action' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
	);
	
	
	var $actions = array(
					'home'          =>  'Page d\'accueil',
					'hotels'        =>  'Page  Hotels',
					//'villas_appart' =>  'Page Villa-Appart',
					//'riads'         =>  'Page Riads',
					'etablissement' =>  'Page Resultat recherche' ,
					//'activite'      =>  'Page Activité' ,
					'hotel'         =>   'Page de l\'Etablissement' ,
					'produits'         =>   'Page des produits' ,
					'restos'         =>   'Restos et sorties' ,
				);
}
?>