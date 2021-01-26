<?php

class App
{
    public static $endpoint = "http://localhost/Webshop/array.php";


    public static function main()
    {

        try {
            $array = self::getData();
            self::viewData($array);
        } catch (Exception $e) {
            echo $e->getMessage();
        }
    }

    public static function getData()
    {

        $json = @file_get_contents(self::$endpoint);


        if (!$json)
            throw new Exception("Cannot access " . self::$endpoint);

        return json_decode($json, true);
    }

    public static function viewData($array)
    {
        
        $template = "";

        foreach ($array as $key => $postArray) {
            $template .= "
        <div>
            <h1>
                $postArray[product]
            </h1>
            
            <img 
                src='$postArray[image]' 
                alt='Image on products'
                class='img-fluid' width = 300px >
                
            <p>
            $postArray[description] 
            </p>
            
            <hr>

            <p>Pris: $postArray[price] kr
               </p>
               <hr>
               $postArray[lagersaldo] st
               
        </div>";
        }

        echo $template;
    }
}