<?php
include 'autoload.php';
session_start();
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Retrieve data from POST request
    $user_uin = $_POST['user_uin'] ?? '';
    $job_id = $_POST['job_id'] ?? '';

    // Validate and sanitize input
    if (!empty($user_uin) && !empty($job_id)) {
        $user_uin = htmlspecialchars($user_uin);
        $job_id = htmlspecialchars($job_id);

       // class method to save the job
        $job = new Job();
        $data = [
            'user_id'=>$user_uin,
            'job_id'=>$job_id,

        ];


        // Save the job using a hypothetical method
        $job->save_job($data);
            echo "Job saved successfully!";
        
    } else {
        echo "Invalid input.";
    }
} else {
    echo "Invalid request method.";
}
?>
