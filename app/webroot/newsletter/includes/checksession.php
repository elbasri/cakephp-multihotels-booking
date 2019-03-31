<?php
//check to make sure the session variable is registered
if(isset($_SESSION['user_id'])){
	$user_id = $_SESSION['user_id'];
	}
	else{
	echo "<script>document.location.href='wm-login.php'</script>";
	exit;
	}
?>