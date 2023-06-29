<?php
$showAlert=false;
    if ($_SERVER['REQUEST_METHOD'] == 'POST'){
        $fname = $_POST['first'];
        $lname = $_POST['last'];
        $sname = $_POST['surname'];
        $email = $_POST['emill'];
        $phnumber=$_POST['contact'];
        $passward = $_POST['pass'];
        $copassward = $_POST['conpass'];
        $dob = $_POST['birth'];
        $name = $_POST['gender'];

      
        
      
      // Connecting to the Database
      $servername = "localhost";
      $username = "root";
      $password = "";
      $database = "registration";

      // Create a connection
      $conn = mysqli_connect($servername, $username, $password, $database);
      // Die if connection was not successful
      if (!$conn){
          die("Sorry we failed to connect: ". mysqli_connect_error());
      }
      else{ 
        
        // Submit these to a database
        // Sql query to be executed 
        
        $sql = "INSERT INTO `signup` (`fname`, `lname`, `sname`, `email`, `phonenumber`, `passward`,`copassward`, `dob`, `gender`) VALUES ('$fname', '$lname', '$sname', '$email', '$phnumber', '$passward','$copassward','$dob', '$name')";
        
        $result = mysqli_query($conn, $sql);
        
        if($result){
          $showAlert = true;
        }
        include 'login.html';
        

    }
  }

    
?>