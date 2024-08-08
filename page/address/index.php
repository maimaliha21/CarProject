<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Address Table</title>
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
        <a href="../../index.php"
            style="font-size: 18px; margin-left: 10px; margin-top: 7px; color: white; padding-top: 19px;">Back</a>
        <h1 style="text-align: center;"><em style="color: rgb(105, 163, 202);"> <u>address Table</u></em></h1>

        <!-- Insert Form -->
        <div class="insert-form">
            <h2 style="color: white; padding-left: 5px;">Insert New address</h2>
            <form id="insertForm" style="display: flex; flex-direction: row; align-items: center;">
                <input class="insert_input" type="text" name="insertCarId" id="insertCarId" placeholder="(new) id"
                    required><br>
                <input class="insert_input" type="text" name="insertCarBuidling" id="insertCarBuidling"
                    placeholder="building" required><br>
                <input class="insert_input" type="text" name="insertCarStreet" id="insertCarStreet" placeholder="street"
                    required><br>
                <input class="insert_input" type="text" name="insertCarCity" id="insertCarCity" placeholder="city"
                    required><br>
                <input class="insert_input" type="text" name="insertCarCountry" id="insertCarCountry" placeholder="Country"
                    required><br>

                <input class="insert_input" type="submit" value="Insert Car">
            </form>
        </div>

        <!-- Update Form -->
        <div class="update-form">
            <!-- ------------------------------------------------------------------------------------- -->

            <h2 style="color: white; padding-left: 5px;">Update address</h2>
            <form id="updateMadeForm" style="display: flex; flex-direction: row; align-items: center;">
                <!-- <input class="insert_input" type="text" name="id" id="id" placeholder="Existing id*"
                required><br> -->

                <select class="insert_input" id="id" name="id" required>
                </select>
                <script>
                    get_values("id", "address", "id");
                </script>



            <input class="insert_input" type="text" name="buidling" id="buidling"
                placeholder="building" required><br>
            <input class="insert_input" type="text" name="street" id="street" placeholder="street"
                required><br>
            <input class="insert_input" type="text" name="city" id="city" placeholder="city"
                required><br>
            <input class="insert_input" type="text" name="country" id="country" placeholder="Country"
                required><br>

                <input class="updatebtn" type="submit" value="Update">
            </form>
            <!-- ------------------------------------------------------------------------------------- -->
        </div>

        <div>
            <h2 style="color: white; padding-left: 5px;">address's Database Table</h2>

            <input style="margin-left: 20px;" type="text" id="searchId" placeholder="Id">
            <button id="myButton">Search</button>
        </div>

        <div id="res"></div>
    </section>
</body>

</html>