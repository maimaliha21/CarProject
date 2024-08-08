<?php
$conn = mysqli_connect("localhost", "root", "", "carsprojecttt");

if ($conn === false) {
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

$updateCarName = isset($_REQUEST['carName']) ? $_REQUEST['carName'] : '';
$updateCarModel = isset($_REQUEST['carModel']) ? $_REQUEST['carModel'] : '';
$updateCarYear = isset($_REQUEST['carYear']) ? $_REQUEST['carYear'] : '';
$updateCarMade = isset($_REQUEST['carMade']) ? $_REQUEST['carMade'] : '';

// Check if all required fields are not empty
if (!empty($updateCarName) && !empty($updateCarModel) && !empty($updateCarYear) && !empty($updateCarMade)) {
    // Check if the primary key already exists
    $checkDuplicateQuery = "SELECT * FROM car WHERE name = '$updateCarName'";
    $checkDuplicateResult = mysqli_query($conn, $checkDuplicateQuery);

    if (mysqli_num_rows($checkDuplicateResult) > 0) {
        // Performing update query execution
        $sql = "UPDATE car SET model = '$updateCarModel', year = '$updateCarYear', made = '$updateCarMade' WHERE name = '$updateCarName'";
        // echo "<script>console.log('Hello $updateCarModel', year = '$updateCarYear', made = '$updateCarMade' WHERE name = '$updateCarName');</script>";
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
