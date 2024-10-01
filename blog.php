<!DOCTYPE html>
<html lang="en">

<?php

include 'includes/candidate_head.php';
 $user->is_user_subscribed();


?>

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
                                <h2 class="wt-title">Blog</h2> <br>

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
                        <div class="col-lg-8 col-md-12">

                            <div class="masonry-wrap row d-flex">
                                <!--Block one-->
                                <?php 
                                $community = new Community;
                                $posts = $community->get_all('blog');

                                foreach($posts as $post){

                              

                                ?>
                                
                                <div class="masonry-item col-lg-6 col-md-12">

                                    <div class="blog-post twm-blog-post-1-outer">
                                        <!-- <div class="wt-post-media">
                                            <a href="blog-single.html"><img src="images/blog/latest/bg1.jpg" alt=""></a>
                                        </div>                                     -->
                                        <div class="wt-post-info">
                                            <div class="wt-post-meta ">
                                                <ul>
                                                    <li class="post-date"><?php echo $post['date']; ?></li>
                                                    <?php
                                                     $poster = $community->where('users','uin',$_SESSION['uin']);
                                                            $firstname = $poster[0]['first_name'];
                                                            $lastname = $poster[0]['last_name'];
                                                    
                                                    ?>

                                                    <li class="post-author">By <a href=""><?php echo $firstname.' '.$lastname; ?></a></li>
                                                </ul>
                                            </div>
                                            <div class="wt-post-title ">
                                                <h4 class="post-title">
                                                    <a href="single_blog.php?post_id=<?php echo $post['post_id'] ?>"><?php echo $post['title'] ?></a>
                                                </h4>
                                            </div>
                                            <div class="wt-post-text ">
                                                <p>
                                                <?php echo substr($post['body'],0,80) ?>                                                </p>
                                            </div>
                                            <div class="wt-post-readmore ">
                                                <a href="single_blog.php?post_id=<?php echo $post['post_id'] ?>" class="site-button-link site-text-primary">Read More</a>
                                            </div>                                        
                                        </div>                                
                                    </div>

                                </div>

                                <?php } ?>
                                
                                

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

                        <div class="col-lg-4 col-md-12 rightSidebar">

                            <div class="side-bar">
                                <div class="widget search-bx">
                                                                            
                                    <form role="search" method="post">
                                        <div class="input-group">
                                            <input type="text" class="form-control" placeholder="Search">
                                            <button class="btn" type="button" id="button-addon2"><i class="feather-search"></i></button>
                                        </div>
                                    </form>
                                    
                                </div>

                                <!-- <div class="widget all_services_list">
                                    <h4 class="section-head-small mb-4">Categories</h4> 
                                    <div class="all_services m-b30">
                                        <ul>
                                            <li><a href="job-detail.html">Categories</a> <span class="badge">08</span></li>
                                            <li><a href="job-detail.html">Education</a> <span class="badge">12</span></li>
                                            <li><a href="job-detail.html">Information</a><span class="badge">15</span></li>
                                            <li><a href="job-detail.html">Jobs</a><span class="badge">25</span></li>
                                            <li><a href="job-detail.html">Learn</a><span class="badge">36</span></li>
                                            <li><a href="job-detail.html">Skill</a><span class="badge">12</span></li>
                                        </ul>
                                    </div>
                                </div> -->

                                <div class="widget recent-posts-entry">
                                    <h4 class="section-head-small mb-4">Recent Article</h4>
                                    <div class="section-content">
                                        <div class="widget-post-bx">

                                            <div class="widget-post clearfix">
                                                <div class="wt-post-media">
                                                    <img src="images/blog/recent-blog/pic1.jpg" alt="">
                                                </div>
                                                <div class="wt-post-info">
                                                    <div class="wt-post-header">
                                                        <span class="post-date">April 08,    2024</span>
                                                        <span class="post-title"> 
                                                            <a href="blog-single.html">Equipment you can count on. People you can trust.</a>
                                                        </span>
                                                    </div>                                                    
                                                </div>
                                            </div>

                                            <div class="widget-post clearfix">
                                                <div class="wt-post-media">
                                                    <img src="images/blog/recent-blog/pic2.jpg" alt="">
                                                </div>
                                                <div class="wt-post-info">
                                                    <div class="wt-post-header">
                                                        <span class="post-date">April 12,    2024</span>
                                                        <span class="post-title">
                                                            <a href="blog-single.html">Advanced Service Functions by Air Transport</a>
                                                        </span>
                                                    </div>                                                    
                                                </div>
                                            </div>

                                            <div class="widget-post clearfix">
                                                <div class="wt-post-media">
                                                    <img src="images/blog/recent-blog/pic3.jpg" alt="">
                                                </div>
                                                <div class="wt-post-info">
                                                    <div class="wt-post-header">
                                                        <span class="post-date">April 15,    2024</span>
                                                        <span class="post-title">
                                                            <a href="blog-single.html">Proper arrangement for keeping the goods in the warehouse</a>
                                                        </span>
                                                    </div>                                                    
                                                </div>
                                            </div>

                                            <div class="widget-post clearfix">
                                                <div class="wt-post-media">
                                                    <img src="images/blog/recent-blog/pic4.jpg" alt="">
                                                </div>
                                                <div class="wt-post-info">
                                                    <div class="wt-post-header">
                                                        <span class="post-date">April 18,    2024</span>
                                                        <span class="post-title">
                                                            <a href="blog-single.html">Equipment you can count on. People you can trust.</a>
                                                        </span>
                                                    </div>                                                    
                                                </div>
                                            </div>

                                            <div class="widget-post clearfix">
                                                <div class="wt-post-media">
                                                    <img src="images/blog/recent-blog/pic5.jpg" alt="">
                                                </div>
                                                <div class="wt-post-info">
                                                    <div class="wt-post-header">
                                                        <span class="post-date">April 20,    2024</span>
                                                        <span class="post-title">
                                                            <a href="blog-single.html">Proper arrangement for keeping the goods in the warehouse</a>
                                                        </span>
                                                    </div>                                                    
                                                </div>
                                            </div>
                                                
                                        </div>
                                    </div>
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
