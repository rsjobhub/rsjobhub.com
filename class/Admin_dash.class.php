<?php

class Admin_dash extends Database{

public function total_candidates(){

$candidates = $this->where('users','status','candidate');
$total_candidate = count($candidates);
return $total_candidate;


}
public function total_employers(){

$candidates = $this->where('users','status','employer');
$total_candidate = count($candidates);
return $total_candidate;


}
public function total_jobs(){

$jobs = $this->get_all('job');
$total_job = count($jobs);
return $total_job;


}
public function recent_jobs(){

    $query = "SELECT * FROM job ORDER BY id DESC LIMIT 5";
    $stmt = $this->prepare($query);
    $stmt->execute();
    $result = $stmt->get_result();
    $data =  $result->fetch_all(MYSQLI_ASSOC);  
    return $data;


}



}









?>