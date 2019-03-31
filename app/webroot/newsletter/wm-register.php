<?php
/*
+--------------------------------------------------------------------------
|   Web-Mailing-List.com
|	http://web-mailing-list.com/
|	Release Version: 2.1
|	Release Date: 07-29-2013
|   ========================================
|	License Type: GNU General Public License
|   Licence Info: license.txt should be included in this package.
+--------------------------------------------------------------------------
*/
include("wm-config.php");
?>
<!doctype html>
<html>
<head>
	<title><?php echo LIST_NAME;?></title>
	<link href="style.css" rel="stylesheet" type="text/css" />
	 <script type="text/javascript">
	 var RecaptchaOptions = {
	    theme : 'clean'
	 };
	 </script>
</head>
<body>

<form action="wm-register-action.php" method="post">
<table id="table-3">
	<thead>
		<tr><th colspan="2"><?php echo LIST_NAME;?><img src="img/bouton-newsletter.png" style="width:200px";/></th></tr>
	</thead>
<tr>
	<td>Nom</td>
	<td><input type="text" name="name" id="name" ></td>
</tr>
<tr>
	<td>Email</td>
	<td><input type="text" name="email" id="email" ></td>
</tr>
<?php
if (CAPTCHA_REGISTER == "yes"){
	require_once('includes/recaptchalib.php');
	$publickey = "6LfQ_9cSAAAAAFH8Q4odQkkwrAL6XDXC2shBbt3Y"; // you got this from the signup page
?>
	<tr>
		<td valign="top">Enter Code</td>
		<td>
	  <?php
	   	echo recaptcha_get_html($publickey);
	  ?>
		</td>
	</tr>
<?php } ?>
</table>
<p align="center"><input type="submit" id="submit" value="" style="background-image: url(img/button.jpeg); background-size:100% 100%;width:200px;height:50px" ></p>

</form>



</body>
</html>