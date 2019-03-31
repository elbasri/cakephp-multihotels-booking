<?php echo $this->Html->link('Ajouter une promotion',array('controller'=>'hotel','action'=>'promotion_add')) ?>

<?php
foreach($rows as &$row) :
	$row['Promotion']['type']    = $promoTypes[$row['Promotion']['type']] ;
	$row['Promotion']['actions'] = $this->Html->link('Supprimer',
										array('controller'=>'hotel','action'=>'promotion_delete',$row['Promotion']['id'])
									);
	$x = $row['Promotion']['val1'];
	$y = $row['Promotion']['val2'];
	$z = $row['Promotion']['val3'];
	
	$row['Promotion']['type'] =str_replace('x ',$x.' ',$row['Promotion']['type']) ;
	$row['Promotion']['type'] =str_replace(' y ',' '.$y.' ',$row['Promotion']['type']) ;
	$row['Promotion']['type'] =str_replace('z ',$z.' ',$row['Promotion']['type']) ;
	
	$row['Promotion']['chambres'] = '';								
	foreach($row['Chambre'] as $c){
		$row['Promotion']['chambres'] .= $c['name'] .' | ' ;
	}
endforeach;
?>
<?php	
	$columns = array();
	
	$columns[] =array(
			'headerText' => 'Titre' ,
			'index'=>'/Promotion/titre'
	);
	$columns[] =array(
			'headerText' => 'Du' ,
			'index'=>'/Promotion/du'
	);	
	$columns[] =array(
			'headerText' => 'Au' ,
			'index'=>'/Promotion/au'
	);	
	
	$columns[] =array(
			'headerText' => 'Chambres' ,
			'index'=>'/Promotion/chambres'
	);	
	
	$columns[] =array(
			'headerText' => 'Promotion' ,
			'index'=>'/Promotion/type'
	);	
	$columns[] =array(
			'headerText' => 'Actions' ,
			'index'=>'/Promotion/actions'
	);
	
	
	
	

?>
<?php 
	$this->ImozTable->rows = &$rows;
	$this->ImozTable->getTable($columns,'Promotion','sortTable',false);
?>