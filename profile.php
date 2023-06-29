<?php 
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['fname'])) {

    

    $sName = "localhost";
    $uName = "root";
    $pass = "";
    $db_name = "registration";
    
    $conn = mysqli_connect($servername, $username, $password, $database);
      // Die if connection was not successful
      if (!$conn){
          die("Sorry we failed to connect: ". mysqli_connect_error());
      }

    function getUserById($id, $db){
        $sql = "SELECT * FROM users WHERE id = ?";
        $stmt = $db->prepare($sql);
        $stmt->execute([$id]);
        
        if($stmt->rowCount() == 1){
            $user = $stmt->fetch();
            return $user;
        }else {
            return 0;
        }
    }
$user = getUserById($_SESSION['id'], $conn);


 ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Home</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
    <?php if ($user) { ?>
    <div class="d-flex justify-content-center align-items-center vh-100">
    	
    	<div class="shadow w-350 p-3 text-center">
    		<img src="IMG.jpg"
    		     class="img-fluid rounded-circle" >
            <h3 class="display-4 "><?=$user['fname']?></h3>
            <a href="login.html" class="btn btn-primary">
            	Edit Profile
            </a>
             <a href="login.html" class="btn btn-warning">
                Logout
            </a>
		</div>
    </div>
    <?php else { 
     header("Location: login.html");
     exit;
    }
    ?>
</body>
</html>

