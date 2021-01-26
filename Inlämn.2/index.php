<?php include ('App.php'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Butik</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
</head>
<body>
    <h1>My products</h1>

    <div class="list-group">

    <a href="https://fakestoreapi.com/products/category" class="list-group-iteml">Startsida</a>
    <a href="https://fakestoreapi.com/products/category/men clothting" class="list-group-iteml">Men clothes</a>
    <a href="https://fakestoreapi.com/products/category/women clothing" class="list-group-iteml">Women clothes</a>
    <a href="https://fakestoreapi.com/products/category/jewelery" class="list-group-iteml">Jewelery</a>

    </div>
    


    <?php App::main(); ?>

</body>
</html>