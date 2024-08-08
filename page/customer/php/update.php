<?php
$conn = mysqli_connect("localhost", "root", "", "carsprojecttt");

if ($conn === false) {
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

$id = isset($_REQUEST['id']) ? $_REQUEST['id'] : '';
$f_name = isset($_REQUEST['f_name']) ? $_REQUEST['f_name'] : '';
$l_name = isset($_REQUEST['l_name']) ? $_REQUEST['l_name'] : '';
$address = isset($_REQUEST['address']) ? $_REQUEST['address'] : '';
$job = isset($_REQUEST['job']) ? $_REQUEST['job'] : '';

// Check if all required fields are not empty
if (!empty($id) && !empty($f_name) && !empty($l_name) && !empty($address) && !empty($job)) {
    // Check if the primary key already exists
    $checkDuplicateQuery = "SELECT * FROM customer WHERE id = '$id'";
    $checkDuplicateResult = mysqli_query($conn, $checkDuplicateQuery);

    if (mysqli_num_rows($checkDuplicateResult) > 0) {
        // Performing update query execution
        $sql = "UPDATE customer SET f_name = '$f_name', l_name = '$l_name', address = '$address', job = '$job' WHERE id = '$id'";
        // echo "<script>console.log('Hello $f_name', year = '$l_name', made = '$address' WHERE name = '$name');</script>";
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
