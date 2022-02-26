
        <?php

    
        $conn = mysqli_connect("localhost", "root", "", "fix");
          
        // Check connection
        if($conn === false){
            die("ERROR: Could not connect. " 
                . mysqli_connect_error());
        }
        // Taking all 5 values from the form data(input)
        $userid =  $_REQUEST['user'];
        $email = $_REQUEST['email'];
        $phnno =  $_REQUEST['phone'];
        $subject = $_REQUEST['service'];
        $msg = $_REQUEST['msg'];
        
          
        // Performing insert query execution
      
        $sql = "INSERT INTO issues  VALUES ('$$userid', 
            '$email','$phnno','$subject','$msg')";
          
        if(mysqli_query($conn, $sql)){
            echo "<h3>service request sent successfully</h3>"; 
  
            
        } else{
            echo "ERROR: not succesfull $sql. " 
                . mysqli_error($conn);
        }
          
        // Close connection
        mysqli_close($conn);
        ?>
 