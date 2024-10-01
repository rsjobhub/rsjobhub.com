<!DOCTYPE html>
<html lang="en">


<?php include 'includes/candidate_head.php'; 


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
                                <h2 class="wt-title">My Dashboard</h2>
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

                        <?php include'includes/candidate_sidebar.php' ?>

                        </div>

                        <div class="col-xl-9 col-lg-8 col-md-12 m-b30">
                            <!--Filter Short By-->
                            <div class="twm-right-section-panel site-bg-gray">

                            <?php
                            $subscribed = $user->check_is_user_subscribed();
                            if($subscribed === false){

                            
                            ?>
                            <div class="alert alert-warning">
                                <h3>Please subscribe to have acces to our full features</h3>
                            </div>
                            <?php }?>
                               
                                <?php
                                $job = new Job;

                                ?>
                                <div class="twm-dash-b-blocks mb-5">
                                    <div class="row">
                                        <div class="col-xl-12 col-lg-12 col-md-12 mb-3">
                                        <a href="candidate-jobs-applied.php">

                                            <div class="panel panel-default">
                                                <div class="panel-body wt-panel-body dashboard-card-2 block-gradient">
                                                    <div class="wt-card-wrap-2">
                                                        <div class="wt-card-icon-2"><i class="flaticon-job"></i></div>
                                                        <div class="wt-card-right wt-total-active-listing counter "><?php echo count($job->get_all_user_clicked_jobs($user_id))?></div>
                                                        <div class="wt-card-bottom-2 ">
                                                            <h4 class="m-b0">Clicked Jobs</h4>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                        </div>
                                       
                                        <div class="col-xl-12 col-lg-12 col-md-12 mb-3">
                                        <a href="candidate-saved-jobs.php">

                                            <div class="panel panel-default">
                                                <div class="panel-body wt-panel-body dashboard-card-2 block-gradient-2">
                                                    <div class="wt-card-wrap-2">
                                                        <div class="wt-card-icon-2"><i class="flaticon-resume"></i></div>
                                                        <div class="wt-card-right  wt-total-listing-view counter "><?php echo count($job->get_all_user_saved_jobs($user_id))?></div>
                                                        <div class="wt-card-bottom-2">
                                                            <h4 class="m-b0">Saved Jobs</h4> 
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                        </div>
                                        <!-- <div class="col-xl-6 col-lg-6 col-md-12 mb-3">
                                            <div class="panel panel-default">
                                                <a href="candidate-chat.php">
                                                <div class="panel-body wt-panel-body dashboard-card-2 block-gradient-3">
                                                    <div class="wt-card-wrap-2">
                                                        <div class="wt-card-icon-2"><i class="flaticon-envelope"></i></div>
                                                        <div class="wt-card-right wt-total-listing-review counter ">28</div>
                                                        <div class="wt-card-bottom-2">
                                                            <h4 class="m-b0">Messages</h4>
                                                        </div>
                                                    </div>
                                                </div>
                                                </a>
                                            </div>
                                        </div> -->
                                        <div class="col-xl-12 col-lg-12 col-md-12 mb-3">
                                            <div class="panel panel-default">
                                                
                                            <a href="candidate-job-alert.php">
                                                <div class="panel-body wt-panel-body dashboard-card-2 block-gradient-4">
                                                    <div class="wt-card-wrap-2">
                                                        <div class="wt-card-icon-2"><i class="flaticon-bell"></i></div>
                                                        <div class="wt-card-right wt-total-listing-bookmarked counter "><?php echo count($job->user_job_alert()); ?></div>
                                                        <div class="wt-card-bottom-2">
                                                            <h4 class="m-b0">Job Alert</h4>
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>
                                            </div>
                                            
                                        </div>
                                    </div>  
                                </div>
                
                                <div class="twm-pro-view-chart-wrap">
                                    <div class="row">
                                        <!-- <div class="col-xl-12 col-lg-12 col-md-12 mb-4">

                                            <div class="panel panel-default site-bg-white">
                                                <div class="panel-heading wt-panel-heading p-a20">
                                                    <h4 class="panel-tittle m-a0"><i class="far fa-chart-bar"></i>Your Profile Views</h4>
                                                </div>
                                                <div class="panel-body wt-panel-body twm-pro-view-chart">
                                                    <canvas id="profileViewChart"></canvas>
                                                </div>
                                            </div>
                                        
                                        </div> -->
                
                                        <!-- <div class="col-xl-12 col-lg-12 col-md-12 mb-4">
                                            <div class="panel panel-default">
                                                <div class="panel-heading wt-panel-heading p-a20">
                                                    <h4 class="panel-tittle m-a0">Inbox</h4>
                                                </div>
                                                <div class="panel-body wt-panel-body bg-white">
                                                    <div class="dashboard-messages-box-scroll scrollbar-macosx">
                                                    
                                                        <div class="dashboard-messages-box">
                                                            <div class="dashboard-message-avtar"><img src="images/user-avtar/pic1.jpg" alt=""></div>
                                                            <div class="dashboard-message-area">
                                                                <h5>Lucy Smith<span>18 June    2024</span></h5>
                                                                <p>Bring to the table win-win survival strategies to ensure proactive domination. at the end of the day, going forward, a new normal that has evolved from generation.</p>
                                                            </div>
                                                        </div>                    
                                                
                                                        <div class="dashboard-messages-box">
                                                            <div class="dashboard-message-avtar"><img src="images/user-avtar/pic3.jpg" alt=""></div>
                                                            <div class="dashboard-message-area">
                                                                <h5>Richred paul<span>19 June    2024</span></h5>
                                                                <p>Bring to the table win-win survival strategies to ensure proactive domination. at the end of the day, going forward, a new normal that has evolved from generation.</p>
                                                            </div>
                                                        </div>
                                                        
                                                        <div class="dashboard-messages-box">
                                                            <div class="dashboard-message-avtar"><img src="images/user-avtar/pic4.jpg" alt=""></div>
                                                            <div class="dashboard-message-area">
                                                                <h5>Jon Doe<span>20 June    2024</span></h5>
                                                                <p>Bring to the table win-win survival strategies to ensure proactive domination. at the end of the day, going forward, a new normal that has evolved from generation.</p>
                                                            </div>
                                                        </div>
                                                        
                                                        <div class="dashboard-messages-box">
                                                            <div class="dashboard-message-avtar"><img src="images/user-avtar/pic1.jpg" alt=""></div>
                                                            <div class="dashboard-message-area">
                                                                <h5>Thomas Smith<span>22 June    2024</span></h5>
                                                                <p>Bring to the table win-win survival strategies to ensure proactive domination. at the end of the day, going forward, a new normal that has evolved from generation. </p>
                                                            </div>
                                                        </div>
                                                    </div>                        
                                                                     
                                                </div>
                                            </div>
                                        </div> -->
                
                                        <!-- <div class="col-lg-12 col-md-12 mb-4">
                                            <div class="panel panel-default site-bg-white m-t30">
                                                <div class="panel-heading wt-panel-heading p-a20">
                                                    <h4 class="panel-tittle m-a0"><i class="far fa-list-alt"></i>Recent Activities</h4>
                                                </div>
                                                <div class="panel-body wt-panel-body">
                                                    
                                                    <div class="dashboard-list-box list-box-with-icon">
                                                        <ul>
                                                            <li>
                                                                <i class="fa fa-envelope text-success list-box-icon"></i>Nikol Tesla has sent you <a href="#" class="text-success">private message!</a>
                                                                <a href="#" class="close-list-item color-lebel clr-red">
                                                                    <i class="far fa-trash-alt"></i>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <i class="fa fa-suitcase text-primary list-box-icon"></i>Your job for  
                                                                <a href="#" class="text-primary">Web Designer</a>
                                                                has been approved!
                                                                <a href="#" class="close-list-item color-lebel clr-red">
                                                                    <i class="far fa-trash-alt"></i>
                                                                </a>
                                                            </li>
                                                                
                                                            <li>
                                                                <i class="fa fa-bookmark text-warning list-box-icon"></i>
                                                                Someone bookmarked your
                                                                <a href="#" class="text-warning">SEO Expert</a> 
                                                                Job listing! 
                                                                <a href="#" class="close-list-item color-lebel clr-red">
                                                                    <i class="far fa-trash-alt"></i>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <i class="fa fa-tasks text-info list-box-icon"></i>
                                                                Your job listing Core
                                                                <a href="#" class="text-info">PHP Developer</a> for Site Maintenance is expiring! 
                                                                <a href="#" class="close-list-item color-lebel clr-red">
                                                                    <i class="far fa-trash-alt"></i>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <i class="fa fa-paperclip text-success list-box-icon"></i>
                                                                You have new application for
                                                                <a href="#" class="text-success"> UI/UX Developer & Designer! </a>
                                                                <a href="#" class="close-list-item color-lebel clr-red">
                                                                    <i class="far fa-trash-alt"></i>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <i class="fa fa-suitcase text-danger list-box-icon"></i>
                                                                Your Magento Developer job expire  
                                                                <a href="#" class="text-danger">Renew</a>  now it.
                                                                <a href="#" class="close-list-item color-lebel clr-red">
                                                                    <i class="far fa-trash-alt"></i>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <i class="fa fa-star site-text-orange list-box-icon"></i> 
                                                                David cope left a 
                                                                <a href="#" class="site-text-orange"> review 4.5</a> for Real Estate Logo
                                                                <a href="#" class="close-list-item color-lebel clr-red">
                                                                    <i class="far fa-trash-alt"></i>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    
                                                    </div>
                                                                
                                                </div>
                                            </div>
                                        </div> -->
                
                                        <div class="col-lg-12 col-md-12 mb-4">
                                            <div class="panel panel-default">
                                                <div class="panel-heading wt-panel-heading p-a20">
                                                    <h4 class="panel-tittle m-a0">Recently Clicked Jobs</h4>
                                                </div>
                                                <div class="panel-body wt-panel-body bg-white">
                                                    <div class="twm-dashboard-candidates-wrap">
                                                        <div class="row">
                
                                                        <div class="col-xl-12 col-lg-12 col-md-12 m-b30">
                            <div class="twm-right-section-panel candidate-save-job">
                                <!--Filter Short By-->
                                <?php
                                    $Job = new Job;
                                    $clicked_jobs = $Job->get_all_recently_user_clicked_jobs($_SESSION['uin']);

                                    if(count($clicked_jobs)<1){
                                        echo 'NO CLICKED JOBS YET';
                                    }
                                    ?>
                                
                                
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
                                             
                                              



                                                <?php }} ?>
                                              
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
<script  src="js/passport.js"></script><!-- JQUERY.MIN JS -->
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
