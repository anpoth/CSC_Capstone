<?php

function csvToArrayMain($file) {
    $rows = array();
    $handle = fopen($file, "r");
    while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
        $rows[] = $data;
    }
    fclose($handle);
    return $rows;
}

// Path to the CSV file
$csvFile = 'data/main.csv';

// Check if the file exists
if (file_exists($csvFile)) {
    // Convert CSV to array
    $students = csvToArrayMain($csvFile);

    // Output data as a table
    echo "<table border='1'>";

    foreach ($students as $student) {
        echo "<tr>";
        foreach ($student as $value) {
            echo "<td>$value</td>";
        }
        echo "</tr>";
    }

    echo "</table>";
} else {
    echo "CSV file not found!";
}

?>