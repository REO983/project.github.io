<?php include("connect.php"); ?>

<?php

if (isset($_POST['submit'])) {

    if ($_POST['name'] == '' or $_POST['email'] == '' or $_POST['message'] == '') {
        echo "some inputs are empty";
    } else {
        $l = $_POST['name'];
        $e = $_POST['email'];
        $p = $_POST['message'];

        $insert = "INSERT INTO contactus VALUES( '$l', '$e', '$p')";
        $data = mysqli_query($conn, $insert);

        if ($data) {
            echo "Data inserted";
        } else {
            echo "faild";
        }

    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <link rel="stylesheet" href="sheet1.css">

    <style>
        main {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
            margin: 2rem auto;
            max-width: 800px;
        }

        section {
            flex-basis: calc(50% - 1rem);
            margin-bottom: 2rem;
        }

        h2 {
            margin-bottom: 1rem;
        }

        label {
            display: block;
            margin-bottom: 0.5rem;
            font-weight: bold;
        }

        input[type="text"],
        input[type="email"],
        textarea {
            display: block;
            width: 100%;
            padding: 0.5rem;
            margin-bottom: 1rem;
            border: 2px solid #ccc;
            border-radius: 4px;
            font-size: 1rem;
        }

        button[type="submit"] {
            background-color: #4CAF50;
            color: white;
            padding: 0.5rem;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 1rem;
        }

        button[type="submit"]:hover {
            background-color: #3e8e41;
        }

        ul {
            list-style: none;
            margin: 0;
            padding: 0;
        }

        li {
            margin-bottom: 0.5rem;
            font-size: 1rem;
        }

        strong {
            font-weight: bold;
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

<body bgcolor="" oncontextmenu="return false">
    <br>
    <marquee bgcolor="#1C335F" behavior="scroll">
        <h1>Welcome To Hostel Management Information
            System</h1>
    </marquee>
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
            </ul>
        </nav>
    </header>


    <div class="center">
        <center>
            <h1>Contact Us</h1>

        </center>
    </div>
    <br><br><br><br>

    <main>
        <section>
            <h2>Send us a message</h2>
            <form action="#" method="post">
                <label for="name">Name:</label>
                <input type="text" id="name" name="name" required>

                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>

                <label for="message">Message:</label>
                <textarea id="message" name="message" required></textarea>

                <button name="submit" type="submit">Send</button>
            </form>
        </section>
        <section>
            <h2>Contact information</h2>
            <ul>
                <li><strong>Address:</strong> NH-731, Chandsarai (Opposite Purvanchal Expressway), Gosaiganj,
                    Lucknow-226501</li>
                <li><strong>Phone:</strong> (+91) 87951 11171</li>
                <li><strong>Email:</strong> info@ssimt.edu.in</li>
            </ul>
        </section>
    </main>

    <script>

        function alertt() {
            alert("To know more detail about our room facilities. Login  ")
        }
        function alertm() {
            alert("To know more detail about our Mess and food facilities. Login  ")
        }
        function alertf() {
            alert("To know more detail about our Facilities. Login  ")
        }
        function alertr() {
            alert("If you want to book a hostal room firstly goto the Login  ")
        }

    </script>

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