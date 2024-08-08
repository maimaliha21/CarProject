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
        // Performing update query execution
        $sql = "UPDATE manufacture SET type = '$type', city = '$city', country = '$country' WHERE name = '$name'";
        // echo "<script>console.log('Hello $type', year = '$city', made = '$country' WHERE name = '$name');</script>";
        if (mysqli_query($conn, $sql)) {
            echo "<h3>Data updated in the database successfully.</h3>";
        } else {
            echo "ERROR: Hush! Sorry $sql. " . mysqli_error($conn);
        }
    } else {
        echo "ERROR: The primary key does not exist. Cannot update non-existent record.";
    }
} else {
    echo "ERROR: All required fields must be filled.";
}

mysqli_close($conn);
