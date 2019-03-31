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
ob_start();
session_start();
if(isset($_SESSION['hit'])) {
$_SESSION['hit'] += 1;
}
include("wm-config.php");
?><!--
<!doctype html>
<html>
<head>
	<title>Unsubscribe - <?php echo LIST_NAME;?></title>
	<link href="style.css" rel="stylesheet" type="text/css" />
</head>
<body>
<p>Unsubscribe - <?php echo LIST_NAME;?></p>
<?php
if ($_SESSION['hit'] > 10){
	header('HTTP/1.0 401 Unauthorized');
	echo "<!-- Security error, to many retries. -->";
	exit;
}

include("includes/ez_sql_core.php");
include("includes/ez_sql_mysql.php");
$db = new ezSQL_mysqli(db_user,db_password,db_name,db_host);
$url_email = $db->escape(test_req('url_email'));

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    //security
	$email = $db->escape(test_req('email'));
	if ($email <> ''){
		$id = $db->get_var("select id from usersx WHERE email='$email' LIMIT 1;");
		if($db->num_rows == 1){
			$db->query("UPDATE usersx SET status='un',unsubscribed='1' WHERE id=$id LIMIT 1;");
			echo "<p>Unsubscribed [".LIST_NAME."]</p>";
		}else{
			echo "<p><a href='wm-unsubscribe.php'>Email address not found</a></p>";
		}
	}
}else{ ?>
<form action="" method="post">
Email <input type="text" name="email" size="40" value="<?php echo $url_email;?>">
<br /><br />
<input type="submit" value="Unsubscribe">
</form>
</body>
</html>-->
<?php } ?>