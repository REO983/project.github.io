<?php
include("connect.php");
$id = $_GET['id'];

$query = "DELETE FROM users WHERE email='$id'";
$data = mysqli_query($conn, $query);

if ($data) {

    echo "<script>alert('Data Deleted')</script>";

    ?>

    <meta http-equiv="refresh" content="0; url = http://localhost/prog/display.php" />

    <?php
} else {
    echo "Faild to Update record";
}
?>