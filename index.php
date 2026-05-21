<!--connect file-->
<?php
include('includes/connect.php');
include('functions/common_functions.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ecommerce Website using PHP and mySQL</title>

    <!--bootstrap css link-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">

    <!--font awesome link-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">

    <!--css file-->
    <link rel="stylesheet" href="style.css">
</head>

<body>

<div class="container-fluid p-0">

<!--navbar-->
<nav class="navbar navbar-expand-lg navbar-light bg-info">
  <div class="container-fluid">
    <img src="./images/logo.jpeg" alt="" class="logo">

    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
    data-bs-target="#navbarSupportedContent">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">

      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item"><a class="nav-link active" href="#">Home</a></li>
        <li class="nav-item"><a class="nav-link" href="#">Products</a></li>
        <li class="nav-item"><a class="nav-link" href="#">Register</a></li>
        <li class="nav-item"><a class="nav-link" href="#">Contact</a></li>

        <li class="nav-item">
          <a class="nav-link" href="#">
            <i class="fa fa-cart-plus"></i><sup>1</sup>
          </a>
        </li>

        <li class="nav-item">
          <a class="nav-link">Total Price:100</a>
        </li>
      </ul>

      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search">
        <button class="btn btn-outline-light" type="submit">Search</button>
      </form>

    </div>
  </div>
</nav>

<!--second child-->
<nav class="navbar navbar-expand-lg navbar-dark bg-secondary p-3 mb-1">
<ul class="navbar-nav me-auto">
 <li class="nav-item">
   <a class="nav-link" href="#">Welcome Guest</a>
 </li>
 <li class="nav-item">
   <a class="nav-link" href="#">Login</a>
 </li>
</ul>
</nav>

<!--third child-->
<div class="bg-light">
  <h3 class="text-center">Uni Soko</h3>
  <p class="text-center">Campus Life Made Easy</p>
</div>

<!--fourth child-->
<div class="row px-1">

  <div class="col-md-10">
    <div class="row">

      <?php getproducts(); ?>

    </div>
  </div>

  <!--sidenav-->
  <div class="col-md-2 bg-secondary p-0">

    <ul class="navbar-nav me-auto text-center">
      <li class="nav-item bg-info">
        <a href="#" class="nav-link text-light"><h4>Delivery Brands</h4></a>
      </li>
      <?php getbrands(); ?>
    </ul>

    <ul class="navbar-nav me-auto text-center">
      <li class="nav-item bg-info">
        <a href="#" class="nav-link text-light"><h4>Categories</h4></a>
      </li>

      <?php getcategories(); ?>

    </ul>

  </div>
</div>

<!--last child-->
<div class="bg-info p-3 text-center">
  <p>All rights reserved © Designed by Kariz-2026</p>
</div>

</div>

<!--bootstrap js link-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>