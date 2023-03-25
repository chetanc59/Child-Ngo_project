<?php
include_once('controllors/connection/config.php');
$user_session = $_SESSION['user_session'];
$fet = mysqli_query($conn, "SELECT * FROM tbl_signup WHERE Email='$user_session'");
$data = mysqli_fetch_array($fet);
if($_SESSION['error'] !== '') {
  echo '<script>alert("'.$_SESSION['error'].'");</script>';
}$_SESSION['error'] = '';
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?php echo $sitetitle;?></title>
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
   <link href= "https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
  <!-- header secton start -->
  <section class="menus">
    <!-- <div class="container"> -->
      <div class="row">
        <div class="col-sm-3 col-md-3 col-lg-3">
          <a href="index.php" style="text-decoration:none">
            <img src="images/footer_logo.jpg" width="65px" style="border-radius: 80px; position: absolute; margin-top: 5px; margin-left:10px;">

            <h3 class="choyal">LET'S HELP FOUNDATION</h3>
            <h4 class="choyal_lets">Spread The Happiness</h4>
          </a>    
        </div>
        <!-- <div class="col-sm-2 col-md-2 col-lg-2"></div> -->
        <div class="col-sm-7 col-md-7 col-lg-7">

          <div class="nav_bar">
            <ul class="nav">
              <!-- <div class="dropdown "> -->
                <li class="nav-item"><a href="about-us.php" class=" nav-link dropbtn">About us</a>

                  <!-- </div> --></li>
                  <div class="dropdown">
                    <li class="nav-item"><a href="#" class=" nav-link dropbtn">Programs</a>
                      <div class="dropdown-content">
                        <a href="education.php">Education</a>
                        <a href="vocational_training.php">Vocational Training</a>
                        <a href="vulnerable-children.php">Vulnerable Children</a>
                        <a href="research_advocacy.php">Research & Advocacy</a>
                      </div>
                    </li></div>
                    <div class="dropdown">
                      <li class="nav-item"><a href="#" class="nav-link dropbtn">Get Involved</a>
                        <div class="dropdown-content">
                          <a href="donate.php">Donate</a>
                          <a href="partner_with_us.php">Partner with us</a>
                          <a href="job_opportunity.php">Job Opportunities</a>
                          <a href="internship.php">Internship</a>
                        </div>
                      </li></div>
                      <div class="dropdown">
                        <li class="nav-item"><a href="#" class="nav-link dropbtn">Latest Updates</a>
                          <div class="dropdown-content">
                            <a href="disaster-images.php">Disaster Photo Exhibition</a>
                            <a href="#">Blog</a>
                            <a href="media.php">Latest news & Media</a>
                          </div>
                        </li></div>
                        <div class="dropdown">
                          <li class="nav-item"><a href="#" class=" nav-link dropbtn">Resources</a>
                            <div class="dropdown-content">
                              <a href="publication.php">Publications</a>
                              <a href="annual-reports.php">Annual Reports</a>
                            </div>
                          </li></div>
                          <li class="nav-item"><a href="contact.php" class="nav-link">Contact</a></li>
                          <li class="nav-item"><a href="Donate.php" class="nav-link">Donate</a></li>

                        </ul>

                      </div>

                    </div><!--colsm-7-->

                    <div class="col-sm-2 col-md-2 col-lg-2">
                      <?php 
                        if(empty($user_session)) {
                      ?>
                      <button type="button" class="btn btn-warning" data-bs-toggle="modal"data-bs-target="#myModal" style="margin-top: 30px; margin-left: 50px;">Log in</button>
                      <!-- Modal -->
                      <div class="modal fade" id="myModal" role="dialog">
                        <div class="modal-dialog modal-lg" style="margin-top:100px;">
                          <div class="modal-content">
                            <div class="modal-header login_header">
                              <button type="button" class="close icon_cross" data-bs-dismiss="modal" style="border: 0; background-color: white;"><i
                                class="fa-solid fa-xmark"></i></button>
                                <br><br>
                                <a href="#" class="login_google">    <h4 class="modal-title login_h4" style="margin-left: 130px;">Log In With</h4>&nbsp;
                                  <img src="images/google.png" alt="google" width="40px"></a>  
                              
                                </div>
                                <div class="modal-body login_body">

                                  <form name="f1" action = "controllors/login.php" method = "POST">

                                    <div class="mb-3 mt-3">
                                      <label for="email">Email:</label>
                                      <input type="email" class="form-control" id="email" placeholder="Enter email" name="email" required>
                                    
                                    </div>

                                    <div class="mb-3">
                                      <label for="pass">Password:</label>
                                      <input type="password" class="form-control" id="pass" placeholder="Enter password" name="password" required>

                                    </div>
                                    <div class="form-check mb-3">
                                      <label class="form-check-label">
                                        <input class="form-check-input" type="checkbox" name="remember"> Remember me
                                      </label>
                                    </div>

                                    <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                                
                                  </form>


                                </div>

                              </div>
                            </div>
                          </div>
                          <!-- ......................................................... -->
                          <button type="button" class="btn btn-warning" data-bs-toggle="modal"data-bs-target="#MyModal" style="margin-top: -36px; margin-left: 140px;
                          display: flex;">Register</button>
                          <!-- Modal -->
                          <div class="modal fade" id="MyModal" role="dialog">
                            <div class="modal-dialog modal-lg" style="margin-top:100px;">
                              <div class="modal-content">
                                <div class="modal-header login_header">
                                  <h2 style="text-decoration: underline solid red;margin-left: 320px;">Sign-Up</h2>  
                                  <button type="button" class="close icon_cross" data-bs-dismiss="modal" style="border: 0; background-color: white;"><i
                                    class="fa-solid fa-xmark"></i></button>
                                  </div>
                                  <div class="modal-body login_body">
                                    <form action="controllors/signform.php" method="post">
                                      <div class="container">
                                        <div class="row">
                                          <div class="col-sm-6 col-md-6 col-lg-6">
                                            <label>Full Name</label><br>
                                            <input type="text" name="Full_Name" class="form-control" placeholder="Enter your name" required>
                                          </div><br>
                                          <div class="col-sm-6 col-md-6 col-lg-6">
                                            <label >Email</label><br>
                                            <input type="email" name="Email" class="form-control" placeholder="Enter The Email Id" required>
                                          </div><br>
                                        </div><!--row-->
                                        <div class="row" style="margin-top:10px;">
                                          <div class="col-sm-6 col-md-6 col-lg-6">
                                            <label>Mobile Number </label><br>
                                            <input type="number" name="Mobile_Number" class="form-control" placeholder="Enter Your Mobile No." required>
                                          </div>
                                          <div class="col-sm-6 col-md-6 col-lg-6">
                                            <label>State</label>
                                            <select class="form-control" name="State">State
                                              <!-- <option class="form-control">Select State</option> -->
                                              <option value="">Select State</option>
                                              <option value="Andhra Pradesh">Andhra Pradesh</option>
                                              <option value="Andaman and Nicobar Islands">Andaman and Nicobar Islands</option>
                                              <option value="Arunachal Pradesh">Arunachal Pradesh</option>
                                              <option value="Assam">Assam</option>
                                              <option value="Bihar">Bihar</option>
                                              <option value="Chandigarh">Chandigarh</option>
                                              <option value="Chhattisgarh">Chhattisgarh</option>
                                              <option value="Dadar and Nagar Haveli">Dadar and Nagar Haveli</option>
                                              <option value="Daman and Diu">Daman and Diu</option>
                                              <option value="Delhi">Delhi</option>
                                              <option value="Lakshadweep">Lakshadweep</option>
                                              <option value="Puducherry">Puducherry</option>
                                              <option value="Goa">Goa</option>
                                              <option value="Gujarat">Gujarat</option>
                                              <option value="Haryana">Haryana</option>
                                              <option value="Himachal Pradesh">Himachal Pradesh</option>
                                              <option value="Jammu and Kashmir">Jammu and Kashmir</option>
                                              <option value="Jharkhand">Jharkhand</option>
                                              <option value="Karnataka">Karnataka</option>
                                              <option value="Kerala">Kerala</option>
                                              <option value="Madhya Pradesh">Madhya Pradesh</option>
                                              <option value="Maharashtra">Maharashtra</option>
                                              <option value="Manipur">Manipur</option>
                                              <option value="Meghalaya">Meghalaya</option>
                                              <option value="Mizoram">Mizoram</option>
                                              <option value="Nagaland">Nagaland</option>
                                              <option value="Odisha">Odisha</option>
                                              <option value="Punjab">Punjab</option>
                                              <option value="Rajasthan">Rajasthan</option>
                                              <option value="Sikkim">Sikkim</option>
                                              <option value="Tamil Nadu">Tamil Nadu</option>
                                              <option value="Telangana">Telangana</option>
                                              <option value="Tripura">Tripura</option>
                                              <option value="Uttar Pradesh">Uttar Pradesh</option>
                                              <option value="Uttarakhand">Uttarakhand</option>
                                              <option value="West Bengal">West Bengal</option>
                                            </select>

                                          </div>
                                        </div><!--row-->
                                        <div class="row" style="margin-top:10px;">
                                          <div class="col-sm-6 col-md-6 col-lg-6">
                                            <label>City</label><br>
                                            <input type="text" name="City" class="form-control" placeholder="Enter Your City" required>
                                          </div>
                                          <div class="col-sm-6 col-md-6 col-lg-6">
                                            <label>Pin-code</label><br>
                                            <input type="number" name="Pin_code" class="form-control" placeholder="Enter Your Pin-Code" required>
                                          </div>
                                        </div><!--row-->
                                        <div class="row" style="margin-top:10px">
                                          <label>Address</label><br>
                                          <textarea class="form-control" name="Address" placeholder="Enter Your Address"></textarea>

                                        </div><!--row-->
                                        <div class="row" style="margin-top:10px;">
                                          <div class="col-sm-6 col-md-6 col-lg-6">
                                            <label>Select Government Identity Type</label><br>
                                            <select class="form-select select3" name="identity_type" id="identityType">

                                              <option value="">Select Government Identity Type</option>
                                              <option value="PAN Card">PAN Card</option>
                                              <option value="Aadhaar Card">Aadhaar Card</option>
                                              <option value="Tax Identification Number">Tax Identification Number</option>
                                              <option value="Passport Number">Passport Number</option>
                                              <option value="Voter ID">Voter ID</option>
                                              <option value="Driving License">Driving License</option>
                                              <option value="Ration Card">Ration Card</option>
                                              <option value="Others ">Others</option>
                                            </select>
                                          </div>
                                          <div class="col-sm-6 col-md-6 col-lg-6"> 
                                            <label>Enter Government Identity Number </label><br>
                                            <input type="text" name="identity" class="form-control" placeholder="Enter Government Identity Number" required>
                                          </div>
                                        </div>
                                        <div class="row" style="margin-top:10px;">
                                          <div class="col-sm-6 col-md-6 col-lg-6">
                                            <label>Password</label><br>
                                            <input type="password" name="password" placeholder="Enter the password" class="form-control" required>
                                          </div>
                                          <div class="col-sm-6 col-md-6 col-lg-6">
                                            <label>Confirm-Password</label><br>
                                            <input type="password" name="c_password" placeholder="Enter the password" class="form-control" required>
                                          </div>
                                        </div><!--row-->
                                      </div><!--container-->
                                      <br> <input type="checkbox" id="accept" required="">
                                      <label for="accept" id="checkboxText">I confirm that the data entered is correct to the best of my knowledge and that I am an Indian citizen. Please note, "LETS HELP FOUNDATION" bears no responsibility for the correctness of the information shared here.</label><br><br>

                                      <button class="btn btn-primary btn-md" type="submit" name="submit" style="margin-left: 340px;">Sign-Up</button>
                                      <a href="login.php" style="float: right;">Already Registered ?</a>
                                    </form>


                                  </div>

                                </div>
                              </div>
                            </div>
                          <?php }else {?>
                    <div class="dropdown animation" style="margin-top:35px; margin-left: 70px;">
                <button type="button" class="dropdown dropdown-toggle myprofile" data-bs-toggle="dropdown">
           <?php echo $data['Full_Name'];?>
                </button>
                <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#">My Profile</a></li>
                <li><a class="dropdown-item" href="signout.php">Sign Out</a></li>
                </ul>
                </div>

                          <?php }?>
                          </div>
                          <!-- <hr> -->
                          <hr style="color: black; margin: 5px; width: 98%;">
                        </div><!--row-->

                      <!-- </div>container  -->

                    </section>

                    <!-- header section end --></body>
                    </html>