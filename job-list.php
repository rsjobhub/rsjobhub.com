<!DOCTYPE html>
<html lang="en">


<?php include 'includes/candidate_head.php' ?>
<style>
@media(min-width:1280px){
    .rightog{
        margin-right: 100px !important;
    }

}


</style>

<body>


    <!-- LOADING AREA START ===== -->
    <div class="loading-area">
        <div class="loading-box"></div>
        <div class="loading-pic">
            <div class="wrapper">
                <div class="cssload-loader"></div>
            </div>
        </div>
    </div>
    <!-- LOADING AREA  END ====== -->   

	<div class="page-wraper">
     
        <!-- HEADER START -->
       <?php include 'includes/navbar.php' ?>
        <!-- HEADER END -->

      
        <!-- CONTENT START -->
        <div class="page-content">

            <!-- INNER PAGE BANNER -->
            <div class="wt-bnr-inr overlay-wraper bg-center" style="background-image:url(images/banner/1.jpg);">
                <div class="overlay-main site-bg-white opacity-01"></div>
                <div class="container">
                    <div class="wt-bnr-inr-entry">
                        <div class="banner-title-outer">
                            <div class="banner-title-name">
                                <h2 class="wt-title">The Most Exciting Jobs</h2>
                            </div>
                        </div>
                        <!-- BREADCRUMB ROW -->                            
                        
                            <div>
                                <ul class="wt-breadcrumb breadcrumb-style-2">
                                    <li><a href="      index.php">Home</a></li>
                                    <li>Jobs List</li>
                                </ul>
                            </div>
                        
                        <!-- BREADCRUMB ROW END -->                        
                    </div>
                </div>
            </div>
            <!-- INNER PAGE BANNER END -->


            <!-- OUR BLOG START -->
            <div class="section-full p-t120  p-b90 site-bg-white">
                

                <div class="container">
                    <div class="row">

                    <div class="col-lg-4 col-md-12 rightSidebar">

