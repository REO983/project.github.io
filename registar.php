<?php include("connect.php"); ?>



<?php

if (isset($_POST['submit'])) {

    if ($_POST['email'] == '' or $_POST['username'] == '' or $_POST['password'] == '') {
        echo "some inputs are empty";
    } else {
        $semail = $_POST['email'];
        $susername = $_POST['username'];
        $spassword = $_POST['password'];

        $inser = "INSERT INTO users VALUES( '$semail', '$susername', '$spassword')";
        $dat = mysqli_query($conn, $inser);

        if ($dat) {
            echo "Data inserted";
        } else {
            echo "faild";
        }

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

        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
        }

        .form {
            max-width: 400px;
            margin: 0 auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        h2 {
            text-align: center;
            margin-bottom: 20px;
        }

        .form-group {
            margin-bottom: 15px;
        }

        label {
            display: block;
            font-weight: bold;
            margin-bottom: 5px;
        }

        input[type="email"],
        input[type="text"],
        input[type="password"] {
            width: 100%;
            padding: 10px;
            border-radius: 3px;
            border: 1px solid #ccc;
        }

        input[type="submit"] {
            width: 100%;
            padding: 10px;
            background-color: #4CAF50;
            color: #fff;
            border: none;
            border-radius: 3px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #45a049;
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

        .il {
            display: inline-block;
            padding: 0px 5px;
            background-color: #0d6efd;
            color: #fff;
            text-decoration: none;
            border-radius: 5px;
            transition: all 0.3s ease;
        }

        .il:hover {
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
                <li><a onclick="alertt()" href="i.php">Rooms</a></li>
                <li><a onclick="alertm()" href="i.php">Mess and food</a></li>
                <li><a onclick="alertf()" href="i.php">Facilities</a></li>
                <li><a href="location.html">Location</a></li>
                <li><a onclick="alertr()" href="i.php">Reservation</a></li>
                <li><a href="contact_us_hostal.php">Contact Us</a></li>
            </ul>

            <ul float="right">
                <li class="right-align" style=" background-color: #ccc;font-size: 130%;">
                    <a href="i.php" class="il">Login</a>
                </li>
        </nav>
    </header>
    <br><br>

    <div class="form">
        <h2>Registration Form</h2>
        <form action="#" method="POST">
            <div class="form-group">
                <label for="email">Email:</label>
                <input name="email" type="email" id="email" name="email" placeholder="Enter your email" required>
            </div>
            <div class="form-group">
                <label for="username">Username:</label>
                <input name="username" type="text" id="username" name="username" placeholder="Enter your username"
                    required>
            </div>
            <div class="form-group">
                <label for="password">Password:</label>
                <input name="password" type="password" id="password" name="password" placeholder="Enter your password"
                    required>
            </div>
            <div class="form-group">
                <input name="submit" type="submit" value="Register">
            </div>
        </form>
    </div><br><br>


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