<!DOCTYPE html>
<html lang="en">
<?php ob_start() ?>
<?php
 include 'includes/candidate_head.php'; 
 $user = new User;
$user->is_user_logged_in();


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
            <div class="wt-bnr-inr overlay-wraper bg-center" style="background-image:url(images/banner/1.jpg); height:250px !important;">
                <div class="overlay-main site-bg-white opacity-01"></div>
                <div class="container">
                    <div class="wt-bnr-inr-entry">
                        <div class="banner-title-outer margin_banner">
                            <div class="banner-title-name">
                                <h2 class="wt-title">Candidate Profile</h2>
                            </div>
                        </div>
                                           
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
                            <?php
                                        $user = new User;
                                        $user->update_user();
                                        ?>
                                <form method="POST">
                                    
                
                                    <!--Basic Information-->
                                    <div class="panel panel-default">
                                        <div class="panel-heading wt-panel-heading p-a20">
                                            <h4 class="panel-tittle m-a0">Basic Informations</h4>
                                        </div>

                                       
                                        <div class="panel-body wt-panel-body p-a20 m-b30 ">
                                            
                                            <div class="row">

                                            <div class="col-lg-12">
                                            <div class="twm-candidate-profile-pic">

<?php 
$user_id = $_SESSION['uin'];
$user = new User;
$user_info = $user->get_user_info($user_id, 'uin');
$user_profile = $user->get_profile_info($user_id, 'uin');

$avatar_image = 'images/user-avtar/pic5.jpg'; // Path to default avatar image

// Check if 'passport' is empty and set the appropriate image
$image_to_display = empty($user_info[0]['passport']) ? $avatar_image : $user_info[0]['passport'];

?>
    
    <img src="<?php echo htmlspecialchars($image_to_display); ?>" alt="User Image">                                    <div class="upload-btn-wrapper">
        
        <div id="upload-image-grid"></div>
        <form action="" method="post" enctype="multipart/form-data">
            
      
        <button class="site-button button-sm">Upload Photo</button>
        <input type="file" name="myfile" id="file-uploader" accept=".jpg, .jpeg, .png">
        </form>
     

    </div>

    
    
</div>
                                            </div>
                                                                
                                                    <div class="col-xl-6 col-lg-6 col-md-12">
                                                        <div class="form-group">
                                                            <label>First Name</label>
                                                            <div class="ls-inputicon-box"> 
                                                                <input readonly class="form-control" name="first_name" type="text" value="<?php echo $user_info[0]['first_name'];?>">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-xl-6 col-lg-6 col-md-12">
                                                        <div class="form-group">
                                                            <label>Last Name</label>
                                                            <div class="ls-inputicon-box"> 
                                                                <input readonly class="form-control" name="last_name" type="text" value="<?php echo $user_info[0]['last_name'];?>">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-xl-6 col-lg-6 col-md-12">
                                                        <div class="form-group">
                                                            <label>gender</label>
                                                            <div class="ls-inputicon-box"> 
                                                            <?php
$gender = $user_info[0]['gender']; // Assuming this holds the gender value

