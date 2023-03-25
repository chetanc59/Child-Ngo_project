<?php
include_once('header.php');

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>NGO Project / Contact Us</title>
    
</head>
<body>
   
   <!-- slider section start -->
<div class="contact_bg">
    
</div>
<!-- slider section end-->
   <!-- middle section office start-->
   <section>
       <div class="container">
           <div class="row">
               <div class="col-sm-6 col-md-6 col-lg-6">
                   <div class="address">
                       <h2>CENTRAL OFFICES:-</h2><br>

                       <h3>DELHI REGISTERED OFFICE</h3>
                       <span>Delhi Registered Office,<br>
                            B- 4/58, Safdarjung Enclave,<br>
                            2nd Floor, New Delhi - 110 029,<br>
                            Email: info@LETSHELPFOUNDATION.org<br>
               </span>
               <hr>
               <h3>MUMBAI REGISTERED OFFICE</h3>
               <span>
Y.B. Chavan Center, 4th Floor,<br>
Gen. J. Bhosale Marg. Nariman Point<br>
Mumbai, Maharashtra - 400021<br>
Email: info@LETSHELPFOUNDATION.org</span>
                   </div>
               </div>

               <div class="col-sm-6 col-md-6 col-lg-6">
                   <div class="address_state">
                       <h3>STATE OFFICES</h3>

                       <form action="controllors/contact_detail.php" method="post">
                           
                    <select class="form-control" name=" State" onchange="">
                        <option class="form-control" name="option" value="Rajasthan"></option>
                    <option class="form-control" name="option" value="Rajasthan">Rajasthan</option>
                    <option class="form-control" name="option" value="mumbai">mumbai</option>
                    <option class="form-control" name="option" value="delhi">delhi</option>
                    <option class="form-control" name="option" value="goa">goa</option>
                    <option class="form-control" name="option" value="Bihar">Bihar</option>
                         
 </select>
                       <?php
                      
                        ?>

                       <label>Address:</label><br><br><br>
                       <div>
                           
                       </div>
                       <label>State responsible person:</label><br><br><br>

                       <label>MobileNo:</label>
                   </div>
               </div>
               </form>
           </div><!--row-->
       </div><!--container-->
   </section>
   
   <!-- mmiddle section offin=ce end -->
  <!-- footer section start -->
  <?php
include_once('footer.php');
?>
<!-- footer section end -->
</body>
</html>