<?php include 'autoload.php';?>

<?php ob_start() ?> 
    <!DOCTYPE html>
<html lang="en">

<head>
    <!-- META -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="keywords" content="" />
    <meta name="author" content="" />
    <meta name="robots" content="" />    
    <meta name="description" content="" />
    
    <!-- FAVICONS ICON -->
    <link rel="icon" href="images/oglogo/logo3.png" type="image/x-icon" />
    <link rel="shortcut icon" type="image/x-icon" href="images/oglogo/logo3.png" />
    
    <!-- PAGE TITLE HERE -->
     
    <title>rsjobhub</title>
    
    <!-- MOBILE SPECIFIC -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css"><!-- BOOTSTRAP STYLE SHEET -->
    <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css"><!-- FONTAWESOME STYLE SHEET -->
    <link rel="stylesheet" type="text/css" href="css/feather.css"><!-- FEATHER ICON SHEET -->
    <link rel="stylesheet" type="text/css" href="css/owl.carousel.min.css"><!-- OWL CAROUSEL STYLE SHEET -->
    <link rel="stylesheet" type="text/css" href="css/magnific-popup.min.css"><!-- MAGNIFIC POPUP STYLE SHEET -->
    <link rel="stylesheet" type="text/css" href="css/lc_lightbox.css"><!-- Lc light box popup -->     
    <link rel="stylesheet" type="text/css" href="css/bootstrap-select.min.css"><!-- BOOTSTRAP SLECT BOX STYLE SHEET  -->
    <link rel="stylesheet" type="text/css" href="css/dataTables.bootstrap5.min.css"><!-- DATA table STYLE SHEET  -->
    <link rel="stylesheet" type="text/css" href="css/select.bootstrap5.min.css"><!-- DASHBOARD select bootstrap  STYLE SHEET  -->     
    <link rel="stylesheet" type="text/css" href="css/dropzone.css"><!-- DROPZONE STYLE SHEET -->
    <link rel="stylesheet" type="text/css" href="css/scrollbar.css"><!-- CUSTOM SCROLL BAR STYLE SHEET -->
    <link rel="stylesheet" type="text/css" href="css/datepicker.css"><!-- DATEPICKER STYLE SHEET -->
    <link rel="stylesheet" type="text/css" href="css/flaticon.css"> <!-- Flaticon -->
    <link rel="stylesheet" type="text/css" href="css/swiper-bundle.min.css"><!-- Swiper Slider -->
    <link rel="stylesheet" type="text/css" href="css/style.css"><!-- MAIN STYLE SHEET -->

    <!-- THEME COLOR CHANGE STYLE SHEET -->
    <link rel="stylesheet" class="skin" type="text/css" href="css/skins-type/skin-6.css">
    <!-- SIDE SWITCHER STYLE SHEET -->
    <link rel="stylesheet" type="text/css" href="css/switcher.css">  

    <style>
        .warn{
            border: solid 1px red !important;
        }
        .good{
            border: solid 1px green !important;
        }
    </style>
    
