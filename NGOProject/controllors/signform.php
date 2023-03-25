<?php
include('connection/config.php');
if(isset($_REQUEST['submit']) =='submit') {
	if(!empty($_POST['Full_Name']) && !empty($_POST['Email']) && !empty($_POST['Mobile_Number']) && !empty($_POST['State']) && !empty($_POST['City']) && !empty($_POST['Pin_code']) && !empty($_POST['Address']) && !empty($_POST['identity_type']) && !empty($_POST['identity']) && !empty($_POST['password']) && !empty($_POST['c_password'])) {
		$Full_Name = $_POST['Full_Name'];
		$Email = $_POST['Email'];
		$Mobile_Number = $_POST['Mobile_Number'];
		$State = $_POST['State'];
		$City = $_POST['City'];
		$Pin_code = $_POST['Pin_code'];
		$Address = $_POST['Address'];
		$identity_type = $_POST['identity_type'];
		$identity = $_POST['identity'];
		$password = md5($_POST['password']);
		$c_password = md5($_POST['c_password']);
		$S_Date = date('d-m-y');
   
     $check_email = mysqli_query($conn,"SELECT * FROM tbl_signup WHERE Email = '$Email'");
     // $search = mysqli_num_rows($check_email);
     if (mysqli_num_rows($check_email) > 0) {
     	$_SESSION['error'] ="You are already registered please login";
		header("location:".$siteurl."index.php");
     }
// print_r($conn);
     else if ($c_password != $password ) {
     	$_SESSION['error'] ="Please enter the same password";
		header("location:".$siteurl."index.php");
     }
		else
		{
			$query = "INSERT INTO tbl_signup(Full_Name,Email, Mobile_Number, State, City, Pin_code,Address,identity_type,identity,password,c_password,S_Date) VALUES('$Full_Name','$Email','$Mobile_Number','$State','$City','$Pin_code','$Address','$identity_type','$identity',
				'$password','$c_password','$S_Date')";
			$run = mysqli_query($conn,$query);
			header("location:".$siteurl."index.php");
		}
	}
	else{
		$_SESSION['error'] ="Please enter blank field";
		header("location:".$siteurl."index.php");
	}
}

	?>

