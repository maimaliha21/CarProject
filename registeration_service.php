<?php

$uname = $_POST['uname'];
$psw = $_POST['psw'];

$encr_psw = md5($psw);

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "carsprojectt";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// SQL query to insert data into the 'login' table
$sql = "INSERT INTO login (username, password) VALUES ('$uname', '$encr_psw')";

// Execute the query
$result = $conn->query($sql);

// Check if the query is executed successfully
if ($result === TRUE) {

  header('Location: createdSuccessfulRegistration.php');
  echo '<a href="loginView.php">SIGN IN</a>';

 
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

// Close the database connection
$conn->close();

?>





