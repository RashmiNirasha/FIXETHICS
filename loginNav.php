<html>
<head>
<link rel="stylesheet" href="assets\css\test.css">
<link rel="stylesheet" href="assets\css\background.css">
<link rel="stylesheet" href="assets\css\form.css">
</head>
<body>
    <nav class="navigation-bar">
        <img class="logo" src="assets\img\logo.png" width="76px" height="57px">
        <p style="margin-left: 20px;">Fixetics</p>
        <a href="support.php">Help</a>
        <a href="#about">Log In</a>  
    </nav>
    <div class="bg">
    <div class="center">
            <div class="bodycontent">
                <div class="form" >
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
                                <a href="admin/customerForm.php">Sign Up</a></b></br>

                        
                    </form>
                    <a href="adminlog.php" style="float: right;"><b>Log in as admin</b></a>
                </div>
            </div>  
        </div>
    </div>
    </body>
</html>