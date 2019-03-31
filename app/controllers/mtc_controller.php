<?php
class MtcController extends Controller {
	var $name = 'Pages';
	var $helpers = array('Html', 'Session','Form','Front');
	var $uses = array('Pay','Hotel','Reservation','Inventaire','Featured','Slider','Hpromotion','Groupe','Content','Guide','Activite');
	var $layout = 'simple' ;
	
	
	

	function beforeFilter(){
	
	}
	
}
?>