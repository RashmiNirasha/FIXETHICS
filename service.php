
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets\css\service_style.css">
    <title>Fixetics</title>
</head>
<?php include 'files\navbar.php';?>

<body style="margin: auto;">

    <div class="container">
        <div class="features">

            <h2>
                <u> We provide following Services on your Door step</u>
            </h2>
            <br>
            <h3>
                We have specialize in fixing all kind of Desktops Laptops , <br>When we repair your desktop or laptop
                we will always let you know what happened and how to prevent it from happening again.<br>
                We also always take the time to have you understand about preventative maintenance measures.
            </h3>
        </div>

        <div style=" display: inline-block; width: 100%; border: black 2px solid;">
            <div style="width: 50%;float: right; ">
                <img src="assets\img\GettyImages-554996383-5762dcb83df78c98dc42c4df.jpg" alt="" class="image">
            </div>

            <div style="width: 50%;float: left;">
                <p class="font1">Computer Repairing Services </p>
                <ol style="list-style-type:circle; font-size: large;  margin-left: auto; margin-right: auto;">
                    <li>We are working with Windows Xp,Windows 7,Windows 8.1,<br>Windows 10</li>
                    <li> Operating System Updates</li>
                    <li> Physical inspection</li>
                    <li> PC tune-up</li>
                    <li> Check all fans and heat-generating sources</li>
                    <li> Check everything that loads at start</li>
                    <li> Hardware /Software Troubleshooting and Installs</li>
                </ol>
            </div>
        </div>
         <br /><br />

        <div style=" display: inline-block; width: 100%; border: black 2px solid;">
            <div style="width: 50%;float: left; ">
                <img src="assets\img\Network-security.jpg" alt="" class="image">
            </div>

            <div style="width: 50%;float: right;">
                <p class="font1">Computer Repairing Services </p>
                <ol style="list-style-type:circle; font-size: large;  margin-left: auto; margin-right: auto;">
                <li>Remove all viruses, spyware and rootkits. …</li>
                    <li>Repair any operating system issues caused by the virus </li>
                    <li> Perform critical operating system updates</li>
                    <li> PC tune-up</li>
                    <li> Install or update internet security software</li>
                </ol>
            </div>
        </div>
         <br /><br />

        <div style=" display: inline-block; width: 100%; border: black 2px solid;">
            <div style="width: 50%;float: right; ">
                <img src="assets\img\keyboard.jpg" alt="" class="image">
            </div>

            <div style="width: 50%;float: left;">
                <p class="font1">Computer Repairing Services </p>
                <ol style="list-style-type:circle; font-size: large;  margin-left: auto; margin-right: auto;">
                    <li> Dell Laptop Keyboard repair</li>
                    <li>HP Laptop Keyboard repair </li>
                    <li>Lenovo Laptop Keyboard repair</li>
                    <li> Apple / mac Laptop Keyboard repair</li>
                    <li> Acer Laptop Keyboard repair</li>
                    <li> Asus Laptop Keyboard repair</li>
                    <li>Toshiba Laptop Keyboard repair</li>
                </ol>
            </div>
        </div>
         <br /><br />

        <div style=" display: inline-block; width: 100%; border: black 2px solid;">
            <div style="width: 50%;float: left; ">
                <img src="assets\img\data-recovery-500x500.jpg" alt="" class="image">
            </div>

            <div style="width: 50%;float: right;">
                <p class="font1">Computer Repairing Services </p>
                <ol style="list-style-type:circle; font-size: large;  margin-left: auto; margin-right: auto;">
                    <li> Deleted Disks or Partitions</li>
                    <li> Formatted Disks or Partitions </li>
                    <li> Corrupted Partitions</li>
                    <li> RAID Recovery</li>
                    <li> SSD data recovery</li>
                    <li> SD,CF,MMC,eMMC,Memory stick, Flash Drive Recovery</li>
                </ol>
            </div>
        </div>
         <br /><br />

        <div style=" display: inline-block; width: 100%; border: black 2px solid;">
            <div style="width: 50%;float: left; ">
                <img src="assets\img\invalid-operating-system-version.png" alt="" class="image">
            </div>

            <div style="width: 50%;float: right;">
                <p class="font1">Computer Repairing Services </p>
                <ol style="list-style-type:circle; font-size: large;  margin-left: auto; margin-right: auto;">
                <li> Software Upgrades / Installation </li>
                    <li>Operating System Updates </li>
                    <li> Anti-Virus Installation / Removal</li>
                    <li> Motherboard Replacement</li>
                    <li> Memory Upgrades</li>
                </ol>
            </div>
        </div>
         <br /><br />



    <div class="body">
        <div class="left_body_service">
            <img src="assets\img\logoname (1).jpg" class="img_right">
            <!-- <h1 style="color: white;  text-align:center;  font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;">  Services on your Door step</h1> -->
        </div>
        <div class="right_body_service">
            <h1>Request For Service Repair</h1>
            <hr />
            <div class="form_left">
                <p>User ID</p>
                <p>E-Mail</p>
                <p>Phone</p>
                <p>Service</p>
                <p>Briefly describe your requirement</p>
            </div>
            <div class="form_right">
                <form name="serviceForm" action="files\service_insert.php" onsubmit="return validateForm()" method="post">
                    <input type="text" placeholder="Enter ID" name="user">
                    <input type="email" style="margin: 10px 10px 10px 10px;" placeholder="Enter Email Address" name="email">
                    <input type="text" placeholder="Enter Phone Number" name="phone">
                    <input type="text" placeholder="Enter Service" name="service">
                    <textarea id="msg" name="msg" rows="4" cols="30" name="msg"> Enter your message here.</textarea>
                    <br /><br />
                    <button class="form_btn">Submit</button>
                </form>
            </div>

        </div>
    </div>



    <div class="copyrights" style="position:absolute; width: 100%;">
        <p>Copyright ©2022 | All Rights Reserved | Website Design & Developed by Group 12​</p>
    </div>

</body>

</html>
