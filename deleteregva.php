<?php
include("connect.php");
$id = $_GET['p'];

$query = "DELETE FROM booking WHERE phone='$id'";
$data = mysqli_query($conn, $query);

if ($data) {

    echo "<script>alert('Data Deleted')</script>";

    ?>

    <meta http-equiv="refresh" content="0; url = http://localhost/prog/display.php" />

    <?php
} else {
    echo "Faild to Delete record";
}
?>