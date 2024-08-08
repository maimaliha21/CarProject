<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order Table</title>
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
        <h1 style="text-align: center;"><em style="color: rgb(105, 163, 202);"> <u>Order Table</u></em></h1>

        <!-- Insert Form -->
        <div class="insert-form">
            <h2 style="color: white; padding-left: 5px;">Insert New Order</h2>
            <form id="insertForm" style="display: flex; flex-direction: row; align-items: center;">
                <input class="insert_input" type="text" name="insertCarId" id="insertCarId" placeholder="(new) Id"
                    required><br>
                <input class="insert_input" type="text" name="insertCarDate" id="insertCarDate"
                    placeholder="date" required><br>
                <!-- <input class="insert_input" type="text" name="insertCarCustomer" id="insertCarCustomer" placeholder="(Existing) customer*"
                    required><br> -->

                    <select class="insert_input" id="insertCarCustomer" name="insertCarCustomer" required>
                </select>
                <script>
                    get_values("insertCarCustomer", "customer", "id");
                </script>



                <!-- <input class="insert_input" type="text" name="insertCarCar" id="insertCarCar" placeholder="(Existing) car*"
                    required><br> -->


                    <select class="insert_input" id="insertCarCar" name="insertCarCar" required>
                </select>
                <script>
                    get_values("insertCarCar", "car", "name");
                </script>



                <input class="insert_input" type="submit" value="Insert Car">
            </form>
        </div>

        <!-- Update Form -->
        <div class="update-form">
            <!-- ------------------------------------------------------------------------------------- -->

            <h2 style="color: white; padding-left: 5px;">Update Order</h2>
            <form id="updateMadeForm" style="display: flex; flex-direction: row; align-items: center;">
                <!-- <input class="insert_input" type="text" name="id" id="id" placeholder="(Existing) Id*"
                    required><br> -->

                    <select class="insert_input" id="id" name="id" required>
                </select>
                <script>
                    get_values("id", "orders", "id");
                </script>

                  



                <input class="insert_input" type="text" name="date" id="date"
                    placeholder="date" required><br>
                <!-- <input class="insert_input" type="text" name="customer" id="customer" placeholder="(Existing) customer*"
                    required><br> -->

                    <select class="insert_input" id="customer" name="customer" required>
                </select>
                <script>
                    get_values("customer", "customer", "id");
                </script>




                <!-- <input class="insert_input" type="text" name="car" id="car"
                    placeholder="(Existing) car*" required><br> -->

                    <select class="insert_input" id="car" name="car" required>
                </select>
                <script>
                    get_values("car", "car", "name");
                </script>



                <input class="updatebtn" type="submit" value="Update order">
            </form>
            <!-- ------------------------------------------------------------------------------------- -->
        </div>

        <div>
            <h2 style="color: white; padding-left: 5px;">Order's Database Table</h2>

            <input style="margin-left: 20px;" type="text" id="carId" placeholder="Id">
            <button id="myButton">Search</button>
        </div>

        <div id="res"></div>
    </section>
</body>

</html>