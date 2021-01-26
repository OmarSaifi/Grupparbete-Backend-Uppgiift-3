<?php

include_once('array.php');

class Kitchen
{
    private $kitchenProducts;
    private $kitchenDescription;
    private $kitchenPrice;
    private $kitchenImage;
    private $lagerSaldo;

    
    public function __construct($kitchenProducts, $kitchenDescription, $kitchenPrice, $kitchenImage)

    {
        $this->kitchenProducts = $kitchenProducts;
        $this->kitchenDescription = $kitchenDescription;
        $this->kitchenPrice = $kitchenPrice;
        $this->kitchenImage = $kitchenImage;
        $this-> lagerSaldo = rand(0,50);

    }

    public function toArray()
    {

        $array = array(
            "kitchenProducts" => $this->kitchenProducts,
            "kitchenDescription"   => $this->kitchenDescription,
            "kitchenPrice"   => $this->kitchenPrice,
            "kitchenImage"  => $this->kitchenImage,
            "lagerSaldo"  => $this->lagerSaldo
        );

        //print_r($array);

        return $array;
    }


}
