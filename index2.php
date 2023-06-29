<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MNM WEB STORE</title>
   <!-- for bootstrap 
   -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
 
<!-- for swiping -->
 <link
 rel="stylesheet"
 href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css"
/>
  <!-- font  -->
  <!-- <link href="https://fonts.googleapis.com/css2?family=Baloo+2&display=swap" rel="stylesheet"> -->
  <!-- <link href="https://fonts.googleapis.com/css2?family=Cuprum:ital@1&display=swap" rel="stylesheet"> -->
  <link href="https://fonts.googleapis.com/css2?family=Monda&display=swap" rel="stylesheet">
  <!-- for css -->

    <link rel="stylesheet" href="css/navigation.css">
    <link rel="stylesheet" href="css/photogallry.css">
    <link rel="stylesheet" href="css/category.css">
    <link rel="stylesheet" href="css/text2.css">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="css/loginstyle.css">
    <style>
      body{
        /* font-family: 'Baloo 2', cursive; */
        /* font-family: 'Cuprum', sans-serif; */
        font-family: 'Monda', sans-serif;
      }
      .popular {
    height: 11vh;
    text-align: center;
    margin: 3vh;
    box-shadow: 5px 5px 10px #f1f1f1;
    text-decoration-line: underline;
    margin-top: 5vh;
}
.popular h1 {
  padding-top: 3vh;
    font-size: xx-large;
    margin-top: 1vh;
    letter-spacing: 4px;
}
.categorey{
  height: 50vh;
}
    </style>
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
        </li>
        <li class="nav-item ml-md-3">
          <a class="btn btn-primary" href="login.html" target="_parent" ><i class="bx bxs-user-circle mr-1"></i> Log In / Register</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

<nav class="navbar navbar-expand-md navbar-light bg-light sub-menu">
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
            <a class="dropdown-item" href="privcy_policy.html">Privacy Policy</a>
            <a class="dropdown-item" href="#">Terms & Conditions</a>
          </div>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#ch4">Contact</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

<!-- photo gellary  started -->
 <div class="advertisement">
   
  <!-- Slider main container -->
   <div class="swiper">
   <!-- Additional required wrapper -->
      <div class="swiper-wrapper">
      <!-- Slides -->
      <div class="swiper-slide"><img src="img/advertisement/campus.jpg"></div>
      <div class="swiper-slide"><img src="img/advertisement/sparx.jpg"></div>
      <div class="swiper-slide"><img src="img/advertisement/puma.jpg"></div>
      <div class="swiper-slide"><img src="img/advertisement/clothing.jpg"></div>
      <div class="swiper-slide"><img src="img/advertisement/bag.jpg"></div>
      </div>
      <!-- <div class="swiper-slide"><img src="/img/advertisement/puma.jpg"></div>
      </div> -->
      <!-- If we need pagination -->
      <div class="swiper-pagination"></div>

      <!-- If we need navigation buttons -->
      <div class="swiper-button-prev"></div>
      <div class="swiper-button-next"></div>
   </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
    <script>
      const swiper = new Swiper('.swiper', {
        autoplay:{
          delay:3500,
          disableOnInteraction:false,
        },
      loop: true,
      pagination: {
      el: '.swiper-pagination',
      clickable:true,
     },
  navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev',
  },
});
    </script>
<!-- photo gellary ended -->
<!-- <div class="text">
  <h1>LET'S SHOP TOGETHER</h1>
</div> -->
<div class="popular">
  <h1>POPULAR NOW</h1>
</div>

<!-- for categorey started-->
<div class="categorey">
  <div class="box">
     <img src="img/Slides_sandals_men/Nike_200.jpg" alt="">
     <button> <a href="slides_sandals.php">SHOP NOW</a> </button>
     <div class="heading">
      <h3>Slides & Sandals</h3>
     </div>
  </div>
  <div class="box">
    <img src="img/shoes/shooes.jpg" alt="">
    <button> <a href="shoes.php">SHOP NOW</a></button>
    <div class="heading">
      <h3>Shoes</h3>
     </div>
  </div>
  <div class="box">
    <img src="img/shoes/tshirt.jpg" alt="">
    <button><a href="clothing.php">SHOP NOW</a></button>
    <div class="heading">
      <h3>Clothing</h3>
     </div>
  </div>
  <div class="box">
    <img src="img/shoes/ball.jpg" alt="">
    <button><a href="sport.php">SHOP NOW</a></button>
    <div class="heading">
      <h3>Sports</h3>
     </div>
  </div>
</div>
<!-- <div class="h3">EXPLORE MORE</div> -->
<div class="popular">
  <h1>EXPLORE MORE</h1>
</div>
<div class="box">
  <div class="img">
    <img src="img/rebok/pic1.webp" alt="">
    <h3>
      TRAINING ESSENTILS <br> FROM REEBOK
    </h3>
    <button class="btn"><a href="TRAINING_ESSENTILS.php"> SHOP NOW &nbsp; &nbsp; &nbsp;<i class="fa fa-arrow-right"></i></a></button>
  </div>
  <div class="img">
    <img src="img/rebok/pic2.webp" alt="">
    <h3>
      REEBOK X MONEY HEIST
    </h3>
    <button class="btn"><a href="MONEY_HEIST.php"> SHOP NOW &nbsp; &nbsp; &nbsp;<i class="fa fa-arrow-right"></i></a></button>
  </div>
  
