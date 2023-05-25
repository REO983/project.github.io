<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
    <title>WELCOME TO HOSTEL MANAGEMENT INFORMATION SYSTEM </title>
    <link rel="stylesheet" href="sheet1.css">
    <style>
        /* Rooms section styles */

        .rooms {
            background-color: #f5f5f5;
            display: flex;
            flex-direction: column;
            align-items: center;
            padding: 60px;
            text-align: center;
        }

        .rooms h2 {
            font-size: 3rem;
            margin-bottom: 20px;
        }

        .rooms ul {
            list-style: none;
            margin: 0;
            padding: 0;
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
        }

        .rooms li {
            background-color: #fff;
            border: 1px solid #ddd;
            border-radius: 4px;
            box-shadow: 2px 2px 6px rgba(0, 0, 0, 0.3);
            font-size: 1.5rem;
            margin: 20px;
            padding: 20px;
            text-align: center;
            width: 400px;
            max-width: 100%;
        }

        main {
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
        }

        /* Style for the hero section */
        .hero {
            text-align: center;
            padding: 50px 0;
            background-color: #f2f2f2;
        }

        .hero h2 {
            font-size: 36px;
            margin-bottom: 20px;
        }

        .hero p {
            font-size: 18px;
            margin-bottom: 30px;
        }

        .cta {
            display: inline-block;
            padding: 10px 20px;
            background-color: #0d6efd;
            color: #fff;
            text-decoration: none;
            border-radius: 5px;
            transition: all 0.3s ease;
        }

        .cta:hover {
            background-color: #007bff;
        }

        /* Style for the features section */
        .features {
            padding: 50px 0;
            text-align: center;
        }

        .features h2 {
            font-size: 36px;
            margin-bottom: 20px;
        }

        .features ul {
            list-style: none;
            padding: 0;
            margin-bottom: 30px;
        }

        .features li {
            font-size: 20px;
            margin-bottom: 10px;
        }

        .features i {
            margin-right: 10px;
        }

        .center-box {
            margin: 0 auto;
            text-align: center;
            border: 1px solid #ccc;
            padding: 20px;
            max-width: 500px;
        }

        .center-box h4 {
            margin-top: 10px;
            margin-bottom: 10px;
        }

        .right-align {
            float: right;
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
                <li><a href="index.html">Logout</a></li>
            </ul>

            <ul float="right">
                <li class="right-align" style=" background-color: #ccc;font-size: 130%;">
                    <a href="#" class="il" style=" background-color:green;">Student</a>
                    <a href="index.html" class="il">Logout</a>
                </li>
            </ul>
        </nav>
    </header>
    <img src="HCI.PNG" alt="COLLAGE IMAGE" id="hci">
    <div class="center">
        <center>
            <h1>Sri Sharda Group of Institution</h1>
        </center>
    </div>



    <main>
        <section class="hero">
            <h2>Experience the Best Accommodation</h2>
            <p>Our hostel provides a comfortable environment for students and affordable stay with a range of facilities
                to ensure that your stay
                is learnable.</p>
            <a href="reservation.html" class="cta">Book Now</a>
        </section>
        <section class="features">
            <h2>Our Facilities</h2>
            <ul>
                <li><i class="fas fa-bed"></i>Comfortable Rooms</li>
                <li><i class="fas fa-utensils"></i> Fresh water</li>
                <li><i class="fas fa-wifi"></i>Free Wi-Fi</li>
                <li><i class="fas fa-swimming-pool"></i>Library</li>
                <li><i class="fas fa-shower"></i>Private Bathrooms</li>
                <li><i class="fas fa-ground"></i>Playground</li>
            </ul>
            <a href="facilities.html" class="cta">Learn More</a>
        </section>
        <section class="rooms">
            <h2>Our Rooms</h2>
            <ul>
                <li>
                    <img src="srimg.jpeg" alt="Room 1" height="100px">
                    <h3>Single Room</h3>
                    <p>Our single rooms are perfect for solo student. who want some privacy On our study.</p>
                    <a href="room.html" class="cta">Book Now</a>
                </li>
                <li>
                    <img src="drimg.jpeg" alt="Room 2" height="100px">
                    <h3>Double Room</h3>
                    <p>Our double rooms are ideal for Classmate, Friends and Brothers who want to stay together.</p>
                    <a href="room.html" class="cta">Book Now</a>
                </li>

            </ul>
        </section>
    </main>



    <div class="center-box">
        <h4>Contact: (+91) 87951 11171 – 75</h4>
        <h4>Email Id: info@ssimt.edu.in</h4>
        <h4>Address: NH-731, Chandsarai (Opposite Purvanchal Expressway), Gosaiganj, Lucknow-226501</h4>
        <h4>Visit Us At: <a href="https://ssimt.edu.in/">https://ssimt.edu.in/</a></h4>
    </div>

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