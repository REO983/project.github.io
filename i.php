<?php
session_start();
?>

<?php

include("connect.php");

if (isset($_POST['login'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $query = "SELECT * FROM users WHERE email='$email' && password='$password' ";
    $data = mysqli_query($conn, $query);
    $total = mysqli_num_rows($data);
    // echo $total;

    if ($total == 1) {
        $_SESSION['email'] = $email;
        header('location:sndex.php');
    } else {
        echo "Login Faild";
    }
}


?>

<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>

<head>
    <!-- <link rel="stylesheet" href="./stylesheet/sheet1.css"> -->
    <!-- <link rel="shortcut icon" href="./images/mis.ico"> -->
    <meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
    <title>LOGIN</title>
    <!-- <script language="javascript" src="Checklogin.html"> -->
    <!-- </script> -->
    <style>
        header {
            background-color: #0033ff;
            color: #fff;
            padding: 20px;
        }

        header h1 {
            margin: 0;
        }

        /* Navigation Styles */

        nav {
            display: flex;
            justify-content: space-between;
            align-items: center;
            background-color: #ccc;
            padding: 10px;
        }

        nav ul {
            justify-content: space-between;
            display: flex;
            margin: 0;
            padding: 0;
            list-style: none;
        }

        nav li {
            margin: 0 10px;
        }

        nav a {
            color: #2e3031;
            text-decoration: none;
        }

        fieldset {
            width: 400px;
            margin: 0 auto;
            padding: 20px;
            background-color: #f5f5f5;
            border: 1px solid #ccc;
        }

        legend {
            font-size: 24px;
            font-weight: bold;
            text-align: center;
            margin-bottom: 20px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        th,
        td {
            padding: 10px;
            text-align: left;
        }

        th {
            width: 120px;
        }

        .h6-container {
            display: flex;
            justify-content: center;
            align-items: center;
        }

        input[type="text"],
        input[type="password"] {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
            margin-bottom: 10px;
        }

        input[type="submit"],
        input[type="reset"] {
            padding: 10px;
            background-color: #4CAF50;
            color: #fff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            margin-right: 10px;
        }

        input[type="submit"]:hover,
        input[type="reset"]:hover {
            background-color: #3e8e41;
        }

        #error {
            color: red;
            margin-top: 10px;
            font-size: 16px;
        }

        footer {
            background-color: #f5f5f5;
            padding: 20px 0;
            font-size: 14px;
            color: #333;
        }

        footer p {
            margin: 0;
            line-height: 1.5;
        }

        footer ul {
            margin: 0;
            padding: 0;
            list-style: none;
            text-align: right;
        }

        footer li {
            display: inline-block;
            margin-left: 20px;
        }

        footer a {
            color: #333;
            text-decoration: none;
        }

        footer a:hover {
            color: #007bff;
        }


        .cat {
            display: inline-block;
            padding: 0px 5px;
            background-color: #0d6efd;
            color: #fff;
            text-decoration: none;
            border-radius: 5px;
            transition: all 0.3s ease;
        }

        .cat:hover {
            background-color: #007bff;
        }
    </style>
</head>

<body onload="disableback()" oncontextmenu="return false">
    <br>
    <marquee bgcolor="#1C335F" behavior="scroll">
        <h1>Welcome Hostel Management Information
            System</h1>
    </marquee>
    <br>

    <br>

    <header>
        <nav>
            <ul>
                <li><a href="index.html">Home</a></li>
                <li><a href="About_us_hostal.html">About Us</a></li>
                <li><a href="#">Rooms</a></li>
                <li><a href="#">Mess and food</a></li>
                <li><a href="#">Facilities</a></li>
                <li><a href="location.html">Location</a></li>
                <li><a href="#">Reservation</a></li>
                <li><a href="contact_us_hostal.html">Contact Us</a></li>
                <!-- <li><a href="i.php">Login</a></li> -->
            </ul>

            <ul float="right">
                <li class="right-align" style=" background-color: #ccc;font-size: 130%;">
                    <a href="adminlogin.php" class="cat">
                        Admin?</a>
                </li>
            </ul>
        </nav>
    </header>

    <br>


    <fieldset>
        <legend>
            <b>Login</b>
        </legend>
        <br>
        <br>
        <form action="#" method="POST">
            <table align="center" border=0>
                <tr>
                    <th>Email-ID:</th>
                    <td><input type="text" name="email" id="login_id" value="" required placeholder="name@example.com">
                    </td>
                </tr>
                <tr>
                    <th>Password:</th>
                    <td><input type="password" name="password" id="password" value="" required placeholder="password">
                    </td>
                </tr>
                <tr>
                    <td align="center" colspan="2"><br>
                        <input type="submit" value="Log in" name="login">

                        <input type="reset" value="Cancel">
                    </td>
                </tr>
                <tr>
                    <td colspan="2" align="center">
                        <p id="err"></p>
                    </td>
                </tr>
            </table>
            <p align="center">Don't have an account <a href="registar.php">Create your account</a></p>
        </form>
    </fieldset>
    <br />
    <br />
    <br />



    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <p>&copy; 2023 Your Company. All rights reserved.</p>
                </div>
                <div class="col-md-6">
                    <ul class="list-inline">
                        <li><a href="#">Privacy Policy</a></li>
                        <li><a href="#">Terms of Use</a></li>
                        <li><a href="#">Contact Us</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>

</body>

</html>