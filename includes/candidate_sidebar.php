<style>
    /* Hide sidebar on screens smaller than 768px */
@media (max-width: 1024px) {
    #sidebar {
        display: none; /* This will hide the sidebar */
    }
}

li a:hover{
    background: none !important;
}

</style>


<div class="side-bar-st-1" id="sidebar">
                                
                              

                                <?php 
                    $user_id = $_SESSION['uin'];
                    $user = new User;
                    $user_info = $user->get_user_info($user_id, 'uin');
                    $user_profile = $user->get_profile_info($user_id, 'uin');


// Check if 'passport' is empty and set the appropriate image
              
                    ?>
                           
                              
                               
                                <div class="twm-nav-list-1" id="sidebar">
                                <?php
// Get the current page's filename
$current_page = basename($_SERVER['PHP_SELF']);
?>

<ul>
<li class="<?php echo ($current_page == 'index.php') ? 'active' : ''; ?>">
        <a href="index.php"><i class="fa fa-home"></i> Home</a>
    </li>
    <li class="<?php echo ($current_page == 'candidate-dashboard.php') ? 'active' : ''; ?>">
        <a href="candidate-dashboard.php"><i class="fa fa-tachometer-alt"></i> Dashboard</a>
    </li>

    <li class="has-child"><a href="javascript:;"><i class="fa fa-list"></i>Job lists</a>
                        <ul class="sub-menu">
                              
                            <li><a href="remote_job.php">Remote Jobs List</a></li>
                            <li><a href="sponsored_job.php"> Sponsored Jobs List</a></li>

                           
                        </ul>                                                                 
                    </li>
   
    <li class="<?php echo ($current_page == 'candidate-profile.php') ? 'active' : ''; ?>">
        <a href="candidate-profile.php"><i class="fa fa-user"></i> My Profile</a>
    </li>
    <li class="<?php echo ($current_page == 'candidate-jobs-applied.php') ? 'active' : ''; ?>">
        <a href="candidate-jobs-applied.php"><i class="fa fa-suitcase"></i> Viewed Jobs</a>
    </li>
    <li class="<?php echo ($current_page == 'candidate-resume.php') ? 'active' : ''; ?>">
        <a href="candidate-resume.php"><i class="fa fa-receipt"></i> My Resume</a>
    </li>
    <li class="<?php echo ($current_page == 'candidate-saved-jobs.php') ? 'active' : ''; ?>">
        <a href="candidate-saved-jobs.php"><i class="fa fa-file-download"></i> Saved Jobs</a>
    </li>
    <li class="<?php echo ($current_page == 'candidate-cv-manager.php') ? 'active' : ''; ?>">
        <a href="candidate-cv-manager.php"><i class="fa fa-paperclip"></i> CV Builder</a>
    </li>
    <li class="<?php echo ($current_page == 'candidate-job-alert.php') ? 'active' : ''; ?>">
        <a href="candidate-job-alert.php"><i class="fa fa-bell"></i> Job Alerts</a>
    </li>
  
    <li class="<?php echo ($current_page == 'community.php') ? 'active' : ''; ?>">
        <a href="community.php"><i class="fa fa-people-group"></i> Community</a>
    </li>
    <li class="<?php echo ($current_page == 'blog.php') ? 'active' : ''; ?>">
        <a href="blog.php"><i class="fa fa-blog"></i>Blog</a>
    </li>
    <li class="<?php echo ($current_page == 'candidate-change-password.php') ? 'active' : ''; ?>">
        <a href="candidate-change-password.php"><i class="fa fa-fingerprint"></i> Change Password</a>
    </li>
   
    <li><a href="logout.php"><i class="fa fa-user"></i>Logout</a></li>
</ul>

                                </div>
                                
                            </div>


   