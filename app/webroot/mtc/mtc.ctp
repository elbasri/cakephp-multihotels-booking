<?php
$myredirect='http://watchmovies.bl.ee/apipayzon/redirect.php';
$mycallback = 'http://watchmovies.bl.ee/apipayzon/callback.php';

$cartId=$r['Reservation']['id'];
$email=$r['Reservation']['email'];
echo $amount=$r['Reservation']['montant']. "<br>";
echo $qte=$r['Reservation']['qte']. "<br>";
echo $totalAmountTx=$r['Reservation']['payement']*$r['Devise']['taux'] . "<br>";


require_once("mtc/api/Connect2PayClient.php");

$url = "https://paiement.payzone.ma";
$merchantID = "103197";
$merchantPassword = "Yaw]}/%r8=(F";

//Instantiate a new connect2pay client
$c2pClient = new Connect2PayClient($url, $merchantID, $merchantPassword);

//Set c2pclient informations
//In a real case, always check if the fields are recovered from the website
//This is just an example
$c2pClient->setOrderID($cartId);
$c2pClient->setCustomerIP($_SERVER['REMOTE_ADDR']);
$c2pClient->setPaymentType("CreditCard");
$c2pClient->setPaymentMode("Single");
$c2pClient->setShopperID("MyShopperID-10");
$c2pClient->setShippingType("Access"); //Can be either : Physical (for physical goods), Virtual (for dematerialized goods), Access (for protected content)

//this amount corresponds to 150,94 MAD, then you must multiply the base amount of 100
$c2pClient->setAmount($amount * $qte * 100);
$c2pClient->setOrderDescription('Reservation Booking');
//Currency must be in MAD iso code of 'Morrocan Dirham'
$c2pClient->setCurrency($r['Devise']['code']);
$c2pClient->setShopperFirstName($r['Reservation']['prenom']);
$c2pClient->setShopperLastName($r['Reservation']['nom']);
$c2pClient->setShopperAddress($r['Reservation']['adresse']);
$c2pClient->setShopperZipcode('20000');
$c2pClient->setShopperCity($r['Reservation']['ville']);
$c2pClient->setShopperCountryCode('MA');
$c2pClient->setShopperPhone($r['Reservation']['telephone']);
$c2pClient->setShopperEmail($email);
$c2pClient->setCtrlCustomData('Give me this');
//$c2pClient->setMerchant('OffreDealsHotels');



$c2pClient->setCtrlRedirectURL($myredirect);
$c2pClient->setCtrlCallbackURL($mycallback);


//You must specified that if you have a curl error
$c2pClient->setExtraCurlOption(CURLOPT_SSL_CIPHER_LIST, "AES;RC4");



//if all fields are validated
if ($c2pClient->validate()) {
  //then prepare trasaction
  if ($c2pClient->prepareTransaction()) {
    //here you can do the redirection to the payment page by using and save the merchant to decrypt the callback data
    $_SESSION['merchantToken'] = $c2pClient->getMerchantToken();
    header('Location: '.$c2pClient->getCustomerRedirectURL()); exit;
    /**
    echo "Result code:" . $c2pClient->getReturnCode() . "<br>";
    echo "Result message:" . $c2pClient->getReturnMessage() . "<br>";
    echo "Get merchant status by running: php merchant-status.php " . $c2pClient->getMerchantToken() . "<br>";
    echo "Customer access is at: " . $c2pClient->getCustomerRedirectURL() . "<br>";
    echo "To test the decryption of status posted when the customer is redirected, use the following command:<br>";
    echo "php encrypted-status.php " . $c2pClient->getMerchantToken() . ' ${data_field_from_the_form}' . "<br>";
    **/
  } else {
    echo "Result code:" . $c2pClient->getReturnCode() . "<br>";
    echo "Preparation error occured: " . $c2pClient->getClientErrorMessage() . "<br>";
  }
} else {
  echo "Validation error occured: " . $c2pClient->getClientErrorMessage() . "<br>";
}
?>