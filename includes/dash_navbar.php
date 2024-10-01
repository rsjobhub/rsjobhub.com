<style>
    .mobile_nav
 {
    display: none !important;
}

/* Display the mobile navbar only on screens smaller than 768px (mobile devices) */
@media screen and (max-width: 1024px) {
    .mobile_nav {
        display: block !important; /* Show mobile navbar */
    }
}
</style>

<header  class="site-header header-style-3 mobile-sider-drawer-menu mobile_nav">

<div class="sticky-header main-bar-wraper  navbar-expand-lg">
    <div class="main-bar">  
                        
        <div class="container-fluid clearfix"> 
    
            <div class="logo-header">
                <div class="logo-header-inner logo-header-one">
                    <a href="      index.php">
                    <img src="images/oglogo/logo.png" alt="test">
                    </a>
                </div>
            </div>  
            
            <!-- NAV Toggle Button -->
            <button id="mobile-side-drawer" data-target=".header-nav" data-toggle="collapse" type="button" class="navbar-toggler collapsed">
                <!-- <span class="sr-only">Toggle navigation</span> -->
                <span class="icon-bar icon-bar-first"></span>
                <span class="icon-bar icon-bar-two"></span>
                <span class="icon-bar icon-bar-three"></span>
            </button> 

            <!-- MAIN Vav -->
            <div class="nav-animation header-nav navbar-collapse collapse d-flex justify-content-center">
                
                <ul class=" nav navbar-nav">

                <?php
                    if(!isset($_SESSION['email'])){

                   

                    ?>

                    <li class="has-mega-menu">
                    <a href="index.php">Home</a>
                                                                                      
                    </li>
                    <?php } ?>
                    <li class="has-child"><a href="javascript:;">Job lists</a>
                        <ul class="sub-menu">
                              
                            <li><a href="remote_job.php">Remote Jobs List</a></li>
                            <li><a href="sponsored_job.php"> Sponsored Jobs List</a></li>

                           
                        </ul>                                                                 
                    </li>

                                                                                    
                    </li>
                 
                    <li class="has-child"><a href="candidate-dashboard.php">My Dashboard</a>
                                                                                      
                    </li>
                 
                                                                                      
                    </li>
                  

                    <li class="has-child">
                    <a href="candidate-profile.php">My Profile</a>
                                                                                      
                    </li>
                   
                                                                                      
                    </li>
                    <li class="has-child"><a href="candidate-jobs-applied.php">Viewed Jobs</a>
                                                                                      
                    </li>
                    <li class="has-child"><a href="candidate-resume.php">My Resume</a>
                                                                                      
                    </li>
                    <li class="has-child"><a href="candidate-saved-jobs.php">Saved Jobs</a>
                                                                                      
                    </li>
                    <li class="has-child"><a href="candidate-cv-manager.php">CV Manager</a>
                                                                                      
                    </li>
                    <li class="has-child"><a href="candidate-job-alert.php">Job Alert Jobs</a>
                    <li class="has-child"><a href="community.php">Community</a>
                    <li class="has-child"><a href="blog.php">Blog</a>
                                                                                      
                    </li>
                    <li class="has-child"><a href="candidate-change-password.php">Change Password</a>
                                                                                      
                    </li>
                    <li class="has-child"><a href="logout.php">Logout</a>
                                                                                      
                    </li>

                 
                   
                </ul>

            </div>
            
            <!-- Header Right Section-->
            <div class="extra-nav header-2-nav">
                
                <div class="extra-cell">
                    <?php
                    if(!isset($_SESSION['email'])){

                   

                    ?>
                    <div class="header-nav-btn-section">
                        <div class="twm-nav-btn-left">
                            <a class="twm-nav-sign-up" href="login.php" role="button">
                                <i class="feather-log-in"></i> Sign in
                            </a>
                        </div>
                        <?php  } else{
                            ?>

                        <div class="header-nav-btn-section">
                        <div class="twm-nav-btn-left">
                            <a class="twm-nav-sign-up" href="logout.php" role="button">
                                <i class="feather-log-in"></i> Log out
                            </a>
                        </div>
                            <?php
                        }
                        ?>
                          
                    </div>
                </div> 
                    
            </div>                            
        
                                        
            
        </div>    
    
    
    </div>

    <!-- SITE Search -->
    <div id="search"> 
        <span class="close"></span>
        <form role="search" id="searchform" action="/search" method="get" class="radius-xl">
            <input class="form-control" value="" name="q" type="search" placeholder="Type to search"/>
            <span class="input-group-append">
                <button type="button" class="search-btn">
                    <i class="fa fa-paper-plane"></i>
                </button>
            </span>
        </form>
    </div> 
</div>




 



</header>
