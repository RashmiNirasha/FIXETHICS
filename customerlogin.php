
<?php include 'files\navbar.php';?>

<html>
    <head>
        <style>
          .form_right {
    float: right;
    width: 45%;
}
.form_btn {
    border-radius: 10px;
    box-sizing: border-box;
    background-color: #FA8B8B;
    text-align: center;
    padding: 10px 100px 10px 100px;
    text-shadow: indianred;
    font-size: 20px;
    font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
}
.right_body_support h1 {
    font-weight: 600;
    font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
    color: white;
    text-align: center;
}

.form_right input {
    padding: 10px 80px 10px 10px;
    border-radius: 100px;
    border: white;
    margin: 10px 10px 10px 10px;
}

.form_right textarea {
    border-radius: 20px;
    border: white;
    margin: 10px 10px 10px 10px;
    padding: 10px 10px 10px 10px;
}

.img_right {
    width: 85%;
    height: 100%;
    margin: 50px 2px 20px 50px;
}
.copyrights{
    height: 25px;
    opacity: 60%;
    background-color: #373844;
    padding: 2px 2px 10px 2px;
    text-align: center;
    font-family: Georgia, 'Times New Roman', Times, serif;
    font-size: small;
    color: white;
}

</style>
</head>
<body>
    <dic class="body" style="width : 100%;
    height : 1000px ;">

<div class="form_right">
                <form method="">
                    <input type="text" placeholder="Enter Name">
                    <input type="email" style="margin: 10px 10px 10px 10px;" placeholder="Enter Email Address">
                    <input type="text" placeholder="Enter Phone Number">
                    <input type="text" placeholder="Enter Phone Number">
                    <textarea id="msg" name="msg" rows="4" cols="30"> Enter your message here.</textarea>
                    <br /><br />
                    <button class="form_btn">Submit</button>
                </form>
            </div>
</div>
<div class="copyrights" style="position:absolute; z-index: -1; width: 100%;">
                <p>Copyright ©2022 | All Rights Reserved | Website Design & Developed by Group 12​</p>
            </div>
</body>
</html>