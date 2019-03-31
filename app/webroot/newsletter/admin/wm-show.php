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
$news = $db->get_results("SELECT * FROM newsletters;");
$num = $db->num_rows;
$activeusersx = $db->get_var("SELECT count(id) from usersx where unsubscribed=0 and status='subscribed';");
?>
<!doctype html>
<html>
<head>
	<title>Newsletters</title>
	<link href="../style.css" rel="stylesheet" type="text/css" />
</head>
<body>
<p><a href="index.php">Admin</a></p>
<p>Newsletters: <?php echo $num;?></p>
<p>Subscribed usersx: <?php echo $activeusersx;?></p>
<p><a href="wm-addnews.php">Add Newsletter</a></p>
<?php if ($num > 0){ ?>
<table id="table-3">
<thead>
<tr>
	<th>Email Subject</th>
	<th>Edit</th>
	<th>Send</th>
	<th>Delete</th>
</tr>
</thead>
<?php
foreach ( $news as $n ) {
	$id = $n->id;
	$name = $n->name;
?>
<tr>
	<td><?php echo $name;?></td>
	<td><a href="wm-editletter.php?id=<?php echo $id;?>">Edit</a></td>
	<td><a href="nombre.php?id=<?php echo $id;?>" onclick="if(confirm('Ready to send to <?php echo $activeusersx;?> usersx?')){return true;}return false;" >Send</a></td>
	<td><a href="wm-deleteletter.php?id=<?php echo $id;?>">Delete</a></td>
</tr>
<?php } ?>
</table>
<?php } ?>
</body>
</html>