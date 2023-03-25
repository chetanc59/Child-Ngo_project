<?php
include('connection/config.php');
if(isset($_SESSION['user_session']) && !empty($_SESSION['user_session'])) {
$fet = mysqli_query($conn, "SELECT * FROM tbl_signup WHERE Email='$user_session'");
$data = mysqli_fetch_array($fet);
if(isset($_REQUEST['donet']) == 'donet') {
	$amount = $_REQUEST['size'];
	if(!empty($amount)) {
	if($amount == 1500) {
		$downet_amount = 1500;
		
	}elseif($amount == 3500) {
		$downet_amount = 3500;
	}elseif($amount == 5500) {
		$downet_amount = 5500;
	}else {
		$downet_amount = 1500;
	}
	
		header("location:".$siteurl."donet-now.php?amount=".$downet_amount);

	}else {

		$_SESSION['error'] ="Please select amount";
		header("location:".$siteurl."donate.php");
	}
}

}else {
	header("location:".$siteurl."donet-now.php");
}