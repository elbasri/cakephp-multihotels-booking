<?php
class Inventaire extends AppModel {
	var $name = 'Inventaire';

	
	function get_disponibilite($hotel_id,$du,$au,$chambre_id  = 0){
		    $c['Inventaire.ladate >='] = $du ;
			$c['Inventaire.ladate <'] =  $au;
			$c['Inventaire.hotel_id'] =  $hotel_id;
			
			$dispo = $this->find('all',
									array('conditions'=>$c,'order'=>'Inventaire.chambre_id,Inventaire.ladate')
								);
			$dtmp = $this->query("select datediff('$au','$du') as d" );
			$days = $dtmp[0][0]['d'];				
			$tmp = array() ;									
			
			foreach($dispo as $d):
				$tmp[$d['Inventaire']['chambre_id']][$d['Inventaire']['ladate']] = array(
													'dispo' =>$d['Inventaire']['dispo'] ,
													'prix'  =>$d['Inventaire']['tarif'],'attente'=>$d['Inventaire']['attente'],
													'prix_'=> null ,
											);
			endforeach;
			
			$Promotion =  ClassRegistry::init('Promotion');
			$promos    =  $Promotion->getPromotions($hotel_id,$du,$au);
		
			$promo = array();
			
			foreach($promos as $chambre_id=>$p) :
				$promo[$chambre_id] = $p ;
			endforeach;
			
			
			
			if(!empty($promo) and !empty($dispo)) :
				foreach($promo as $chambre_id=>$p) : 
				  $selectedPromo = $this->selectPromo($p,$du,$au,$days); 
				  
				  switch($selectedPromo['type']){
				    case 0 : 
						$this->calc_promo1($tmp[$chambre_id],$selectedPromo,$du,$au);
						break ;
					case 1 : 
						$this->calc_promo1($tmp[$chambre_id],$selectedPromo,$du,$au);
						break ;
					case 2  :
						$this->calc_promo2($tmp[$chambre_id],$selectedPromo,$du,$au);
						break ;
					case 3 :
						$this->calc_promo3($tmp[$chambre_id],$selectedPromo,$du,$au);
							break ;
					case 4 :
						$this->calc_promo4($tmp[$chambre_id],$selectedPromo,$du,$au);
						 	break ;
					case 5 :
						$this->calc_promo5($tmp[$chambre_id],$selectedPromo,$du,$au);
					break ;
				 }	
				endforeach ;
			endif;
			
		return $tmp ;	
	}
	
	
	function selectPromo($p,$du,$au,$days){
		
	  $ret = array() ;
	  $ret['type'] = -1 ;
	  foreach($p as $tmp) :
	     	 switch($tmp['type']){
					case 0 :
						$ret = $tmp ;
						break ;	
					case 1 : 
						   $ret = $tmp ;
						break ;
					case 2  :
						$y = $tmp['val2'] ;
						if($days >=  $tmp['val2']) :
							$ret = $tmp ;
						endif;	
						break ;
					case 3 :
						$y = $tmp['val2'] ;
						if($days >=  $y) :
							$ret = $tmp ;
							
						endif;	
						break ;
					case 4 :
						$jour_avant = $tmp['val2'] ;  
						$q = "select datediff('$du',curdate()) as d" ;
						$dtmp = $this->query($q);
						$d_diff = $dtmp[0][0]['d'];
						if($d_diff>= $jour_avant) :
							$ret = $tmp ;
							
						endif;
						break ;
					case 5 :
						$jour_avant = $tmp['val2'] ;
						$sejour_min  = $tmp['val3'] ;
						$q = "select datediff('$du',curdate()) as d" ;
						$dtmp = $this->query($q);
						$d_diff = $dtmp[0][0]['d'];
					
						if($d_diff>= $jour_avant and $days >= $sejour_min) :
							$ret = $tmp ;
						endif;
					break ;
				 }	
	 
	  endforeach;
	
	  return $ret ;
	}
	
	function calc_promo1(&$dispo ,$p,$du,$au){
		$x    = $p['val1'] ;
		$p_du =  new DateTime($p['du']) ;
		$p_au =  new DateTime($p['au']) ;
	
		foreach($dispo as $ladate=>$d) :
				$_ladate =new DateTime($ladate);
				if($_ladate >= $p_du and $_ladate <= $p_au) :
					$nouveau_prix = $dispo[$ladate]['prix'] - ($dispo[$ladate]['prix']* $x / 100) ;
					$dispo[$ladate]['prix_'] =	 $dispo[$ladate]['prix']	;
					$dispo[$ladate]['prix'] = $nouveau_prix ;
				endif;	
		endforeach;
	}
	
	
	
