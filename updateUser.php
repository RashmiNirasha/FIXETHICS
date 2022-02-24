<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] != "POST") {
    header("location: adminDashboard.php");
}

include_once 'db/db.php';

$name = $_POST['fName'];
$username = $_POST['username'];
$tel = $_POST['tel'];
$email = $_POST['email'];
$address = $_POST['address'];
$AID = $_SESSION["adminID"];

$sql = "update admin set name='$name', username='$username', tel=$tel, email='$email' , address='$address' where adminID=$AID;";

if (mysqli_query($con, $sql)) {
    echo "<script> alert('Profile successfully updated!');";
    echo "window.location.href = 'profile.php';</script>";
} else {
    echo "<script> alert('Database Error! Please try again.');";
    echo "window.location.href = 'profile.php';</script>";
}

mysqli_close($con);