if (!empty($gender)) {
    // If gender is not empty, show a read-only select
    echo '<select class="form-control" name="gender" disabled>';
    echo '<option value="male"' . ($gender == 'male' ? ' selected' : '') . '>male</option>';
    echo '<option value="female"' . ($gender == 'female' ? ' selected' : '') . '>female</option>';
    echo '</select>';
    echo '<input type="hidden" name="gender" value="' . $gender . '">';
} else {
    // If gender is empty, allow the user to select a gender
    echo '<select class="form-control" name="gender">';
    echo '<option value="">select gender</option>';
    echo '<option value="male">male</option>';
    echo '<option value="female">female</option>';
    echo '</select>';
}
?>

                                                              
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-xl-6 col-lg-6 col-md-12">
                                                        <div class="form-group">
                                                            <label>date of birth</label>
                                                            <div class="ls-inputicon-box"> 
                                                                <input readonly class="form-control" name="dob" type="date" value="<?php echo $user_info[0]['dob'];?>">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-xl-6 col-lg-6 col-md-12">
    <div class="form-group">
        <label id="phone_label">Phone</label>
        <div class="ls-inputicon-box d-flex align-items-center"> 
            <select id="countryCode" class="form-control" name="country_code" style="width: 30%; margin-right: 5px;">
                <option value="">code</option> 
                <option value="+44">+44</option> <!-- UK -->
                    <option value="+49">+49</option> <!-- Germany -->
                    <option value="+33">+33</option> <!-- France -->
                    <option value="+39">+39</option> <!-- Italy -->
                    <option value="+34">+34</option> <!-- Spain -->
                    <option value="+31">+31</option> <!-- Netherlands -->
                    <option value="+41">+41</option> <!-- Switzerland -->
                    <option value="+47">+47</option> <!-- Norway -->
                    <option value="+46">+46</option> <!-- Sweden -->
                    <option value="+48">+48</option> <!-- Poland -->

                    <!-- African Country Codes -->
                    <option value="+234">+234</option> <!-- Nigeria -->
                    <option value="+27">+27</option> <!-- South Africa -->
                    <option value="+254">+254</option> <!-- Kenya -->
                    <option value="+233">+233</option> <!-- Ghana -->
                    <option value="+225">+225</option> <!-- Ivory Coast -->
                    <option value="+250">+250</option> <!-- Rwanda -->
                    <option value="+216">+216</option> <!-- Tunisia -->
                    <option value="+213">+213</option> <!-- Algeria -->
                    <option value="+212">+212</option> <!-- Morocco -->
                    <option value="+237">+237</option> <!-- Cameroon -->
                    <option value="+231">+231</option> <!-- Liberia -->
                    <option value="+243">+243</option> <!-- DR Congo -->
                    <option value="+220">+220</option> <!-- Gambia -->
                    <option value="+267">+267</option> <!-- Botswana -->
                    <option value="+254">+254</option> <!-- Tanzania -->

                    <!-- Other Global Codes -->
                    <option value="+1">+1</option> <!-- USA/Canada -->
                    <option value="+91">+91</option> <!-- India -->
                    <option value="+61">+61</option> <!-- Australia -->
                    <option value="+81">+81</option> <!-- Japan -->
                    <option value="+86">+86</option> <!-- China -->
                <!-- Add more country codes as needed -->
            </select>
            <input id="phoneNumber"
            onkeypress="return /[0-9]/i.test(event.key)"
             required class="form-control" name="phone_number" type="text" value="<?php echo $user_info[0]['phone_number'];?>" style="width: 70%;">
        </div>
    </div>
