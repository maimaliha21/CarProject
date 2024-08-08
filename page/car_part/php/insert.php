<!-- <?php
$conn = mysqli_connect("localhost", "root", "", "carsprojecttt");

if ($conn === false) {
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

$insertCarName = isset($_REQUEST['carName']) ? $_REQUEST['carName'] : '';
$insertCarModel = isset($_REQUEST['carModel']) ? $_REQUEST['carModel'] : '';
$insertCarYear = isset($_REQUEST['carYear']) ? $_REQUEST['carYear'] : '';
$insertCarMade = isset($_REQUEST['carMade']) ? $_REQUEST['carMade'] : '';

// Check if all required fields are not empty
if (!empty($insertCarName) && !empty($insertCarModel) && !empty($insertCarYear) && !empty($insertCarMade)) {
    // Check if the primary key already exists
    $checkDuplicateQuery = "SELECT * FROM car WHERE name = '$insertCarName'";
    $checkDuplicateResult = mysqli_query($conn, $checkDuplicateQuery);

    if (mysqli_num_rows($checkDuplicateResult) > 0) {
        echo "ERROR: The primary key already exists. id duplicated.";
    } else {
        // Performing insert query execution
        $sql = "INSERT INTO car (name, model, year, made) VALUES ('$insertCarName', '$insertCarModel', '$insertCarYear', '$insertCarMade')";

        if (mysqli_query($conn, $sql)) {
            echo "<h3>Data stored in the database successfully.</h3>";
        } else {
            echo "ERROR: Hush! Sorry $sql. " . mysqli_error($conn);
        }
    }
} else {
}

mysqli_close($conn);
?> -->