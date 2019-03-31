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
?>
<!doctype html>
<html>
<head>
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
	<title>Email Confirmation</title>
	<link href="style.css" rel="stylesheet" type="text/css" />
</head>
<body>
<p>Email Confirmation</p>
<?php
include("wm-config.php");
include("includes/ez_sql_core.php");
include("includes/ez_sql_mysql.php");
$db = new ezSQL_mysqli(db_user,db_password,db_name,db_host);
$i = $db->escape(test_req('i'));
$email = $db->get_var("Select email from usersx where id=$i AND status='un' LIMIT 1;");
if($db->num_rows <> 1){
	echo "<p>Cette adresse email a déjà été confirmé.</p><br><a href=\"/\"><img src=\"img/bouton_retour.gif\"/></a>";
	exit;
}

$e = $db->escape(test_req('e'));
$c = md5($email.AUTH_KEY);
if ($c == $e){
	$db->query("UPDATE usersx SET status='subscribed' WHERE id=$i AND status='un' LIMIT 1;");
	echo "<p>Merci.<p></p>Le courriel de confirmation a été un succès.</p><br><a href=\"/\"><img src=\"img/bouton_retour.gif\"/></a>";
}else{
	echo "<p>An email confirmation authentication error occured.</p>";
	echo "<p>Please contact the mailing list administrator.</p><br><a href=\"/\"><img src=\"img/bouton_retour.gif\"/></a>";
}
?>
</body>
</html>
	
	
	
	
	
	
	