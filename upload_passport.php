<?php 

    include 'autoload.php';
   session_start(); 
    
    $user_id = $_SESSION['uin']; 

if (isset($_FILES['passport'])) {
    $passport = $_FILES['passport'];
    $upload_dir = 'passports/'; // Directory to store uploaded files
    $upload_file = $upload_dir.$user_id . basename($passport['name']);

    // Move the uploaded file to the designated directory
    if (move_uploaded_file($passport['tmp_name'], $upload_file)) {
        // Update the passport path in the database
        $user = new User;
        $user->updatePassport($user_id, $upload_file);
        echo 'Passport uploaded successfully!';
    } else {
        echo 'Error uploading passport!';
    }
}

?>