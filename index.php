<?php
include_once('header.php');

?>
<section>
    <!-- Carousel -->
    <div id="demo" class="carousel slide" data-bs-ride="carousel">
        <!-- Indicators/dots -->
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
            <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
            <button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>

        </div>
        <!-- The slideshow/carousel -->
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="images/new1.jpg" alt="slider" class="d-block" style="width:100%; height: 750px;">
            </div>
            <div class="carousel-item">
                <img src="images/new2.jpg" alt="slider2" class="d-block" style="width:100%; height: 750px;">
            </div>
            <div class="carousel-item">
                <img src="images/new3.jpg" alt="slider2" class="d-block" style="width:100%; height: 750px;">
            </div>
        </div> 
        <!-- Left and right controls/icons -->
        <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" style="background-color: rgb(0, 0, 0.5);border-radius: 100px;"></span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
            <span class="carousel-control-next-icon" style="font-size: 30px;background-color: rgb(0, 0, 0.5);border-radius: 100px;"></span>
        </button>
    </div>
</section>
<!-- slider section end-->
<!-- after slider secton start  -->
<section class="whats_new">
    <div class="container">
        <p>ABOUT US</p>
        <div class="row about_us">

            <!-- <div class="about_us"> -->
                <div class="col-sm-2 col-md-2 col-lg-2">
                    <img src="images/lets_help.png" alt="Logo_B" class="Logo_B">
                    <h4 class="LOGO_B_H4">LET'S HELP</h4>
                </div>
                <div class="col-sm-10 col-md-10 col-lg-10">
                    <span class="about_1">"LET'S HELP FOUNDATION" is an innovative learning organization created to improve the quality of education in India. Established in 2020 to provide education to children in the slums of jaipur, "LET'S HELP FOUNDATION" has grown in both scope and scale, with programs today reaching children and youth across the country.<br><br>
                        As one of the largest non-governmental organizations in the country, "LET'S HELP FOUNDATION" focuses on high-quality, low-cost and replicable interventions to address gaps in the education system. Working  directly with children and youth as well as through large-scale collaborations with government systems, "LET'S HELP FOUNDATION" programs reach millions of lives every year."LET'S HELP FOUNDATION's" Teaching at the Right Level (TaRL) approach has demonstrated proven impact on children's learning outcomes and is now being adapted to contexts outside India.
                    </span>
                </div>
            </div>
        </div><!--row-->        
    </div><!--container-->
</section>
<!-- after slider section end -->
<!-- program section start -->
<section class="program_bg">
    <div class="container">
        <p>PROGRAMS</p>
        <div class="container_bg">
            <div class="row ">
                <div class="col-sm-6 col-md-6 col-lg-6">
                    <div class="Eeducation-image">
                        <a href="education.php" class="btn">  
                            <img src="images/Eeducation-image.png" class="responsive" alt="Eeducation-image">
                            <p>EDUCATION</p>
                        </a> 
                    </div>
                </div>
                <div class="col-sm-6 col-md-6 col-lg-6">
                    <div class="education_div">
                        <h2>EDUCATION</h2>
                        <span class="education_span">Across the spectrum from Early Childhood Education to Secondary Education, our programs strive to achieve focused objectives across different segments, as defined by our understanding of existing gaps and the impact of our innovations over time.
                        </span>
                        <a href="education.php"><button class="btn btn-warning btn-md education_btn1">Learn more</button></a>
                    </div>
                </div>
            </div><!--row-->
            <div class="three_image">
                <div class="row">

                    <div class="col-sm-4 col-md-4 col-lg-4">
                        <a href="vocational_training.php" class="btn">
                            <img src="images/third.png" class="responsive" alt="vocational-trainning" width="100%" height="auto">
                            <p>VOCATIONAL TRAINING</p>
                        </a>
                    </div>

                    <div class="col-sm-4 col-md-4 col-lg-4">
                        <a href="vulnerable-children.php" class="btn">
                            <img src="images/vulnerable-Children.png" class="responsive" alt="vulnerable-children" width="100%" height="auto">
                            <p>VULNERABLE CHILDREN</p>
                        </a>
                    </div>

                    <div class="col-sm-4 col-md-4 col-lg-4">
                        <a href="research_advocacy.php" class="btn">
                            <img src="images/research-Advocacy-images.png" class="responsive" alt="research and advocacy" width="100%" height="auto">
                            <p>RESEARCH & ADVOCACY</p>
                        </a>
                    </div>

                </div><!--row2-->
            </div>
        </div>
    </div><!--container-->
</section>
<!-- program section end -->
<!-- program o meter section start -->
<section>
    <div class="container">
        <div class="meter_o_bg">
            <p>PROGRESS-O-METER 2020-21</p>
            <div class="row">
                <div class="meter_o_font">
                    <div class="col-sm-3 col-md-3 col-lg-3">
                        <h4>Activities in</h4>
                        <img src="images/22.jpg" alt="22.jpg">
                        <h5>States & Union Territories</h5>
                    </div>
                    <div class="col-sm-3 col-md-3 col-lg-3">
                        <h4>Goverment Partnership in</h4>
                        <img src="images/14.png" alt="22.jpg">
                        <h5>States & Union Territories</h5>
                    </div>
                    <div class="col-sm-3 col-md-3 col-lg-3">
                        <h4>Programs Reached</h4>
                        <img src="images/12.png" alt="22.jpg">
                        <h5>Million Children & Youth</h5>
                    </div>
                    <div class="col-sm-3 col-md-3 col-lg-3">
                        <h4>Activities Engaged</h4>
                        <img src="images/500.png" alt="22.jpg">
                        <h5>Thousand Parents & Volunteers</h5>
                    </div>
                </div>
            </div><!--row-->
        </div>
    </div><!--contianer-->
</section>
<!-- program o meter section end -->
<!-- get involved section start -->
<section>
    <div class="container">
        <div class="get_involve">
            <p>GET INVOLVED</p>
            <div class="container get_involve_img">
                <div class="row">  
                    <div class="col-sm-3 col-md-3 col-lg-3">
                        <div class="new1">
                            <img src="images/contact-partner.png">
                        </div>
                        <a href="partner_with_us.php"><button type="button" class="btn involved-btn">Partner with us</button></a>   
                    </div>
                    <div class="col-sm-3 col-md-3 col-lg-3">
                        <div class="new1">
                            <img src="images/donate-icons.png" class="responsive">
                        </div>
                        <a href="donate.php"><button type="button" class="btn involved-btn">Donate</button></a>    
                    </div>
                    <div class="col-sm-3 col-md-3 col-lg-3">
                        <div class="new1">
                            <img src="images/work-with-us.png">
                        </div>
                        <a href="job_opportunity.php"><button type="button" class="btn involved-btn">Job Opportunities</button></a>              
                    </div>
                    <div class="col-sm-3 col-md-3 col-lg-3">
                        <div class="new1">
                            <img src="images/get-involved.png">

                        </div>
                        <a href="internship.php"><button type="button" class="btn involved-btn">Internship</button></a>           
                    </div>

                </div><!-- row  --> 
                <!-- </div>  --></div>
            </div><!--container -->
        </section>
        <!-- get involved section end -->
        <?php
        include_once('footer.php');
        ?>
    </body>
    </html>