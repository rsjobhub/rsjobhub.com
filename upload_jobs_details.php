<?php

// Array of keywords for each job category
$job_categories = [
    'Accountacy' => ['accountant', 'auditor','audit','account'],
    'Admin' => ['admin', 'administrator', 'office'],
    'Secretariel & PA' => ['secretary', 'assistant', 'pa','personal assistance'],
    'Architecture' => ['architect', 'design','building'],
    'Automobile & Mototring' => ['automobile', 'vehicle', 'car', 'motoring','auto'],
    'Charity & Voluntary' => ['charity', 'volunteer'],
    'Construction & Property' => ['construction', 'property', 'building'],
    'Customer Service' => ['customer service', 'support', 'client','customer support'],
    'Education' => ['teacher', 'educator', 'professor'],
    'Energy' => ['energy', 'power'],
    'Engineering' => ['engineer', 'mechanical', 'civil','electrical','engine'],
    'Environmental' => ['environment', 'sustainability'],
    'Estate' => ['estate', 'real estate'],
    'Agency' => ['agency', 'recruitment'],
    'Financial Services' => ['financial services', 'banking', 'investment','financial', 'finance'],
    'FMCG' => ['fmcg', 'consumer goods'],
    'Health & Social Care' => ['health', 'care', 'nurse','doctor','nanny'],
    'Hospitality & Catering' => ['hospitality', 'catering', 'hotel'],
    'Human Resources' => ['hr', 'human resources', 'recruiter'],
    'Insurance' => ['insurance', 'claims', 'underwriting'],
    'IT & Telecoms' => ['it', 'telecoms', 'developer','IT','softaware','data analyst','web','developer'],
    'Legal' => ['lawyer', 'legal', 'attorney','law'],
    'Leisure & Tourism' => ['tourism', 'travel', 'leisure'],
    'Manufacturing' => ['manufacturing', 'production', 'factory'],
    'Marketing & PR' => ['marketing', 'public relations', 'advertising'],
    'Media' => ['media', 'journalist', 'reporter'],
    'Digital & Creative' => ['digital', 'creative', 'designer','graphics'],
    'NHS Jobs' => ['nhs', 'healthcare'],
    'Public Sector' => ['public sector', 'government'],
    'Recruitment' => ['recruitment', 'headhunter'],
    'Religion' => ['religion', 'pastor', 'priest'],
    'Retail' => ['retail', 'salesperson'],
    'Sales' => ['sales', 'salesperson', 'account manager'],
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
// Database connection
$host = 'localhost';
$db = 'rsjobhub_job';
$user = 'rsjobhub_dev';
$pass = 'mX%Mt6DiSDBQ';

$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if (isset($_POST['submit'])) {
    if ($_FILES['csv']['name']) {
        $filename = $_FILES['csv']['tmp_name'];
        $file = fopen($filename, "r");

        // Skip the first row if it contains column headings
        fgetcsv($file);

        while (($row = fgetcsv($file, 1000, ",")) !== FALSE) {
            // Map CSV columns: job title (Text), location (Text1), and job description (Field)
            $job_title = $conn->real_escape_string($row[0]);
            $salary = $conn->real_escape_string($row[1]);
            $details = $conn->real_escape_string($row[2]);  // HTML job description

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
            $sql = "UPDATE job SET description = '$details', salary='$salary',employment_type = '$employment_type',job_category='$job_category' WHERE job_title = '$job_title'";

            if (!$conn->query($sql)) {
                echo "Error updating row: " . $conn->error;
            }
        }

        fclose($file);
        echo "CSV file successfully uploaded and data inserted into database.";
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
        <input type="submit" name="submit" value="Upload CSV">
    </form>
</body>
</html>
