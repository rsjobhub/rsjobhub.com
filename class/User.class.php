<?php
  class User extends Database{

        public function insertuser(){

            if(isset($_REQUEST['submit'])){
                $today = date('Ymd');
                $rand = rand(00000, 99999);
                $uin = $rand.$today;
                $first_name = trim(addslashes($_REQUEST['first_name']));
                $coupon = trim(addslashes($_REQUEST['coupon']));
                $last_name = trim(addslashes($_REQUEST['last_name']));
                $email = trim(addslashes($_REQUEST['email']));
                $password = trim(addslashes($_REQUEST['password']));
                $password =  password_hash($password, PASSWORD_DEFAULT);

                $check= $this->where('users', 'email',$email);
                if(count($check) > 0){
                    echo "
                    <div class='alert alert-danger'>
                    <p> User with this email already exist</p>
                    </div>
                    
                    
                    ";
                }else{

              
                
                $data=[
                    'uin'=>$uin,
                    'first_name'=>$first_name,
                    'last_name'=>$last_name,
                    'email'=>$email,
                    'password'=>$password,
                    'status'=>'candidate',
                    'coupon'=>$coupon
                    

                ];
                $data2=[
                    'uin'=>$uin
                ];
                $this->insertData('users',$data);
                $this->insertData('candidate_profile',$data2);
                echo"
                <script>alert('registration successful');
                location.href='login.php';
                
                </script>
                ";

                
            }
               
            }

        }      
        
        public function get_user_info($user_id, $column){
              
                $user_info = $this->where('users', $column, $user_id);
                return $user_info;
                
            }
        public function get_profile_info($user_id, $column){
              
                $user_info = $this->where('candidate_profile', $column, $user_id);
                return $user_info;
                
            }


public function update_user(){
    $uin = $_SESSION['uin'];
    if(isset($_REQUEST['update'])){
        $first_name = trim(addslashes($_REQUEST['first_name']));
        $last_name = trim(addslashes($_REQUEST['last_name']));
        $email = trim(addslashes($_REQUEST['email']));
        $phone_number = trim(addslashes($_REQUEST['phone_number']));
        $gender = trim(addslashes($_REQUEST['gender']));
       
        $job_title = trim(addslashes($_REQUEST['job_title']));
        $job_category = trim(addslashes($_REQUEST['job_category']));
        $country = trim(addslashes($_REQUEST['country']));
        $city = trim(addslashes($_REQUEST['city']));
        $post_code = trim(addslashes($_REQUEST['post_code']));
        $description = trim(addslashes($_REQUEST['description']));
        $dob = trim(addslashes($_REQUEST['dob']));
       

        $data = [
           
            'job_title' => $job_title,
            'country' => $country,
            'city' => $city,
            'post_code' => $post_code,
            'description' => $description,
            'job_category' => $job_category,
            'dob' => $dob,
        ];

        $data2=[
            'first_name'=>$first_name,
            'last_name'=>$last_name,
            'email'=>$email,
            'phone_number'=>$phone_number,
            'gender' => $gender,

        ];


        
        $condition = [
            'column' => 'uin',
            'value' => $uin, // The ID of the user to update
            'type' => 's' // 's' indicates the type is integer
        ];
        
        $this->update('candidate_profile', $data, $condition);
        $this->update('users', $data2, $condition);
        header("location:candidate-profile.php");
    }



   
}

        public function updatePassport($userId, $passportPath) {
            $query = "UPDATE users SET passport = ? WHERE uin = ?";
            $stmt = $this->prepare($query);
            $params = ['ss', $passportPath, $userId]; 
            $this->execute($stmt, $params);
        }
    

        public function login(){
            if(isset($_REQUEST['login'])){
                $email = trim(addslashes($_REQUEST['email']));
                $password = trim(addslashes($_REQUEST['password']));
                $user_id = $email;
                $user_info = $this->get_user_info($user_id, 'email');
                if(count($user_info)>0){
                    
                    $stored_password = $user_info[0]['password'];

                    if(password_verify($password, $stored_password)){
                        session_start();
            
                        $_SESSION['email'] = $email;
                        $_SESSION['uin'] = $user_info[0]['uin'];
                        $_SESSION['status'] = $user_info[0]['status'];

                        if($_SESSION['status'] == 'admin'){
                        header("location:admin/admin/index.php");
                        }else{
                        header("location:candidate-dashboard.php");

                        }
                    
                    
                            } 
                   else{
                    echo " <div class='alert alert-danger'>
                    <p> Incorrect password</p>
                    </div>";                    }

                
                }
                
                else{
                   echo " <div class='alert alert-danger'>
                    <p> User with this email does not exist</p>
                    </div>";
                    

                }

            }

            }

          public function is_user_logged_in(){
            
            if(!isset($_SESSION['email'])){
              header("location:login.php");
                            }
          }
          public function is_user_subscribed(){
            $subscribed = $this->where('subscriptions', 'user_uin', $_SESSION['uin']);
            if(count($subscribed)<1){
                header("location:pricing.php");
            }
           
          }
          public function check_is_user_subscribed(){
            $subscribed = $this->where('subscriptions', 'user_uin', $_SESSION['uin']);
            if(count($subscribed)<1){
               return false;
            }else{
                return true;
            }
           
          }




        




                                             
        }
                                             
                                    


                                                ?>