<?php
include_once("db/db.php");

// SQL query to select data from database
$sql = "SELECT * FROM help ";

$result = $con->query($sql);

$con->close();
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets\css\style-admin.css">

    <title>Fixetics-Admin</title>
    <style>
        .bg {
    /* The image used */
    background-image: url("adminBG.jpg");
  
    /* Full height */
    height: 100%; 
  
    /* Center and scale the image nicely */
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
  }
  </style>
</head>

<body style="margin: auto;">
    <div class="page">
        <div class="nav" style="width: 100%;">
            <div class="left">
                <img src="assets\img\logo.png" width="76px" height="57px">
                <p style="margin-left: 20px;">Fixetics</p>
            </div>

            <div class="right">
                <a href="#" id="font"></a>
                <a href="#" id="font"></a>
                <a href="#" id="font"></a>
                <a href="footer.php" id="font">HELP</a>
                <a href="logout.php" id="font">LOG OUT </a>
            </div>
        </div>
        <div class="bg">
        <div class="container" style="height: 350px;
    width: 350px;
    align-content: center;
    float: right;">
        <div class="grey" style="width:75%" >
        <div class="center"style="text-align: center;background-color: dimgrey;height: 420px;">
            <h3 style="color: aliceblue;font-size: x-large;font-family: cursive;">Admin Management</h3>
            <img src="assets\img\admin.jpg" alt="Avatar" style="width:80%">
            <h5 style= "
    font-size: large;
    font-family: cursive;
    color: aliceblue;
">Management</h5>

  
    <a href="registerAdmin.php" class="sub">New admin</a>
        <a href="profile.php" class="sub">Profile</a>
  
  </div>
</div>
</div>
<div class="container-2" style="height: 200px;
    width: 500px;
    align-content: center;
    float: left;">
 <div class="table" style="style=
    margin-top: 35px;
    padding-top: 40px;
    padding-left: 400px;">
                <section>
            <!-- <h1>help requests by customers</h1> -->
            <!-- TABLE CONSTRUCTION-->
            <table>
                <tr>
                    <th colspan="5";>Help Requests from Customers </th>
</tr>
                <tr>
                    <th>issue</th>
                    <th>fullname</th>
                    <th>email</th>
                    <th>Phone no</th>
                    <th>message</th>
                </tr>
                <!-- PHP CODE TO FETCH DATA FROM ROWS-->
                <?php   // LOOP TILL END OF DATA 
                while ($rows = $result->fetch_assoc()) {
                ?>
                    <tr>
                        <!--FETCHING DATA FROM EACH 
                            ROW OF EVERY COLUMN-->
                        <td><?php echo $rows['issue']; ?></td>
                        <td><?php echo $rows['fullname']; ?></td>
                        <td><?php echo $rows['email']; ?></td>
                        <td><?php echo $rows['Phone_number']; ?></td>
                        <td><?php echo $rows['message']; ?></td>
                    </tr>
                <?php
                }
                ?>
            </table>
        </section>
            </div>
            </div>

                <div class="dashboard_kit">
                <div class="dashboard">
                    <img src="assets\img\dashboard-kit.png" alt="" height="45px"> &nbsp; &nbsp;
                    <h2>Dashboard Kit</h2> <br><br>
                </div>
                <button>Overview</button> <br><br>
                <button>Tickets</button> <br><br>
                <button>Ideas</button> <br><br>
                <button>Contacts</button> <br><br>
                <button>Agents</button> <br><br>
                <button>Articles</button> <br><br>
                <hr> <br>
                <button>Settings</button> <br><br>
                <button>Subscription</button>
            </div>
            </div>
         
         
            <div class="copyrights" style="position:absolute; z-index: -1; width: 100%;">
            <p>Copyright ©2022 | All Rights Reserved | Website Design & Developed by Group 12​</p>
        </div>
</body>
</html>