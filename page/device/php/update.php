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
        // Performing update query execution
        $sql = "UPDATE device SET name = '$name', price = '$price', weight = '$weight', made = '$made' WHERE no = '$no' ";
        /////////////////bug to fix
        // echo "<script>console.log('Hello $name', year = '$price', made = '$made' WHERE no = '$no');</script>";
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
