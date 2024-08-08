<?php
$conn = mysqli_connect("localhost", "root", "", "carsprojecttt");

if ($conn === false) {
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

$no = isset($_REQUEST['no']) ? $_REQUEST['no'] : '';
$name = isset($_REQUEST['name']) ? $_REQUEST['name'] : '';
$price = isset($_REQUEST['price']) ? $_REQUEST['price'] : '';
$weight = isset($_REQUEST['weight']) ? $_REQUEST['weight'] : '';
$made = isset($_REQUEST['made']) ? $_REQUEST['made'] : '';

// Check if all required fields are not empty
if (!empty($no) && !empty($name) && !empty($price) && !empty($weight) && !empty($made)) {
    // Check if the primary key already exists
    $checkDuplicateQuery = "SELECT * FROM device WHERE no = '$no'";
    $checkDuplicateResult = mysqli_query($conn, $checkDuplicateQuery);

    if (mysqli_num_rows($checkDuplicateResult) > 0) {
        echo "ERROR: The primary key already exists. id duplicated.";
    } else {
        // Performing insert query execution
        $sql = "INSERT INTO device (no, name, price, weight, made) VALUES ('$no', '$name', '$price', '$weight', '$made')";

        if (mysqli_query($conn, $sql)) {
            echo "<h3>Data stored in the database successfully.</h3>";
        } else {
            echo "ERROR: Hush! Sorry $sql. " . mysqli_error($conn);
        }
    }
} else {
}

mysqli_close($conn);