</div>

                
                                                    <div class="col-xl-6 col-lg-6 col-md-12">
                                                        <div class="form-group">
                                                            <label>Email Address</label>
                                                            <div class="ls-inputicon-box"> 
                                                                <input readonly id="email" required class="form-control" name="email" type="email" value="<?php echo $user_info[0]['email'];?>">
                                                            </div>
                                                        </div>
                                                    </div>
                
                                                   
                
                
                                                   
                
                                                
                
                                                    <div class="col-xl-6 col-lg-6 col-md-12">
                                                        <div class="form-group city-outer-bx has-feedback">
                                                            <label>Current Job Title</label>
                                                            <div class="ls-inputicon-box">  
                                                                <input required class="form-control" name="job_title" type="text" value="<?php echo $user_profile[0]['job_title'];?>">
                                                            </div>
                                                            
                                                        </div>
                                                    </div>
                                                    <div class="col-xl-6 col-lg-6 col-md-12">
                                                        <div class="form-group city-outer-bx has-feedback">
                                                            <label>Job Category</label>
                                                            <div class="ls-inputicon-box">  
                                                            <select required class="form-control" data-trigger="" name="job_category">
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
                                                            
                                                        </div>
                                                    </div>
                
                                                   
                
                                                  
                
                                                   
                
                                                   
                

                                                    <div class="col-xl-6 col-lg-6 col-md-12">
                                                        <div class="form-group city-outer-bx has-feedback">
                                                            <label id="">Country</label>
                                                            <div class="ls-inputicon-box">  
                                                            <select required name="country" class="form-control" id="country">
                                                            <option value="">click to select country</option>


                                                            </select>                                                               
                                                            </div>
                                                            
                                                        </div>
                                                    </div>

                                                    <div class="col-xl-6 col-lg-6 col-md-12">
                                                        <div class="form-group city-outer-bx has-feedback">
                                                            <label>City</label>
                                                            <div class="ls-inputicon-box">  
                                                            <select required name="city" class="form-control" id="city">
                                                            <option value="">click to select city</option>


                                                            </select>                                                                 
                                                            </div>
                                                            
                                                        </div>
                                                    </div>

                                                 

                                                   


                 
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <label>Brief Description</label>
                                                            <textarea name="description" class="form-control" rows="3"><?php echo $user_profile[0]['description'];?></textarea>
                                                        </div>
                                                    </div> 

                                                    <div class="panel-heading wt-panel-heading p-a20">
                                            <h4 class="panel-tittle m-a0">Billing Informations</h4>
                                        </div>

                                       
                                       
                                                                
                                                    <div class="col-xl-12 col-lg-12 col-md-12">
                                                        <div class="form-group">
                                                            <label>Billing Address</label>
                                                            <div class="ls-inputicon-box"> 
                                                                <input class="form-control" name="" type="text" value="" placeholder="billing address">
                                                            </div>
                                                        </div>
                                                    </div>
                                                  
                                                   

                                                   

                                                   
                                                                
                                                  

                                                    <div class="col-xl-6 col-lg-6 col-md-12">
                                                        <div class="form-group">
                                                            <label>Payment method</label>
                                                            <div class="ls-inputicon-box"> 
                                                                <input class="form-control" name="" type="text" value="" placeholder="payment method">
                                                                <i class="fs-input-icon fas fa-money"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-xl-6 col-lg-6 col-md-12">
                                                        <div class="form-group">
                                                            <label>Subscription Type</label>
                                                            <div class="ls-inputicon-box"> 
                                                                <input class="form-control" name="" type="text" value="" placeholder="subscription type">
                                                            </div>
                                                        </div>
                                                    </div>
                
                                                   
                
                
                                                                                                          
                                                    <div class="col-lg-12 col-md-12">                                   
                                                        <div class="text-left">
                                                            <button id="submitButton" type="submit" name="update" class="site-button">Update</button>
                                                        </div>
                                                    </div> 
                                                            
                                                    
                                                                                                                
                                                   
                                                                                        
                                                
                                            </div>
                                                    
                                        </div>
                                    </div>
                
                                  
                                
                                    </div>
                           
                               
                                    
                
                                    <!--Basic Information-->
                                    
                                                              
                                          
                                                    
                                      
                                  
                                </form>
                            
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
                                                    <input name="username" type="text" required="" class="form-control" value="Usearname*">
                                                </div>
                                            </div>
                                            
                                            <div class="col-lg-12">
                                                <div class="form-group mb-3">
                                                    <input name="email" type="text" class="form-control" required="" value="Password*">
                                                </div>
                                            </div>
                                            
                                            <div class="col-lg-12">
                                                <div class="form-group mb-3">
                                                    <input name="phone" type="text" class="form-control" required="" value="Email*">
                                                </div>
                                            </div>
            
                                            <div class="col-lg-12">
                                                <div class="form-group mb-3">
                                                    <input name="phone" type="text" class="form-control" required="" value="Phone*">
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
                                                    <input name="username" type="text" required="" class="form-control" value="Usearname*">
                                                </div>
                                            </div>
                                            
                                            <div class="col-lg-12">
                                                <div class="form-group mb-3">
                                                    <input name="email" type="text" class="form-control" required="" value="Password*">
                                                </div>
                                            </div>
                                            
                                            <div class="col-lg-12">
                                                <div class="form-group mb-3">
                                                    <input name="phone" type="text" class="form-control" required="" value="Email*">
                                                </div>
                                            </div>
            
                                            <div class="col-lg-12">
                                                <div class="form-group mb-3">
                                                    <input name="phone" type="text" class="form-control" required="" value="Phone*">
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
                                                        <input name="username" type="text" required="" class="form-control" value="Usearname*">
                                                    </div>
                                                </div>
                                                
                                                <div class="col-lg-12">
                                                    <div class="form-group mb-3">
                                                        <input name="email" type="text" class="form-control" required="" value="Password*">
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
                                                        <input name="username" type="text" required="" class="form-control" value="Usearname*">
                                                    </div>
                                                </div>
                                                
                                                <div class="col-lg-12">
                                                    <div class="form-group mb-3">
                                                        <input name="email" type="text" class="form-control" required="" value="Password*">
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

    <script>
        const countrySelect = document.getElementById('country');
        const citySelect = document.getElementById('city');
