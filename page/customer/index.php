<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Customer Table</title>
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
        <h1 style="text-align: center;"><em style="color: rgb(105, 163, 202);"> <u>Customer Table</u></em></h1>

        <!-- Insert Form -->
        <div class="insert-form">
            <h2 style="color: white; padding-left: 5px;">Insert New Customer</h2>
            <form id="insertForm" style="display: flex; flex-direction: row; align-items: center;">
                <input class="insert_input" type="text" name="insertId" id="insertId" placeholder="(new) Id" required><br>
                <input class="insert_input" type="text" name="insertf_name" id="insertf_name" placeholder="First Name"
                    required><br>
                <input class="insert_input" type="text" name="insertl_name" id="insertl_name" placeholder="Last name"
                    required><br>
                <!-- <input class="insert_input" type="text" name="insertAddress" id="insertAddress" placeholder="(Existing) Address*"
                    required><br> -->



                    <select class="insert_input" id="insertAddress" name="insertAddress" required>
                </select>
                <script>
                    get_values("insertAddress", "address", "id");
                </script>



                <input class="insert_input" type="text" name="insertJob" id="insertJob" placeholder="Job" required><br>

                <input class="insert_input" type="submit" value="Insert Customer">
            </form>
        </div>

        <!-- Update Form -->
        <div class="update-form">
            <!-- ------------------------------------------------------------------------------------- -->

            <h2 style="color: white; padding-left: 5px;">Update Customer</h2>
            <form id="updateMadeForm" style="display: flex; flex-direction: row; align-items: center;">
                <!-- <input class="insert_input" type="text" name="Id" id="Id" placeholder="(Existing) Id*" required><br> -->
               
                <select class="insert_input" id="Id" name="Id" required>
                </select>
                <script>
                    get_values("Id", "customer", "id");
                </script>
               
               
               
                <input class="insert_input" type="text" name="f_name" id="f_name" placeholder="First Name"
                    required><br>
                <input class="insert_input" type="text" name="l_name" id="l_name" placeholder="Last name"
                    required><br>
                <!-- <input class="insert_input" type="text" name="Address" id="Address" placeholder="(Existing) Address*"
                    required><br> -->


                    <select class="insert_input" id="Address" name="Address" required>
                </select>
                <script>
                    get_values("Address", "address", "id");
                </script>


                <input class="insert_input" type="text" name="Job" id="Job" placeholder="Job" required><br>

                <input class="updatebtn" type="submit" value="Update">
            </form>
            <!-- ------------------------------------------------------------------------------------- -->
        </div>

        <div>
            <h2 style="color: white; padding-left: 5px;">Customer's Database Table</h2>

            <input style="margin-left: 20px;" type="text" id="searchId" placeholder="id">
            <button id="myButton">Search</button>
        </div>

        <div id="res"></div>
    </section>
</body>

</html>