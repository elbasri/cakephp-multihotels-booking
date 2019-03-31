<div class="formclient">
<h4>E-mail (identifiant) :<span> <?php echo $email;?></span> </h4>
<h2 class="mes_reservation_h2">Mes Réservations</h2>

<hr/>
                <table class='dataTable mes_reservation'>
                    <thead>
                        <tr>
                            <td>Hotel</td>
                            <td>Chambre</td>
                            <td>Du</td>
                            <td>Au</td>
                            <td>Quantité</td>
                            <td>Prix</td>
                            <td>Date de réservation</td>
                        </tr>
                    </thead>
                    <tbody>
                     <?php  foreach ($res as $a) : ?>
                        <tr>
                            <td><?php  echo $a['Hotel']['name'];?></td>
                            <td><?php  echo $a['Chambre']['name'];?></td>
                            <td><?php  echo $a['Reservation']['du'];?></td>
                            <td><?php  echo $a['Reservation']['au'];?></td>
                            <td><?php  echo $a['Reservation']['qte'];?></td>
                            <td><?php  echo $a['Reservation']['payement'];?></td>
                            <td><?php  echo $a['Reservation']['created'];?></td>
                        </tr>
                    <?php endforeach; ?>
                    </tbody>
                </table>
		
		

	<a id="sedeconnecter" href="logout"> <input type="button" value="Se déconnecter" /></a>
	<a id="sedeconnecter" href="compte"> <input type="button" value="Mon Compte" /></a>
</div>

</div>

<style>
.mes_reservation {
  background: none repeat scroll 0 0 #E20A6E;
  border: 1px solid #CCCCCC;
  color: #FFFFFF;
   margin-bottom: 20px;
  width: 100%;
}
.mes_reservation tr td{
padding:5px;
 text-align: center;
}
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
.formclient h4 span{
color:#000;
}
.formclient h4{
    font-size: 14px;
    margin-left: 10px;
    margin-top: 10px;
    color: #07759F ;
}
.formclient hr {
  background-color: #C0C0C0;
  border: 0 none;
  color: #E6E6E6;
  float: left;
  height: 1px;
  margin-bottom: 15px;
  margin-left: 17px;
  margin-top: 1px;
  padding: 0;
  width: 92%;
}
.formclient .fix_width	{
width:100%;
float:left;
}
</style>