<div class="side-bar">

    <div class="sidebar-elements search-bx">
                                                
        <form>

            <div class="form-group mb-4">
                <h4 class="section-head-small mb-4">Category</h4>
                <select class="wt-select-bar-large selectpicker"  data-live-search="true" data-bv-field="size">
                    <option>All Category</option>
                    <option>Web Designer</option>
                    <option>Developer</option>
                    <option>Acountant</option>
                </select>
            </div>

            <div class="form-group mb-4">
                <h4 class="section-head-small mb-4">Keyword</h4>
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Job Title or Keyword">
                    <button class="btn" type="button"><i class="feather-search"></i></button>
                </div>
            </div>

            <div class="form-group mb-4">
                <h4 class="section-head-small mb-4">Location</h4>
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search location">
                    <button class="btn" type="button"><i class="feather-map-pin"></i></button>
                </div>
            </div>

            <div class="twm-sidebar-ele-filter">
                <h4 class="section-head-small mb-4">Job Type</h4>
                <ul>
                    <li>
                        <div class=" form-check">
                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                            <label class="form-check-label" for="exampleCheck1">Freelance</label>
                        </div>
                        <span class="twm-job-type-count">09</span>
                    </li>

                    <li>
                        <div class=" form-check">
                            <input type="checkbox" class="form-check-input" id="exampleCheck2">
                            <label class="form-check-label" for="exampleCheck2">Full Time</label>
                        </div>
                        <span class="twm-job-type-count">07</span>
                    </li>

                    <li>
                        <div class=" form-check">
                            <input type="checkbox" class="form-check-input" id="exampleCheck3">
                            <label class="form-check-label" for="exampleCheck3">Internship</label>
                        </div>
                        <span class="twm-job-type-count">15</span>
                    </li>

                    <li>
                        <div class=" form-check">
                            <input type="checkbox" class="form-check-input" id="exampleCheck4">
                            <label class="form-check-label" for="exampleCheck4">Part Time</label>
                        </div>
                        <span class="twm-job-type-count">20</span>
                    </li>

                    <li>
                        <div class=" form-check">
                            <input type="checkbox" class="form-check-input" id="exampleCheck5">
                            <label class="form-check-label" for="exampleCheck5">Temporary</label>
                        </div>
                        <span class="twm-job-type-count">22</span>
                    </li>

                    <li>
                        <div class=" form-check">
                            <input type="checkbox" class="form-check-input" id="exampleCheck6">
                            <label class="form-check-label" for="exampleCheck6">Volunteer</label>
                        </div>
                        <span class="twm-job-type-count">25</span>
                    </li>

                </ul>
            </div>

            <div class="twm-sidebar-ele-filter">
                <h4 class="section-head-small mb-4">Date Posts</h4>
                <ul>
                    <li>
                        <div class="form-check">
                            <input type="radio" class="form-check-input" id="exampleradio1">
                            <label class="form-check-label" for="exampleradio1">Last hour</label>
                        </div>
                    </li>
                    <li>
                        <div class="form-check">
                            <input type="radio" class="form-check-input" id="exampleradio2">
                            <label class="form-check-label" for="exampleradio2">Last 24 hours</label>
                        </div>
                    </li>

                    <li>
                        <div class="form-check">
                            <input type="radio" class="form-check-input" id="exampleradio3">
                            <label class="form-check-label" for="exampleradio3">Last 7 days</label>
                        </div>
                    </li>

                    <li>
                        <div class="form-check">
                            <input type="radio" class="form-check-input" id="exampleradio4">
                            <label class="form-check-label" for="exampleradio4">Last 14 days</label>
                        </div>
                    </li>

                    <li>
                        <div class="form-check">
                            <input type="radio" class="form-check-input" id="exampleradio5">
                            <label class="form-check-label" for="exampleradio5">Last 30 days</label>
                        </div>
                    </li>

                    <li>
                        <div class="form-check">
                            <input type="radio" class="form-check-input" id="exampleradio6">
                            <label class="form-check-label" for="exampleradio6">All</label>
                        </div>
                    </li>
 
                </ul>
            </div>

            <div class="twm-sidebar-ele-filter">
                <h4 class="section-head-small mb-4">Type of employment</h4>
                <ul>
                    <li>
                        <div class="form-check">
                            <input type="radio" class="form-check-input" id="Freelance1">
                            <label class="form-check-label" for="Freelance1">Freelance</label>
                        </div>
                    </li>
                    <li>
                        <div class="form-check">
                            <input type="radio" class="form-check-input" id="FullTime1">
                            <label class="form-check-label" for="FullTime1">Full Time</label>
                        </div>
                    </li>

                    <li>
                        <div class="form-check">
                            <input type="radio" class="form-check-input" id="Intership1">
                            <label class="form-check-label" for="Intership1">Intership</label>
                        </div>
                    </li>

                    <li>
                        <div class="form-check">
                            <input type="radio" class="form-check-input" id="Part-Time1">
                            <label class="form-check-label" for="Part-Time1">Part Time</label>
                        </div>
                    </li>
 
                </ul>
            </div>
            
        </form>
        
    </div>

    <div class="widget tw-sidebar-tags-wrap">
        <h4 class="section-head-small mb-4">Tags</h4>
        
        <div class="tagcloud">
            <a href="job-list.html">General</a>
            <a href="job-list.html">Jobs </a>
            <a href="job-list.html">Payment</a>                                            
            <a href="job-list.html">Application </a>
            <a href="job-list.html">Work</a>
            <a href="job-list.html">Recruiting</a>
            <a href="job-list.html">Employer</a>
            <a href="job-list.html">Income</a>
            <a href="job-list.html">Tips</a>
        </div>
    </div>

    
</div>

<div class="twm-advertisment" style="background-image:url(images/add-bg.jpg);">
   <div class="overlay"></div>
   <h4 class="twm-title">Recruiting?</h4>
   <p>Get Best Matched Jobs On your <br>
    Email. Add Resume NOW!</p>
    <a href="about-1.html" class="site-button white">Read More</a> 
