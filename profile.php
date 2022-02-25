<?php include 'files/navbar.php';
include 'db/db.php';

session_start();
$uid = $_SESSION['adminID'];
$sql = "SELECT * FROM `admin` WHERE adminID=$uid";
$result = mysqli_query($con, $sql);

if (mysqli_num_rows($result) == 1) {
    $row = mysqli_fetch_assoc($result);
} else {
    echo '<script> window.alert("Error receiving data!");</script>';
}

?>

<!DOCTYPE html>
<html>

<head>
    <title>My Profile</title>
    <link rel="stylesheet" href="assets\css\cuslog.css">
    <link rel="stylesheet" href="assets\css\style-admin.css">
    <script src="js/user.js"></script>
</head>

<body style="margin: auto;">
    <form action="updateUser.php" method="post">
        <div class="container">
            <h1>My Profile</h1>
            <hr>
            <div style="width: 50%;">
                <label for="name"><b>Name</b></label>
                <input type="text" placeholder="Enter name" name="fName" id="fName" required disabled>

                <label for="username"><b>Username</b></label>
                <input type="text" placeholder="Enter username" name="username" id="username" required disabled>

                <label for="tel"><b>Telphone No.</b></label>
                <input type="text" placeholder="Enter telephone number" name="tel" id="tel" required disabled>

                <label for="email"><b>Email</b></label>
                <input type="text" placeholder="Enter Email" name="email" id="email" required disabled>

                <label for="address"><b>Address</b></label>
                <input type="text" placeholder="Enter address" name="address" id="address" required disabled>

            </div>

            <hr>

            <button type="submit" id="btnSubmit" style="display: none;">Update</button>
            <button type="button" onclick="enableInput()" id="btnEnable">Update Profile</button>
            <button type="submit" id="btnDelete" formaction="deleteUser.php">Delete account</button>
        </div>
    </form>
    <script>
        window.onload = function() {
            setAdminData(
                <?php
                echo "' " . $row["name"] . "', '" . $row["username"] . "', '" . $row["tel"] . "', '" . $row["email"] . "', '" . $row["address"] . "'";

                ?>
            );
        }
    </script>

</body>

</html>