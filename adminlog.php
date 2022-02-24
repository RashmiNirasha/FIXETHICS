<?php

include_once("db/db.php");
session_start();
unset($_SESSION['adminusername']);
if (isset($_POST['but_submit'])) {
    $uname = $_POST['adminusername'];
    $pswrd = $_POST['password'];

    $sql = "SELECT adminID FROM admin WHERE username='$uname' AND password='$pswrd'";
    $result = mysqli_query($con, $sql);

    if (mysqli_num_rows($result) == 1) {
        $row = mysqli_fetch_assoc($result);
        $_SESSION['adminID'] = $row['adminID'];
        $_SESSION['role'] = "admin";
        header("Location: adminDashboard.php");
        exit();
    } else {
        echo '<script> window.alert("Incorrect Username or password");</script>';
        header("Location: adminlog.php");
        exit();
    }

    mysqli_close($con);
}

?>

<html>

<head>
    <title>Login</title>
    <script type="text/javascript">
        function validate() {
            if (document.myForm.username.value == "") {
                alert("Please provide your UserName!");
                document.myForm.uname.focus();
                return false;
            }
            if (document.myForm.password.value == "") {
                alert("Please provide your password!");
                document.myForm.password.focus();
                return false;
            }

            return (true);
        }
    </script>
    <link rel="stylesheet" href="assets\css\test.css">
    <link rel="stylesheet" href="assets\css\background.css">
    <link rel="stylesheet" href="assets\css\form.css">
    <link rel="stylesheet" href="assets\css\style_home.css">


</head>

<body>
    <nav class="navigation-bar">
        <img class="logo" src="assets\img\logo.png" width="76px" height="57px">
        <p style="margin-left: 20px;">Fixetics</p>
        <a href="footer.php">Help</a>
        <a href="index.php">Log In</a>
    </nav>

    <div class="bg">
        <div class="center" style="width : 75%">
            <div class="bodycontent">
                <div class="form">
                    <form method="POST" action="adminlog.php">

                        <h2>ADMIN LOGIN</h2>

                        <div class="formcontent">
                            <div class="formlabel"> User Name: </div>
                            <div class="formin"><input class="input_box" type="text" name="adminusername" required></div>
                        </div>

                        <br>

                        <div class="formcontent">
                            <div class="formlabel"> Password: </div>
                            <div class="formin"><input class="input_box" type="password" name="password" required></div>
                        </div>

                        <br>

                        <div class="formremember">
                            <div class="formlabel"><input type="checkbox">Remember &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Forgot Password?</div>
                        </div>
                        <input class="button" type="submit" name="but_submit" id="but_submit" value="Sign In" />

                </div>

                </form>
                <div class="formlabel" style="float: right;"> <a class="createlink" href="index.php">Are you a customer?</a></div>

            </div>
        </div>
    </div>
    </div>

    <div class="copyrights" style="position:absolute; z-index: -1; width: 100%;">
        <p>Copyright ©2022 | All Rights Reserved | Website Design & Developed by Group 12​</p>
    </div>
</body>

</html>