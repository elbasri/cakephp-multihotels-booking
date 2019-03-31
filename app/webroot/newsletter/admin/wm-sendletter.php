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
include("../includes/get-url.php");
include("../includes/session.php");
include("../wm-config.php");
require("../includes/class.phpmailer.php");
// set time limit to 15 minutes (900/60)
set_time_limit(900);
ini_set ("sendmail_from",FROM_EMAIL);
?>
<!doctype html>
<html>
<head>
	<title>Envoie Newsletter</title>
	<link href="../style.css" rel="stylesheet" type="text/css" />
</head>
<body>
<p>Envoie Newsletter</p>
<p><a href="index.php">Admin</a></p>
<?php
include("../includes/checksession.php");
include("../includes/ez_sql_core.php");
include("../includes/ez_sql_mysql.php");
$db = new ezSQL_mysqli(db_user,db_password,db_name,db_host);

	$id = $db->escape($_GET['id']);
	if (empty($id) and isset($_POST['Submit'])){
		echo("<p>Invalid ID</p>");
		exit;
	}
	$de = mysql_real_escape_string($_POST['de']);
	$a = mysql_real_escape_string($_POST['a']);
$activeusersx = $db->get_var("SELECT count(id) from usersx where unsubscribed=0 and status='subscribed';");
	if ($activeusersx == 0){
		echo("<p>No Active usersx</p>");
		exit;
	}

	$res = $db->get_row("SELECT name,content FROM newsletters WHERE id='$id' limit 1;");
	$subject = $res->name;
	$message = $res->content;

	$usersx = $db->get_results("SELECT name,email FROM usersx WHERE status='subscribed' and id>=$de and id<=$a;");
	echo "<p>".$db->num_rows. " subscribers.</p>";
	foreach ( $usersx as $u ) {
	{
		$name = $u->name;
		$email = $u->email;
		$unsubscribe = " \n \n<br><p><a href='".$uurl."?url_email=".$email."'>unsubscribe from ".LIST_NAME."</a></p>.";
		//$finalmsg = $message . $unsubscribe;
		$finalmsg = $message;
		
			//Create a new PHPMailer instance
			$mail = new PHPMailer();
			//Set who the message is to be sent from
			$mail->SetFrom(FROM_EMAIL);
			//Set who the message is to be sent to
			$mail->AddAddress($email, $name);
			//Set the subject line
			$mail->Subject = $subject;
			//Read an HTML message body from an external file, convert referenced images to embedded, convert HTML into a basic plain-text alternative body
			$mail->MsgHTML($finalmsg);
			//Send the message, check for errors
			if(!$mail->Send()) {
				  echo "<p>Erreur: " . $mail->ErrorInfo;
				  $success = "Message Error";
			} else {
				  //echo "Message sent!";
			  	$success = "Message Sent";
			}
			echo "$name -> $email -> $success <br>";

		$unsubscribe = "";
		$finalmsg = "";
		$email = "";
	}
}
?>
</body>
</html>