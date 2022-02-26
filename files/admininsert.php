<?php
        $conn = mysqli_connect("localhost", "root", "", "fix");
          
        // Check connection
        if($conn === false){
            die("ERROR: Could not connect. " 
                . mysqli_connect_error());
        }
        // Taking all 6 values from the form data(input)
    $name = $_POST['fName'];
    $username = $_POST['username'];
    $tel = $_POST['tel'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    $password = $_POST['password'];
          
        // Performing insert query execution
        // here our table name is Admin
        $sql = "INSERT INTO `admin`( `name`, `username`, `tel`, `email`, `address`, `password`) VALUES ('$name', 
    '$username','$tel','$email','$address','$password')";
          //   mysqli_query() function performs a query against a database.
        if(mysqli_query($conn, $sql)){
            echo "<h3>Congragulations. your account was created.</h3>"; 
  
        } else{
            echo "ERROR: not succesfull $sql. " 
                . mysqli_error($conn);
        }
          
        // Close connection
        mysqli_close($conn);
        ?>