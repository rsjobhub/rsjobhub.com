<?php
class Job extends Database{

public function insert_job(){
if(isset($_REQUEST['submit'])){
$rand = rand(00000,99999);

$job_id = $rand.date('ymd');
$title = $_REQUEST['job_title'];
$category = $_REQUEST['job_category'];
$type = $_REQUEST['job_type'];
$salary = $_REQUEST['salary'];
$desc = $_REQUEST['description'];
$link = $_REQUEST['job_link'];
$employment_type = $_REQUEST['employment_type'];
$country = $_REQUEST['country'];
$city = $_REQUEST['city'];


$data = [
'job_id'=>$job_id,
'job_title'=>$title,
'job_category'=>$category,
'job_type'=>$type,
'employment_type'=>$employment_type,
'salary'=>$salary,
'description'=>$desc,
'job_link'=>$link,
'country'=>$country,
'city'=>$city
];


// Move the uploaded file to the designated directory
    // Update the passport path in the database
    $this->insertData('job',$data);

    echo"
    <script>alert('Job added successfully');
    location.href='job_post.php';
    
    </script>
    ";
} 
}
   


public function get_all_jobs(){
    $jobs = $this->get_all('job');
    return $jobs;
}

public function save_job($data){
    $this->insertData('saved_jobs', $data);
}
public function save_click_job($data){
    $this->insertData('clicked_jobs', $data);
}

public function get_user_saved_jobs($user_uin, $job_id){
   
    $query = "SELECT * FROM saved_jobs WHERE user_id = '$user_uin' AND job_id = '$job_id'";
    $stmt = $this->prepare($query);
    $stmt->execute();
    $result = $stmt->get_result();
    $data =  $result->fetch_all(MYSQLI_ASSOC);  
    return $data;
}


public function user_job_alert(){
  $user = $this->where('candidate_profile','uin',$_SESSION['uin']);
  $title = $user[0]['job_title'];
  if(!empty($title)){

  
    $query = "SELECT * FROM job WHERE job_title like '%$title%'";
    $stmt = $this->prepare($query);
    $stmt->execute();
    $result = $stmt->get_result();
    $data =  $result->fetch_all(MYSQLI_ASSOC);  
    return $data;
  }else{
    return [];
  }
}
public function get_user_clicked_jobs($user_uin, $job_id){
   
    $query = "SELECT * FROM clicked_jobs WHERE user_id = '$user_uin' AND job_id = '$job_id'";
    $stmt = $this->prepare($query);
    $stmt->execute();
    $result = $stmt->get_result();
    $data =  $result->fetch_all(MYSQLI_ASSOC);  
    return $data;
}
public function get_all_user_saved_jobs($user_uin){
   
    $query = "SELECT * FROM saved_jobs WHERE user_id = '$user_uin' ORDER BY id DESC LIMIT 5";
    $stmt = $this->prepare($query);
    $stmt->execute();
    $result = $stmt->get_result();
    $data =  $result->fetch_all(MYSQLI_ASSOC);  
    return $data;
}
public function get_all_user_clicked_jobs($user_uin){
   
    $query = "SELECT * FROM clicked_jobs WHERE user_id = '$user_uin' ORDER BY id DESC LIMIT 5";
    $stmt = $this->prepare($query);
    $stmt->execute();
    $result = $stmt->get_result();
    $data =  $result->fetch_all(MYSQLI_ASSOC);  
    return $data;
}
public function get_all_recently_user_clicked_jobs($user_uin){
   
    $query = "SELECT * FROM clicked_jobs WHERE user_id = '$user_uin' ORDER BY id DESC LIMIT 5";
    $stmt = $this->prepare($query);
    $stmt->execute();
    $result = $stmt->get_result();
    $data =  $result->fetch_all(MYSQLI_ASSOC);  
    return $data;
}

public function paginate_jobs($offset, $limit) {
    $sql = "SELECT * FROM job LIMIT $offset, $limit";
    $result = $this->connect()->query($sql);
    return $result->fetch_all(MYSQLI_ASSOC);
}
public function paginate_jobs_any($offset, $limit) {
    $sql = "SELECT * FROM job WHERE country like '%anywhere%' LIMIT $offset, $limit";
    $result = $this->connect()->query($sql);
    return $result->fetch_all(MYSQLI_ASSOC);
}



public function ensureFullUrl($url) {
    // Check if URL starts with http:// or https://
    if (!preg_match("~^(?:f|ht)tps?://~i", $url)) {
        // Prepend http:// if missing
        $url = "http://" . $url;
    }
    return $url;
}

public function filterJobs ($keyword, $employmentTypes, $jobCategory, $a, $location) {
    // Start building the SQL query
    $query = "SELECT * FROM job WHERE 1=1";
    $params = [];
    $types = '';

    // Add keyword condition if provided
    if (!empty($keyword)) {
        $query .= " AND (job_title LIKE ? OR description LIKE ?)";
        $params[] = '%' . $keyword . '%';
        $params[] = '%' . $keyword . '%';
        $types .= 'ss'; // s for string
    }
   

    // Add employment type conditions if provided
    if (!empty($employmentTypes) && is_array($employmentTypes)) {
        $placeholders = implode(',', array_fill(0, count($employmentTypes), '?'));
        $query .= " AND employment_type IN ($placeholders)";
        $params = array_merge($params, $employmentTypes);
        $types .= str_repeat('s', count($employmentTypes)); // s for each employment type
    }

    // Add job category condition if provided
    if (!empty($jobCategory)) {
        $query .= " AND job_category = ?";
        $params[] = $jobCategory;
        $types .= 's'; // s for string
    }


    if (!empty($a)) {
        $query .= " AND job_type = ?";
        $params[] = $a;
        $types .= 's'; // s for string
    }
    if (!empty($location)) {
        $query .= " AND country LIKE ? OR city LIKE ?";
        $params[] = '%' . $location . '%';
        $params[] = '%' . $location . '%';
        $types .= 'ss'; // s for string
    }

    // Prepare and execute the query
    $stmt = $this->prepare($query);
  

    // Bind parameters
    if (!empty($params)) {
        $stmt->bind_param($types, ...$params);
    }

    $stmt->execute();
    $result = $stmt->get_result();

    // Fetch the results
    $jobs = [];
    while ($row = $result->fetch_assoc()) {
        $jobs[] = $row;
    }

    // Close statement
    $stmt->close();

    return $jobs;
}



public function recent_job(){
    $query = "SELECT * FROM job ORDER BY id DESC LIMIT 6";
    $stmt = $this->prepare($query);
    $stmt->execute();
    $result = $stmt->get_result();
    $data =  $result->fetch_all(MYSQLI_ASSOC);  
    return $data;


}

public function upload_jobs(){
    if (isset($_REQUEST['submit'])) {
        if ($_FILES['csv']['name']) {
            $filename = $_FILES['csv']['tmp_name'];
            $file = fopen($filename, "r");
    
            // Skip the first row if it contains column headings
            fgetcsv($file);
    
            while (($row = fgetcsv($file, 1000, ",")) !== FALSE) {
                // Assuming the CSV has columns: job_title, job_link, and job_location in this order
                $job_title = $row[0];
                $location = $row[1];
                $desc = $row[2];
                $data=[
                    'job_title'=>$job_title,
                    'city'=>$location,
                    'description'=>$desc
                ];
                $this->insertData('job',$data);

    
               
    
            fclose($file);
            echo "CSV file successfully uploaded and data inserted into database.";
        }
    }
    
    
    
}



}


} 





















?>