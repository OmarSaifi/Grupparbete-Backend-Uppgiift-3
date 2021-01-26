<?php
Class App{


public static function main(){

    $endpoint = "https://fakestoreapi.com/products";
    try {
        $products = self::getData($endpoint);
        self::viewData($products);
    } catch (exception $e) {
        echo $e->getMessage();
    }
    }


public static function getData($endpoint){
    $json = file_get_contents($endpoint);
    if (!$json)
    throw new Exception("Cannot access $endpoint");
    return json_decode($json, true);
    }


public static function viewData($array){
    foreach ($array as $key => $value) {
        if ($value['category'] == $_GET['category']){
        echo "<br>";
        echo "<br>";
        echo $value['title'] . '<br>';
        echo $value['price'] . '<br>';
        echo $value['description'] . '<br>';
        echo "<img src= '$value[image]'>";
        echo "<br>";
        echo "<br>";
            }

        }
    }
}
?>

