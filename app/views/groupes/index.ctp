<?php	$columns =array();
	$columns[] =array(
		'headerText' => $this->Paginator->sort('id') ,
	     'index'=>'/Groupe/id'
		);					

	$columns[] =array(
		'headerText' => $this->Paginator->sort('nom') ,
	     'index'=>'/Groupe/nom'
		);					

	$columns[] =array(
		'headerText' => $this->Paginator->sort('prenom') ,
	     'index'=>'/Groupe/prenom'
		);					

	$columns[] =array(
		'headerText' => $this->Paginator->sort('nom_societe') ,
	     'index'=>'/Groupe/nom_societe'
		);					

	$columns[] =array(
		'headerText' => $this->Paginator->sort('email') ,
	     'index'=>'/Groupe/email'
		);					

	$columns[] =array(
		'headerText' => $this->Paginator->sort('tel') ,
	     'index'=>'/Groupe/tel'
		);					

	$columns[] =array(
		'headerText' => $this->Paginator->sort('fax') ,
	     'index'=>'/Groupe/fax'
		);					

	$columns[] =array(
		'headerText' => $this->Paginator->sort('portable') ,
	     'index'=>'/Groupe/portable'
		);					

	$columns[] =array(
		'headerText' => $this->Paginator->sort('ville') ,
	     'index'=>'/Groupe/ville'
		);					

	$columns[] =array(
		'headerText' => $this->Paginator->sort('pays') ,
	     'index'=>'/Groupe/pays'
		);					

	$columns[] =array(
		'headerText' => $this->Paginator->sort('du') ,
	     'index'=>'/Groupe/du'
		);					

	$columns[] =array(
		'headerText' => $this->Paginator->sort('au') ,
	     'index'=>'/Groupe/au'
		);					

	$columns[] =array(
		'headerText' => $this->Paginator->sort('ville_arrivee') ,
	     'index'=>'/Groupe/ville_arrivee'
		);					

	$columns[] =array(
		'headerText' => $this->Paginator->sort('type_sejour') ,
	     'index'=>'/Groupe/type_sejour'
		);					

	$columns[] =array(
		'headerText' => $this->Paginator->sort('adulte') ,
	     'index'=>'/Groupe/adulte'
		);					

	$columns[] =array(
		'headerText' => $this->Paginator->sort('enfant') ,
	     'index'=>'/Groupe/enfant'
		);					

	$columns[] =array(
		'headerText' => $this->Paginator->sort('moyenne_age') ,
	     'index'=>'/Groupe/moyenne_age'
		);					

	$columns[] =array(
		'headerText' => $this->Paginator->sort('budget') ,
	     'index'=>'/Groupe/budget'
		);					

	$columns[] =array(
		'headerText' => $this->Paginator->sort('hotel_type_id') ,
	     'index'=>'/Groupe/hotel_type_id'
		);					

	$columns[] =array(
		'headerText' => $this->Paginator->sort('nbre_chambre') ,
	     'index'=>'/Groupe/nbre_chambre'
		);					

	$columns[] =array(
		'headerText' => $this->Paginator->sort('lit_supplement') ,
	     'index'=>'/Groupe/lit_supplement'
		);					

	$columns[] =array(
		'headerText' => $this->Paginator->sort('single') ,
	     'index'=>'/Groupe/single'
		);					

	$columns[] =array(
		'headerText' => $this->Paginator->sort('double') ,
	     'index'=>'/Groupe/double'
		);					

	$columns[] =array(
		'headerText' => $this->Paginator->sort('twin') ,
	     'index'=>'/Groupe/twin'
		);					

	$columns[] =array(
		'headerText' => $this->Paginator->sort('triples') ,
	     'index'=>'/Groupe/triples'
		);					

	$columns[] =array(
		'headerText' => $this->Paginator->sort('quadriples') ,
	     'index'=>'/Groupe/quadriples'
		);					

	$columns[] =array(
		'headerText' => $this->Paginator->sort('restauration') ,
	     'index'=>'/Groupe/restauration'
		);					

	$columns[] =array(
		'headerText' => $this->Paginator->sort('demande_text') ,
	     'index'=>'/Groupe/demande_text'
		);					

?>
<? 
	$this->ImozTable->rows = &$rows;
	$this->ImozTable->getTable($columns,'Groupe','sortTable');
	// Register crud actions 
	$this->RAction->register_default();
	//Register Search options
	$searchFields =array();
	$searchFields['name'] =array();
	$this->RAction->register_search($searchFields,'/groupes','Groupe');
?>