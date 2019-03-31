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
include("../wm-config.php");
include("../includes/checksession.php");
include("../includes/ez_sql_core.php");
include("../includes/ez_sql_mysql.php");
$db = new ezSQL_mysqli(db_user,db_password,db_name,db_host);
$usersx = $db->get_results("SELECT * FROM usersx;");
$num = $db->num_rows;
?>
<!doctype html>
<html>
<head>
	<title>View usersx</title>
	<link href="../style.css" rel="stylesheet" type="text/css" />
</head>
<body>
<p><a href="index.php">Admin</a></p>
<p>View usersx (<?php echo $num;?>)</p>
<?php
if ($num > 0){
?>
<table id="table-3">
<thead>
<tr>
	<th>Name</th>
	<th>Email</th>
	<th>Edit</th>
	<th>Delete</th>
	<th title="Click to Change">Subscribed</th>
	<th>Self-Unsubscribed</th>
</tr>
</thead>
<?php
foreach ( $usersx as $user ) {
	$id = $user->id;
	$name = $user->name;
	$email = $user->email;
	$date = $user->date;
	$status = $user->status;
	$unsubscribed = $user->unsubscribed;
	if ($unsubscribed == "1")
		$b = "Yes";
	else
		$b = "No";
	if ($status == "subscribed")
		$a = "Yes";
	else
		$a = "No";
?>
<tr>
	<td><?php echo $name;?></td>
	<td><?php echo $email;?></td>
	<td><a href="wm-edituser.php?id=<?php echo $id;?>">Edit</a></td>
	<td><a href="wm-deleteuser.php?id=<?php echo $id;?>">Delete</a></td>
	<td align="center"><a href="wm-subscribed.php?id=<?php echo $id;?>" title="Click to Change"><?php echo $a;?></a></td>
	<td align="center"><?php echo $b;?></td>
	</tr>
<?php } ?>
</table>
<?php } ?>
</body>
</html>
