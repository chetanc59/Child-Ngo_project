<?php
include_once('header.php'); 
?>
<style>
    .img{
        display: block;
        margin-left: auto;
        margin-right: auto;
    }
</style>
<section>
    <div class="donate_bg">

    </div>
</section>
<!-- background section end -->
<!-- about donate section start -->
<section>
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-sm-8 col-lg-8 about_donate">
                <span>
                    Your support can enable millions of children and youth to continue learning. You can equip parents in remote and rural areas with tools to support their child's learning, and support governments and civil society with meaningful data to drive decisions. A young girl can complete her secondary education, and the little ones can take off towards a bright education future.<br><br><br>

                    Even as the world is in the grips of a pandemic, "LET'S HELP FOUNDATION" continues to move forward with your support. Adapting to the times, we are pivoting our methods to ensure we reach children and youth in these difficult times by overcoming barriers through communication and technology. Over the past few months, we have reached children in 12,000+ communities directly, engaged 80,000 youth, mobilized over 100,000 volunteers, and built
                </span><br><br>
                <h5>Your support makes this happen. Click the button to make a general donation or view featured projects below.
                    &nbsp;&nbsp;   <!-- <button class="btn btn-danger btn-md">Donate</button> -->
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#donate1_Modal">
                        Donate Now
                    </button>
                </div>

                <!-- The Modal -->
                <div class="modal" id="donate1_Modal" style="margin-top:100px;">
                    <div class="modal-dialog">
                        <div class="modal-content" style="width:900px;margin-left:-200px;">
                            <form method="post" action="controllors/donate.php">
                                <!-- Modal Header -->
                                <div class="modal-header">
                                    <h4 class="modal-title">
                                        Ab Nahi to Kab? Children and Youth from under-resourced backgrounds need your help NOW, more than ever! (COVID-19 response)!
                                    </h4>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                </div>

                                <!-- Modal body -->
                                <div class="modal-body" style="height: 300px;">
                                    <div class="container">
                                        <div class="row">

                                            <div class="col-sm-4 col-md-4 col-lg-4">
                                                <div class="col4_modal">
                                                    <label class="container">
                                                        <input type="radio" name="size" value="1500" id="Rtamount">

                                                        <p style="font-size:30px; text-align:right;">Rs1500</p>
                                                        <span style="font-size:14px; display: flex;padding-bottom: 10px;"> Support education activities for a child
                                                        </span>
                                                    </label> 

                                                </div>
                                            </div>


                                            <div class="col-sm-4 col-md-4 col-lg-4">
                                                <div class="col4_modal">
                                                    <label class="container">
                                                        <input type="radio" name="size" value="3500" id="Rtamount">

                                                        <p style="font-size:30px; text-align:right;">Rs3500</p>
                                                        <span style="font-size:14px; display: flex;padding-bottom: 10px;">
                                                            Support a young person become entrepreneur
                                                        </span>
                                                    </label> 

                                                </div>
                                            </div>
                                            <div class="col-sm-4 col-md-4 col-lg-4">
                                                <div class="col4_modal">
                                                    <label class="container">
                                                        <input type="radio" name="size" value="5500" id="Rtamount">

                                                        <p style="font-size:30px; text-align:right;">Rs5500</p>
                                                        <span style="font-size:14px; display: flex;padding-bottom: 10px;"> Support education activities for a child
                                                        </span>
                                                    </label> 

                                                </div>
                                            </div>
                                            <!-- </form> -->
                                        </div><!--row-->
                                    </div><!--container-->
                                </div>
                                <!-- Modal footer -->
                                <div class="modal-footer" style="border:0;">
                                    <?php
                                    if(empty($_SESSION['user_session'])) { ?>
                                        <button type="button" id="btn" class="btn btn-danger" style="margin-right: 400px;" data-bs-toggle="modal" data-bs-target="#myModal">Donate Now</button>
                                    <?php } else {
                                        ?>
                                        <button type="submit" id="btn" name="donet" class="btn btn-danger" style="margin-right: 400px;">Donate Now</button>
                                    <?php } ?>
                                </div>
                            </form>
                        </div>
                    </div><!--modal end-->

                </h5><br>
            </div>
        </div>  
    </div>
