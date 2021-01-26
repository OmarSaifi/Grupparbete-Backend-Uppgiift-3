<?php include ('App.php'); ?>

<link href="Utseende_app.css" rel="stylesheet">

<?php
class App
{
    public static $endpoint = "https://dog.ceo/api/breeds/list/all";

    public static function main()
    {

        try {
            $array = self::getData();
            // print_r($array);
            self::viewData($array);
        } catch (Exception $e) {
            echo $e->getMessage();
        }
    }

    public static function getData()
    {

        $json = @file_get_contents(self::$endpoint);
        // @ = Error Control Operator

        if (!$json){
            throw new Exception("Cannot access " . self::$endpoint);

        // Returnera data som en PHP-Array
        }
        return json_decode($json, true);
    }

    public static function viewData($array){

        $names = $array['message'];
        $list = "<ol>";
        foreach ($names as $key => $value) {
            $list .= "<li>$key</li>";
        }

        $list .= "</ol>";

        echo $list;
    }
}