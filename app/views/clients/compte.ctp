<div class="formclient">
<h4>E-mail (identifiant) : <?php echo $user['Client']['login'];?> </h4>

<hr/>
<?php echo $this->IForm->create('Client');?>
	<?php
		$options=array('M'=>'M','Mme'=>'Mme','Mlle'=>'Mlle');
		echo "<div class='input'>";
		echo "<label>Civilité </label>";
		echo $this->IForm->select('civilite',$options,null,array('id'=>'civilite','empty'=>false),false);
		echo "</div>";
		echo $this->IForm->input_('nom',array('value'=>$user['Client']['nom']));
		echo $this->IForm->input_('prenom',array('value'=>$user['Client']['prenom']));
		echo $this->IForm->input_('adresse',array('value'=>$user['Client']['adresse']));
		echo $this->IForm->input_('code_postale',array('label'=>'Code postal','value'=>$user['Client']['code_postal']));
		echo $this->IForm->input_('ville',array('value'=>$user['Client']['ville_id']));
		echo $this->IForm->input_('tel',array('value'=>$user['Client']['tel']));
		echo "<div class='input'>";
			//echo "<label> pays</label>";
			//echo $this->IForm->select('pays',$pays,null,array('id'=>'pays','empty'=>false,'value'=>$user['Client']['pay_id']),false);
			echo $this->Form->input('pays',array('label'=>'Pays','options'=>$this->Mtc->pays()));
			
		echo "</div>";
		echo "<div class='fix_width'>";
			echo $this->IForm->submit("Mettre à jour",array('id'=>'submit-id'));
			
		
	?>
	<a id="sedeconnecter" href="logout"> <input type="button" value="Se déconnecter" /></a>
	<a id="sedeconnecter" href="reservations"> <input type="button" value="Mes réservations" /></a>
<?php 	echo "</div>";
// echo $this->IForm->end_('Mettre à jour'); 
		echo $this->IForm->end(); 
?>
</div>

<style>
.formclient{  background: none repeat scroll 0 0 #F7F7F7;
border: 1px solid #C3C3C3;
float: left;
padding: 5px;
width: 553px;
}
#ClientCompteForm {
float: left;
margin-left: 32px;
margin-top: 50px;
width: 520px;
}
.formclient .input {
float: left;
height: 55px;
width: 171px;
}
.formclient .submit {
   margin-left: 0px !important;
   margin-top: 0px !important;
   width:117px;
}
.formclient input[type="text"] {
background: url("../img/bg_input.png") repeat-x scroll 0 0 transparent;
border: 1px solid #999999;
clear: both;
color: #6E6E6E;
float: left;
font: 10px Arial,Helvetica,sans-serif;
height: 20px;
width: 141px;
}
.formclient select {
background: none repeat scroll 0 0 #FFFFFF;
float: left;
height: 22px;
width: 143px;}
#sedeconnecter {
  color: #000000;
  float: right;
  margin-right: 21px;
    width: 84px;
}
.formclient label{
float: left;
height: 22px;
width: 100%;
color:#000;
}
#submit-id{
 background: url("../img/submit-bg.png") no-repeat scroll 0 2px transparent;
    border: medium none;
    color: #FFFFFF;
    float: left;
    font-weight: bold;
    height: 32px;
    margin-right: 85px;
    width: 85px;
}
#sedeconnecter input{
 background: url("../img/submit-bg.png") no-repeat scroll 0 2px transparent;
    border: medium none;
    color: #FFFFFF;
    float: left;
    font-weight: bold;
    height: 32px;
    margin-right: 85px;
    width: 85px;
	
}
.formclient h4{
    font-size: 17px;
    margin-left: 10px;
    margin-top: 10px;
    color: #07759F ;
}
.formclient hr{
 background-color: #C0C0C0;
    border: 0 none;
    color: #E6E6E6;
    float: left;
    height: 1px;
    margin-bottom: 15px;
    margin-left: 17px;
    margin-top: 14px;
    padding: 0;
    width: 92%;
	}
.formclient .fix_width	{
width:100%;
float:left;
}
</style>
