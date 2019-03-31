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
?>
<!doctype html>
<html>
<head>
	<title>Edit Newsletter</title>
	<link href="../style.css" rel="stylesheet" type="text/css" />
</head>
<body>
<p><a href="index.php">Admin</a></p>
<p>Edit Newsletter</p>
<?php
include("../wm-config.php");
include("../includes/checksession.php");
include("../includes/ez_sql_core.php");
include("../includes/ez_sql_mysql.php");
$db = new ezSQL_mysqli(db_user,db_password,db_name,db_host);

if ($_SERVER['REQUEST_METHOD'] == 'POST')
{
	$name = $db->escape($_POST['name']);
	$det= str_replace(array("\r\n", "\r", "\n"), "<br />",$_POST['con']);
	$con = $db->escape($det);
	$id = $db->escape($_POST['id']);

	if ($id == "" || $name == "" || $con == "")
	die("<p>Please fill out the whole form.</p>");
	$db->query("UPDATE newsletters SET `name`='$name',`content`='$con' WHERE id='$id';");
	header("Location: wm-show.php");
	exit;

}else{
	$id = $db->escape($_GET['id']);
	if (empty($id))
	die("<p>Invalid ID</p>");
	$news = $db->get_row("SELECT id,name,content FROM newsletters where id=$id limit 1;");
	
?>
<form action="" method="POST">
<table id="table-3">
	<tr>
		<td>Email Subject</td>
		<td><input type="text" name="name" value="<?php echo $news->name;?>" size="40"></td>
	</tr>
	<tr>
		<td>Email Content</td>
		<td><textarea name="con" cols="60" rows="20">   
<?php echo str_replace("\\", "",str_replace("<br />", "\n",$news->content));?></textarea></td>
	</tr>
</table>
<input type="hidden" name="id" value="<?php echo $news->id;?>">
<p><input type="submit" value="Update Letter"></p>
</form>
<?php } ?>
</body>
</html>
