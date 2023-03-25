<?php
include_once("controllors/connection/config.php");

?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>NGO Project / footer</title>
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script><!--jquery-->

    <script type="text/javascript" src="js/style.js"></script>
    <!--Bootstrap library  -->
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <!--animation-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p"
        crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF"
        crossorigin="anonymous"></script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/fontawesome.min.css">
    <link rel="stylesheet" href="Css/style.css">
</head>
<body>

<!-- footer section start -->
<section class="footer_section">
    <div class="container">
        <div class="row">
                  <div class="col-sm-3 col-md-3 col-lg-3">
                    <a href="index.php" style="text-decoration: none;">
                 <img src="images/footer_logo.jpg" alt="footer-logo" class="footer_back_logo">
                <h3 class="footer_choyal">LET'S HELP FOUNDATION</h3>
                <h4 class="footer_choyal_lets">Spread The Happiness</h4>

                </a>    
            </div>
            <div class="col-sm-2 col-md-2 col-lg-2">
                
            </div>
          
             <div class="col-sm-3 col-md-3 col-lg-3">
                <div class="contact-us">
                <h2>Contact Us</h2>
                <br><i class="fa-solid fa-envelope"></i>&nbsp;Chetan705942@gmail.com
              <br> <br> <i class="fa-solid fa-phone"></i>&nbsp;+91-9166705942
                <br><br><i class="fa-solid fa-location-dot"></i>&nbsp;PIET ISI RIICO INDUSTRIAL AREA<br>&nbsp;&nbsp;&nbsp;  SITAPURA JAIPUR 302022 

</div>
            </div>
         
             <div class="col-sm-4 col-md-4 col-lg-4">
               <form  method="post" action="controllors/message.php" class="form-control message_form" name="f1" style="height:auto;">
                 <?php 
      if($_SESSION['error'] !== "") { ?>
        <div class="alert alert-primary">
          <?php echo $_SESSION['error'];?>
        </div>
      <?php 
      } $_SESSION['error'] ='';

     ?>
                   <label>Email:</label><br>
                   <input type="email" id="email" name="email" placeholder="Enter the Email Id" class="form-control" required>
                   <span id="error1" style="color:red;"></span>
                  <br> <label>Message:</label><br>
                   <textarea class="form-control" id="Message" name="message" style="height: 140px;" placeholder="Enter your message"></textarea>
                   <span id="error2"style="color: red;"></span>
                  
                           <?php
                                    if(empty($_SESSION['user_session'])) { ?>
                                        <button type="submit" name ="submit"id="btn" class="btn btn-danger message_btn" style="padding-bottom: 10px;" data-bs-toggle="modal" data-bs-target="#myModal">Submit</button>
                                    <?php } else {
                                        ?>
                                        <button type="submit" id="btn" name="submit" class="btn btn-danger message_btn" style="margin-right: 0px;">Submit</button>
                                    <?php } ?>
               </form> 
            </div>
        </div><!--row-->
    </div><!--container-->
    <p style="text-align:center; margin-bottom: -20px; font-family: cursive; text-decoration: underline;">Created by ChetanJangir</p>
</section>
<!-- footer section end -->

</body>
</html>