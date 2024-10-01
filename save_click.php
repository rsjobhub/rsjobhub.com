<?php 
include 'autoload.php';
session_start();
if(isset($_REQUEST['job_id'])){
$user_uin = $_SESSION['uin'];
    $job_id = $_REQUEST['job_id'];

    // Validate and sanitize input
    if (!empty($user_uin) && !empty($job_id)) {
        // $user_uin = htmlspecialchars($user_uin);
        // $job_id = htmlspecialchars($job_id);

       // class method to save the job
        $job = new Job();
        $data = [
            'user_id'=>$user_uin,
            'job_id'=>$job_id,

        ];
        $detail = $job->where('job','job_id',$job_id);
        $link = $job->ensureFullUrl($detail[0]['job_link']);



        // Save the job using a hypothetical method
        $check =  $job->get_user_clicked_jobs($user_uin, $job_id);
        if(count($check) > 0){
            header("location: $link");

        }else{

            $job->save_click_job($data);
                
            header("location: $link");
        }

    
        
    }

}else{
    header("location:index.php");
}

    ?>