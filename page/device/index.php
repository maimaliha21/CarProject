<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>device Table</title>
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
        <h1 style="text-align: center;"><em style="color: rgb(105, 163, 202);"> <u>device Table</u></em></h1>

        <!-- Insert Form -->
        <div class="insert-form">
            <h2 style="color: white; padding-left: 5px;">Insert New device</h2>
            <form id="insertForm" style="display: flex; flex-direction: row; align-items: center;">
                <input class="insert_input" type="text" name="insertNo" id="insertNo" placeholder="(new) no"
                    required><br>
                <input class="insert_input" type="text" name="insertName" id="insertName" placeholder="name"
                    required><br>
                <input class="insert_input" type="text" name="insertPrice" id="insertPrice" placeholder="price"
                    required><br>
                <input class="insert_input" type="text" name="insertWeight" id="insertWeight" placeholder="weight"
                    required><br>
                <!-- <input class="insert_input" type="text" name="insertMade" id="insertMade" placeholder="(Existing) made*"
                    required><br> -->


                    <select class="insert_input" id="insertMade" name="insertMade" required>
                </select>
                <script>
                    get_values("insertMade", "manufacture", "name");
                </script>




                <input class="insert_input" type="submit" value="Insert device">
            </form>
        </div>

        <!-- Update Form -->
        <div class="update-form">
            <!-- ------------------------------------------------------------------------------------- -->

            <h2 style="color: white; padding-left: 5px;">Update device</h2>
            <form id="updateMadeForm" style="display: flex; flex-direction: row; align-items: center;">
                <!-- <input class="insert_input" type="text" name="no" id="no" placeholder="(Existing) no*" required><br>-->
 
                <select class="insert_input" id="no" name="no" required>
                </select>
                <script>
                    get_values("no", "device", "no");
                </script>



                <input class="insert_input" type="text" name="name" id="name" placeholder="name" required><br>
                <input class="insert_input" type="text" name="price" id="price" placeholder="price" required><br>
                <input class="insert_input" type="text" name="weight" id="weight" placeholder="weight" required><br>
                <!-- <input class="insert_input" type="text" name="made" id="made" placeholder="(Existing) made*" required><br> -->

                <select class="insert_input" id="made" name="made" required>
                </select>
                <script>
                    get_values("made", "manufacture", "name");
                </script>



                <input class="updatebtn" type="submit" value="Update device">
            </form>
            <!-- ------------------------------------------------------------------------------------- -->
        </div>

        <div>
            <h2 style="color: white; padding-left: 5px;">device's Database Table</h2>

            <input style="margin-left: 20px;" type="text" id="searchNo" placeholder="No">
            <button id="myButton">Search</button>
        </div>

        <div id="res"></div>
    </section>
</body>

</html>