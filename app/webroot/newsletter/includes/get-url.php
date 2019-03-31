<?php
//get confirm  or unsubscribe URL
$protocol = strpos(strtolower($_SERVER['SERVER_PROTOCOL']),'https') 
=== FALSE ? 'http' : 'https';
$host = $_SERVER['HTTP_HOST'];
$uurl = str_replace("/admin","",$_SERVER['SCRIPT_NAME']);

//confirmation url
$uurl = str_replace("wm-register-action","wm-confirm",$uurl);
$clink = $protocol . '://' . $host . $uurl;

//unsubscribe url
$uurl = str_replace("wm-sendletter","wm-unsubscribe",$uurl);
$uurl = $protocol . '://' . $host . $uurl;
?>