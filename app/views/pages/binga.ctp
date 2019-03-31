<script>
window.location.href = 'http://www.votrecodeur.com/Composants/commander/11/Script_de_Centrale_de_reservation_Professionnel_Booking_Pro_Script_French_Version';
</script>
<?php
/*
//$actionSLK="http://demo.maroctelecommerce.com/test/gateway/pay.asp"; 
$actionSLK=$this->Html->url('../billet/billet.php');
//$actionSLK="https://shopping.maroctelecommerce.com/prod/gateway/pay.asp";
$SLKSecretKey=Configure::read('mtcKey');
$storeId = Configure::read('mtcStoreId');
$cartId=$r['Reservation']['id'];
$email=$r['Reservation']['email'];
$amount=$r['Reservation']['montant'];
$qte=$r['Reservation']['qte'];
$totalAmountTx=$r['Reservation']['payement']*$r['Devise']['taux'] ;

$dataMD5=$actionSLK . $storeId . $cartId . $totalAmountTx . $email . $SLKSecretKey;

$checksum=MD5($this->Mtc->utf8entities(rawurlencode($dataMD5)));


$date = date("Y-m-d", strtotime('+2 day')).'T';
$time = date("h:i:s")."GMT";
$bingadate = $date.'12:00:00GMT';
*/

?>
<!--
<form name="paymentForm" action="<?echo $actionSLK?>" method="post">

<input type="hidden" name="externalId" value="<?echo $cartId?>">
<input type="hidden" name="expirationDate" value="<?echo $bingadate?>">
<input type="hidden" name="amount" value="<?echo $amount * $qte ?>">
<input type="hidden" name="buyerFirstName" value="<?php echo  $r['Reservation']['prenom']?>">
<input type="hidden" name="buyerLastName" value="<?php echo  $r['Reservation']['nom']?>">
<input type="hidden" name="buyerEmail" value="<?echo $email?>">
<input type="hidden" name="buyerAddress" value="<?php echo  $r['Reservation']['adresse']?>">
<input type="hidden" name="buyerPhone" value="<?php echo  $r['Reservation']['telephone']?>">
<input type="hidden" name="storeId" value="<?echo $storeId?>">
<input type="hidden" name="successUrl" value="http://www.votrecodeur.com">
<input type="hidden" name="successUrl" value="http://www.votrecodeur.com">
<input type="hidden" name="updateURL" value="http://www.votrecodeur.com/pages/bingaBook">
<input type="hidden" name="bookURL" value="http://www.votrecodeur.com/pages/bingaPay">
<input type="hidden" name="orderCheckSum" value="<?echo $checksum?>">

</form>


<script>
	document.paymentForm.submit() ; 
</script>
-->


