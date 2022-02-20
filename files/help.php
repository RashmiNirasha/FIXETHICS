<!DOCTYPE html>
<html>
  
<head>
    <title>help page </title>
</head>

<body>
    <center>
        <?php
//include_once("db/db.php");
    
        $conn = mysqli_connect("localhost", "root", "", "fix");
          
        // Check connection
        if($conn === false){
            die("ERROR: Could not connect. " 
                . mysqli_connect_error());
        }
        // Taking all 4 values from the form data(input)
        $issue =  $_REQUEST['issue'];
        $fullname = $_REQUEST['fullname'];
        $email =  $_REQUEST['email'];
        $telno = $_REQUEST['telephone'];
        $msg = $_REQUEST['promessage'];
        
          
        // Performing insert query execution
        // here our table name is help
        $sql = "INSERT INTO help  VALUES ('$$issue', 
            '$fullname','$email','$telno','$msg')";
          
        if(mysqli_query($conn, $sql)){
            echo "<h3>message sent successfully</h3>"; 
  
            //echo nl2br("\n$first_name\n $last_name\n "
                //. "$gender\n $address\n $email");
        } else{
            echo "ERROR: not succesfull $sql. " 
                . mysqli_error($conn);
        }
          
        // Close connection
        mysqli_close($conn);
        ?>
    </center>
</body>
  
</html>