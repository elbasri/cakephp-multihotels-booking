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
include("wm-config.php");?>
<!doctype html>
<html>
<head>
	<title><?php echo LIST_NAME;?></title>
	<link href="style.css" rel="stylesheet" type="text/css" />
</head>
<body>
<p><?php echo LIST_NAME;?></p>
<p><a href="wm-register.php">Sign Up</a></p>
<p><a href="wm-unsubscribe.php">Remove Email From List</a></p>
</body>
</html>