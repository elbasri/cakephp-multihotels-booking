<?php 
if (!isset($_SESSION)) {
  session_start();
}
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
include 'co.php';

function mycon($var){
	$string="INSERT INTO `test` (`place`) VALUES ('$var');";
	$query =mysql_query($string);
	return ;
}

try {
	

//Require the api file
print require_once("api/Connect2PayClient.php");



$url = "https://paiement.payzone.ma";
$merchantID = "103197";
$merchantPassword = "Yaw]}/%r8=(F";
//Instantiate a new connect2pay client with the same configuration already used to initialize the trasaction
$c2pClient = new Connect2PayClient($url, $merchnatID, $merchantPassword);

//Require configuration file
//print require_once("configuration.php");


/**
 * Notification with the callbackURL parameter
 * 
 * If a callbackURL parameter is present in the transaction, the payment page issues an HTTP POST request on this URL with the status of the transaction in parameter
 * The callback must return a JSON data structure to acknowledge or not the transaction status notification.
 * 
 * Please refer you to the documentation - Transaction Status Response section - for more iformations
 **/

if ($c2pClient->handleCallbackStatus()){

	$status = $c2pClient->getStatus();
	$message = $status->getErrorMessage();
	$orderID =$status->getOrderID();


/*
	mycon('$status->getShopperName() :'.$status->getShopperName());
	//mycon('$c2pClient->getShopperName() :'.$c2pClient->getShopperName());

	mycon('merchantToken :'.$status->getMerchantToken());
	mycon('getTransactionID() :'.$status->getTransactionID());
	mycon('getOrderID() :'.$status->getOrderID());
	mycon('getCurrency() :'.$status->getCurrency());
	mycon('getAmount() :'.$status->getAmount());
	mycon('getCartProductId() :'.$status->getCartProductId());
	mycon('message :'.$message);
*/

	if($status->getErrorCode() == '000'){
		//if status code == '000' it means that the transaction was successful
		//then you can update your trasaction status to succes
		//some code here to update the status



		$string = "UPDATE `reservations` SET `etat` = '1' WHERE `reservations`.`id` =".$orderID.";";
		$query =mysql_query($string);
		include 'confirmation.php';

		// Send a response to mark this transaction as notified
  		$response = array("status" => "OK", "message" => "Status recorded");
  		header("Content-type: application/json");
  		echo json_encode($response);

	}
}

} catch (Exception $e) {
	
}
?>