<?php
include('connection/config.php');
if(isset($_REQUEST['submit']) =='submit') {
    $email = $_POST['email'];
    $password = md5($_POST['password']);
    if(!empty($email) && !empty($password)) {   
        $check_email = mysqli_query($conn,"SELECT * FROM tbl_signup WHERE Email = '$email' AND password =  
        '$password'");
         $record = mysqli_fetch_array($check_email);
         if($email == $record['Email'] && $password == $record['password']) {
            $_SESSION['user_session'] = $email;
            header("location:".$siteurl."index.php");
     }else {
         $_SESSION['error1'] ="Your email id & password are invalid";
        header("location:".$siteurl."index.php");
     }
} else{
        $_SESSION['error1'] ="Please enter blank field";
      header("location:".$siteurl."");
    }
}

    ?>