</section>

<!-- about donate section end -->
<!-- featured project section start -->
<section>
    <div class="container">
        <p class="donate_feature">FEATURED PROGRAMS</p>
        <div class="row">

            <div class="col-sm-6 col-md-6 col-lg-6">
                <div class="child_div">
                    <h5 style="text-align:center;">This summer, help kids catch up with CAMaL ka Camp!</h5><br><br>

                    <img src="images/donate_option1.jpg" alt="img_child" width="250px" class="img">
                    <br><br>
                    <hr style="color:solid black;">
                    <p>Help children in Std 4-6 ‘catch up’ on reading and basic math through the 4-week long summer campaign - CAMaL ka Cam</p>
                    <hr style="color:solid black;">
                    <p>The campaign will energise young volunteers in every village to help children learn and receive basic digital skills in return</p>
                    <hr style="color: solid black;">
                    <p>Reaching ~60,000 urban and rural communities during the period May-June, 2022</p>
                    <br><br>
                    <!-- <button class="btn btn-danger btn-md">DONATE NOW</button> -->
                    <!-- modal............... -->


                
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#donate1_Modal">
                        Donate Now
                    </button>
            </div>

            <!-- The Modal -->
            <div class="modal" id="donate1_Modal" style="margin-top:100px;">
                <div class="modal-dialog">
                    <div class="modal-content" style="width:900px;margin-left:-200px;">

                        <!-- Modal Header -->
                        <div class="modal-header">
                            <h4 class="modal-title">
                                Let's help and spread the happiness !
                            </h4>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                        </div>

                        <!-- Modal body -->
                        <div class="modal-body" style="height: 300px;">
                            <div class="container">
                                <div class="row">
                                    <div class="col-sm-4 col-md-4 col-lg-4">
                                        <div class="col4_modal">
                                            <label class="container">
                                                <input type="radio" name="Rtamount" value="1500" id="Rtamount">
                                                <span class="checkmark"></span>&nbsp;
                                                <p style="font-size:30px; text-align:right;">Rs1500</p>
                                                <span style="font-size:14px; display: flex;padding-bottom: 10px;">Will help provide valuable teaching learning material (manuals, activity cards, story cards) for children in one community</span>
                                            </label> 

                                        </div>
                                    </div>
                                    <div class="col-sm-4 col-md-4 col-lg-4">
                                        <div class="col4_modal">
                                            <label class="container">
                                                <input type="radio" name="Rtamount" value="3500" id="Rtamount">
                                                <span class="checkmark"></span>&nbsp;
                                                <p style="font-size:30px; text-align:right;">Rs3500</p>
                                                <span style="font-size:14px; display: flex;padding-bottom: 10px;">Will help train 15 community volunteers on how to improve children's reading and math skills
                                                </span>
                                            </label> 

                                        </div>
                                    </div>
                                    <div class="col-sm-4 col-md-4 col-lg-4">
                                        <div class="col4_modal">
                                            <label class="container">
                                                <input type="radio" name="Rtamount" value="5500" id="Rtamount">
                                                <span class="checkmark"></span>&nbsp;
                                                <p style="font-size:30px; text-align:right;">
                                                    <!-- <input type="radio" name="Rtamount" value="5500" id="Rtamount"> -->
                                                </p>
                                                <span style="font-size:14px; display: flex;padding-bottom: 10px;">
                                                    Will help cover travel support for volunteers across hundreds of communities
                                                </span>
                                            </label> 

                                        </div>
                                    </div>
                                </div><!--row-->
                            </div><!--container-->
                        </div>

                        <!-- Modal footer -->
                        <div class="modal-footer" style="border:0;">

                          <?php
                                    if(empty($_SESSION['user_session'])) { ?>
                                        <button type="button" id="btn" class="btn btn-danger" style="margin-right: 400px;" data-bs-toggle="modal" data-bs-target="#myModal">Donate Now</button>
                                    <?php } else {
                                        ?>
                                        <button type="submit" id="btn" name="donet" class="btn btn-danger" style="margin-right: 400px;">Donate Now</button>
                                    <?php } ?>
                    </div>

                </div>
            </div><!--modal end-->
        </div>  
    </div>
    <div class="col-sm-6 col-md-6 col-lg-6">
        <div class="young_div">
            <h5 style="text-align: center;">Helping Youth Build Back Better with Vocational Skills</h5>
            <br><br>
            <img src="images/donate_option2.jpg" alt="img_young" width="280px" class="img">
            <br><br>
            <hr style="color:solid black;">
            <p>Equipping youth with necessary skills to acquire jobs</p>
            <hr style="color:solid black;">
            <p>About 30,000 students pursue training every year</p>
            <hr style="color:solid  black;">
            <p>About 30,000 students pursue training every year</p>
            <hr style="color:solid black;">
            <p>allow up support to youth to enable Upward Mobility through skills</p>
            <br><br>
            <!-- <button class="btn btn-danger btn-md">DONATE NOW</button> -->
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#donate1_Modal">
                Donate Now
            </button>
        </div>

        <!-- The Modal -->
        <div class="modal" id="donate1_Modal" style="margin-top:100px;">
            <div class="modal-dialog">
                <div class="modal-content" style="width:900px;margin-left:-200px;">

                    <!-- Modal Header -->
                    <div class="modal-header">
                        <h4 class="modal-title">
                            Helping Youth Build Back Better with Vocational Skills!
                        </h4>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                    </div>

                    <!-- Modal body -->
                    <div class="modal-body" style="height: 300px;">
                        <div class="container">
                            <div class="row">
                                <div class="col-sm-4 col-md-4 col-lg-4">
                                    <div class="col4_modal">
                                        <label class="container">
                                            <input type="radio" name="Rtamount" value="5000" id="Rtamount">
                                            <span class="checkmark"></span>&nbsp;
                                            <p style="font-size:30px; text-align:right;">Rs5000</p>
                                            <span style="font-size:14px; display: flex;padding-bottom: 10px;"> Support one young person to become entrepreneur
                                            </span>
                                        </label> 

                                    </div>
                                </div>
                                <div class="col-sm-4 col-md-4 col-lg-4">
                                    <div class="col4_modal">
                                        <label class="container">
                                            <input type="radio" name="Rtamount" value="10000" id="Rtamount">
                                            <span class="checkmark"></span>&nbsp;
                                            <p style="font-size:30px; text-align:right;">Rs10000</p>
                                            <span style="font-size:14px; display: flex;padding-bottom: 10px;">
                                                Support four young people become entrepreneurs
                                            </span>
                                        </label> 

                                    </div>
                                </div>
                                <div class="col-sm-4 col-md-4 col-lg-4">
                                    <div class="col4_modal">
                                        <label class="container">
                                            <input type="radio" name="Rtamount" value="1500" id="Rtamount">
                                            <span class="checkmark"></span>&nbsp;
                                            <p style="font-size:30px; text-align:right;">Rs
                                                <input type="number" name="amount" placeholder="eg. Rs20000" style="width:80%; height:30px; font-size:20px;">
                                            </p>
                                            <span style="font-size:14px; display: flex;padding-bottom: 10px;">
                                                Support youth become entrepreneurs and come out of poverty
                                            </span>
                                        </label> 

                                    </div>
                                </div>
                            </div><!--row-->
                        </div><!--container-->
                    </div>

                    <!-- Modal footer -->
                    <div class="modal-footer" style="border:0;">

                     <?php
                     if(empty($_SESSION['user_session'])) { ?>
                        <button type="button" id="btn" class="btn btn-danger" style="margin-right: 400px;" data-bs-toggle="modal" data-bs-target="#myModal">Donate Now</button>
                    <?php } else {
                        ?>
                        <button type="submit" id="btn" name="donet" class="btn btn-danger" style="margin-right: 400px;">Donate Now</button>
                    <?php } ?>
                </div>

            </div>
        </div><!--modal end-->
    </div>
</div>
</div>
</div>
</section>
<!-- featured project section end -->
<!-- footer section start -->
<?php
include_once('footer.php');
?>


</body>
</html>

