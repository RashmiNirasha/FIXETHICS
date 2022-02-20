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
            table {
                margin: 0 auto;
                font-size: large;
                border: 1px solid black;
            }
      
            h1 {
                text-align: center;
                color: #006600;
                font-size: xx-large;
                font-family: 'Gill Sans', 'Gill Sans MT', 
                ' Calibri', 'Trebuchet MS', 'sans-serif';
            }
      
            td {
                background-color: #E4F5D4;
                border: 1px solid black;
            }
      
            th,
            td {
                font-weight: bold;
                border: 1px solid black;
                padding: 10px;
                text-align: center;
            }
      
            td {
                font-weight: lighter;
            }
        </style>
    </head>

    <body>
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
            <section>
                <h1>help requests by customers</h1>
                <!-- TABLE CONSTRUCTION-->
                <table>
                    <tr>
                        <th>issue</th>
                        <th>fullname</th>
                        <th>email</th>
                        <th>Phone no</th>
                        <th>message</th>
        
                    </tr>
                    <!-- PHP CODE TO FETCH DATA FROM ROWS-->
                    <?php   // LOOP TILL END OF DATA 
                        while($rows=$result->fetch_assoc())
                        {
                     ?>
                    <tr>
                        <!--FETCHING DATA FROM EACH 
                            ROW OF EVERY COLUMN-->
                        <td><?php echo $rows['issue'];?></td>
                        <td><?php echo $rows['fullname'];?></td>
                        <td><?php echo $rows['email'];?></td>
                        <td><?php echo $rows['Phone_number'];?></td>
                        <td><?php echo $rows['message'];?></td>
                    </tr>
                    <?php
                        }
                     ?>
                </table>
            </section>
            <div class="body">
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

                <div>
                    <div class="overview">
                        <h2>Overview</h2>

                        <div class="overview-left">
                            <hr> &nbsp;
                            <p> Jones Ferdinand</p> &nbsp;
                            <img src="assets\img\profile.png" alt="profile picture" height="90%/"></div>
                        </div>

                    <img src="assets\img\Admin pg.png" alt="">
                </div>
            </div>

        <div class="copyrights" style="position:absolute; z-index: -1; width: 100%;">
            <p>Copyright ©2022 | All Rights Reserved | Website Design & Developed by Group 12​</p>
        </div>
        
        </div>
    </body>
</html>