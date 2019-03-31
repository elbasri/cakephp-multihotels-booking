<?php 
if (!isset($_SESSION)) {
  session_start();
}
$id=$_SESSION['ids'];
/**
 * This file serves as an example
 * 
 * 
 * PHP dependencies:
 * PHP >= 5.2.0
 * PHP CURL module
 * PHP Mcrypt module
 * 
 * @package Connect2PayClient
 * @version 2.0.3
 * @author Mehdi ATRAIMCHE <mehdi.atraimche@vpscorp.ma>
 **/
try {


//Require the api file
require_once("api/Connect2PayClient.php");
//Require configuration file
//require_once("configuration.php");


$url = "https://paiement.payzone.ma";
$merchantID = "103197";
$merchantPassword = "Yaw]}/%r8=(F";


//Instantiate a new connect2pay client with the same configuration already used to initialize the trasaction
$c2pClient = new Connect2PayClient($url, $merchantID, $merchantPassword);

/**
 * 
 * Notification with redirectURL parameter
 * 
 * After payment processing, the customer will be presented a result page with a link to return to the merchant site.
 * This link is a form that will generate an HTTP POST request towards the redirectURL address.
 * 
 * In that case, the merchant has to decrypt the data field with his merchant token to be able to get the status of the transaction.
 * 
 * Please refer you to the documentation - Transaction Status Response section - for more iformations
 **/

if (isset($_POST['data']) and !empty($_POST['data'])) {
	$encryptedStatus = $_POST['data'];
}else{
	echo('erreur data ,');
}


$merchantToken=$_SESSION['merchantToken'];
//You must already have registered the merchant token in the session or database
if($c2pClient->handleRedirectStatus($encryptedStatus, $merchantToken)){

	$status = $c2pClient->getStatus();
	$message = $status->getErrorMessage();
	//$message2='Transaction terminée avec succès <br>Vérifier votre Email';


	//$message2 = $message.'<br>Check your Email';
$message2='Transaction successfully completed';//<br>Check your Email';
$msgError= "This transaction already Paid !";
$msgError2= "We are sorry, an error has occurred";

	if($status->getErrorCode() == '000'){
		//if status code == '000' it means that the transaction was successful
		//then you can update your trasaction status to succes
		//some code here to update the status
				include 'co.php';
		$string = "SELECT * FROM `reservations` WHERE `reservations`.`etat` = '1' AND `reservations`.`id` =".$_SESSION['ids'].";";
		$query =mysql_query($string);
		//echo mysql_num_rows($query);
		if(mysql_num_rows($query)==0){
			try {
					
					$string = "UPDATE `reservations` SET `etat` = '1' WHERE `reservations`.`id` =".$_SESSION['ids'].";";
					$query =mysql_query($string);// or die(mysql_error());
					
					$_SESSION['oldid']=$_SESSION['ids'];
					echo '<div style="margin: 200px auto 0px; width: 500px; top: 200px; background-color: rgb(163, 225, 163); text-align: center; font-size: 20px;"><p style="padding: 15px;">'.$message2.'</p></div>';					
					//include 'confirmation.php';
					
				} catch (Exception $e) {
					//echo $e->getMessage();
				}
		}elseif(isset($_SESSION['oldid'])){
			if($_SESSION['oldid']==$_SESSION['ids']){
				
				echo '<div style="margin: 200px auto 0px; width: 500px; top: 200px; background-color: #F5E782; text-align: center; font-size: 20px;"><p style="padding: 15px;" >'.$msgError.'</p></div>';
			}else{
				$_SESSION['oldid']=$_SESSION['ids'];
				echo '<div style="margin: 200px auto 0px; width: 500px; top: 200px; background-color: rgb(163, 225, 163); text-align: center; font-size: 20px;"><p style="padding: 15px;">'.$message2.'</p></div>';					
				include 'confirmation.php';
			}
		}else{
			$_SESSION['oldid']=$_SESSION['ids'];
			echo '<div style="margin: 200px auto 0px; width: 500px; top: 200px; background-color: rgb(163, 225, 163); text-align: center; font-size: 20px;"><p style="padding: 15px;">'.$message2.'</p></div>';					
			include 'confirmation.php';
		}
		//for example, after updated the transaction stuts, i will show a message to the customer
	}else{
		//else it means that the transaction was failed
		
		echo '<div style="margin: 200px auto 0px; width: 500px; top: 200px; background-color: #F2ABAB; text-align: center; font-size: 20px;"><p style="padding: 15px;" >'.$msgError2.'</p></div>';
	}
}else{
	
	echo '<div style="margin: 200px auto 0px; width: 500px; top: 200px; background-color: #F2ABAB; text-align: center; font-size: 20px;"><p style="padding: 15px;" >'.$msgError2.'</p></div>';

}

	
} catch (Exception $e) {
	
}

?>
<META HTTP-EQUIV="refresh" content="20; URL=http://www.offredealshotels.com/">



