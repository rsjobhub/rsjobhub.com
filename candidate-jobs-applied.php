<!DOCTYPE html>
<html lang="en">

<?php include 'includes/candidate_head.php' ?>

<body>


    <!-- LOADING AREA START ===== -->
    <!-- <div class="loading-area">
        <div class="loading-box"></div>
        <div class="loading-pic">
            <div class="wrapper">
                <div class="cssload-loader"></div>
            </div>
        </div>
    </div> -->
    <!-- LOADING AREA  END ====== -->  

	<div class="page-wraper">
     
        <!-- HEADER START -->
        <?php include 'includes/dash_navbar.php' ?>

        <!-- HEADER END -->

      
        <!-- CONTENT START -->
        <div class="page-content">

            <!-- INNER PAGE BANNER -->
            <div class="wt-bnr-inr overlay-wraper bg-center" style="background-image:url(images/banner/1.jpg); height:250px !important">
                <div class="overlay-main site-bg-white opacity-01"></div>
                <div class="container">
                    <div class="wt-bnr-inr-entry">
                        <div class="banner-title-outer margin_banner">
                            <div class="banner-title-name">
                                <h2 class="wt-title"> Viewed Jobs</h2>
                            </div>
                        </div>
                        <!-- BREADCRUMB ROW -->                            
                        
                          
                        
                        <!-- BREADCRUMB ROW END -->                        
                    </div>
                </div>
            </div>
            <!-- INNER PAGE BANNER END -->


            <!-- OUR BLOG START -->
            <div class="section-full p-t120  p-b90 site-bg-white">
                

                <div class="container">
                    <div class="row">
                        
                        <div class="col-xl-3 col-lg-4 col-md-12 rightSidebar m-b30">

                           <?php include 'includes/candidate_sidebar.php'; ?>

                        </div>

                        <div class="col-xl-9 col-lg-8 col-md-12 m-b30">
                            <div class="twm-right-section-panel candidate-save-job site-bg-gray">
                                <!--Filter Short By-->
                                <?php
                                    $Job = new Job;
                                    $clicked_jobs = $Job->get_all_user_clicked_jobs($_SESSION['uin']);
                                    ?>
                                <div class="product-filter-wrap d-flex justify-content-between align-items-center">
                                    <span class="woocommerce-result-count-left">Viewed <?php echo count($clicked_jobs) ?> jobs</span>
                                
                                 

                                </div>
                                
                                <div class="twm-jobs-list-wrap">
                                <ul>
                                    <?php
                              

                                    foreach($clicked_jobs as $clicked_job){
                                        $job = $Job->where('job','job_id', $clicked_job['job_id']);
                                        foreach($job as $job){

                                        
                                        
 
                                    

                                    ?>

                                     <li>
                                        <div class="twm-jobs-list-style1 col-lg-12 mb-5">
                                           
                                            <div class=" marginr">
                                                <a href="job-detail.php?job_id=<?php echo $job['job_id'] ?>" class="twm-job-title">
                                                    <h4 class="twm-job-title"><?php echo $job['job_title'];?><span class="twm-job-post-duration"> /<?php echo $job['date']; ?></span></h4>
                                                </a>
                                                <p class="twm-job-address"><?php echo $job['city'];?>,<?php echo $job['country'];?></p>
                                                <p class="twm-job-address"><a href="job-detail.php?job_id=<?php echo $job['job_id'] ?>">View detail</a></p>

                                      

                                 
                                            
                                            </div>
                                            <div class="twm-right-content marginr">
                                           
                                                <div class="twm-jobs-category green"><span   class="twm-bg-purple"><small><?php echo $job['job_category'];?></small></span></div>
                                                <div class="twm-jobs-amount">$<?php echo $job['salary'];?> <span>/ Month</span></div>
                                             
                                                <?php
                                                $saved_jobs = $Job->get_user_saved_jobs($_SESSION['uin'], $job['job_id']);
                                                if(count($saved_jobs) > 0){
                                                ?>
                                        <button style="color: white !important; font-size:18px;" class="btn btn-small twm-bg-purple" disabled>Saved</button>
                                            <?php  }else{
                                           
                                           ?>


<button style="color: white !important; font-size:18px;" id="<?php echo $job['job_id'];?>" class="btn btn-small twm-bg-purple custom-toltip" onclick="saveJob(this)" data-user-uin="<?php echo $_SESSION['uin'] ?>" data-job-id="<?php echo $job['job_id'] ?>">
    <span class="fa fa-bookmark"></span>
    <span class="custom-toltip-block">Save Job</span>
    
</button>
                                                <?php }} ?>
                                              
                                            </div>
                                           
                                        </div>
                                     </li>

 


    
                                   <?php }?>
    
                                
                                </ul>
                                </div>

                                <!-- <div class="pagination-outer">
                                    <div class="pagination-style1">
                                        <ul class="clearfix">
                                            <li class="prev"><a href="javascript:;"><span> <i class="fa fa-angle-left"></i> </span></a></li>
                                            <li><a href="javascript:;">1</a></li>
                                            <li class="active"><a href="javascript:;">2</a></li>
                                            <li><a href="javascript:;">3</a></li>
                                            <li><a class="javascript:;" href="javascript:;"><i class="fa fa-ellipsis-h"></i></a></li>
                                            <li><a href="javascript:;">5</a></li>
                                            <li class="next"><a href="javascript:;"><span> <i class="fa fa-angle-right"></i> </span></a></li>
                                        </ul>
                                    </div>
                                </div> -->
                            </div>
                        </div>

                    </div>
                </div>
            </div>   
            <!-- OUR BLOG END -->
          
            
     
        </div>
        <!-- CONTENT END -->

        <!-- FOOTER START -->
       <?php include 'includes/footer.php' ?>
        <!-- FOOTER END -->

        <!-- BUTTON TOP START -->
		<button class="scroltop"><span class="fa fa-angle-up  relative" id="btn-vibrate"></span></button>

        <!--Model Popup Section Start-->
            <!--Signup popup -->
            <div class="modal fade twm-sign-up" id="sign_up_popup" aria-hidden="true" aria-labelledby="sign_up_popupLabel" tabindex="-1">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <form>

                            <div class="modal-header">
                                <h2 class="modal-title" id="sign_up_popupLabel">Sign Up</h2>
                                <p>Sign Up and get access to all the features of Jobzilla</p>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>

                            <div class="modal-body">
                                <div class="twm-tabs-style-2">
                                    <ul class="nav nav-tabs" id="myTab" role="tablist">

                                    <!--Signup Candidate-->  
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#sign-candidate" type="button"><i class="fas fa-user-tie"></i>Candidate</button>
                                    </li>
                                    <!--Signup Employer-->
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link" data-bs-toggle="tab" data-bs-target="#sign-Employer" type="button"><i class="fas fa-building"></i>Employer</button>
                                    </li>
                                    
                                    </ul>
                                    <div class="tab-content" id="myTabContent">
                                    <!--Signup Candidate Content-->  
                                    <div class="tab-pane fade show active" id="sign-candidate">
                                        <div class="row">

                                            <div class="col-lg-12">
                                                <div class="form-group mb-3">
                                                    <input name="username" type="text" required="" class="form-control" placeholder="Usearname*">
                                                </div>
                                            </div>
                                            
                                            <div class="col-lg-12">
                                                <div class="form-group mb-3">
                                                    <input name="email" type="text" class="form-control" required="" placeholder="Password*">
                                                </div>
                                            </div>
                                            
                                            <div class="col-lg-12">
                                                <div class="form-group mb-3">
                                                    <input name="phone" type="text" class="form-control" required="" placeholder="Email*">
                                                </div>
                                            </div>
            
                                            <div class="col-lg-12">
                                                <div class="form-group mb-3">
                                                    <input name="phone" type="text" class="form-control" required="" placeholder="Phone*">
                                                </div>
                                            </div>
                                            
                                            <div class="col-lg-12">
                                                <div class="form-group mb-3">
                                                    <div class=" form-check">
                                                        <input type="checkbox" class="form-check-input" id="agree1">
                                                        <label class="form-check-label" for="agree1">I agree to the <a href="javascript:;">Terms and conditions</a></label>
                                                        <p>Already registered?
                                                            <button class="twm-backto-login" data-bs-target="#sign_up_popup2" data-bs-toggle="modal" data-bs-dismiss="modal">Log in here</button>
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <button type="submit" class="site-button">Sign Up</button>
                                            </div>
                                            
                                        </div>
                                    </div>
                                    <!--Signup Employer Content--> 
                                    <div class="tab-pane fade" id="sign-Employer">
                                        <div class="row">

                                            <div class="col-lg-12">
                                                <div class="form-group mb-3">
                                                    <input name="username" type="text" required="" class="form-control" placeholder="Usearname*">
                                                </div>
                                            </div>
                                            
                                            <div class="col-lg-12">
                                                <div class="form-group mb-3">
                                                    <input name="email" type="text" class="form-control" required="" placeholder="Password*">
                                                </div>
                                            </div>
                                            
                                            <div class="col-lg-12">
                                                <div class="form-group mb-3">
                                                    <input name="phone" type="text" class="form-control" required="" placeholder="Email*">
                                                </div>
                                            </div>
            
                                            <div class="col-lg-12">
                                                <div class="form-group mb-3">
                                                    <input name="phone" type="text" class="form-control" required="" placeholder="Phone*">
                                                </div>
                                            </div>
                                            
                                            <div class="col-lg-12">
                                                <div class="form-group mb-3">
                                                    <div class=" form-check">
                                                        <input type="checkbox" class="form-check-input" id="agree2">
                                                        <label class="form-check-label" for="agree2">I agree to the <a href="javascript:;">Terms and conditions</a></label>
                                                        <p>Already registered?
                                                            <button class="twm-backto-login" data-bs-target="#sign_up_popup2" data-bs-toggle="modal" data-bs-dismiss="modal">Log in here</button>
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <button type="submit" class="site-button">Sign Up</button>
                                            </div>
                                            
                                        </div>
                                    </div>
                                    
                                    </div>
                                </div> 
                            </div>

                            <div class="modal-footer">
                                <span class="modal-f-title">Login or Sign up with</span>
                                <ul class="twm-modal-social">
                                    <li><a href="javascript" class="facebook-clr"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="javascript" class="twitter-clr"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="javascript" class="linkedin-clr"><i class="fab fa-linkedin-in"></i></a></li>
                                    <li><a href="javascript" class="google-clr"><i class="fab fa-google"></i></a></li>
                                </ul>
                            </div>

                        </form>
                    </div>
                </div>
                
            </div>
            <!--Login popup -->
            <div class="modal fade twm-sign-up" id="sign_up_popup2" aria-hidden="true" aria-labelledby="sign_up_popupLabel2" tabindex="-1">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                    
                        <form>
                            <div class="modal-header">
                                <h2 class="modal-title" id="sign_up_popupLabel2">Login</h2>
                                <p>Login and get access to all the features of Jobzilla</p>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <div class="twm-tabs-style-2">
                                    <ul class="nav nav-tabs" id="myTab2" role="tablist">

                                        <!--Login Candidate-->  
                                        <li class="nav-item">
                                            <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#login-candidate" type="button"><i class="fas fa-user-tie"></i>Candidate</button>
                                        </li>
                                        <!--Login Employer-->
                                        <li class="nav-item">
                                            <button class="nav-link" data-bs-toggle="tab" data-bs-target="#login-Employer" type="button"><i class="fas fa-building"></i>Employer</button>
                                        </li>
                                    
                                    </ul>
                                    
                                    <div class="tab-content" id="myTab2Content">
                                        <!--Login Candidate Content-->  
                                        <div class="tab-pane fade show active" id="login-candidate">
                                            <div class="row">

                                                <div class="col-lg-12">
                                                    <div class="form-group mb-3">
                                                        <input name="username" type="text" required="" class="form-control" placeholder="Usearname*">
                                                    </div>
                                                </div>
                                                
                                                <div class="col-lg-12">
                                                    <div class="form-group mb-3">
                                                        <input name="email" type="text" class="form-control" required="" placeholder="Password*">
                                                    </div>
                                                </div>
                                                
                                                
                                                <div class="col-lg-12">
                                                    <div class="form-group mb-3">
                                                        <div class=" form-check">
                                                            <input type="checkbox" class="form-check-input" id="Password3">
                                                            <label class="form-check-label rem-forgot" for="Password3">Remember me <a href="javascript:;">Forgot Password</a></label>
                                                            
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <button type="submit" class="site-button">Log in</button>
                                                    <div class="mt-3 mb-3">Don't have an account ? 
                                                        <button class="twm-backto-login" data-bs-target="#sign_up_popup" data-bs-toggle="modal" data-bs-dismiss="modal">Sign Up</button>
                                                    </div>
                                                </div>
                                                
                                            </div>
                                        </div>
                                        <!--Login Employer Content--> 
                                        <div class="tab-pane fade" id="login-Employer">
                                            <div class="row">

                                                <div class="col-lg-12">
                                                    <div class="form-group mb-3">
                                                        <input name="username" type="text" required="" class="form-control" placeholder="Usearname*">
                                                    </div>
                                                </div>
                                                
                                                <div class="col-lg-12">
                                                    <div class="form-group mb-3">
                                                        <input name="email" type="text" class="form-control" required="" placeholder="Password*">
                                                    </div>
                                                </div>
                                                
                                                
                                                <div class="col-lg-12">
                                                    <div class="form-group mb-3">
                                                        <div class=" form-check">
                                                            <input type="checkbox" class="form-check-input" id="Password4">
                                                            <label class="form-check-label rem-forgot" for="Password4">Remember me <a href="javascript:;">Forgot Password</a></label>
                                                        </div>
                                                    </div>
                                                </div>
                                                
                                                <div class="col-md-12">
                                                    <button type="submit" class="site-button">Log in</button>
                                                    <div class="mt-3 mb-3">Don't have an account ? 
                                                        <button class="twm-backto-login" data-bs-target="#sign_up_popup" data-bs-toggle="modal" data-bs-dismiss="modal">Sign Up</button>
                                                    </div>
                                                </div>
                                                
                                            </div>
                                        </div>
                                    
                                    </div>
                                </div> 
                            </div>
                            <div class="modal-footer">
                                <span class="modal-f-title">Login or Sign up with</span>
                                <ul class="twm-modal-social">
                                    <li><a href="javascript" class="facebook-clr"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="javascript" class="twitter-clr"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="javascript" class="linkedin-clr"><i class="fab fa-linkedin-in"></i></a></li>
                                    <li><a href="javascript" class="google-clr"><i class="fab fa-google"></i></a></li>
                                </ul>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        <!--Model Popup Section End-->

 	</div>


