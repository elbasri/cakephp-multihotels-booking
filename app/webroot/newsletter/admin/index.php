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
?>
<!doctype html>
<html>
<head>
	<title>Newsletter Administration :) - <?php echo LIST_NAME;?></title>
	<link href="../style.css" rel="stylesheet" type="text/css" />
</head>
<body>
<?php
include("../includes/dbcheck.php");
include("../includes/ez_sql_core.php");
include("../includes/ez_sql_mysql.php");
$db = new ezSQL_mysqli(db_user,db_password,db_name,db_host);
//check if tables exist
$exist = $db->get_var("SHOW TABLES LIKE 'usersx';");
if ($exist == ''){
	echo "<p><a href='create.php'>Create Tables First</a></p>";
	echo "</body>\n</html>";
	exit;
}

$usercount = $db->get_var("select count(id) from usersx;");
$newscount = $db->get_var("select count(id) from newsletters;");
?>
<table id="table-3" align="center">
	<thead>
		<tr><th colspan="2"><img src="../includes/lock.png" width="18" height="20" alt="logged in" border="0"> Web Mailing List Admin Panel</th></tr>
	</thead>
	<tr><th colspan="2"><?php echo LIST_NAME;?></th></tr>
	<tr><td colspan="2"><a href="wm-addnews.php">Add Newsletter</a></td></tr>
	<tr><td><a href="wm-show.php">View Newsletters</a></td><td>(<?php echo $newscount;?>)</td></tr>
	<tr><td><a href="wm-viewusers.php">View usersx</a></td><td>(<?php echo $usercount;?>)</td></tr>
	<tr><td colspan="2"><a href="../">Public Page</a></td></tr>
	<tr><td colspan="2"><a href="?logout=y">Logout</a></td></tr>
</table>
<p style="color: gray;"><small>Developed by <a href="http://www.drupalstudy.com/" target="_blank" style="text-decoration: none; color: gray;">DrupalStudy.com</a></small></p>
</body>
</html>