</head>

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
     
     
        <!-- CONTENT START -->
        <div class="page-content">

            <!-- Login Section Start -->
            <div class="section-full site-bg-white">
                
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-xl-8 col-lg-6 col-md-5 twm-log-reg-media-wrap">
                            <div class="twm-log-reg-media">
                                <div class="twm-l-media">
                                    <img src="images/login-bg.png" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-6 col-md-7">
                            <div class="twm-log-reg-form-wrap">
                                <div class="twm-log-reg-logo-head">
                                    <a href="index.php">
                                    <img src="images/oglogo/logo3.png" alt="test">
                                    </a> 
                                </div>
                                <div class="twm-log-reg-inner">
                                    <div class="twm-log-reg-head">
                                        <div class="twm-log-reg-logo">
                                            <span class="log-reg-form-title">Register</span>
                                        </div>
                                    </div>
                                    <div class="twm-tabs-style-2">
                                        
                                        <ul class="nav nav-tabs" id="myTab2" role="tablist">

                                            <!--Login Candidate-->  
                                            <li class="nav-item">
                                                <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#twm-login-candidate" type="button"><i class="fas fa-user-tie"></i>Candidate</button>
                                            </li>
                                            <!--Login Employer-->
                                            <!-- <li class="nav-item">
                                                <button class="nav-link" data-bs-toggle="tab" data-bs-target="#twm-login-Employer" type="button"><i class="fas fa-building"></i>Employer</button>
                                            </li> -->
                                        
                                        </ul>
                                        
                                        <div class="tab-content" id="myTab2Content">
                                            <!--Login Candidate Content-->  
                                            <div class="tab-pane fade show active" id="twm-login-candidate">
                                                <div class="row">
                                                <form id="form" action="" method="POST">
                                              


                                                <?php
                                                $user = new User;
                                                $user->insertuser();
                                                ?>
                                                    <div class="col-lg-12">
                                                        <div class="form-group mb-3">
                                                            <input name="first_name" type="text" required="" class="form-control" placeholder="first name*">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <div class="form-group mb-3">
                                                            <input name="last_name" type="text" required="" class="form-control" placeholder="last name*">
                                                        </div>
                                                    </div>
                                                    
                                                    <div class="col-lg-12">
                                                        <div class="form-group mb-3">
                                                            <input id="email" name="email" type="email" class="form-control" required="" placeholder="email*">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12">
                                                      
                                                    </div>
                                                  
                                                  
                                                    <div class="col-lg-12">
                                                        <div class="form-group mb-3">
                                                            <span style="color: red;" id="label_password" for=""></span>
                                                            <input id="password" name="password" type="password" class="form-control" required="" placeholder="Password*">
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-12">
                                                        <div class="form-group mb-3">
                                                            <input id="email" name="coupon" type="text" class="form-control" required="" placeholder="promo code (optional)">
                                                        </div>
                                                    </div>
                                                
                                                    
                                                

                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <button id="submit" type="submit" class="site-button" name="submit">Register</button>
                                                        </div>
                                                    </div>
                                                    </form>
                                                   

                                                  

                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                        <?php include 'glogin.php';?>

                                                        <a href="<?php echo $client->createAuthUrl()?>">
                                                        <button type="button" class="log_with_google">
                                                        <img src="images/google-icon.png" alt="">
                                                        continue with Google
                                                        </button>
                                                        </a>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                           <a href="login.php"> <p>already have an account? <span style="color: blue !important;">sign in</span></p></a>
                                                        </div>
                                                    </div>
                                                    
                                                    
                                                </div>
                                            </div>
                                            <!--Login Employer Content--> 
                                         
                                        
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>   
            <!-- Login Section End -->
          
            
     
        </div>
        <!-- CONTENT END -->

        <!-- FOOTER START -->
       <?php include 'includes/footer.php'; ?>
        <!-- FOOTER END -->


        <!-- BUTTON TOP START -->
		<button class="scroltop"><span class="fa fa-angle-up  relative" id="btn-vibrate"></span></button>

        <!--Model Popup Section Start-->
          

 	</div>

<script>
const password = document.getElementById('password');
password.addEventListener('keyup', ()=>{
value_p =  password.value;
if(String(value_p).length < 6){
    document.getElementById('submit').disabled = true;
    password.classList.add('warn');
    document.getElementById('label_password').textContent = 'password length should be greater than 5';
}else{
password.classList.remove('warn');
password.classList.add('good');
document.getElementById('submit').disabled = false;
document.getElementById('label_password').textContent = '';


}

})




</script>
<script>
document.getElementById('form').addEventListener('submit', function(event) {
    var email = document.getElementById('email').value;
    if (!email.endsWith('@gmail.com') && !email.endsWith('@yahoo.com')) {
        alert('Please use only @gmail.com or @yahoo.com email addresses.');
        event.preventDefault(); // Prevent the form from submitting
    }
});
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
