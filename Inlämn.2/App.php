<?php

$endpoint = "https://fakestoreapi.com/products/";

$json = file_get_contents($endpoint);

$products = json_decode($json, true);

function shopData($array)

{
    foreach ($array as $key => $value) {

        if (($value['category'] == $_GET['category'])) {

        echo $value['title'] . '<br>';
        echo $value['price'] . '<br>';
        echo $value['description'] . '<br>';
        echo "<img src= " . $value['image'] . " class='img-fluid' width=512px>" . '<br>';
        
        }

    }
}

?>