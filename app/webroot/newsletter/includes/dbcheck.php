<?php
//check for database first
$dbc = mysqli_connect(db_host, db_user, db_password);
if (!$dbc) {
  printf("<p>Can't connect to MySQL Server. Errorcode: %s\n</p>", mysqli_connect_error());
exit;
}
$exist = mysqli_select_db($dbc, db_name);
if ($exist <> 1){
printf("<p>Database does not exist.</p><p>Please specify a database in wm-config.php and make sure it exists.</p>");
printf("</body>\n</html>");
exit;
}
?>