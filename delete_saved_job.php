<?php
include 'autoload.php';
session_start();
if(isset($_REQUEST['job_id']) && isset($_SESSION['email'])){

$job_id = $_REQUEST['job_id'];
$job = new Job;
$job->delete('saved_jobs', 'job_id',$job_id);
header("location:candidate-saved-jobs.php");




}else{
    header("index.php");
}



?>