</div>

</div>
                        
                      
                    <?php
                                    $Job = new Job;
                                    $jobs = $Job->get_all_jobs();
                                    ?>
                        <div class="col-lg-8 col-md-12">
                            <!--Filter Short By-->
                            <div class="product-filter-wrap d-flex justify-content-between align-items-center m-b30">
                                <span class="woocommerce-result-count-left">Showing <?php echo count($jobs) ?> jobs</span>
                               
                            

                            </div>

                            <div class="col-lg-12 twm-jobs-list-wrap">
                                <ul>
                                    <?php
                              

                                    foreach($jobs as $job){
                                       
                                    

                                    ?>

                                     <li>
                                        <div class="twm-jobs-list-style1 mb-5">
                                            <div class="twm-media">
                                                <img src="images/oglogo/logo2.png" alt="#">
                                            </div>
                                            <div class="twm-mid-content">
                                                <a href="job-detail.html" class="twm-job-title">
                                                    <h4 class="twm-job-title"><?php echo $job['job_title'];?><span class="twm-job-post-duration"> /<?php echo $job['date']; ?></span></h4>
                                                </a>
                                                <p class="twm-job-address"><?php echo $job['description'];?></p>

                                      

                                 
                                            
                                            </div>
                                            <div class="twm-right-content rightog">
                                           
                                                <div class="twm-jobs-category green"><span   class="twm-bg-purple" style="margin-right: 10px !important;"><small><?php echo $job['job_category'];?></small></span><span class="twm-bg-purple"><small><?php echo $job['job_type'];?></small></span></div>
                                                <div class="twm-jobs-amount">$<?php echo $job['salary'];?> <span>/ Month</span></div>
                                             
                                                <a href="<?php echo $Job->ensureFullUrl($job['job_link']);?>" class="twm-jobs-browse site-text-primary" target="_blank"> Click here to apply</a> <br>
                                                <?php
                                                $saved_jobs = $Job->get_user_saved_jobs($_SESSION['uin'], $job['job_id']);
                                                if(count($saved_jobs) > 0){
                                                ?>
                                        <button style="color: white !important;" class="btn btn-small twm-bg-purple" disabled><span class="fa fa-bookmark"></span></button>
                                            <?php  }else{
                                           
                                           ?>


<button style="color: white !important;" id="<?php echo $job['job_id'];?>" class="btn btn-small twm-bg-purple custom-toltip" onclick="saveJob(this)" data-user-uin="<?php echo $_SESSION['uin'] ?>" data-job-id="<?php echo $job['job_id'] ?>">
    <span class="fa fa-bookmark"></span>
    <span class="custom-toltip-block">Save Job</span>
    
</button>
                                                <?php } ?>
                                              
                                            </div>
                                           
                                        </div>
                                     </li>

 


    
                                   <?php }?>
    
                                
                                </ul>
                            </div>

                            

                            <div class="pagination-outer">
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
                            </div>

                        </div>

                    </div>
                </div>
            </div>   
            <!-- OUR BLOG END -->
          
            
     
        </div>
        <!-- CONTENT END -->

        <!-- FOOTER START -->
        <footer class="footer-dark" style="background-image: url(images/f-bg.jpg);">
            <div class="container">

                <!-- NEWS LETTER SECTION START -->
                <div class="ftr-nw-content">
                    <div class="row">
                        <div class="col-md-5">
                            <div class="ftr-nw-title">
                                Join our email subscription now to get updates 
                                on new jobs and notifications.
                            </div>
                        </div>
                        <div class="col-md-7">
                            <form>
                                <div class="ftr-nw-form">
                                    <input name="news-letter" class="form-control" placeholder="Enter Your Email" type="text">
                                    <button class="ftr-nw-subcribe-btn">Subscribe Now</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- NEWS LETTER SECTION END -->
                <!-- FOOTER BLOCKES START -->  
                <div class="footer-top">
                    <div class="row">

                        <div class="col-lg-3 col-md-12">
                            
                            <div class="widget widget_about">
                                <div class="logo-footer clearfix">
                                    <a href="      index.php"><img src="images/logo-light.png" alt=""></a>
                                </div>
                                <p>Many desktop publishing packages and web page editors now.</p>
                                <ul class="ftr-list">
                                    <li><p><span>Address :</span>65 Sunset CA 90026, USA </p></li>
                                    <li><p><span>Email :</span>example@max.com</p></li>
                                    <li><p><span>Call :</span>555-555-1234</p></li>
                                </ul>
                            </div>                            
                            
                        </div> 

                        <div class="col-lg-9 col-md-12">
                            <div class="row">
                               
                                <div class="col-lg-3 col-md-6 col-sm-6">
                                    <div class="widget widget_services ftr-list-center">
                                        <h3 class="widget-title">For Candidate</h3>
                                        <ul>
                                            <li><a href="dashboard.html">User Dashboard</a></li>
                                            <li><a href="dash-resume-alert.html">Alert resume</a></li>
                                            <li><a href="candidate-grid.html">Candidates</a></li>
                                            <li><a href="blog-list.html">Blog List</a></li>
                                            <li><a href="blog-single.html">Blog single</a></li>
                                        </ul>
                                    </div>
                                </div>
                            
                                <div class="col-lg-3 col-md-6 col-sm-6">
                                    <div class="widget widget_services ftr-list-center">
                                        <h3 class="widget-title">For Employers</h3>
                                        <ul>
                                            <li><a href="dash-post-job.html">Post Jobs</a></li>
                                            <li><a href="blog-grid.html">Blog Grid</a></li>
                                            <li><a href="contact.html">Contact</a></li>
                                            <li><a href="job-list.html">Jobs Listing</a></li>
                                            <li><a href="job-detail.html">Jobs details</a></li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="col-lg-3 col-md-6 col-sm-6">
                                    <div class="widget widget_services ftr-list-center">
                                        <h3 class="widget-title">Helpful Resources</h3>
                                        <ul>
                                            <li><a href="faq.html">FAQs</a></li>
                                            <li><a href="employer-detail.html">Employer detail</a></li>
                                            <li><a href="dash-my-profile.html">Profile</a></li>
                                            <li><a href="error-404.html">404 Page</a></li>
                                            <li><a href="pricing.html">Pricing</a></li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="col-lg-3 col-md-6 col-sm-6">  
                                    <div class="widget widget_services ftr-list-center">
                                        <h3 class="widget-title">Quick Links</h3>
                                        <ul>
                                            <li><a href="      index.php">Home</a></li>
                                            <li><a href="about-1.html">About us</a></li>
                                            <li><a href="dash-bookmark.html">Bookmark</a></li>
                                            <li><a href="job-grid.html">Jobs</a></li>
                                            <li><a href="employer-list.html">Employer</a></li>
                                        </ul>
                                    </div>
                                </div>

                            </div>  

                        </div> 

                    </div>
                </div>
                <!-- FOOTER COPYRIGHT -->
                <div class="footer-bottom">
                
                    <div class="footer-bottom-info">
                    
                        <div class="footer-copy-right">
                            <span class="copyrights-text">Copyright ©    2024 by     All Rights Reserved.</span>
                        </div>
                        <ul class="social-icons">
                            <li><a href="javascript:void(0);" class="fab fa-facebook-f"></a></li>
                            <li><a href="javascript:void(0);" class="fab fa-twitter"></a></li>
                            <li><a href="javascript:void(0);" class="fab fa-instagram"></a></li>
                            <li><a href="javascript:void(0);" class="fab fa-youtube"></a></li>
                        </ul>
                        
                    </div>
                    
                </div>

            </div>
    
        </footer>
        <!-- FOOTER END -->

        <!-- BUTTON TOP START -->
		<button class="scroltop"><span class="fa fa-angle-up  relative" id="btn-vibrate"></span></button>

        <!--Model Popup Section Start-->
         
 	</div>


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
<!-- JAVASCRIPT  FILES ========================================= --> 
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
