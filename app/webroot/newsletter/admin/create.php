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
	<title>Create Tables</title>
	<link href="../style.css" rel="stylesheet" type="text/css" />
</head>
<body>
<p><a href="index.php">Admin</a></p>
<?php
include("../includes/dbcheck.php");
include("../includes/ez_sql_core.php");
include("../includes/ez_sql_mysql.php");
$db = new ezSQL_mysqli(db_user,db_password,db_name,db_host);

$exist = $db->get_var("SHOW TABLES LIKE 'usersx'");
if ($exist == ''){
$link = "
CREATE TABLE `newsletters` (
  `id` int(11) NOT NULL auto_increment,
  `name` text NOT NULL,
  `content` text NOT NULL,
  PRIMARY KEY  (`id`)
) AUTO_INCREMENT=1;";
$db->query($link);
echo "<p>Table <strong>newsletters</strong> Created</p>";
}else{
echo "<p>Table <strong>newsletters</strong> already exists.</p>";
}

$exist = $db->get_var("SHOW TABLES LIKE 'usersx'");
if ($exist == ''){
$link = "
CREATE TABLE `usersx` (
  `id` int(11) NOT NULL auto_increment,
  `name` varchar(50) NOT NULL default '',
  `email` varchar(50) NOT NULL default '',
  `date` text NOT NULL,
  `status` text NOT NULL,
  `unsubscribed` int(11) NOT NULL,
  PRIMARY KEY  (`id`),
  KEY `unsubscribed` (`unsubscribed`)
) AUTO_INCREMENT=1;";
$db->query($link);
echo "<p>Table <strong>usersx</strong> Created</p>";
}else{
echo "<p>Table <strong>usersx</strong> already exists.</p>";
}
?>
</body>
</html>
