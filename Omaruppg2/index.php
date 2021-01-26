<?php include 'App.php' ?>

<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Shop Homepage</title>

  <link rel="stylesheet" href="style.css">

</head>

<body>

  <!-- Page Content -->
  <div class="container">

    <div class="row">

      <div class="col-lg-3">

        <h1 class="my-4">Shop Name</h1>
        <div class="list-group">
          
          <a href="#" class="list-group-item">Men clothes</a>
          <a href="https://fakestoreapi.com/products/category/women clothing" class="list-group-item">Women clothes</a>
          <a href="https://fakestoreapi.com/products/category/jewelery" class="list-group-item">Jewelery</a>
        </div>

      </div>

      <?php App::main(); ?>


  <!-- Footer -->
  <footer class="py-5 bg-dark">
    <div class="container">
      <p class="m-0 text-center text-white">Copyright &copy; Your Website 2020</p>
    </div>
  <!-- /.container -->
  </footer>
  
</body>

</html>
