<?php

//App::main();

class App{

    public static $endpoint = "https://fakestoreapi.com/products/";

public static function main(){
    
        try{
            $array = self::getData();
            // print_r($array);
            self::viewMenClothing($array);
            self::viewWomenClothing($array);
            self::viewJewelery($array);
        }catch (Exception $e){
            echo $e->getMessage();
        }
    }

public static function getData(){

    $json = @file_get_contents(self::$endpoint);
    // @ = Error Control Operator
    if(!$json)
        throw new Exception("Cannot access " .  self::$endpoint);

    // Test
    // echo $json;

    // Returnera data som en PHP_Array
    return json_decode($json, true);
}

public static function viewMenClothing($array){

    self::$endpoint = "https://fakestoreapi.com/products/category/men clothing";
 
    try{
        $array = self::getData();
        // print_r($array);
    }catch (Exception $e){
        echo $e->getMessage();
    }


  //  print_r($array);
   $table = "<table class='table'>";
   $table .= "<tr>
                <th>Title</th>
                <th>Description</th>
                <th>Price</th>
                <th>Image</th>
            </tr>";

    foreach ($array as $key => $value) {
        $table .= "<tr>
        <td>$value[title] </td>
        <td>$value[description] </td>
        <td>$value[price] </td>
        <td><img src= " . $value['image'] . " class='img-fluid' width=120px> </td>
        </tr>";
    }

   $table .= "</table>";

   echo $table;  
   
}
public static function viewWomenClothing($array){

    self::$endpoint = "https://fakestoreapi.com/products/category/women clothing";

    try{
        $array = self::getData();
        // print_r($array);
    }catch (Exception $e){
        echo $e->getMessage();
    }


  //  print_r($array);
   $table = "<table class='table'>";
   $table .= "<tr>
                <th>Title</th>
                <th>Description</th>
                <th>Price</th>
                <th>Image</th>
            </tr>";

    foreach ($array as $key => $value) {
        $table .= "<tr>
        <td>$value[title] </td>
        <td>$value[description] </td>
        <td>$value[price] </td>
        <td><img src= " . $value['image'] . " class='img-fluid' width=120px> </td>
        </tr>";
    }

   $table .= "</table>";

   echo $table;

}

public static function viewJewelery($array){

    self::$endpoint = "https://fakestoreapi.com/products/category/jewelery";

    try{
        $array = self::getData();
        // print_r($array);
    }catch (Exception $e){
        echo $e->getMessage();
    }


  //  print_r($array);
   $table = "<table class='table'>";
   $table .= "<tr>
                <th>Title</th>
                <th>Description</th>
                <th>Price</th>
                <th>Image</th>
            </tr>";

    foreach ($array as $key => $value) {
        $table .= "<tr>
        <td>$value[title] </td>
        <td>$value[description] </td>
        <td>$value[price] </td>
        <td><img src= " . $value['image'] . " class='img-fluid' width=120px> </td>
        </tr>";
    }

   $table .= "</table>";

   echo $table;

}

}