<!DOCTYPE html>
<html lang="en">


<?php include 'includes/candidate_head.php' ?>



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
                                <h2 class="wt-title">The Most Exciting Remote Jobs</h2>
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
                                                
        <form method="POST" action="search_results.php?a=remote">
            <?php
            $Job = new Job;
            
            ?>
           

            <div class="form-group mb-4">
                <h4 class="section-head-small mb-4">Category</h4>
                <select name="category" class="wt-select-bar-large selectpicker"  data-live-search="true" data-bv-field="size">
                     <option value="">--Select job category--</option>

                                            <option value="Accountacy">Accountacy</option>
                                            <option value="Admin">Admin</option>
                                            <option value="Secretariel & PA">Secretariel & PA</option>
                                            <option value="Architecture">Architecture</option>
                                            <option value="Automobile & Mototring">Automobile & Mototring</option>
                                            <option value="Charity & Voluntary">Charity & Voluntary</option>
                                            <option value="Automobile">Automobile</option>
                                            <option value="Construction & Property">Construction & Property"</option>
                                            <option value="Customer Service">Customer Service</option>
                                            <option value="Education">Education</option>
                                            <option value="Energy">Energy</option>
                                            <option value="Engineering">Engineering</option>
                                            <option value="Environmental">Environmental</option>
                                            <option value="Estate">Estate</option>
                                            <option value="Agency">Agency</option>
                                            <option value="Financial Services">Financial Services</option>
                                            <option value="FMCG">FMCG</option>
                                            <option value="Health & Social Care">Health & Social Care</option>
                                            <option value="Hospitality & Catering">Hospitality & Catering</option>
                                            <option value="Human Resources">Human Resources</option>
                                            <option value="Insurance">Insurance</option>
                                            <option value="IT & Telecoms">IT & Telecoms</option>
                                            <option value="Legal">Legal</option>
                                            <option value="Leisure & Tourism">Leisure & Tourism</option>
                                            <option value="Manufacturing">Manufacturing</option>
                                            <option value="Marketing & PR">Marketing & PR</option>
                                            <option value="Media">Media</option>
                                            <option value="Digital & Creative">Digital & Creative</option>
                                            <option value="NHS Jobs">NHS Jobs</option>
                                            <option value="Public Sector">Public Sector</option>
                                            <option value="Recruitment">Recruitment</option>
                                            <option value="Religion">Religion</option>
                                            <option value="Retail">Retail</option>
                                            <option value="Sales">Sales</option>
                                            <option value="Scientific Security & Safety">Scientific Security & Safety</option>
                                            <option value="Strategy & Consultancy">Strategy & Consultancy</option>
                                            <option value="Training">Training</option>
                                            <option value="Transport & Logistics">Transport & Logistics</option>
                </select>
            </div>

            <div class="form-group mb-4">
                <h4 class="section-head-small mb-4">Keyword</h4>
                <div class="input-group">
                    <input name="keyword" type="text" class="form-control" placeholder="Job Title or Keyword">
                    <button class="btn" type="button"><i class="feather-search"></i></button>
                </div>
            </div>

            <div class="form-group mb-4">
                <h4 class="section-head-small mb-4">Location</h4>
                <div class="input-group">
                    <input name="location" type="text" class="form-control" placeholder="type in country or city">
                    <button class="btn" type="button"><i class="feather-map-pin"></i></button>
                </div>
            </div>

            <div class="twm-sidebar-ele-filter">
                <h4 class="section-head-small mb-4">Employment Type</h4>
                <ul>
                    <li>
                        <div class=" form-check">
                            <input value="Freelance" name="type[]" type="checkbox" class="form-check-input" id="exampleCheck1">
                            <label class="form-check-label" for="exampleCheck1">Freelance</label>
                        </div>
                        <span class="twm-job-type-count">426</span>
                    </li>

                    <li>
                        <div class=" form-check">
                            <input value="Full time" name="type[]" type="checkbox" class="form-check-input" id="exampleCheck2">
                            <label class="form-check-label" for="exampleCheck2">Full Time</label>
                        </div>
                        <span class="twm-job-type-count">362</span>
                    </li>

                    <li>
                        <div class=" form-check">
                            <input value="Part Time" name="type[]" type="checkbox" class="form-check-input" id="exampleCheck3">
                            <label class="form-check-label" for="exampleCheck3">Part Time</label>
                        </div>
                        <span class="twm-job-type-count">115</span>
                    </li>

                    <li>
                        <div class=" form-check">
                            <input value="Contract" name="type[]" type="checkbox" class="form-check-input" id="exampleCheck4">
                            <label class="form-check-label" for="exampleCheck4">Contract</label>
                        </div>
                        <span class="twm-job-type-count">178</span>
                    </li>

                    <li>
                        <div class=" form-check">
                            <input value="Internship" name="type[]" type="checkbox" class="form-check-input" id="exampleCheck5">
                            <label class="form-check-label" for="exampleCheck5">Internship</label>
                        </div>
                        <span class="twm-job-type-count">292</span>
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

           <button name="search" type="submit" class="btn btn-primary">Search</button>

            
        </form>
        
    </div>



    
</div>


</div>
                        
                      
                    <?php
                                    
                        $jobs = $Job->where('job','job_type','remote');
                                                            // Step 1: Define limit
                       include 'includes/paginate.php';


                                 

                                        $keys = array_keys($data);
                                    
                                        shuffle($keys);
                                    
                                        $shuffled_array = array();
                                    
                                        foreach ($keys as $key) {
                                    
                                            $shuffled_array[$key] = $data[$key];
                                    
                                        }
                                    
                                        $data =  $shuffled_array;
                                       
                                    
                                    
                                   
                                    ?>
                        <div class="col-lg-8 col-md-12">
                            <!--Filter Short By-->
                            <div class="product-filter-wrap d-flex justify-content-between align-items-center m-b30">
                                <span class="woocommerce-result-count-left">Showing <?php echo $start.' to '.$end.' of '.count($jobs) ?> jobs</span>
                               
                            

                            </div>

                            <div class="col-lg-12 twm-jobs-list-wrap">
                                <ul>
                                    <?php
                              

                                    foreach($data as $job){
                                       
                                    

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
                                                <?php } ?>
                                              
                                            </div>
                                           
                                        </div>
                                     </li>

 


    
                                   <?php }?>
    
                                
                                </ul>
                            </div>

                            

                            <?php
                            include 'includes/pagination_links.php';
                            ?>


                        </div>

                    </div>
                </div>
            </div>   
            <!-- OUR BLOG END -->
          
            
     
        </div>
        <!-- CONTENT END -->

        <?php include 'includes/footer.php'; ?>


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
