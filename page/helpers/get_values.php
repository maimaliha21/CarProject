<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "carsprojecttt";

$table_name =  isset($_REQUEST['table_name']) ? $_REQUEST['table_name'] : '';
$column_name =  isset($_REQUEST['column_name']) ? $_REQUEST['column_name'] : '';

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$queryResult = $conn->query("SELECT ".$column_name." FROM ".$table_name);

$result_array = array();

while ($row = mysqli_fetch_assoc($queryResult)) {
    $result_array[] = $row[$column_name];
}

echo json_encode($result_array);

mysqli_close($conn);