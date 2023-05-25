<?php
session_start();
// echo "hii", $_SESSION['email'];
?>

<html>

<head>

    <title>Login-Data</title>
    <style>
        body {
            background: #dbcde2;
        }

        table {
            background-color: white;
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

        .upd {
            background-color: green;
            color: white;
            border: 0;
            outline: none;
            border-radius: 6px;
            height: 22px;
            width: 80px;
            font-weight: bold;
            cursor: pointer;
        }
    </style>

    <link rel="stylesheet" href="display.css">
</head>

<body>
    <header>
        <nav>
            <ul>
                <li class="right-align" style=" background-color: #ccc;font-size: 130%;">
                    <a href="andex.html" class="il" style=" background-color:green;">Home</a>
                    <a href="display.php" class="il">Informatiom</a>
                </li>
            </ul>

            <ul float="right">
                <li class="right-align" style=" background-color: #ccc;font-size: 130%;">
                    <a href="#" class="il" style=" background-color:green;">Admin</a>
                    <a href="index.html" class="il">Logout</a>
                </li>
            </ul>
        </nav>
    </header>
</body>

</html>

<?php
include("connect.php");

$dis = $_SESSION['email'];

if ($dis == true) {

} else {
    header('location:i.php');
}
$query = "SELECT *  FROM users";
$data = mysqli_query($conn, $query);
$total = mysqli_num_rows($data);




if ($total != 0) {
    ?>

    <h2 align="center"><mark>All Login Records</mark></h2>
    <center>
        <table border="2" cellspacing="4" width="60%">
            <tr>
                <th width="20%">Email</th>
                <th width="15%">Username</th>
                <th width="10%">Password</th>
                <th colspan="2" align="center" width="15%">Operation</th>
            </tr>



            <?php
            while ($result = mysqli_fetch_assoc($data)) {
                echo " <tr>
                      <td>$result[email]</td>
                      <td>$result[username]</td>
                      <td>$result[password]</td>
                      <td><a href='updatereg.php?id=$result[email]&un=$result[username]'><input type='submit' value='Update'class='upd'></a></td>
                      <td><a href='deletereg.php?id=$result[email]&un=$result[username]&rst=$result[password]'><input type='submit' value='Delete'class='upd'></a></td>
                  </tr>";
            }
} else {
    echo "Login record not found";
}


?>
    </table>
</center>


<br>

<?php
include("connect.php");

$query = "SELECT *  FROM booking";
$data = mysqli_query($conn, $query);
$total = mysqli_num_rows($data);




if ($total != 0) {
    ?>

    <h2 align="center"><mark>All booking Records</mark></h2>
    <center>
        <table border="2" cellspacing="4" width="60%">
            <tr>
                <th width="15%">Name</th>
                <th width="15%">Father's Name</th>
                <th width="5%">Phone no</th>
                <th width="5%">Age</th>
                <th width="12%">Room Type</th>
                <th width="8%">Course</th>

                <th colspan="2" align="center" width="15%">Operation</th>
            </tr>



            <?php
            while ($result = mysqli_fetch_assoc($data)) {
                echo " <tr>
                      <td>$result[name]</td>
                      <td>$result[fname]</td>
                      <td>$result[phone]</td>
                      <td>$result[adults]</td>
                      <td>$result[roomtype]</td>
                      <td>$result[course]</td>
                      

                       <td> <a href='updateregva.php?na=$result[name]&fn=$result[fname]&p=$result[phone]&a=$result[adults]&rt=$result[roomtype]&c=$result[course]'><input type='submit' value='Update'class='upd'></a></td>
                      <td><a href='deleteregva.php?na=$result[name]&fn=$result[fname]&p=$result[phone]&a=$result[adults]&rt=$result[roomtype]&c=$result[course]&sr=$result[specialrequests]'><input type='submit' value='Delete'class='upd'></a></td>
                  </tr>";
            }
} else {
    echo "Boooking record not  found";
}


?>
    </table>
</center>