window.addEventListener('load',getCountry);
countrySelect.addEventListener('change',getCity)


async function getCountry(){
    const url = 'https://country-state-city-search-rest-api.p.rapidapi.com/allcountries';
const options = {
	method: 'GET',
	headers: {
		'x-rapidapi-key': '9d016faf70mshc5550b72390444bp1fe577jsn35e6808b1a30',
		'x-rapidapi-host': 'country-state-city-search-rest-api.p.rapidapi.com'
	}
};

try {
	const response = await fetch(url, options);
	const result = await response.json();
          // Loop through the array and display country names
console.log(result);
    result.forEach(country => {

        const option = document.createElement('option');

option.value = country.name;

option.text = country.name;
option.dataset.isoCode = country.isoCode;

countrySelect.appendChild(option);

});
 
} catch (error) {
	console.error(error);
}




}


async function getCity() {
    // Get the selected option element from the dropdown
    const selectElement = document.getElementById('country'); // Replace 'select' with the actual selector for your dropdown
    const option = selectElement ? selectElement.options[selectElement.selectedIndex] : null;

    if (!option) {
        console.error('No option selected');
        return;
    }

    const isoCode = option.dataset.isoCode;
    const url = 'https://country-state-city-search-rest-api.p.rapidapi.com/cities-by-countrycode?countrycode=' + isoCode;
    const options = {
        method: 'GET',
        headers: {
            'x-rapidapi-key': '9d016faf70mshc5550b72390444bp1fe577jsn35e6808b1a30',
            'x-rapidapi-host': 'country-state-city-search-rest-api.p.rapidapi.com'
        }
    };

    try {
        const response = await fetch(url, options);
        const result = await response.json();
        // Loop through the array and display city names
        console.log(result);
        result.forEach(city => {

const option = document.createElement('option');

option.value = city.name;

option.text = city.name;

citySelect.appendChild(option);

});


    } catch (error) {
        console.error(error);
    }
}







    </script>

<script>
    function validatePhoneNumber() {
        const countryCode = document.getElementById('countryCode').value;
        const phoneNumber = document.getElementById('phoneNumber').value;
        const errorMessage = document.getElementById('phone_label');
        const submitButton = document.getElementById('submitButton');

        let valid = true;

        // Check if country code is selected
        if (countryCode=='') {
            errorMessage.textContent = 'Please select a country code.';
            errorMessage.style.display = 'block';
            errorMessage.style.color = 'red';
            valid = false;
        } 

        // Check if phone number is valid (digits only, 7-15 characters)
        const phonePattern = /^[0-9]{7,10}$/;

      

        // Display a combined error message if both checks fail
        if (countryCode=='' || !phonePattern.test(phoneNumber)) {
            errorMessage.textContent = 'Please select a country code and enter a valid phone number.';
            errorMessage.style.display = 'block';
            errorMessage.style.color = 'red';

            submitButton.disabled = true;
        }else {

errorMessage.textContent = 'Phone Number';
errorMessage.style.color = 'black';
submitButton.disabled = false;

}
    }

    // Trigger validation when the country code changes
    document.getElementById('phoneNumber').addEventListener('keyup', validatePhoneNumber);
    document.getElementById('countryCode').addEventListener('change', validatePhoneNumber);
</script>

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
