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

    <div class="container">

        <div class="row">

            <div class="col-lg-3">

                <h1 class="my-4">My products</h1>

                <div class="list-group">

                    <a href="?category=men clothting" class="list-group-iteml">Men clothes</a>
                    <a href="?category=women clothing" class="list-group-iteml">Women clothes</a>
                    <a href="?category=jewelery" class="list-group-iteml">Jewelery</a>
                </div>

            </div>

                <div class="col-lg-9">
                <?php
                shopData($array);
                ?>
    
            </div>

        </div>
    
    </div>
    

    <?php App::main(); ?>

</body>
</html>