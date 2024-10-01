<?php
// Database connection
$host = 'localhost';
$db = 'job';
$user = 'root';
$pass = '';

$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$job_categories = [
    'Admin Secretariel & PA' => ['admin', 'administrator', 'office','secretary', 'assistant', 'pa','personal assistance'],
    'Architecture' => ['architect', 'design','building'],
    'Automobile & Mototring' => ['motor','automobile', 'vehicle', 'car', 'motoring','auto'],
    'Charity & Voluntary' => ['charity', 'volunteer'],
    'Construction & Property' => ['construction', 'property', 'building'],
    'Customer Service' => ['customer service', 'support', 'client','customer support'],
    'Education' => ['teacher', 'educator', 'professor'],
    'Energy' => ['energy', 'power'],
    'Engineering' => ['engineer', 'mechanical', 'civil','electrical','engine'],
    'Environmental' => ['environment', 'sustainability'],
    'Estate' => ['estate', 'real estate'],
    'Agency' => ['agency', 'recruitment'],
    'Financial Services' => ['financial services', 'banking', 'investment','financial', 'finance','accountant', 'auditor','audit','account'],
    'FMCG' => ['fmcg', 'consumer goods'],
    'Health & Social Care' => ['health', 'care', 'nurse','doctor','nanny'],
    'Hospitality & Catering' => ['hospitality', 'catering', 'hotel'],
    'Human Resources' => ['hr', 'human resources', 'recruiter'],
    'Insurance' => ['insurance', 'claims', 'underwriting'],
    'IT & Telecoms' => ['data','data analyst','analyst','software engineer','it', 'telecoms', 'developer','IT','softaware','data analyst','web','developer'],
    'Legal' => ['lawyer', 'legal', 'attorney','law'],
    'Leisure & Tourism' => ['tourism', 'travel', 'leisure'],
    'Manufacturing' => ['manufacturing', 'production', 'factory'],
    'Marketing & PR' => ['advert','marketing', 'public relations', 'advertising'],
    'Media' => ['media', 'journalist', 'reporter'],
    'Digital & Creative' => ['digital', 'creative', 'designer','graphics'],
    'NHS Jobs' => ['nhs', 'healthcare'],
    'Public Sector' => ['public sector', 'government'],
    'Recruitment' => ['recruitment', 'headhunter'],
    'Religion' => ['religion', 'pastor', 'priest'],
    
    'Sales & Retail' => ['retail', 'salesperson','sales', 'salesperson', 'account manager'],
    'Scientific Security & Safety' => ['scientific', 'security', 'safety'],
    'Strategy & Consultancy' => ['strategy', 'consultant'],
    'Training' => ['trainer', 'instructor'],
    'Transport & Logistics' => ['transport', 'logistics', 'driver'],
];

// Function to find the job category based on title
function getJobCategory($job_title, $categories) {
    foreach ($categories as $category => $keywords) {
        foreach ($keywords as $keyword) {
            if (stripos($job_title, $keyword) !== false) {
                return $category;
            }
        }
    }
    return 'Other'; // Default if no match is found
}

if (isset($_POST['submit'])) {
    if ($_FILES['csv']['name']) {
        $type = $_REQUEST['type'];
        $filename = $_FILES['csv']['tmp_name'];
        $file = fopen($filename, "r");

        // Get the first row which contains column titles
        $header = fgetcsv($file);

        // Iterate over the rows
        while (($row = fgetcsv($file, 1000, ",")) !== FALSE) {
            // Create an associative array combining column titles with corresponding values
            $data = array_combine($header, $row);

            // Now you can use column names as keys
            $job_id = rand(0000000, 9999999);
            $job_title = ucfirst($conn->real_escape_string($data['title']));
            $link = $conn->real_escape_string($data['links']);
            $location = $conn->real_escape_string($data['location']);
            $salary = $conn->real_escape_string($data['salary']);
            $details = ucfirst($conn->real_escape_string($data['details']));

            $employment_type = 'Unknown'; // Default value

            // Check for keywords using stripos and preg_match
            if (stripos($details, 'fulltime') !== false || preg_match('/full[-\s]?time/i', $details)) {
            $employment_type = 'Full Time';
            } elseif (stripos($details, 'partime') !== false || preg_match('/part[-\s]?time/i', $details)) {
            $employment_type = 'ParT Time';
            } elseif (stripos($details, 'contract') !== false) {
            $employment_type = 'Contract';
            } elseif (stripos($details, 'intern') !== false || preg_match('/internship/i', $details)) {
            $employment_type = 'Intern';
            }
            $job_category = getJobCategory($job_title, $job_categories);


            // Insert data into the database
            if(!empty($job_title)){

            
            $sql = "INSERT INTO job (job_id, job_title, job_link, country, job_type, salary,description,employment_type,job_category) 
                    VALUES ('$job_id', '$job_title', '$link', '$location', '$type','$salary','$details','$employment_type','$job_category')";

            if (!$conn->query($sql)) {
                echo "Error inserting row: " . $conn->error;
            }
        }
        }

        fclose($file);
    }
}

$conn->close();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Upload CSV</title>
</head>
<body>
    <form enctype="multipart/form-data" method="post" action="">
        <input type="file" name="csv" required>
        <select name="type" id="">
            <option value="Remote">Remote</option>
            <option value="Sponsored">Sponsored</option>
        </select>
        <input type="submit" name="submit" value="Upload CSV">
    </form>
</body>
</html>
