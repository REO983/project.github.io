<?php include("connect.php"); ?>



<?php


if (isset($_POST['submit'])) {

    if ($_POST['name'] == '' or $_POST['fname'] == '' or $_POST['phone'] == '' or $_POST['adults'] == '' or $_POST['roomtype'] == '' or $_POST['course'] == '') {
        echo "some inputs are empty";
    } else {

        $name = $_POST['name'];
        $fname = $_POST['fname'];
        $phone = $_POST['phone'];
        $adults = $_POST['adults'];
        $roomtype = $_POST['roomtype'];
        $course = $_POST['course'];
        $specialrequests = $_POST['specialrequests'];

        $insert = "INSERT INTO booking VALUES( '$name', '$fname', '$phone','$adults' , '$roomtype' , '$course' ,'$specialrequests')";
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
    <title>Reservation</title>
    <link rel="stylesheet" href="sheet1.css">
    <style>
        main {
            margin: 0 auto;
            max-width: 800px;
            padding: 20px;
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
            align-items: flex-start;
        }

        section {
            flex: 1;
            min-width: 300px;
            margin: 10px;
            padding: 20px;
            background-color: #f5f5f5;
            box-shadow: 0px 0px 5px 0px rgba(0, 0, 0, 0.2);
        }

        form {
            display: flex;
            flex-direction: column;
            gap: 10px;
        }

        label {
            display: block;
            font-weight: bold;
        }

        input[type="date"],
        input[type="number"],
        select,
        textarea {
            padding: 5px;
            border-radius: 5px;
            border: none;
            box-shadow: 0px 0px 5px 0px rgba(0, 0, 0, 0.2);
        }

        input[type="submit"] {
            background-color: #0077cc;
            color: #fff;
            padding: 10px 20px;
            border-radius: 5px;
            border: none;
            cursor: pointer;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        th,
        td {
            padding: 10px;
            border: 1px solid #ddd;
        }

        @media only screen and (max-width: 600px) {
            main {
                flex-direction: column;
            }

            section {
                min-width: 100%;
            }
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
                <li><a href="sndex.php">Home</a></li>
                <li><a href="sAbout_us_hostal.html">About Us</a></li>
                <li><a href="sroom.html">Rooms</a></li>
                <li><a href="smess and food.html">Mess and food</a></li>
                <li><a href="sfacilities.html">Facilities</a></li>
                <li><a href="slocation.html">Location</a></li>
                <li><a href="sreservation.php">Reservation</a></li>
                <li><a href="scontact_us_hostal.php">Contact Us</a></li>
            </ul>

            <ul float="right">
                <li class="right-align" style=" background-color: #ccc;font-size: 130%;">
                    <a href="#" class="il" style=" background-color:green;">Student</a>
                    <a href="index.html" class="il">Logout</a>
                </li>
            </ul>

        </nav>
    </header>

    <main>
        <section>
            <h2> Hostal Room Booking Form</h2>
            <form action="#" method="POST">
                <label for="name">Name:</label>
                <input type="text" id="name" name="name" required>

                <label for="father name">Father's Name:</label>
                <input type="text" id="fname" name="fname" required>

                <label for="phone">Phone no:</label>
                <input type="number 0-9" id="phone" name="phone" required>

                <label for="age">Age:</label>
                <input type="number" id="adults" name="adults" required>

                <label for="room-type">Room Type:</label>
                <select id="room-type" name="roomtype" required>
                    <option value="not selected">--Please Select--</option>
                    <option value="single">Single Room</option>
                    <option value="double">Double Room</option>
                    <option value="family">Dorm Room</option>
                </select>

                <label for="course">Course:</label>
                <select id="cousre-type" name="course" required>
                    <option value="not selected">--Please Select--</option>
                    <option value="BCA">BCA</option>
                    <option value="BBA">BBA</option>
                    <option value="B.com">B.com</option>
                    <option value="BJMC">BJMC</option>
                    <option value="MBA">MBA</option>
                </select>

                <label for="special-requests">Special Requests:</label>
                <textarea id="special-requests" name="specialrequests"></textarea>

                <input name="submit" type="submit" value="Book Now">
            </form>
        </section>

        <section>
            <h2>Rooms Available</h2>
            <table>
                <tr>
                    <th>Room Type</th>
                    <th>Price per semt</th>
                    <th>Rooms</th>
                </tr>
                <tr>
                    <td>Single Room</td>
                    <td>25,000/-</td>
                    <td>Available</td>
                </tr>
                <tr>
                    <td>Double Room</td>
                    <td>50,000/-</td>
                    <td>Available</td>
                </tr>
                <tr>
                    <td>Dorm Room</td>
                    <td>20,000/- </td>
                    <td>Available</td>
                </tr>
            </table>
        </section>
    </main>

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