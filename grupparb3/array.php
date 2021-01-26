<?php

// 1. Skapa en HTTP-header med innehållstypen JSON (Content-Type).
header("Content-Type: application/json; charset=UTF-8");

/**
 * 4 Arrayer 
 * ---------
 * $kitchenProducts
 * innehåller 10
 * 
 * $description
 * innehåller 10
 * 
 * $price
 * innehåller 10 
 * 
 * $image 
 * innehåller 10
 * */


$kitchenProducts = array(
    0 => 'Blender',
    1 => 'Brödrost',
    2 => 'Citrus juicer',
    3 => 'Gjutjärnsgryta',
    4 => 'Köksvåg',
    5 => 'Liten kastrull',
    6 => 'Lökblender',
    7 => 'Smörgåsgrill',
    8 => 'Stor kastrull',
    9 => 'Vattenkokare',
);

$kitchenDescription = array(
    0 => 'Enkel blender som kommer göra din vardag sundare.',
    1 => 'Starta dagen med nyrostat bröd',
    2 => 'C-vitamin är bra för kropp och själ',
    3 => 'Robust gryta som passar till alla hushåll, små som stora. Grytan är tillverkad i emaljerat gjutjärn med jämn värmefördelning som bevarar värmen ända upp till kanten.',
    4 => 'Väg maten du tillagar för att kunna räkna kalorier',
    5 => 'Perfekt till att koka vatten',
    6 => 'Undvik att gråta varje gång du har med lök att göra',
    7 => 'Perfekt till mackor',
    8 => 'Laga mat till hela familjen',
    9 => 'Bäst prestanda i marknaden enligt Ahmed och Omar"',
);

$kitchenPrice = array(
    0 => '200',
    1 => '350',
    2 => '150',
    3 => '700',
    4 => '250',
    5 => '180',
    6 => '70',
    7 => '320',
    8 => '380',
    9 => '190',   
);

$kitchenImage = array(
    0 => 'Blender.jpg',
    1 => 'Brödrost.jpg',
    2 => 'Citrusjuicer.jpg',
    3 => 'Gjutgärnsgryta.jpg',
    4 => 'Köksvåg.jpg',
    5 => 'LitenKastrul.jpg',
    6 => 'Lökblender.jpg',
    7 => 'Smörgåsgrill.jpg',
    8 => 'StorKastrull.jpg',
    9 => 'Vattenkokare.jpg',
);

//print_r($kitchenProducts);
//print_r($kitchenDescription);
//print_r($kitchenPrice);


$names = array();


for ($i=0; $i < 10 ; $i++) { 

    $name = array(
        "product" => $kitchenProducts[$i],
        "description" => $kitchenDescription[$i],
        "price" =>$kitchenPrice[$i],
        "image" =>$kitchenImage[$i]
      
    );

    array_push($names, $name);

}

// 4. Konvertera PHP-arrayen till en JSON-string.
$json = json_encode($names, JSON_UNESCAPED_UNICODE|JSON_PRETTY_PRINT);

// Skicka JSON till klienten.
echo $json;



