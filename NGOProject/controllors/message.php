<?php
include('connection/config.php');

if(isset($_REQUEST['submit']) =='submit') {
	if(!empty($_POST['email']) && !empty($_POST['message'])) {
		$email = $_POST['email'];
		$message = $_POST['message'];
		$submit_date = date('d-m-y');
		// $time = time("h:i:s A");
		$status = 1;
		$query = "INSERT INTO tbl_message_submit(email,message,status,submit_date) VALUES('$email',
			'$message','$status','$submit_date')";
		$run = mysqli_query($conn,$query) or die(mysqli_error());
		

		if ($run) {
			$_SESSION['error'] ="successfull";
		    header("location:".$siteurl."index.php");

			
		}
		
		else{
		
			$_SESSION['error'] ="your message is not submitted";
		    header("location:".$siteurl."index.php");
			
		}
}
else{
	        $_SESSION['error'] ="Please fill the blank fields";
		    header("location:".$siteurl."index.php");
}
}

?>

