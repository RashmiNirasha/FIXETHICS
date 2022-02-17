<?php


include_once("db/db.php");
session_start();
unset($_SESSION['username']);
if (isset($_POST['but_submit'])) {
    $uname = $_POST['username'];
    $pswrd = $_POST['password'];

    $sql = "SELECT username, password FROM admin WHERE username='$uname' AND password='$pswrd'";
    $result = mysqli_query($con, $sql);
    $row = mysqli_fetch_assoc($result);

    if (mysqli_num_rows($result) > 0) {
        $_SESSION['adminname'] = $uname;
        header("Location: admin/adminDashboard.php");
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
    <link rel="stylesheet" href="assets\css\loginad.css" type="text/css">
    <link rel="stylesheet" href="assets\css\topnavigation.css" type="text/css">

</head>

<body>
<?php include('loginNav.php');?>

    <div class="wrapper">
        <div class="container">
            <div class="col-left">
                <div class="login-text">
                    <p>
                        <br />
                        <B>Our Value</B><br /> We are unique And provide more than 100% to customers.<br>Happy to part of you.
                    </p>

                </div>
            </div>
            <div class="col-right">
                <div class="login-form">
                    <center>
                    <h2 >Admin Login</h2><br>
                    <form method="POST" action="" name="myForm" onsubmit="return(validate());">
                        <p>
                            <input type="text" name="username" placeholder="Username" required>
                        </p>
                        <p>
                            <input type="password" name="password" placeholder="Password" required>
                        </p>
                        <p>
                            <input class="btn" type="submit" value="Sign In" id="but_submit" name="but_submit" />
                        </p>
                        <p style="text-align: right;">

                            <a href="index.php">Are you a customer?</a>
                        </p>
    </center>

                    </form>
                    <div class="copyrights" style="position:absolute; z-index: -1; width: 100%;">
                <p>Copyright ©2022 | All Rights Reserved | Website Design & Developed by Group 12​</p>
            </div>
                </div>
            </div>
        </div>

    </div>
</body>

</html>