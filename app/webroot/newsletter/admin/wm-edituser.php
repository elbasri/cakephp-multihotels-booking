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
	<title>Edit User</title>
	<link href="../style.css" rel="stylesheet" type="text/css" />
</head>
<body>
<p><a href="index.php">Admin</a></p>
<p>Edit usersx</p>
<?php
include("../wm-config.php");
include("../includes/checksession.php");
include("../includes/ez_sql_core.php");
include("../includes/ez_sql_mysql.php");
$db = new ezSQL_mysqli(db_user,db_password,db_name,db_host);
if ($_SERVER['REQUEST_METHOD'] == 'POST')
{
	$name = $db->escape($_POST['name']);
	$email =  $db->escape($_POST['email']);
	$id =  $db->escape($_POST['id']);

	if ($name == "" || $email == "" || $id == "")
	die("<p>Please fill out the whole form.</p>");

	$db->query("UPDATE usersx SET name='$name',email='$email' WHERE id='$id';");
	header("Location: wm-viewusers.php");
	exit;
}
else
{
	$id = $db->escape($_GET['id']);
	if (empty($id))
	die("<p>Invalid ID</p>");
	$user = $db->get_row("SELECT name,email,id FROM usersx WHERE id=$id limit 1;");
?>

<form action="" method="POST">
<table id="table-3">
<tr>
	<td>Name</td>
	<td><input type="text" name="name" value="<?php echo $user->name;?>" size="40"></td>
</tr>
<tr>
	<td>Email</td>
	<td><input type="text" name="email" value="<?php echo $user->email;?>" size="40"></td>
</tr>
</table>
<input type="hidden" name="id" value="<?php echo $user->id;?>">

<p><input type="submit" value="Update User"></p>

</form>

<?php } ?>

</body>
</html>