	function calc_promo2(&$dispo ,$p,$du,$au){
		$gratuit    = $p['val1'] ;
		$nbre 		= $p['val2'];
		$i = 1 ; 
		$tmpNbre  =  $p['val1'] ;
		
		$p_du 		=  new DateTime($p['du']) ;
		$p_au 		=  new DateTime($p['au']) ;
		
		foreach($dispo as $ladate=>$d) :
				$_ladate =new DateTime($ladate);
				if($_ladate >= $p_du and $_ladate <= $p_au) :
					if($i == $nbre or $tmpNbre !==$gratuit) :
						$dispo[$ladate]['prix_'] =	 $dispo[$ladate]['prix']	;
						$dispo[$ladate]['prix'] = 0 ;
						$i = 0 ;
						$tmpNbre = ($tmpNbre - 1 > 0) ? $tmpNbre - 1 : $gratuit ;
					endif;
					$i++ ;
				endif;	
		endforeach;
	
		
	}
	
	
	function calc_promo3(&$dispo ,$p,$du,$au){
		$x    		= $p['val1'] ;
		$sejour_min = $p['val2'] ;
		$p_du =  new DateTime($p['du']) ;
		$p_au =  new DateTime($p['au']) ;
	    
		if(count($dispo) >= $sejour_min) :
			foreach($dispo as $ladate=>$d) :
					$_ladate =new DateTime($ladate);
					if($_ladate >= $p_du and $_ladate <= $p_au) :
						$nouveau_prix = $dispo[$ladate]['prix'] - ($dispo[$ladate]['prix']* $x / 100) ;
						$dispo[$ladate]['prix_'] =	 $dispo[$ladate]['prix']	;
						$dispo[$ladate]['prix'] = $nouveau_prix ;
					endif;	
			endforeach;
		endif;	
	}
	
	function calc_promo4(&$dispo ,$p,$du,$au){
		$x    		= $p['val1'] ;
		$jour_avant = $p['val2'] ;
		$p_du =  new DateTime($p['du']) ;
		$p_au =  new DateTime($p['au']) ;
	    $q = "select datediff('$du',curdate()) as d" ;
		
		$dtmp = $this->query($q);
		$d_diff = $dtmp[0][0]['d'];
		
		if($d_diff>= $jour_avant) :
			foreach($dispo as $ladate=>$d) :
					$_ladate =new DateTime($ladate);
					if($_ladate >= $p_du and $_ladate <= $p_au) :
						$nouveau_prix = $dispo[$ladate]['prix'] - ($dispo[$ladate]['prix']* $x / 100) ;
						$dispo[$ladate]['prix_'] =	 $dispo[$ladate]['prix']	;
						$dispo[$ladate]['prix'] = $nouveau_prix ;
					endif;	
			endforeach;
		endif;	
	}
	
	function calc_promo5(&$dispo ,$p,$du,$au){
		$x    		= $p['val1'] ;
		$jour_avant = $p['val2'] ;
		$sejour_min  = $p['val3'] ;
		$p_du =  new DateTime($p['du']) ;
		$p_au =  new DateTime($p['au']) ;
	    $q = "select datediff('$du',curdate()) as d" ;
		
		$dtmp = $this->query($q);
		$d_diff = $dtmp[0][0]['d'];
		
		if($d_diff>= $jour_avant and count($dispo) >= $sejour_min) :
			foreach($dispo as $ladate=>$d) :
					$_ladate =new DateTime($ladate);
					if($_ladate >= $p_du and $_ladate <= $p_au) :
						$nouveau_prix = $dispo[$ladate]['prix'] - ($dispo[$ladate]['prix']* $x / 100) ;
						$dispo[$ladate]['prix_'] =	 $dispo[$ladate]['prix']	;
						$dispo[$ladate]['prix'] = $nouveau_prix ;
					endif;	
			endforeach;
		endif;	
	}
	
	
	
	function hotels_dispo($du,$au,$qte=1){
		$sql =  "select DISTINCT(hotel_id) as id FROM inventaires i
				where  dispo > 0 and ladate >='$du' and ladate <'$au' and dispo >=$qte
				group by hotel_id,chambre_id having(count(id) = DATEDIFF('$au' , '$du') )" ;
		$tmp = $this->query($sql);
		
		
		return  Set::extract('/i/id', $tmp) ;
	}
	
}
?>