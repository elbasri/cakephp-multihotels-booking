
<!-- saved from url=(0103)https://api.binga.ma/bingaApi/order/acceptPrePayment.action;jsessionid=85E967B1FA716C375CDFCEA414F5E9A7 -->
<html><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<link rel="shortcut icon" href="https://api.binga.ma/bingaApi/resources/img/favicon.ico">
<script type="text/javascript" src="./billet/jquery.min.js"></script>
<link href="./billet/billet-style.css" rel="stylesheet" type="text/css"> 
<script type="text/javascript">
$(function() {
$("#imprimer").click(function() {
 $('.tr_print').css('display','none');
       window.print();
     $('.tr_print').css('display','table-row');   
});
  
});
</script>
</head>
<body>
<div id="page">

<center>
<div id="stanh" style="display: block;width: 820px;">
<table border="0" cellpadding="0" cellspacing="0" width="100%">
  <tbody>
    <tr>
      <td align="left" valign="top" width="18%" style="vertical-align: bottom;">
      <img src="./billet/logo.png" style="width: 180px;"></td>
      <td align="center" valign="middle" width="66%" style="vertical-align: middle;"><b><font face="Georgia, Times New Roman, serif "><font color="#000000" size="+2">
    Votre réservation est en cours de validation
      </font></font></b></td>
      <td valign="top" width="16%" style="vertical-align: bottom;">
      </td>
    </tr>
  </tbody>
</table>

</div>
<div id="standard" style="display: block;width: 820px;margin:20px 0">
  <table border="0" width="85%">
    <tbody>
      <tr valign="top">
        <td width="45%">
        <table border="0" width="100%">
          <tbody>
            <tr>
              <td colspan="3" class="label"><strong>Détail Commande</strong></td>
            </tr>
            <tr>
              <td width=""><strong>Identifiant</strong></td>
              <td width="40%"><?php echo $_POST['externalId']; ?> </td>
            </tr>
            <tr>
              <td valign="top"> <strong>Marchand</strong>
              </td>
              <td width="40%">OffreDealsHotels.com</td>
            </tr>
            <tr>
                <td width=""><b>Montant total</b></td>
                <td width="40%">
                    <?php echo $_POST['amount']; ?> DH
                </td>
            </tr>
          </tbody>
        </table>
        </td>
        <td width="65%">
        <center>
        <table border="0">
          <tbody>
            <tr>
              <td colspan="3" class="label"><strong>Informations Client</strong></td>
            </tr>
            <tr>
              <td width=""><strong>Nom</strong></td>
              <td width="40%"><?php echo $_POST['buyerFirstName'].'&nbsp;'.$_POST['buyerLastName']; ?></td>
            </tr>
            <tr>
              <td width=""><strong>Adresse</strong></td>
              <td width="40%"><?php echo $_POST['buyerAddress']; ?>
              </td>
            </tr>
            <tr>
              <td width=""><strong>Tél</strong></td>
              <td width="40%"><?php echo $_POST['buyerPhone']; ?></td>
            </tr>
            <tr>
              <td width=""><strong>E-mail</strong></td>
              <td width="40%"><?php echo $_POST['buyerEmail']; ?></td>
            </tr>
          </tbody>
        </table>
        <br><br>
        </center>
        </td>
      </tr>
        <tr>
            <td>
                <table width="100%">
                    <tbody>
                        <tr style="font-family: arial, helvetica, sans-serif; font-size: small;">

                            <td>
                                <table width="100%" style="font-size: 14px;" cellpadding="4" cellspacing="0">
                                    <tbody>
                                        <tr>
                                            <td colspan="3" class="label">
                                                <strong>Détail Montant</strong>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td width="">
                                                Montant de réservation
                                            </td>
                                            <td width="40%" style="text-align: right;">
                                                <?php echo $_POST['amount']; ?> DH
                                            </td>
                                        </tr>
                                        <tr>
                                            <td width="">
                                                Frais de service
                                            </td>
                                            <td width="40%" style="text-align: right;">
                                                0,00 DH
                                            </td>
                                        </tr>
                                       <!-- <tr >
                                            <td width="">
                                                Droits de timbre
                                            </td>
                                            <td width="40%" style="text-align: right;">
                                                2,70 DH
                                            </td>
                                        </tr>
                                      -->
                                        <tr style="font-weight: bold;">
                                            <td style="font-weight: bold; border-top: 1px solid rgb(204, 204, 204);">
                                                Total
                                            </td>
                                            <td width="40%" style="text-align: right;font-weight: bold;border-top: 1px solid rgb(204, 204, 204);">
                                                <?php echo $_POST['amount']; ?> DH
                                            </td>
                                        </tr>

                                    </tbody>
                                </table>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </td>
        </tr>

       <tr>
        <td colspan="2" align="center" style="border-top: 3px solid #CCC;">
        <p style="text-align: left;margin-top:10px">
        <b style="font-weight:bold;font-size:14px">Instructions:</b>
            </p><ol style="text-align: left; font-weight: bold; clear: both; background-color: rgb(226, 222, 223); padding: 10px 30px">
                <li>
                    Imprimez votre réservation
                </li>
                <li>
                    Rendez-vous à l'agence banquer la plus proche avec votre
                    réservation dans un délais de 24h à partir de la date
                    d'achat
                </li>
				<li>
                    Cantactez notre support avant d'effectuer votre paiement sur le numero suivant: 0662816876
                </li>
                <li>
                    Verser l'argent à l'un de ses comptes:
                 <ul>
				 <li>Cach Plus: 
				 </li>
				 <li>Wafa Cach : 
				 </li>
				 </ul>
                </li>
                <li>
                    Envoyer votre reçu de Versement banquer avec votre réservation à l'adress 
                    email resa@offredealshotels.com ou à la Fax: 0524313460 ou appelez le numero de support: 0662816876
                </li>
            </ol>
        <p></p>
        </td>
      </tr>
      <tr>
         <td colspan="2"> <b>Pour toute information, notre Service Client est à votre disposition à <a href="mailto:resa@offredealshotels.com" target="_blank">resa@offredealshotels.com</a></b></td>
      </tr>
   
      <tr class="tr_print">
        <td colspan="2" align="center">
        <br>
        <a href="javascript:void(0);" style="cursor: pointer; color: black;" id="imprimer" class="buttonClass">Imprimer</a><br>
        <a href="http://www.offredealshotels.com" style="text-decoration: underline;">Retour vers offredealshotels.com</a>
        </td>
      </tr>
    </tbody>
  </table>
</div>
</center>
 </div>



</body></html>