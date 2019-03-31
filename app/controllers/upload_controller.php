<?php
App::import('Controller', 'Hotel');
class UploadController extends HotelController {
	var $name = 'Upload';
	var $uses = array('HotelPhoto');
	//var $components  = array('RequestHandler','Upload');
	

	function beforeFilter(){
		parent :: beforeFilter();
	}
	
	
	function index($id=null){
		if ($this->RequestHandler->isPost()){
			if (!empty($this->data['HotelPhoto']['photo'])) {
				$this->_handleUpload();
			}
		}
		if ($this->RequestHandler->isGet()){
			$this->_getFiles($id);
		}
		exit(1);
	}
	
	
	function _getFiles($id=null){
		$rets = array();
		$tmp = $this->HotelPhoto->find('all',array('conditions'=>array('HotelPhoto.hotel_id'=>$this->hotel_id,
																 'HotelPhoto.chambre_id'=>$id))) ;

		foreach($tmp as $f) :   
				$ret =array();
				$ret['name'] = $f['HotelPhoto']['photo'] ;
				$ret['size'] = '10000' ;
				$ret['url'] = '/uploads/'.$f['HotelPhoto']['photo'] ;
				$ret['thumbnail_url'] = $this->webroot.'uploads/thumbs/'.$f['HotelPhoto']['photo'] ;
				$ret['delete_url'] = $this->webroot.'upload/delete/'.$f['HotelPhoto']['id'] ;
				$ret['delete_type'] = 'GET' ;
				$rets[] = $ret ;
		endforeach ;
		echo json_encode(array($ret));
	}
   
	
	function _handleUpload(){
			$ret = array() ;
			$destination = WWW_ROOT.'uploads'.DS;
			$file = $this->data['HotelPhoto']['photo'];
			$result = $this->Upload->upload($file, $destination); //,null,null,array(*)
			
		if(!$result) {
			  $this->data['HotelPhoto']['photo'] = $this->Upload->result;
		   }else {
			  unset($this->data['HotelPhoto']['photo']);
		}
		
	    if(!empty($this->data['HotelPhoto']['chambre_id'])){
				$this->data['HotelPhoto']['hotel_id'] = $this->hotel_id ;
				$this->HotelPhoto->create();
				$this->HotelPhoto->save($this->data);
		}   
		
		
		$ret['name'] = $this->data['HotelPhoto']['photo'];
		$ret['size'] = $file['size'];
		$ret['url'] = '/uploads/'.$this->data['HotelPhoto']['photo'];
		$ret['thumbnail_url'] = $this->webroot.'uploads/thumbs/'.$this->data['HotelPhoto']['photo'];
		$ret['delete_url'] = $this->webroot.'upload/delete/'.$this->HotelPhoto->id;
		$ret['delete_type'] = 'GET';
		
		$this->Upload->create_thumbnail($this->data['HotelPhoto']['photo'],WWW_ROOT.'uploads'.DS);
		
		 echo json_encode($ret);
	
	}
	
	function  delete($id){
		$this->HotelPhoto->id = $id ;
		$file = $this->HotelPhoto->field('photo');
        if ($this->HotelPhoto->delete($id)) {
				@unlink(WWW_ROOT.'uploads'.DS.$file);
				@unlink(WWW_ROOT.'uploads'.DS.'thumbs'.DS.$file);
		}
	    echo  'true';
		exit (1) ;
	}
	
	

   
	
	

}
?>