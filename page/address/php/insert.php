<?php
$conn = mysqli_connect("localhost", "root", "", "carsprojecttt");

if ($conn === false) {
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

$id = isset($_REQUEST['id']) ? $_REQUEST['id'] : '';
$buidling = isset($_REQUEST['buidling']) ? $_REQUEST['buidling'] : '';
$street = isset($_REQUEST['street']) ? $_REQUEST['street'] : '';
$city = isset($_REQUEST['city']) ? $_REQUEST['city'] : '';
$country = isset($_REQUEST['country']) ? $_REQUEST['country'] : '';

// Check if all required fields are not empty
if (!empty($id) && !empty($buidling) && !empty($street) && !empty($city) && !empty($country)) {
    // Check if the primary key already exists
    $checkDuplicateQuery = "SELECT * FROM address WHERE id = '$id'";
    $checkDuplicateResult = mysqli_query($conn, $checkDuplicateQuery);

    if (mysqli_num_rows($checkDuplicateResult) > 0) {
        echo "ERROR: The primary key already exists. id duplicated.";
    } else {
        // Performing insert query execution
        $sql = "INSERT INTO address (id, buidling, street, city, country) VALUES ('$id', '$buidling', '$street', '$city', '$country')";

        if (mysqli_query($conn, $sql)) {
            echo "<h3>Data stored in the database successfully.</h3>";
        } else {
            echo "ERROR: Hush! Sorry $sql. " . mysqli_error($conn);
        }
    }
} else {
}

mysqli_close($conn);
