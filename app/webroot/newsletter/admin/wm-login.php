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
include("../includes/session.php");
if ($_SESSION['hit'] > 10){
	header('HTTP/1.0 401 Unauthorized');
	echo "<p>Error. Too many failed tries.</p>";
	exit;
}
include("../wm-config.php");
include("../includes/ez_sql_core.php");
include("../includes/ez_sql_mysql.php");
if ($_SERVER['REQUEST_METHOD'] == 'POST')
{
	$db = new ezSQL_mysqli(db_user,db_password,db_name,db_host);
	$pass = $db->escape($_POST['pass']);
	$_SESSION['hit'] += 1;
	if ($pass == admin_pass){
		$_SESSION['user_id']=md5($pass.$_SERVER['REMOTE_ADDR']);
		header("Location: index.php");
		}
		echo "<p>Login Incorrect.</p>";
		print $pass;
}else{ ?>
<!doctype html>
<html>
<head>
	<title>Admin Login</title>
	<link href="../style.css" rel="stylesheet" type="text/css" />
</head>
<body>
<p><img src="../includes/logout.png" alt="Logged Out" width="32" height="32" border="0" align="left"> Web Mailing List Administrator Login</p>

<form action="wm-login.php" method="POST">
<p>Password <input type="password" name="pass" size="10"></p>
<input type="submit" value="Login">
</form>
</body>
</html>
<?php } ?>