</div>
<div class="box2">
  <div class="img">
    <img src="img/rebok/pic3.jpg" alt="">
    <h3>
      ATHLEISURE ESSENTILS
    </h3>
    <button class="btn"><a href="ATHLEISURE_ESSENTILS.php"> SHOP NOW &nbsp; &nbsp; &nbsp;<i class="fa fa-arrow-right"></i></a></button>
  </div>
  <div class="img">
    <img src="img/rebok/pic4.webp" alt="">
    <h3>
      RUNNING GEAR
    </h3>
    <button class="btn"><a href="RUNNING_GEAR.php"> SHOP NOW &nbsp; &nbsp; &nbsp;<i class="fa fa-arrow-right"></i></a></button>
  </div>
  
</div>
<!-- text and img end -->


<!-- footer start -->
<!-- Footer -->
<footer class="text-center text-lg-start bg-light text-muted">
  <!-- Section: Social media -->
  <section class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom">
    <!-- Left -->
    <div class="me-5 d-none d-lg-block">
      <span>Get connected with us on social networks:</span>
    </div>
    <!-- Left -->

    <!-- Right -->
     <div>
      <a href="https://www.facebook.com/profile.php?id=100019022762778" class="me-4 text-reset">
        <i class="fa fa-facebook-f" style="font-size:24px;color: blue "></i>
      </a>
      <a href="https://twitter.com/Mit_Patel_510" class="me-4 text-reset">
        <i class="fa fa-twitter" style="font-size:24px;color:rgb(130, 224, 255)"></i>
      </a>
      <a href="https://www.google.com/" target="_blank" class="me-4 text-reset">
        <i class='fa fa-google' style='font-size:24px;color:white'></i>
      </a>
      <a href="https://www.instagram.com/patel_mit_510/" class="me-4 text-reset">
        <i class="fa fa-instagram" style="font-size:24px;color:red"></i>
      </a>
      <a href="https://www.linkedin.com/in/patel-mit-600007244" class="me-4 text-reset">
        <i class='fa fa-linkedin' style='font-size:24px;color:white'></i>
      </a>
      <a href="https://github.com/mit510" class="me-4 text-reset">
        <i class='fa fa-github' style='font-size:24px;color:purple'></i>
      </a>
    </div>
    <!-- Right -->
  </section>
  <!-- Section: Social media -->

  <!-- Section: Links  -->
  <section id="ch4">
    <div class="container text-center text-md-start mt-5">
      <!-- Grid row -->
      <div class="row mt-3">
        <!-- Grid column -->
        <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
          <!-- Content -->
          <h6 class="text-uppercase fw-bold mb-4">
            <i class="fas fa-gem me-3"></i>Company name
          </h6>
          <p>
           MNM Ltd. <br>
           <img src="logo.png" alt="">
          </p>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
          <!-- Links -->
          <h6 class="text-uppercase fw-bold mb-4">
            Products
          </h6>
          <p>
            <a href="shoes.php" class="text-reset">Shoes</a>
          </p>
          <p>
            <a href="clothing.php" class="text-reset">Cloths</a>
          </p>
          <p>
            <a href="Clothing_kids.php" class="text-reset">Kids Wear</a>
          </p>
          <p>
            <a href="sport.php" class="text-reset">Sport Accessories</a>
          </p>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
          <!-- Links -->
          <h6 class="text-uppercase fw-bold mb-4">
            Useful links
          </h6>
          <p>
            <a href="cart.php" class="text-reset">Orders</a>
          </p>
          <p>
            <a href="privcy_policy.html" class="text-reset">Privcy Policy</a>
          </p>
          <p>
            <a href="privcy_policy.html" class="text-reset">Terms and Conditions</a>
          </p>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
          <!-- Links -->
          <h6 class="text-uppercase fw-bold mb-4">Contact</h6>
          <p><i style="font-size:24px" class="fa">&#xf041;</i>  <br> V V Nagar , Anand <br> Gujarat <br> 388120</p>
          <p>
            <i class="fa fa-envelope"></i>
            patelmitkumarmaheshbhai@gmail.com <br> bhikadiyameet02@gamil.com <br>nisarg23vadodariya@gmail.com
          </p>
          <p><i class="fa fa-phone"></i> <br> &nbsp; +91 9023969990</p>
          <p>&nbsp; +91 7984389608</p>
          <p> &nbsp;+91 8866171900</p>
        </div>
        <!-- Grid column -->
      </div>
      <!-- Grid row -->
    </div>
  </section>
  <!-- Section: Links  -->

  <!-- Copyright -->
  <div class="text-center p-4" style="background-color: black; margin-top: -3vh;">
    © 2021 Copyright:
    <a class="text-reset fw-bold" href="">mnmcompanyLtd@gamil.com</a>
  </div>
  <!-- Copyright -->
</footer>
<!-- Footer end-->
</body>
</html>