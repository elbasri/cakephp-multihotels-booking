<?php
class AppController extends Controller {
    var $helpers = array('I18n','Session');
	
	function beforeFilter(){
		if(isset($this->params['language'])){
			if(in_array($this->params['language'],Configure::read('Config.languages'))){
					$this->Session->write('User.language',$this->params['language']);
			}
	
		}
		Configure::write('Config.language', $this->Session->read('User.language'));
	}
}

?>
