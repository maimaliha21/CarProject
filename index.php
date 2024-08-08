<!DOCTYPE html>
<html>

<head>
    <title> Home Page </title>
    <link rel="stylesheet" href="page/style.css">
</head>

<body>

    <?php
    session_start();
    if (!isset($_SESSION['username'])) {
        header('Location: loginView.php');
        exit();
    }
    ?>

    <section>
        <h2 style="text-align: center; color: whitesmoke; padding-top: 9px;">Welcome to Cars DataBase</h2>
        <h2 style="text-align: center; margin-top: -9px; color: whitesmoke;"> done by <em
                style="color: rgba(130, 130, 241, 0.792)">Mai
                Maliha</em> </h2>

        <ul
            style=" margin-top: 7.1rem; display: flex; justify-content: space-between; gap: 9rem; text-align: center; justify-content: center; align-items: center;">
            <li style="list-style: none;"> <button
                    style="margin-bottom: 4px; background-color: #69a3ca; border-radius: 4px;"><a href="./page/car_page/index.php"
                        style="font-size: 18px; color: white; text-decoration: none;"> Open car's Table</a></button>
            </li>
            <li style="list-style: none;"> <button button
                    style="margin-bottom: 4px; background-color: rgb(105, 163, 202); border-radius: 4px;"> <a
                        href="./page/manufacture/index.php" style="font-size: 18px; text-decoration: none; color: white;"> Open
                        manufacture's
                        Table</a></button> </li>
            <li style="list-style: none;"> <button button
                    style="margin-bottom: 4px; background-color: rgb(105, 163, 202); border-radius: 4px;">
                    <a href="./page/order/index.php" style="font-size: 18px; text-decoration: none;  color: white;"> Open order's
                        Table</a></button> </li>
        </ul>

        <ul
            style=" margin-top: 3rem; display: flex; justify-content: space-between; gap: 9rem; text-align: center; justify-content: center; align-items: center;">
            <li style="list-style: none;"> <button button
                    style="margin-bottom: 4px; background-color: rgb(105, 163, 202); border-radius: 4px;"> <a
                        href="./page/address/index.php" style="font-size: 18px; text-decoration: none;  color: white;"> Open
                        address's Table</a></button> </li>

            <li style="list-style: none;"> <button button
                    style="margin-bottom: 4px; background-color: rgb(105, 163, 202); border-radius: 4px;"> <a
                        href="./page/car_part/index.php" style="font-size: 18px; text-decoration: none;  color: white;"> Open
                        car_part's Table</a></button>
            </li>
            <li style="list-style: none;"> <button button
                    style="margin-bottom: 4px; background-color: rgb(105, 163, 202); border-radius: 4px;"> <a
                        href="./page/device/index.php" style="font-size: 18px; text-decoration: none; color: white;"> Open device's
                        Table</a></button> </li>
        </ul>
        <ul>
            <li style="list-style: none;"> <button button style="margin-bottom: 4px; background-color: rgb(105, 163, 202); border-radius: 4px;  width: 20%;
            margin-left: 40%; margin-top: 20px;"> <a href="./page/customer/index.php"
                        style="font-size: 18px; text-decoration: none; color: white;"> Open customer's
                        Table</a></button> </li>
        </ul>


        <br>

        <button id="b" style="margin-top: 15px;"> <a class="button" href="logout.php"
                style=" color: black; text-decoration: none; ">Log Out</a> </button>

    </section>
</body>

</html>