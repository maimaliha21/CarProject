<?php
$conn = mysqli_connect("localhost", "root", "", "carsprojecttt");

if ($conn === false) {
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

$name = isset($_REQUEST['name']) ? $_REQUEST['name'] : '';
$type = isset($_REQUEST['type']) ? $_REQUEST['type'] : '';
$city = isset($_REQUEST['city']) ? $_REQUEST['city'] : '';
$country = isset($_REQUEST['country']) ? $_REQUEST['country'] : '';

// Check if all required fields are not empty
if (!empty($name) && !empty($type) && !empty($city) && !empty($country)) {
    // Check if the primary key already exists
    $checkDuplicateQuery = "SELECT * FROM manufacture WHERE name = '$name'";
    $checkDuplicateResult = mysqli_query($conn, $checkDuplicateQuery);

    if (mysqli_num_rows($checkDuplicateResult) > 0) {
        echo "ERROR: The primary key already exists. id duplicated.";
    } else {
        // Performing insert query execution
        $sql = "INSERT INTO manufacture (name, type, city, country) VALUES ('$name', '$type', '$city', '$country')";

        if (mysqli_query($conn, $sql)) {
            echo "<h3>Data stored in the database successfully.</h3>";
        } else {
            echo "ERROR: Hush! Sorry $sql. " . mysqli_error($conn);
        }
    }
} else {
}

mysqli_close($conn);
