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
        <a href="footer.php">Help</a>
        <a href="index.php">Log In</a>  
    </nav>
    <div class="bg">
    <div class="center">
            <div class="bodycontent">
                <div class="form" >
                    <form method="Post" action="index.php">
            
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
                              
                              <input class="button" type="submit" name="but_submit" id="but_submit" value="Sign In" />

                            </div>
                        </div>
    
                        <br>
    
                        <div class="formlabel">New User? <a class="createlink" href="customerlogin.php">Create an Account</a></div>
                    
                    </form>
                    
                    <div class="formlabel" style="float: right;"><a class="createlink" href="adminlog.php">Log in As Admin</a></div>

                </div>
            </div>  
        </div>
    </div>
    </body>
</html>