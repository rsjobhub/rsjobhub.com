<!DOCTYPE html>
<html lang="en">

<?php 
include 'includes/candidate_head.php';
 $user->is_user_subscribed();


?>

<body>

    <!-- LOADING AREA START ===== -->
    
    <!-- LOADING AREA  END ====== -->

	<div class="page-wraper">
     
        <!-- HEADER START -->
      <?php include 'includes/navbar.php' ?>
        <!-- HEADER END -->

      
        <!-- CONTENT START -->
        <div class="page-content">

            <!-- INNER PAGE BANNER -->
            <div class="wt-bnr-inr overlay-wraper bg-center" style="background-image:url(images/banner/3.jpg);">
                <div class="overlay-main site-bg-white opacity-01"></div>

                <div class="container">
                <?php
                                                if(isset($_REQUEST['job_id'])){
                                                    $job = new Job;
                                                    $id = $_REQUEST['job_id'];
                                                    $detail = $job->where('job','job_id',$id);
                                                }
                                                ?>
                    <div class="wt-bnr-inr-entry">
                        <div class="banner-title-outer">
                            <div class="banner-title-name">
                                <h2 class="wt-title"><?php echo $detail[0]['job_title'] ?></h2>
                            </div>
                        </div>
                        <!-- BREADCRUMB ROW -->                            
                        
                            
                        
                        <!-- BREADCRUMB ROW END -->                        
                    </div>
                </div>
            </div>
            <!-- INNER PAGE BANNER END -->



            <!-- OUR BLOG START -->
            <div class="section-full  p-t120 p-b90 bg-white">
                <div class="container">
                
                    <!-- BLOG SECTION START -->
                    <div class="section-content">
                        <div class="row d-flex justify-content-center">
                        
                            <div class="col-lg-8 col-md-12">
                                <!-- Candidate detail START -->
                                <div class="cabdidate-de-info">
                                    <div class="twm-job-self-wrap">
                                        <div class="twm-job-self-info">
                                            <div class="twm-job-self-top">
                                                <div class="twm-media-bg">
                                                    <img src="images/job-detail-bg.jpg" alt="#">
                                                    <div class="twm-jobs-category green"><span class="twm-bg-green">New</span></div>
                                                </div>
                                               
                                                
                                                <div class="twm-mid-content">

                                                  

                                                    <h4 class="twm-job-title"><?php echo $detail[0]['job_title'] ?> <span class="twm-job-post-duration"><?php echo $detail[0]['date'] ?></span></h4>
                                                  

                                                    <div class="twm-job-self-bottom">
                                                    <a class="site-button" href="save_click.php?job_id=<?php echo $detail[0]['job_id'] ?>" target="_blank">Apply Here</a>
                                                    <?php
                                                $saved_jobs = $job->get_user_saved_jobs($_SESSION['uin'], $id);
                                                if(count($saved_jobs) > 0){
                                                ?>
                                        <button style="color: white !important; font-size:18px" class="btn btn-small site-button" disabled>Saved</button>
                                            <?php  }else{
                                           
                                           ?>


<button style="color: white !important; font-size:18px" id="<?php echo $id?>" class="btn btn-small site-button custom-toltip" onclick="saveJob(this)" data-user-uin="<?php echo $_SESSION['uin'] ?>" data-job-id="<?php echo $id ?>">
    <span class="fa fa-bookmark"></span>
    <span class="custom-toltip-block">Save Job</span>
    
</button>
                                                <?php } ?>
                                                    </div>
                                                </div>
                                            </div>
                                            
                                        </div>
                                    </div>


                                        <?php
                                      
                                       $content = $detail[0]['description'];
                                       $content = preg_replace(' /<div[^>]*>/', '', $content);
                                       $content = preg_replace(' /<\/div>/', '', $content);
                                       $content = preg_replace('/<a[^>]*>.*?show\s*less.*?<\/a>/i', '', $content);
                                $content = preg_replace('/<button[^>]*>.*?show\s*less.*?<\/button>/i', '', $content);
                                $content = preg_replace('/<span[^>]*>.*?show\s*less.*?<\/span>/i', '', $content);

                                

                                        ?>
                                        <div style="text-align: justify;">
                                        <?php echo $content; ?>
                                        </div>
                                  
                                            
                                  
                                  

                                
                                    
                                </div>
                            </div>
                            
                            <div class="col-lg-4 col-md-12 rightSidebar">

                                <div class="side-bar mb-4">
                                    <div class="twm-s-info2-wrap mb-5">
                                        <div class="twm-s-info2">
                                            <h4 class="section-head-small mb-4">Job Information</h4>
                                            
                                            <ul class="twm-job-hilites2">
    
                                                <li>
                                                    <div class="twm-s-info-inner">
                                                        <i class="fas fa-calendar-alt"></i>
                                                        <span class="twm-title">Date Posted</span>
                                                        <div class="twm-s-info-discription"><?php echo $detail[0]['date'] ?></div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="twm-s-info-inner">
                                                        <i class="fas fa-map-marker-alt"></i>
                                                        <span class="twm-title">Location</span>
                                                        <div class="twm-s-info-discription"> <?php echo $detail[0]['country'] ?></div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="twm-s-info-inner">
                                                        <i class="fas fa-user-tie"></i>
                                                        <span class="twm-title">Job Title</span>
                                                        <div class="twm-s-info-discription"><?php echo $detail[0]['job_title'] ?></div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="twm-s-info-inner">
                                                        <i class="fas fa-user-tie"></i>
                                                        <span class="twm-title">Employment Type</span>
                                                        <div class="twm-s-info-discription"><?php echo $detail[0]['employment_type']; ?></div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="twm-s-info-inner">
                                                        <i class="fas fa-user-tie"></i>
                                                        <span class="twm-title">Job Category</span>
                                                        <div class="twm-s-info-discription"><?php echo $detail[0]['job_category'] ?></div>
                                                    </div>
                                                </li>
                                              
                                                <li>
                                                    <div class="twm-s-info-inner">
                                                        <i class="fas fa-user-tie"></i>
                                                        <span class="twm-title">Job Type</span>
                                                        <div class="twm-s-info-discription"><?php echo $detail[0]['job_type'] ?></div>
                                                    </div>
                                                </li>
                                              
                                                
                                               
                                                <li>
                                                    <div class="twm-s-info-inner">
                                                        
                                                        <i class="fas fa-money-bill-wave"></i>
                                                        <span class="twm-title">Offered Salary</span>
                                                        
                                                        <div class="twm-s-info-discription"><?php

                                                        if(!empty($detail[0]['salary'])){
                                                            echo $detail[0]['salary']; 


                                                        }else{
                                                            echo 'not specified';
                                                        }
                                                          
                                                         ?>
                                                         </div>
                                                    </div>
                                                </li>
    
                                            </ul>
                                            
                                        </div>
                                    </div>
    
                                

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
       <?php include 'includes/footer.php'; ?>
        <!-- FOOTER END -->

        <!-- BUTTON TOP START -->
		<button class="scroltop"><span class="fa fa-angle-up  relative" id="btn-vibrate"></span></button>

        <!--apply job popup -->
      

       

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