<!-- JAVASCRIPT  FILES ========================================= --> 
 
<script>
        // Function to save job
        function saveJob(button) {
            const user_uin = button.getAttribute('data-user-uin');
            const job_id = button.getAttribute('data-job-id');
            
            // Create an AJAX request
            const xhr = new XMLHttpRequest();
            xhr.open("POST", "save_job.php", true);
            xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
            
            // Handle the response
            xhr.onreadystatechange = function () {
                if (xhr.readyState === 4 && xhr.status === 200) {
                    console.log(xhr.responseText);
                    document.getElementById(job_id).disabled = true
                    alert('job saved successfully');
                 
                }
            };

            // Send the request with the data
            xhr.send("user_uin=" + encodeURIComponent(user_uin) + "&job_id=" + encodeURIComponent(job_id));
        }
    </script>
<script  src="js/jquery-3.6.0.min.js"></script><!-- JQUERY.MIN JS -->
<script  src="js/popper.min.js"></script><!-- POPPER.MIN JS -->
<script  src="js/bootstrap.min.js"></script><!-- BOOTSTRAP.MIN JS -->
<script  src="js/magnific-popup.min.js"></script><!-- MAGNIFIC-POPUP JS -->
<script  src="js/waypoints.min.js"></script><!-- WAYPOINTS JS -->
<script  src="js/counterup.min.js"></script><!-- COUNTERUP JS -->
<script  src="js/waypoints-sticky.min.js"></script><!-- STICKY HEADER -->
<script  src="js/isotope.pkgd.min.js"></script><!-- MASONRY  -->
<script  src="js/imagesloaded.pkgd.min.js"></script><!-- MASONRY  -->
<script  src="js/owl.carousel.min.js"></script><!-- OWL  SLIDER  -->
<script  src="js/theia-sticky-sidebar.js"></script><!-- STICKY SIDEBAR  -->
<script  src="js/lc_lightbox.lite.js" ></script><!-- IMAGE POPUP -->
<script  src="js/bootstrap-select.min.js"></script><!-- Form js -->
<script  src="js/dropzone.js"></script><!-- IMAGE UPLOAD  -->
<script  src="js/jquery.scrollbar.js"></script><!-- scroller -->
<script  src="js/bootstrap-datepicker.js"></script><!-- scroller -->
<script  src="js/jquery.dataTables.min.js"></script><!-- Datatable -->
<script  src="js/dataTables.bootstrap5.min.js"></script><!-- Datatable -->
<script  src="js/chart.js"></script><!-- Chart -->
<script  src="js/bootstrap-slider.min.js"></script><!-- Price range slider -->
<script  src="js/swiper-bundle.min.js"></script><!-- Swiper JS -->
<script  src="js/custom.js"></script><!-- CUSTOM FUCTIONS  -->
<script  src="js/switcher.js"></script><!-- SHORTCODE FUCTIONS  -->

<!-- STYLE SWITCHER  ======= --> 
 
<!-- STYLE SWITCHER END ==== -->

</body>

</html>
