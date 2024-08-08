<?php
$conn = mysqli_connect("localhost", "root", "", "carsprojecttt");

if ($conn === false) {
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

$car = isset($_REQUEST['car']) ? $_REQUEST['car'] : '';
$part = isset($_REQUEST['part']) ? $_REQUEST['part'] : '';

 echo "$part";
// Check if all required fields are not empty
if (!empty($car) && !empty($part)) {
    // Check if the primary key already exists
    $checkDuplicateQuery = "SELECT * FROM car_part WHERE car = '$car'";
    $checkDuplicateResult = mysqli_query($conn, $checkDuplicateQuery);

    if (mysqli_num_rows($checkDuplicateResult) > 0) {
        // Performing update query execution
        $sql = "UPDATE car_part SET part = '$part' WHERE car = '$car'";
       
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
    // echo "ERROR: All required fields must be filled.";
}

mysqli_close($conn);