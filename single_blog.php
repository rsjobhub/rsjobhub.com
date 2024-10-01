<?php ob_start(); ?>
<!DOCTYPE html>
<html lang="en">

<?php include 'includes/candidate_head.php';
         $user->is_user_subscribed();


?>

<body>

    <!-- LOADING AREA START ===== -->
  
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
                                <h2 class="wt-title">Blog detail</h2>
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
                                <!-- BLOG START -->
                                <div class="blog-post-single-outer">
                                    <div class="blog-post-single bg-white">                                    
                                        <?php
                                        $community = new Community;
                                        $post = $community->blog_detail();

                                        $poster = $community->where('users','uin',$_SESSION['uin']);
                                        $firstname = $poster[0]['first_name'];
                                        $lastname = $poster[0]['last_name'];
                                        ?>
                                        <div class="wt-post-info">
                            
                                            <div class="wt-post-title ">
                                                <div class="wt-post-meta-list">
                                                    <div class="wt-list-content post-date"><?php echo $post[0]['date'] ?></div>
                                                    <div class="wt-list-content post-author"><?php echo $firstname.' '.$lastname; ?></div>
                                                </div> 
                                                <h4 class="post-title"><?php echo $post[0]['title'] ?></h4>
                                                
                                            </div>
                                            
                                            <div class="wt-post-discription">

                                                <p>
                                                <?php echo $post[0]['body'] ?>
                                                </p>
                                                
                                               

                                             

                                               
                                            </div> 
                                            

                                          
                                            
                                            
                                            
                                        </div>

                                        

                                    </div>

                                    <!-- <div class="post-area-tags-wrap">
                                        <div class="post-social-icons-wrap">
                                            <h4 class="mb-4">Share</h4>
                                            <ul class="post-social-icons">
                                                <li><a href="javascript:void(0);" class="fab fa-facebook-f"></a></li>
                                                <li><a href="javascript:void(0);" class="fab fa-twitter"></a></li>
                                                <li><a href="javascript:void(0);" class="fab fa-linkedin-in"></a></li>
                                                <li><a href="javascript:void(0);" class="fab fa-google"></a></li>
                                            </ul>
                                        </div>
                                    </div> -->
                                    
                                                                 

                                    <div class="clear" id="comment-list">
                                        <div class="comments-area" id="comments">
                                            <h3 class="section-head-small mb-4">Comments</h3>
                                            <div>
                                                <!-- COMMENT LIST START -->
                                                <ol class="comment-list">
                                                <?php
                                                            $comments = $community->where('blog_comment','post_id', $post[0]['post_id']);
                                                            foreach($comments as $comment){
                                                                $user = $community->where('users','uin',$comment['user_id']);
                                                           

                                                            ?>
                                                    <li class="comment">
                                                        <!-- COMMENT BLOCK -->
                                                        <div class="comment-body">

                                                            <!-- <div class="comment-author">
                                                                <div class="comment-meta">
                                                                    <a href="javascript:void(0);">Apr 05,    2024</a>
                                                                </div>
                                                            </div> -->
                                                          
                                                            <div class="comment-info">                                                
                                                                <cite class="fn"> <?php echo $user[0]['first_name'].''.$user[0]['last_name'];?></cite>
                                                                <!-- <div class="reply">
                                                                    <a href="javscript:;" class="comment-reply-link">Reply</a>
                                                                </div>                                         -->
                                                                <p>
                                                                    <?php echo $comment['comment'];?>
                                                                </p>
                                                            </div>
                                                          

                                                        </div>
                                                    </li>
                                                    <?php } ?>
                                        
                                                </ol>
                                                <!-- COMMENT LIST END -->
                                                
                                                <!-- LEAVE A REPLY START -->
                                                <div class="comment-respond m-t30" id="respond">
                    
                                                    <h3 class="comment-reply-title section-head-small mb-4" id="reply-title">Leave a reply
                                                        <small>
                                                            <a style="display:none;" href="#" id="cancel-comment-reply-link" rel="nofollow">Cancel reply</a>
                                                        </small>
                                                    </h3>
                    
                                                    <form class="comment-form" id="commentform" method="post">
                                                        <?php
                                                        $community->insert_comment_blog($post[0]['post_id'])
                                                        
                                                        
                                                        ?>
                                                        <div class="row">
                                                                                                                
                                                            <div class="comment-form-comment col-md-12 mb-4">
                                                                <label>Message*</label>
                                                                <textarea class="form-control" rows="8" name="comment" placeholder="Message*" id="comment"></textarea>
                                                            </div>
                                                            
                                                            <div class="form-submit">
                                                                <button name="submit" type="submit" class="site-button">Submit Now</button>
                                                            </div>
                                                        </div>
                                                        
                                                    </form>
                    
                                                </div>
                                                <!-- LEAVE A REPLY END -->
                                        </div>
                                        </div>
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
