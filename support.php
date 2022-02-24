<<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets\css\style_support.css">
    <title>Support</title>
    <script>
        function validateForm() {
            var x = document.forms["contactForm"]["email"].value;
            if (x == "") {
                alert("Please enter your email address");
                return false;
            }
        }
    </script>
</head>
<body>
    <div class = "page">

        <!--Navigation bar-->
        <div class="nav" style="width: 100%;">
            <div class="left">
                <img src = "assets\img\logo.png" width="76px" height="57px">
                <p style="margin-left: 20px;">Fixetics</p>
            </div>
            
            <div class="right">
                <a href="#" class="font">HOME</a>
                <a href="#" class="font">ABOUT</a>
                <a href="#" class="font">SERVICES</a>               
                <a href="#" class="font">SUPPORT</a>
                <a href="#" class="font">LOG OUT </a>
            </div>
        </div>

        <!--Body-->
        <div>
            <div class="left_body_support">
                    <img src="assets\img\support_sup.png" width="85%">
              </div>
              
              <div class="right_body_support">
                  <h1>Forward Us Your Questions </h1>
                  <hr />
                <div class="form_left">
                    <p>Username</p>
                    <p>E-Mail</p>
                    <p>Phone</p>
                    <p>Subject</p>
                    <p>Message</p>
                </div>
                <div class="form_right">
                <form name="supportForm" action="files\support_insert.php" onsubmit="return validateForm()" method="post">                    <input type="text" name= "UserName" placeholder="Enter Name">
                    <input type="email" name= "email" style="margin: 10px 10px 10px 10px;" placeholder="Enter Email Address">
                    <input type="text" name= "phnno" placeholder="Enter Phone Number">
                    <input type="text" name= "subject" placeholder="Enter Subject">
                    <textarea id="msg" name="msg" rows="4" cols="30"> Enter your message here.</textarea>
                    <br /><br />
                    <button class="form_btn">Submit</button>
                </form>
                </div>
                
            </div>
            <div style="height: 580px;"></div>
        </div>

        <!--footer -->
        <div class="copyrights" style="width: 100%;">
            <p>Copyright ©2022 | All Rights Reserved | Website Designed & Developed by Group 12​</p>
        </div>
    </div>
</body>
</html>