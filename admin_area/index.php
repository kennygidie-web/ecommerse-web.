<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <!--bootstrap css link-->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">

  <!--font awesome link-->

 <!--css file-->
 <link rel="stylesheet" href="../style.css">
 <style>
    .admin_image{
    width: 100px;
    object-fit: contain;
 }
 .footer{
    position: absolute;
    bottom: 0;
 }
 </style>


    </head>
<body>
<!--navbar-->
<div class="container-fluid p-0">
    <!--first child-->
    <nav class="navbar navbar-expand-lg navbar-light bg-info">
        <div class="container-fluid">
            <img src="../images/cart.png" alt="" class="cart">
             <nav class="navbar navbar-expand-lg ">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a href="" class="nav-link">Welcome Guest</a>
                </ul>
             </nav>
        </div>
    </nav>
    <!--second child-->
    <div class="bg-light">
        <h3 class="text-center p-2">Manage Details</h3>
    </div>
    <!--third child-->
   <div class="row">
    <div class="col-md-12 bg-secondary p-1 d-flex align-items-center">
   <div class="p-3">
        <a href="#"><img src="../images/juice.jpeg." alt="" class="admin_image"></a>
        <p class="text-light text-center">Admin Name</p>
        </div>
       
            <!--button*10>a.nav-link.text-light.bg-info.my-1-->   
            <div class="button text-center">
            <button class="my-3"><a href="insert_product.php" class="nav-link text-light bg-info my-1">Insert Products</a></button>
            <button class=""><a href="" class="nav-link text-light bg-info my-1">View Products</a></button>
            <button><a href="index.php?insert_category" class="nav-link text-light bg-info my-1">Insert Categories</a></button>
            <button><a href="" class="nav-link text-light bg-info my-1">View Categories</a></button>
            <button><a href="index.php?insert_brand" class="nav-link text-light bg-info my-1">Insert Brands</a></button>
            <button><a href="" class="nav-link text-light bg-info my-1">View Brands</a></button>
            <button><a href="" class="nav-link text-light bg-info my-1">All orders</a></button>
            <button><a href="" class="nav-link text-light bg-info my-1">All Payments</a></button>
            <button><a href="" class="nav-link text-light bg-info my-1">List users</a></button>
            <button><a href="" class="nav-link text-light bg-info my-1">Logout</a></button>
             
       </div>
    </div>
   </div>

   <!--fourth child-->
   <div class="container my-3">
    <?php
    if(isset($_GET['insert_category'])){
        include('insert_category.php');
    }
    if(isset($_GET['insert_brand'])){
        include('insert_brands.php');
    }
    ?>
   </div>
   
   <!--last child-->
<div class="class bg-info p-3 text-center footer">
  <p>All rights reserved © Designed by Kariz-2026</p>
 </div>
</div>

<!--js link-->

</body><script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</html>