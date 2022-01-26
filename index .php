<?php

    include_once("db/db.php");
    session_start();
    unset($_SESSION['adminname']);
    if (isset($_POST['but_submit'])) {
        $uname = $_POST['username'];
        $pswrd = $_POST['password'];

        $sql = "SELECT username,password FROM user_login_table WHERE username='$uname' AND password='$pswrd'";
        $result = mysqli_query($con, $sql);


        if (mysqli_num_rows($result) > 0) {
            $_SESSION['username'] = $uname;
            header("Location: customer/customerDashboard.php");
            exit();
        } else {
            echo '<script> window.alert("Incorrect Username or password");</script>';
            header("Location: login.php");
            exit();
        }

        mysqli_close($con);
    }

    ?>

<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="assets\css\style_home.css">
        <link rel="stylesheet" href="assets\css\topnavigation.css">

        <title>Fixetics-Login</title>

        <script type="text/javascript">
            function validate() {
                if (document.myForm.uname.value == "") {
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
   
    </head>

    <body>
        <?php
        include('loginNav.php');
        ?>
        <div class = "page">
    
            <div class="nav" style="width: 100%;">
                <div class="left">
                    <img src = "assets\img\logo.png" width="76px" height="57px">
                    <p style="margin-left: 20px;">Fixetics</p>
                </div>
                
                <div class="right">
                    <a href="#" id="font">ABOUT</a>
                    <a href="#" id="font">SERVICES</a>
                    <a href="#" id="font">CONTACT</a>
                    <a href="#" id="font">SUPPORT</a>
                    <a href="#" id="font">LOG OUT </a>
                </div>
            </div>

            <div class ="body">
                <div><img src = 'assets\img\bg-login.png' height="700px" style="position:absolute; top:10px; z-index: -1; width: 100%;"></div>
                
                <div class="bodycontent">
                    <div class="form">
                        <form method="GET" action="">
                
                            <h2>LOGIN</h2>

                            <div class="formcontent">
                                <div class="formlabel"> User Name: </div>
                                <div class="formin"><input class="input_box" type="text" name="username" required></div>
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

                            <div class="formcontent">
                                <div class="formin" >
                                    <a href="#"><button class="button" type="Submit">  Sign in </button> </a>
                                </div>
                            </div>

                            <br>

                            <div class="formlabel">New User? <a class="createlink" href="">Create an Account</a></div>
                            <p style="text-align: right;">
                                Haven't registered yet?<b>
                                    <a href="admin/customerForm.php">Sign Up</a></b>
                            <a href="adminlog.php" style="float: right;"><b>Log in as admin</b></a>
                
                        </form>
                    </div>
                </div>    
            </div>

            

            <div class="copyrights" style="position:absolute; z-index: -1; width: 100%;">
                <p>Copyright ©2022 | All Rights Reserved | Website Design & Developed by Group 12​</p>
            </div>
            
        </div>
    </body>
</html>