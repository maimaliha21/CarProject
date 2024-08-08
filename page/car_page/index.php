<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Car Table</title>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script src="./script.js"></script>
    <link rel="stylesheet" href="../style.css">
    <script src="../helpers/script.js"></script>
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
        <h1 style="text-align: center;"><em style="color: rgb(105, 163, 202);"> <u>Car Table</u></em></h1>

        <!-- Insert Form -->
        <div class="insert-form">
            <h2 style="color: white; padding-left: 5px;">Insert New Car</h2>
            <form id="insertForm" style="display: flex; flex-direction: row; align-items: center;">
                <input class="insert_input" type="text" name="insertCarName" id="insertCarName" placeholder="(new) name" required><br>
                <input class="insert_input" type="text" name="insertCarModel" id="insertCarModel" placeholder="Car model" required><br>
                <input class="insert_input" type="text" name="insertCarYear" id="insertCarYear" placeholder="Car year" required><br>
                <!-- <input class="insert_input" type="text" name="insertCarMade" id="insertCarMade" placeholder="(Existing) Made*" required><br> -->
               
               
               
                <select class="insert_input" id="insertCarMade" name="insertCarMade" required>
                </select>
                <script>
                    get_values("insertCarMade", "manufacture", "name");
                </script>



                <input class="insert_input" type="submit" value="Insert Car">
            </form>
        </div>

        <!-- Update Form -->
        <div class="update-form">
            <!-- ------------------------------------------------------------------------------------- -->

            <h2 style="color: white; padding-left: 5px;">Update Car</h2>
            <form id="updateMadeForm" style="display: flex; flex-direction: row; align-items: center;">
                <!-- <input class="insert_input" type="text" name="updateCarName" id="updateCarName" placeholder="(Existing) Name*" required><br> -->
                <select class="insert_input" id="updateCarName" name="updateCarName" placeholder="(Existing) Name*" required>
                </select>
                <script>
                    get_values("updateCarName", "car", "name");
                </script>
                <input class="insert_input" type="text" name="updateCarModel" id="updateCarModel" placeholder="Model" required><br>
                <input class="insert_input" type="text" name="updateCarYear" id="updateCarYear" placeholder="year" required><br>
                <!-- <input class="insert_input" type="text" name="updateCarMade" id="updateCarMade" placeholder="(Existing) Made*" required><br> -->
                <select class="insert_input" id="updateCarMade" name="updateCarMade" placeholder="(Existing) Made*" required>
                </select>
                <script>
                    get_values("updateCarMade", "manufacture", "name");
                </script>
                <input class="updatebtn" type="submit" value="Update Car Made">
            </form>
            <!-- ------------------------------------------------------------------------------------- -->
        </div>

        <div>
            <h2 style="color: white; padding-left: 5px;">Car's Database Table</h2>

            <input style="margin-left: 20px;" type="text" id="carName" placeholder="Car Name">
            <button id="myButton">Search</button>
        </div>

        <div id="res"></div>
    </section>
</body>

</html>