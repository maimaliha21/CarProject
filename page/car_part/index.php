<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Car_Part Table</title>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script src="./script.js"></script>
    <link rel="stylesheet" href="../style.css">
</head>

<body>
    <?php
    session_start();
    if (!isset($_SESSION['username'])) {
        header('Location: ../../loginView.php');
        exit();
    }
    ?>
    <section>
        <a href="../../index.php" style="font-size: 18px; margin-left: 10px; margin-top: 7px; color: white; padding-top: 19px;">Back</a>
        <h1 style="text-align: center;"><em style="color: rgb(105, 163, 202);"> <u>Car_Part Table</u></em></h1>

        <!-- Update Form -->
        <div class="update-form">
            <!-- ------------------------------------------------------------------------------------- -->

            <h2 style="color: white; padding-left: 5px;">Update Car_Part</h2>
            <form id="updateCarPartForm" name="carNames" style="display: flex; flex-direction: row; align-items: center;" method="post">
                <?php
                $servername = "localhost";
                $username = "root";
                $password = "";
                $dbname = "carsprojecttt";

                // Create connection
                $conn = new mysqli($servername, $username, $password, $dbname);
                // Check connection
                if ($conn->connect_error) {
                    die("Connection failed: " . $conn->connect_error);
                }

                // Fetch car names from car table
                $carNamesQuery = $conn->query("SELECT name FROM car");
                ?>


                <select id="carName" name="carr">
                    <option value="">Car</option>
                    <?php
                    while ($rowCar = $carNamesQuery->fetch_assoc()) {
                        echo "<option value='" . $rowCar["name"] . "'>" . $rowCar["name"] . "</option>";
                    }
                    ?>
                </select><br>
                <?php
                $servername = "localhost";
                $username = "root";
                $password = "";
                $dbname = "carsprojecttt";

                // Create connection
                $conn = new mysqli($servername, $username, $password, $dbname);
                // Check connection
                if ($conn->connect_error) {
                    die("Connection failed: " . $conn->connect_error);
                }

                // Fetch car names from car table
                $carNamesQuery = $conn->query("SELECT no FROM device");
                ?>


                <select id="partNo" name="part">
                    <option value="">Part</option>
                    <?php
                    while ($rowCar = $carNamesQuery->fetch_assoc()) {
                        echo "<option value='" . $rowCar["no"] . "'>" . $rowCar["no"] . "</option>";
                    }
                    ?>
                </select>

                <input id="updateCarPart" class="updateCarPart" type="submit" value="Update Car Made">
            </form>
            <!-- ------------------------------------------------------------------------------------- -->
        </div>
        <div>
            <h2 style="color: white; padding-left: 5px;">Car_Part's Database Table</h2>

            <input style="margin-left: 20px;" type="text" id="searchCarName" placeholder="Car Name">
            <button id="myButton">Search</button>
        </div>

        <div id="res"></div>
    </section>
</body>

</html>