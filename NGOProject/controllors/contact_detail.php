<?php 
include 'controllors/connection/config.php';
if(isset($_REQUEST['option']) =='option') {
if (!empty(option)) {
	
$mysql = mysqli_query($conn,"SELECT * FROM tbl_contact_details WHERE State = '$State'");
$fetch = mysqli_fetch_array($mysql);
if () {
	// code...
}

}

}
?>