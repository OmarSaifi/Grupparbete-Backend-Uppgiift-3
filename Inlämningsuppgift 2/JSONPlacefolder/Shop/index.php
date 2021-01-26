<?php include ('App.php'); ?>

<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Shop</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/shop-homepage.css" rel="stylesheet">

</head>

<body>

<h2 class="text-center">Men Clothing</h2>
<?php App::viewDataMenClothing(0);?>

<h2 class="text-center">Women Clothing</h2>
<?php App::viewDataWomenClothing(1);?>

<h2 class="text-center">Jewelery</h2>
<?php App::viewDataJewelery(1);?>


  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark text-white fixed-top">
    <div class="container">
      <h3 class="text-center">Omars Shop</h3>
    </div>
  </nav>
  
  
  <!-- Footer -->
  <footer class="py-5 bg-dark">
    <div class="container">
      <p class="m-0 text-center text-white">Copyright &copy; Your Website 2020</p>
    </div>
    <!-- /.container -->
  </footer>

  
</body>

</html>