<?php

header("Content-Type: application/json; charset=UTF-8");

include('App.php');
include('array.php');

$limit = isset($_GET["limit"]) ? $_GET["limit"] : 10;

$kitchenProducts = array();

while (count($kitchenProducts) < $limit) {

    if (kitchenProducts < 10) {
        echo $kitchenProducts;
    else 
        echo "error: Limit must be between 1 and 10";

    array_push($names, $name->toArray());
}

shuffle($names);

echo json_encode($names, JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT);

// Skicka JSON till klienten.
echo $json;
