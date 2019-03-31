<?php
/**
 * Routes configuration
 *
 * In this file, you set up routes to your controllers and their actions.
 * Routes are very important mechanism that allows you to freely connect
 * different urls to chosen controllers and their actions (functions).
 *
 * PHP versions 4 and 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright 2005-2010, Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright 2005-2010, Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       cake
 * @subpackage    cake.app.config
 * @since         CakePHP(tm) v 0.2.9
 * @license       MIT License (http://www.opensource.org/licenses/mit-license.php)
 */
/**
 * Here, we are connecting '/' (base path) to controller called 'Pages',
 * its action called 'display', and we pass a param to select the view file
 * to use (in this case, /app/views/pages/home.ctp)...
 */
	Router::connect('/:language', array('controller' => 'pages', 'action' => 'home'), array('language'=>'[a-z]{3}'));
	Router::connect('/:language/:controller/:action/*', array(), array('language'=>'[a-z]{3}'));

	Router::connect('/', array('controller' => 'pages', 'action' => 'home'));
    Router::connect('/:language/hotel-luxe-marrakech-pas-cher', array('controller' => 'pages', 'action' => 'hotels'), array('language'=>'[a-z]{3}'));
    Router::connect('/location-riad-luxe-marrakech-pas-cher', array('controller' => 'pages', 'action' => 'riads'));
    Router::connect('/location-villa-pas-cher-marrakech-agadir', array('controller' => 'pages', 'action' => 'villas'));
    Router::connect('/location-appartement-marrakech-agadir-martil-tetouan', array('controller' => 'pages', 'action' => 'appart'));
    Router::connect('/vol-paris-marrakech-pas-cher', array('controller' => 'pages', 'action' => 'vols'));
    Router::connect('/voyage-pas-cher-organise-marrakech-maroc', array('controller' => 'pages', 'action' => 'groupes'));
    Router::connect('/organisation-mariage-evenementiel-marrakech', array('controller' => 'pages', 'action' => 'events'));
    Router::connect('/location-voiture-marrakech-agadir-casablanca', array('controller' => 'pages', 'action' => 'content', 8));
	/**-------**/
	Router::connect('/informations-pratiques-et-touristiques-pour-un-séjour-au-Maroc', array('controller' => 'pages', 'action' => 'activite'));
	Router::connect('/retrouvez-toutes-les-informations-pour-préparer-votre-voyage-au-Maroc', array('controller' => 'pages', 'action' => 'guide', 4));
	
	Router::connect('/hotel-deals', array('controller' => 'pages', 'action' => 'deals'));
	Router::connect('/hotel-marrakech', array('controller' => 'pages', 'action' => 'marrakech'));
	Router::connect('/hotel-casablanca', array('controller' => 'pages', 'action' => 'casablanca'));
	Router::connect('/hotel-agadir', array('controller' => 'pages', 'action' => 'agadir'));
	Router::connect('/hotel-tanger', array('controller' => 'pages', 'action' => 'tanger'));
	Router::connect('/hotel-essaouira', array('controller' => 'pages', 'action' => 'essaouira'));
	Router::connect('/hotel-fes', array('controller' => 'pages', 'action' => 'fes'));
	Router::connect('/contact', array('controller' => 'pages', 'action' => 'contact'));
	Router::connect('/affiliation', array('controller' => 'pages', 'action' => 'affiliation'));
	Router::connect('/conditions-de-vente', array('controller' => 'pages', 'action' => 'content', 4));
	Router::connect('/qui-somme-nous', array('controller' => 'pages', 'action' => 'content', 5));
	Router::connect('/produits_shopping', array('controller' => 'pages', 'action' => 'produits'));
$str = "$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
$id = substr($str, strrpos($str, '/') + 1);
//$id=$last[2];
	Router::connect('/produit/:id', array('controller' => 'pages', 'action' => 'produitsviews',$id),array('id' => '[0-9]+'));
	Router::connect('/resto/:id', array('controller' => 'pages', 'action' => 'restosviews',$id),array('id' => '[0-9]+'));
	Router::connect('/restos_sorties', array('controller' => 'pages', 'action' => 'restos'));
	Router::connect('/blog', array('controller' => 'pages', 'action' => 'blog'));
	/**-------**/
	Router::connect('/mtcUpdate', array('controller' => 'pages', 'action' => 'mtcUpdate'));
	Router::connect('/mtcBook', array('controller' => 'pages', 'action' => 'mtcBook'));
	Router::connect('/admin', array('controller' => 'hotels', 'action' => 'index'));
	
	Router::connect('/liste-des-:suffixe',array('controller' => 'pages', 'action' => 'hotels'),array('suffixe' => '[a-zA-Z0-9_-]+')
);
	Router::connect('/:suffixe-:id',array('controller' => 'pages', 'action' => 'hotel'),array('suffixe' => '[a-zA-Z0-9_-]+','id' => $ID)
);


/**Router::connect('/:suffixe',array('controller' => 'pages', 'action' => 'hotel'),array('id' => $ID, 'suffixe' => '[a-zA-Z0-9_-]+'));**/
/**
 * ...and connect the rest of 'Pages' controller's urls.
 */
	//Router::connect('/pages/*', array('controller' => 'pages', 'action' => 'display'));
	
Router::connect('/rss.xml', array('controller' => 'pages', 'action' => 'rss'));
