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
include("../includes/session.php"); ?>
<!doctype html>
<html>
<head>
	<title>Creation Newsletter</title>
	<link href="../style.css" rel="stylesheet" type="text/css" />
</head>
<body>
<p><a href="index.php">Admin</a></p>
<?php
include("../wm-config.php");
include("../includes/checksession.php");
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	include("../includes/ez_sql_core.php");
	include("../includes/ez_sql_mysql.php");
	$db = new ezSQL_mysqli(db_user,db_password,db_name,db_host);
	$name = $db->escape($_POST['name']);
	$det= str_replace(array("\r\n", "\r", "\n"), "<br />",$_POST['content']);
	//$detail = mysql_real_escape_string($det);
	$content = $db->escape($det);

	if (empty($name)){
		echo("<p>Remplire le nom.</p>");
		exit;
	}

	if (empty($content)){
		echo("<p>Remplire le messsage.</p>");
		exit;
	}

	$link = "INSERT INTO newsletters(name,content)VALUES('$name','$content')";
	$db->query($link);
	echo "<p>Newsletter creer</p>";
	header("Location: wm-show.php");
	exit;
}else{
?>
<p>Creatin Newsletter</p>
<form action="" method="POST">
<table id="table-3">
	<tr>
		<td>Sujet</td>
		<td><input type="text" name="name" size="40"></td>
	</tr>
	<tr>
		<td>Message</td>
		<td><textarea name="content" cols="60" rows="20"><div align="center" >
<div style="border: 10px solid #c4d7ed; width:800px;text-align: center;">



</div>
</div>
</textarea></td>
	</tr>
</table>
<p><input type="submit" value="Ajouter News"></p>
</form>
</body>
</html>
<?php } ?>
	
