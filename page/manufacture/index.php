<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manufacture Table</title>
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
        <h1 style="text-align: center;"><em style="color: rgb(105, 163, 202);"> <u>Manufacture Table</u></em></h1>

        <!-- Insert Form -->
        <div class="insert-form">
            <h2 style="color: white; padding-left: 5px;">Insert New Manufacture</h2>
            <form id="insertForm" style="display: flex; flex-direction: row; align-items: center;">
                <input class="insert_input" type="text" name="insertName" id="insertName" placeholder="(new) Name"
                    required><br>
                <input class="insert_input" type="text" name="insertType" id="insertType" placeholder="Type" 
                    required><br>
                <input class="insert_input" type="text" name="insertCity" id="insertCity" placeholder="City"
                    required><br>
                <input class="insert_input" type="text" name="insertCountry" id="insertCountry" placeholder="Country"
                    required><br>

                <input class="insert_input" type="submit" value="Insert manufacture">
            </form>
        </div>

        <!-- Update Form -->
        <div class="update-form">
            <!-- ------------------------------------------------------------------------------------- -->

            <h2 style="color: white; padding-left: 5px;">Update Manufacture</h2>
            <form id="updateMadeForm" style="display: flex; flex-direction: row; align-items: center;">
                <!-- <input class="insert_input" type="text" name="Name" id="Name" placeholder="(Existing) Name*"
                    required><br> -->

                    <select class="insert_input" id="Name" name="Name" required>
                </select>
                <script>
                    get_values("Name", "manufacture", "name");
                </script>



                <input class="insert_input" type="text" name="Type" id="Type" placeholder="Type" 
                    required><br>
                <input class="insert_input" type="text" name="City" id="City" placeholder="City"
                    required><br>
                <input class="insert_input" type="text" name="Country" id="Country" placeholder="Country" 
                    required><br>

                <input class="updatebtn" type="submit" value="Update">
            </form>
            <!-- ------------------------------------------------------------------------------------- -->
        </div>

        <div>
            <h2 style="color: white; padding-left: 5px;">Manufacture's Database Table</h2>

            <input style="margin-left: 20px;" type="text" id="searchId" placeholder="Name">
            <button id="myButton">Search</button>
        </div>

        <div id="res"></div>
    </section>
</body>

</html>