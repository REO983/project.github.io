<?php


error_reporting(0);

$servername = "localhost"; // Replace with your server name
$username = "root"; // Replace with your MySQL username
$password = ""; // Replace with your MySQL password
$database = "test"; // Replace with your database name

// Create a connection
// $conn = new mysqli($servername, $username, $password, $database);

$conn = mysqli_connect($servername, $username, $password, $database);
if ($conn == true) {
    // echo "it's working";
} else {
    echo "connection is wrong" . mysqli_connect_error();
}




?>