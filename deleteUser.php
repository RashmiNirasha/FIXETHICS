<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] != "POST") {
    header("location: adminDashboard.php");
}

include_once 'db/db.php';

$AID = $_SESSION["adminID"];


$sql .= "delete from admin where adminID = $AID;";

if (mysqli_query($con, $sql)) {
    echo "<script> alert('Account successfully removed!');";
    echo "window.location.href = 'logout.php';</script>";
} else {
    echo "<script> alert('Database Error! Please try again.');";
    echo "window.location.href = 'adminDashboard.php';</script>";
}

mysqli_close($con);
