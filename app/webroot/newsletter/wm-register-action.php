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
session_start();
include("wm-config.php");
?>
<!doctype html>
<html>
<head>
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
	<title><?php echo LIST_NAME;?></title>
	<link href="style.css" rel="stylesheet" type="text/css" />
</head>
<body>
<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
if (CAPTCHA_REGISTER == "yes"){
//<<<<<<<<<<<<<<<<<<<<<<<

	require_once('includes/recaptchalib.php');
	$privatekey = "6LfQ_9cSAAAAANAssks6fMpIsb-dF1qAq7OlbVkr";
	$resp = recaptcha_check_answer ($privatekey,
	                              $_SERVER["REMOTE_ADDR"],
	                              $_POST["recaptcha_challenge_field"],
	                              $_POST["recaptcha_response_field"]);
	
	if (!$resp->is_valid) {
	  // What happens when the CAPTCHA was entered incorrectly
	  die ("<p>Le reCAPTCHA n'a pas été entré correctement.<br> Revenez en arrière et essayez à nouveau.</p>" .
	       "(reCAPTCHA said: " . $resp->error . ")");
	} else {
	  // Your code here to handle a successful verification
	}

//>>>>>>>>>>>>>>>>>>>>>>>>
}

$status = "subscribed";
if (EMAIL_CONFIRM == "yes"){
	$status = "un";
}

include("includes/ez_sql_core.php");
include("includes/ez_sql_mysql.php");
$db = new ezSQL_mysqli(db_user,db_password,db_name,db_host);
	$name = $db->escape($_POST['name']);
	$email = $db->escape($_POST['email']);

	if (check_email_address($email)) {
	} else {
	echo "<p>Invalide adresse e-mail.</p><a href=\"wm-register.php\"><img src=\"img/bouton_retour.gif\"/></a>";
	exit;
	}

	$num = $db->get_var("SELECT count(id) FROM usersx WHERE email='$email';");
	if ($num > 0) {
	 	echo "<p>Cette adresse email est déjà enregistré.</p><a href=\"wm-register.php\"><img src=\"img/bouton_retour.gif\"/></a>";
		exit;
	}
	$name=mysql_real_escape_string($name);
	$email=mysql_real_escape_string($email);
	$db->query("INSERT INTO usersx(name,email,date,status,unsubscribed)VALUES ('$name','$email',NOW(),'$status',0);");
 	echo "<p>Inscription réussie.</p>";
		if (EMAIL_CONFIRM == "yes"){
			include("includes/get-url.php");
			$link = "$clink?e=".md5($email.AUTH_KEY)."&i=".$db->insert_id."";
			$subject = "Email Confirmation";
			$message = "S'il vous plaît cliquer sur le lien pour confirmer votre abonnement par courriel.[".LIST_NAME."] : \n $link";
			//echo $message;
			//exit;
			$headers  = 'Developed by drupalstudy.com' . "\r\n";
			$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
			$headers .= 'From: <'.FROM_EMAIL . '>' . "\r\n" .
			'Reply-To: '.FROM_EMAIL . "\r\n" .
			'X-Mailer: PHP/' . phpversion();
		 	$mail = mail($email, $subject, $message);
	    		if ($mail){
					echo "<p>S'il vous plaît vérifier votre e-mail,<br> pour un lien de confirmation. <img src='includes/yes.png' alt='' width='15' height='15' border='0'></p>";
		   		}else{
	   				echo "<p>Erreur dans le newsletter " . $email . "</p>";
		    	}
			}
}

//Check email function
function check_email_address($email){
    return preg_match("/^[_a-z0-9-]+(\.[_a-z0-9+-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,})$/i", $email);
}
?>
</body>
</html>