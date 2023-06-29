<?php

session_start();

require_once ('php/CreateDb.php');
require_once ('./php/component.php');


// create instance of Createdb class
$database = new CreateDb("Productdb", "Producttb");

if (isset($_POST['add'])){
    /// print_r($_POST['product_id']);
    if(isset($_SESSION['cart'])){

        $item_array_id = array_column($_SESSION['cart'], "product_id");

        if(in_array($_POST['product_id'], $item_array_id)){
            echo "<script>alert('Product is already added in the cart..!')</script>";
            echo "<script>window.location = 'index.php'</script>";
        }else{

            $count = count($_SESSION['cart']);
            $item_array = array(
                'product_id' => $_POST['product_id']
            );

            $_SESSION['cart'][$count] = $item_array;
        }

    }else{

        $item_array = array(
                'product_id' => $_POST['product_id']
        );

        // Create new session variable
        $_SESSION['cart'][0] = $item_array;
        print_r($_SESSION['cart']);
    }
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MNM WEB STORE</title>
   <!-- for bootstrap 
   -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.2/css/all.css" />

<!-- Bootstrap CDN -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> 
<link rel="stylesheet" href="style.css">
 
<!-- for swiping -->
 <link
 rel="stylesheet"
 href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css"
/>

 <!-- for css -->
    <link rel="stylesheet" href="css/navigation.css">
    <!-- <link rel="stylesheet" href="/css/photogallry.css">
    <link rel="stylesheet" href="/css/category.css">
    <link rel="stylesheet" href="/css/text2.css"> -->
    <link rel="stylesheet" href="css/products.css">
    <link rel="stylesheet" href="css/footer.css">
 <!-- for javascript -->
    <script src="/js/navigation.js"></script>
    
</head>
<body>
    <div class="overlay"></div>

<div class="utility-nav d-none d-md-block">
  <div class="container">
    <div class="row">
      <div class="col-12 col-md-6">
        <p class="small"><i class="bx bx-envelope"></i> mnmwebstor@gmail.com &nbsp;|&nbsp; <i class="fa fa-phone"></i> +91-9023969990
        </p>
      </div>

      <div class="col-12 col-md-6 text-right">
        <p class="small">Free shipping on total of 500 &#8377 of all products</p>
      </div>
    </div>
  </div>
</div>

<nav class="navbar navbar-expand-md navbar-light bg-light main-menu" style="box-shadow:none">
  <div class="container">

    <button type="button" id="sidebarCollapse" class="btn btn-link d-block d-md-none">
                <i class="bx bx-menu icon-single"></i>
            </button>

    <a class="navbar-brand" href="#">
      <!-- <h4 class="font-weight-bold">Logo</h4> -->
      <img src="logo.png" alt="">
    </a>

    <ul class="navbar-nav ml-auto d-block d-md-none">
      <li class="nav-item">
        <a class="btn btn-link" href="#"><i style="font-size:24px" class="fa">&#xf290;</i><span class="badge badge-danger">3</span></a>
      </li>
    </ul>

    <div class="collapse navbar-collapse">
       <!-- *********  search bar ****** -->
       <form class="form-inline my-2 my-lg-0 mx-auto" method="get" action="search.php">
        <input class="form-control" type="search" placeholder="Search for products..." aria-label="Search" name="search">
        <button class="btn btn-success my-2 my-sm-0" type="submit"><i style="font-size:24px" class="fa">&#xf002;</i></button>
      </form>
  <!-- *********  search bar ****** -->

      <ul class="navbar-nav">
        <li class="nav-item">
            <a class="btn btn-link" href="wishlist.php"><i style="font-size:24px" class="fa">&#xf08a;</i></a>
          <a class="btn btn-link" href="cart.php"><i style="font-size:24px" class="fa">&#xf290;</i></a>
          <a class="btn btn-link" href="#"><i style="font-size:24px" class="fa">&#xf007;</i></a>
        </li>
        <li class="nav-item ml-md-3">
          <a class="btn btn-primary" href="login.html" ><i class="bx bxs-user-circle mr-1"></i> Log In / Register</a>
        </li>
      </ul>
    </div>

  </div>
</nav>

<nav class="navbar navbar-expand-md navbar-light bg-light sub-menu">
  <!-- <script src="js/login.js"></script> -->
    <div class="container">
      <div class="collapse navbar-collapse" id="navbar">
        <ul class="navbar-nav mx-auto">
          <li class="nav-item active">
            <a class="nav-link" href="index2.php">Home<span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Men</a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="Shoes_men.php">Running Shoes</a>
              <!-- <a class="dropdown-item" href="#">Sneakers</a> -->
              <a class="dropdown-item" href="Slides_sandals_men.php">Slides & Sandals</a>
              <a class="dropdown-item" href="Clothing_men.php">Clothing</a>
            </div>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Women</a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="Shoes_women.php">Running Shoes</a>
              <!-- <a class="dropdown-item" href="#">Sneakers</a> -->
              <a class="dropdown-item" href="Slides_women.php">Slides & Flip Flops</a>
              <a class="dropdown-item" href="Clothing_women.php">Clothing</a>
            </div>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Kids</a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="shoes_kids.php">Shoes</a>
              <a class="dropdown-item" href="Clothing_kids.php">Clothing</a>
            </div>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              Support
                          </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="#">Privacy Policy</a>
              <a class="dropdown-item" href="#">Terms & Conditions</a>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Contact</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  
 <!-- ***************** products  ***************** -->
<div class="container">
        <div class="row text-center py-5">
            <?php
                $result = $database->getData();
                while ($row = mysqli_fetch_assoc($result)){
                    component($row['product_name'], $row['product_price'], $row['product_image'], $row['id'],$row['description']);
                }
            ?>
        </div>
</div>





<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <!-- ***************** products  ***************** -->
<!-- footer start -->
<!-- Footer -->
<?php require_once('php/footer.php') ?>
  </body>
  </html>