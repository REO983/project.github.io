<?php include("connect.php");
error_reporting(0);

$id = $_GET['id'];
$un = $_GET['un'];
?>



<?php

if (isset($_POST['submit'])) {

    if ($_POST['email'] == '' or $_POST['username'] == '') {
        echo "some inputs are empty";
    } else {
        $email = $_POST['email'];
        $username = $_POST['username'];
        // $password = $_POST['password'];

        $insert = "INSERT INTO users VALUES( '$email', '$username',)";
        $data = mysqli_query($conn, $insert);

        if ($data) {
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
    <title>LOGIN-update</title>
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

    <!-- <header>
        <nav>
            <ul>
                <li><a href="index.html">Home</a></li>
                <li><a href="About_us_hostal.html">About Us</a></li>
                <li><a href="room.html">Rooms</a></li>
                <li><a href="mess and food.html">Mess and food</a></li>
                <li><a href="facilities.html">Facilities</a></li>
                <li><a href="location.html">Location</a></li>
                <li><a href="reservation.html">Reservation</a></li>
                <li><a href="contact_us_hostal.html">Contact Us</a></li>
                <li><a href="i.html">Login</a></li>
            </ul>
        </nav>
    </header> -->
    <br><br>

    <div class="form">
        <h2>Update Registration Details</h2>
        <form action="#" method="GET">
            <div class="form-group">
                <label for="email">Email:</label>
                <input name="email" value="<?php echo "$id" ?>" type="email" id="email" name="email"
                    placeholder="Enter your email" required>
            </div>
            <div class="form-group">
                <label for="username">Username:</label>
                <input name="username" value="<?php echo "$un" ?>" type="text" id="username" name="username"
                    placeholder="Enter your username" required>
            </div>
            <!-- <div class="form-group">
                <label for="password">Password:</label>
                <input name="password" type="password" id="password" name="password" placeholder="Enter your password"
                    required>
            </div> -->
            <div class="form-group">
                <input name="submit" type="submit" value="Update">
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

<?php

if ($_GET['submit']) {

    $el = $_GET['email'];
    $urn = $_GET['username'];

    $query = "UPDATE users SET email='$el',username=' $urn' WHERE email='$el'";
    $data = mysqli_query($conn, $query);

    if ($data) {

        echo "<script>alert('Data Updated')</script>";

        ?>

        <meta http-equiv="refresh" content="0; url = http://localhost/prog/display.php" />

        <?php
    } else {
        echo "Faild to Update record";
    }

}
?>