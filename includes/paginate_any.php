<?php

$limit = 10;

// Step 2: Find out the number of results stored in the database
$result = count($jobs);
$total_records = $result;

// Step 3: Determine total number of pages
$total_pages = ceil($total_records / $limit);

// Step 4: Determine which page number visitor is currently on
$current_page = isset($_GET['page']) ? $_GET['page'] : 1;
$offset = ($current_page - 1) * $limit;

// Step 5: Fetch data using your method
$data = $Job->paginate_jobs_any($offset, $limit);

$start = $offset + 1;
$end = min($offset + $limit, $total_records);
?>