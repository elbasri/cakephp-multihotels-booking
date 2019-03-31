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
$id = $db->escape($_GET['id']);
if (empty($id) || !is_numeric($id))
	die("<p><a href='wm-show.php'>Invalid ID</a></p>");
	$db->query("DELETE FROM usersx WHERE id='$id' limit 1;");
	header("Location: wm-viewusers.php");
exit;
?>	
	