<?php
include_once('controllors/connection/config.php');
if(isset($_SESSION['user_session']) && !empty($_SESSION['user_session'])) {
	session_destroy();
	header("location:index.php");
} 
else {
	session_destroy();
	header("location:index.php");
}
?>