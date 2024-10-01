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
                        <div class="banner-title-outer margin_banner">
                            <div class="banner-title-name">
                                <h2 class="wt-title">Candidate Chat</h2>
                            </div>
                        </div>
                        <!-- BREADCRUMB ROW -->                            
                        
                            <div>
                                <ul class="wt-breadcrumb breadcrumb-style-2">
                                    <li><a href="      index.php">Home</a></li>
                                    <li>Candidate Chat</li>
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
                        
                        <div class="col-xl-3 col-lg-4 col-md-12 rightSidebar m-b30">

                         <?php include 'includes/candidate_sidebar.php'; ?>

                        </div>

                        <div class="col-xl-9 col-lg-8 col-md-12 m-b30">
                            <!--Filter Short By-->
                            <div class="twm-right-section-panel site-bg-gray">
                                <div class="wt-admin-dashboard-msg-2  twm-dashboard-style-2">
                                    <!--Left Msg section-->
                                    <div class="wt-dashboard-msg-user-list">
                                           <div class="user-msg-list-btn-outer">
                                            <button class="user-msg-list-btn-close">Close</button>
                                            <button class="user-msg-list-btn-open">User Message</button>
                                        </div>                        
                                        <!-- Search Section Start-->
                                        <div class="wt-dashboard-msg-search">
                                            <div class="input-group">
                                                <input class="form-control" placeholder="Search Messages" type="text">
                                                <button class="btn" type="button"><i class="fa fa-search"></i></button>
                                            </div>
                                        </div>
                                        <!-- Search Section End-->
                                        
                                        <!-- Search Section End-->
                                        <div class="msg-find-list">
                                            <select class="wt-select-box bs-select-hidden">
                                                <option>Recent Chats</option>
                                                <option>Short by Time</option>
                                                <option>Short by Unread</option>
                                            </select>
                                        </div>                        
                                        <!-- Search Section End-->
                                        
                                        <!-- user msg list start-->
                                        <div id="msg-list-wrap" class="wt-dashboard-msg-search-list scrollbar-macosx">
                                        
                                            <div class="wt-dashboard-msg-search-list-wrap">
                                                <a href="javascript:;" class="msg-user-info clearfix">
                                                    <div class="msg-user-timing">Thu</div>
                                                    <div class="msg-user-info-pic"><img src="images/user-avtar/pic4.jpg" alt=""></div>
                                                    <div class="msg-user-info-text">
                                                        <div class="msg-user-name">Randall Henderson</div>
                                                        <div class="msg-user-discription">All created by our Global</div>
                                                    </div>
                                                </a>
                                            </div>

                                            <div class="wt-dashboard-msg-search-list-wrap">
                                                <a href="javascript:;" class="msg-user-info clearfix">
                                                    <div class="msg-user-timing">2 hours ago</div>
                                                    <div class="msg-user-info-pic"><img src="images/user-avtar/pic1.jpg" alt=""></div>
                                                    <div class="msg-user-info-text">
                                                        <div class="msg-user-name">Rustin Duza</div>
                                                        <div class="msg-user-discription">All created by our Global</div>
                                                    </div>
                                                </a>
                                            </div>
                                            
                                            <div class="wt-dashboard-msg-search-list-wrap">
                                                <a href="javascript:;" class="msg-user-info clearfix">
                                                    <div class="msg-user-timing">4 hours ago</div>
                                                    <div class="msg-user-info-pic"><img src="images/user-avtar/pic2.jpg" alt=""></div>
                                                    <div class="msg-user-info-text">
                                                        <div class="msg-user-name">Peter Hawkins</div>
                                                        <div class="msg-user-discription">All created by our Global</div>
                                                    </div>
                                                </a>
                                            </div>
                                            
                                            <div class="wt-dashboard-msg-search-list-wrap">
                                                <a href="javascript:;" class="msg-user-info clearfix">
                                                    <div class="msg-user-timing">Fri</div>
                                                    <div class="msg-user-info-pic"><img src="images/user-avtar/pic3.jpg" alt=""></div>
                                                    <div class="msg-user-info-text">
                                                        <div class="msg-user-name">Ralph Johnson</div>
                                                        <div class="msg-user-discription">All created by our Global</div>
                                                    </div>
                                                </a>
                                            </div>
                                            
                                            
                                            
                                            <div class="wt-dashboard-msg-search-list-wrap">
                                                <a href="javascript:;" class="msg-user-info clearfix">
                                                    <div class="msg-user-timing">16/07/2023</div>
                                                    <div class="msg-user-info-pic"><img src="images/user-avtar/pic1.jpg" alt=""></div>
                                                    <div class="msg-user-info-text">
                                                        <div class="msg-user-name">Randall Warren</div>
                                                        <div class="msg-user-discription">All created by our Global</div>
                                                    </div>
                                                </a>
                                            </div>
                                            
                                            <div class="wt-dashboard-msg-search-list-wrap">
                                                <a href="javascript:;" class="msg-user-info clearfix">
                                                    <div class="msg-user-timing">16/07/2023</div>
                                                    <div class="msg-user-info-pic"><img src="images/user-avtar/pic2.jpg" alt=""></div>
                                                    <div class="msg-user-info-text">
                                                        <div class="msg-user-name">Christina Fischer </div>
                                                        <div class="msg-user-discription">All created by our Global</div>
                                                    </div>
                                                </a>
                                            </div>
                                            
                                            <div class="wt-dashboard-msg-search-list-wrap">
                                                <a href="javascript:;" class="msg-user-info clearfix">
                                                    <div class="msg-user-timing">16/07/2023</div>
                                                    <div class="msg-user-info-pic"><img src="images/user-avtar/pic3.jpg" alt=""></div>
                                                    <div class="msg-user-info-text">
                                                        <div class="msg-user-name">Wanda Willis</div>
                                                        <div class="msg-user-discription">All created by our Global</div>
                                                    </div>
                                                </a>
                                            </div>
                                            
                                            <div class="wt-dashboard-msg-search-list-wrap">
                                                <a href="javascript:;" class="msg-user-info clearfix">
                                                    <div class="msg-user-timing">16/07/2023</div>
                                                    <div class="msg-user-info-pic"><img src="images/user-avtar/pic4.jpg" alt=""></div>
                                                    <div class="msg-user-info-text">
                                                        <div class="msg-user-name">Peter Hawkins</div>
                                                        <div class="msg-user-discription">All created by our Global</div>
                                                    </div>
                                                </a>
                                            </div>
                                            
                                            <div class="wt-dashboard-msg-search-list-wrap">
                                                <a href="javascript:;" class="msg-user-info clearfix">
                                                    <div class="msg-user-timing">16/07/2023</div>
                                                    <div class="msg-user-info-pic"><img src="images/user-avtar/pic1.jpg" alt=""></div>
                                                    <div class="msg-user-info-text">
                                                        <div class="msg-user-name">Kathleen Moreno</div>
                                                        <div class="msg-user-discription">All created by our Global</div>
                                                    </div>
                                                </a>
                                            </div>
                                            
                                            <div class="wt-dashboard-msg-search-list-wrap">
                                                <a href="javascript:;" class="msg-user-info clearfix">
                                                    <div class="msg-user-timing">16/07/2023</div>
                                                    <div class="msg-user-info-pic"><img src="images/user-avtar/pic2.jpg" alt=""></div>
                                                    <div class="msg-user-info-text">
                                                        <div class="msg-user-name">Wanda Montgomery </div>
                                                        <div class="msg-user-discription">All created by our Global</div>
                                                    </div>
                                                </a>
                                            </div>
                                            
                                            
                                                                                                    
                                        </div>
                                        <!-- user msg list End-->
                                        
                                    </div>
                                    
                                    <!--Right Msg section-->
                                    <div class="wt-dashboard-msg-box">
                                        <div class="single-msg-user-name-box">
                                            <div class="single-msg-short-discription">
                                                <h4 class="single-msg-user-name">Randall Henderson </h4>
                                                IT Contractor
                                            </div>
                                            <a href="#" class="message-action"><i class="far fa-trash-alt"></i> Delete Conversation</a>
                                        </div>
                                        <div id="msg-chat-wrap" class="single-user-msg-conversation scrollbar-macosx">
                                        
                                            <div class="single-user-comment-wrap">
                                                <div class="row">
                                                    <div class="col-xl-9 col-lg-12">
                                                        <div class="single-user-comment-block clearfix">
                                                            <div class="single-user-com-pic"><img src="images/user-avtar/pic4.jpg" alt=""></div>
                                                            <div class="single-user-com-text">Breaking the endless cycle of meaningless text message conversations starts with only talking to someone who offers interesting topics opinions.</div>
                                                            <div class="single-user-msg-time">12:13 PM</div>
                                                        </div>
                                                    </div>
                                                
                                                </div>
                                                
                                            </div>
                                            
                                            <div class="single-user-comment-wrap sigle-user-reply">
                                                <div class="row justify-content-end">
                                                    <div class="col-xl-9 col-lg-12">
                                                        <div class="single-user-comment-block clearfix">
                                                            <div class="single-user-com-pic"><img src="images/user-avtar/pic1.jpg" alt=""></div>
                                                            <div class="single-user-com-text">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour.</div>
                                                            <div class="single-user-msg-time">12:37 PM</div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div> 
                                            
                                            <div class="single-user-comment-wrap">
                                                <div class="row">
                                                    <div class="col-xl-9 col-lg-12">
                                                        <div class="single-user-comment-block clearfix">
                                                            <div class="single-user-com-pic"><img src="images/user-avtar/pic4.jpg" alt=""></div>
                                                            <div class="single-user-com-text">Breaking the endless cycle of meaningless text message conversations starts with only talking to someone who offers interesting topics opinions.</div>
                                                            <div class="single-user-msg-time">12:13 PM</div>
                                                        </div>
                                                    </div>
                                                
                                                </div>
                                                
                                            </div>
                                            
                                            <div class="single-user-comment-wrap sigle-user-reply">
                                                <div class="row justify-content-end">
                                                    <div class="col-xl-9 col-lg-12">
                                                        <div class="single-user-comment-block clearfix">
                                                            <div class="single-user-com-pic"><img src="images/user-avtar/pic1.jpg" alt=""></div>
                                                            <div class="single-user-com-text">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour.</div>
                                                            <div class="single-user-msg-time">12:37 PM</div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>  
                
                                            <div class="single-user-comment-wrap">
                                                <div class="row">
                                                    <div class="col-xl-9 col-lg-12">
                                                        <div class="single-user-comment-block clearfix">
                                                            <div class="single-user-com-pic"><img src="images/user-avtar/pic4.jpg" alt=""></div>
                                                            <div class="single-user-com-text">Breaking the endless cycle of meaningless text message conversations starts with only talking to someone who offers interesting topics opinions.</div>
                                                            <div class="single-user-msg-time">12:13 PM</div>
                                                        </div>
                                                    </div>
                                                
                                                </div>
                                                
                                            </div>
                                            
                                            <div class="single-user-comment-wrap sigle-user-reply">
                                                <div class="row justify-content-end">
                                                    <div class="col-xl-9 col-lg-12">
                                                        <div class="single-user-comment-block clearfix">
                                                            <div class="single-user-com-pic"><img src="images/user-avtar/pic1.jpg" alt=""></div>
                                                            <div class="single-user-com-text">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour.</div>
                                                            <div class="single-user-msg-time">12:37 PM</div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div> 
                                               
                                            
                                        </div>
                                        <div class="single-msg-reply-comment">
                                            <div class="input-group">
                                                <textarea class="form-control" placeholder="Type a message here"></textarea>
                                                <button class="btn" type="button"><i class="fa fa-paper-plane"></i></button>
                                            </div>
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
