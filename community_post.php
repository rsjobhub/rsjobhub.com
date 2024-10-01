<!DOCTYPE html>
<html lang="en">

<?php 
include 'includes/candidate_head.php';
$user->is_user_subscribed();



?>

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
     <?php include 'includes/navbar.php'; ?>
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
                            <h2 class="wt-title">Community</h2>
                            </div>
                        </div>
                        <!-- BREADCRUMB ROW -->                            
                        
                            
                        
                        <!-- BREADCRUMB ROW END -->                        
                    </div>
                </div>
            </div>
            <!-- INNER PAGE BANNER END -->
           
            <!-- CONTACT FORM -->
            <div class="section-full twm-contact-one">   
                <div class="section-content">
                    <div class="container">
                            
                        <!-- CONTACT FORM-->
                            <div class="row">

                                <div class="col-lg-12 col-md-12">
                                    <div class="contact-form-outer">

                                        <!-- TITLE START-->
                                        <div class="section-head left wt-small-separator-outer">
                                            <h2 class="wt-title">Add a post</h2>
                                            <p>Feel free to post useful information to other users, ask questions, give answers, e.t.c</p>
                                        </div>
                                        <!-- TITLE END--> 

                                        <form  class="" method="POST">
                                          
                                            <div class="row">
                                            <?php
                                            $community = new Community;
                                            $community->insert_post();
                                            
                                            
                                            
                                            ?>

                                                <div class="col-lg-12 col-md-12">
                                                    <div class="mb-3">
                                                        <label for="">Post Title</label>
                                                        <input name="title" type="text" required class="form-control" placeholder="Post title">
                                                    </div>
                                                </div>
                                                
                                                <div class="col-lg-12 col-md-12">
                                                    <div class="mb-3">
                                                        <label for="">Post Category</label>
                                            <select required class="form-control" data-trigger="" name="category">
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
                                        </select>                                                    </div>
                                                </div>
                                                
                                             
                                                
                                               
                                                
                                                <div class="col-lg-12">
                                                    <div class="form-group mb-3">
                                                        <label for="">Post body</label>
                                                    <textarea style="height: 170px !important;" name="body" class="form-control" rows="4" placeholder="post body"></textarea>
                                                    </div>
                                                </div>
                                                
                                                <div class="col-md-12">
                                                    <input name="submit" type="submit" class="btn btn-primary" value="Add Post">
                                                </div>
                                                
                                            </div>
                                        </form>
                                    </div>
                                </div> 

                                <!-- <div class="col-lg-6 col-md-12">
                                    <div class="contact-info-wrap">

                                        <div class="contact-info">
                                            <div class="contact-info-section">  
                                                    
                                                    <div class="c-info-column">
                                                        <div class="c-info-icon"><i class=" fas fa-map-marker-alt"></i></div>
                                                        <h3 class="twm-title">In the bay area?</h3>
                                                        <p>1363-1385 Sunset Blvd Los Angeles, CA 90026, USA</p>
                                                    </div>  

                                                    <div class="c-info-column">
                                                        <div class="c-info-icon custome-size"><i class="fas fa-mobile-alt"></i></div>
                                                        <h3 class="twm-title">Feel free to contact us</h3>
                                                        <p><a href="tel:+216-761-8331">+2 900 234 4241</a></p>
                                                        <p><a href="tel:+216-761-8331">+2 900 234 3219</a></p>
                                                    </div>

                                                    <div class="c-info-column">
                                                        <div class="c-info-icon"><i class="fas fa-envelope"></i></div>
                                                        <h3 class="twm-title">Support</h3>
                                                        <p>infohelp@gmail.com</p>
                                                        <p>support12@gmail.com</p>
                                                    </div>
                                            
                                            </div>
                                        </div>

                                    </div>
                                </div> -->

                        </div>
                        
                    </div>
                    
                </div>
            </div> <br>
            <!-- <div class="gmap-outline">
                <div class="google-map">
                    <div style="width: 100%">
                        <iframe height="460" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3304.8534521658976!2d-118.2533646842856!3d34.073270780600225!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80c2c6fd9829c6f3%3A0x6ecd11bcf4b0c23a!2s1363%20Sunset%20Blvd%2C%20Los%20Angeles%2C%20CA%2090026%2C%20USA!5e0!3m2!1sen!2sin!4v1620815366832!5m2!1sen!2sin"></iframe>
                    </div>
                </div>
            </div> -->
      

        </div>
        <!-- CONTENT END -->

        <!-- FOOTER START -->
        <?php include 'includes/footer.php'; ?>
        <!-- FOOTER END -->

        <!-- BUTTON TOP START -->
		<button class="scroltop"><span class="fa fa-angle-up  relative" id="btn-vibrate"></span></button>

      

 	</div>



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
