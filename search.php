<?php
// Load the CSV file
$data = array_map('str_getcsv', file('wd.csv'));

// Get the header row and data
$header = array_shift($data);
$rows = array();
foreach ($data as $row) {
    $rows[] = array_combine($header, $row);
}

// Check if a search keyword is provided
$keyword = isset($_GET['keyword']) ? $_GET['keyword'] : '';

// Filter rows based on the keyword
$filtered_rows = array_filter($rows, function($row) use ($keyword) {
    return strpos($row['SOURCE'], $keyword) !== false || 
           strpos($row['DATABASE ACCESSION'], $keyword) !== false;
});

// Output the results
echo '<pre>';
print_r($filtered_rows);
echo '</pre>';
?>

<form method="get" action="">
    <label for="keyword">Enter keyword to search:</label>
    <input type="text" name="keyword" id="keyword" />
    <input type="submit" value="Search" />
</form>
