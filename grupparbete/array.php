<?php

// 1. Skapa en HTTP-header med innehållstypen JSON (Content-Type).
header("Content-Type: application/json; charset=UTF-8");

// 2. Skapa två PHP-arrayer för att lagra förnamn och efternamn.
$kitchenProducts = ["Blender", "Brödrost", "Citrus juicer", "Gjutjärnsgryta",  "Köksvåg", "Liten kastrull",
 "Lökblender", "Smörgåsgrill", "Stor kastrull", "Vattenkokare"];
$kitchenDescription = ["Enkel blender som kommer göra din vardag sundare.", 
"Starta dagen med nyrostat bröd", 
"C-vitamin är bra för kropp och själ",
 "Robust gryta som passar till alla hushåll, små som stora. Grytan är tillverkad i emaljerat gjutjärn med jämn värmefördelning som bevarar värmen ända upp till kanten. ",
 "Väg maten du tillagar för att kunna räkna kalorier", 
 "Perfekt till att koka vatten",
 "Undvik att gråta varje gång du har med lök att göra",
 "Perfekt till mackor", 
 "Laga mat till hela familjen", 
 "Bäst prestanda i marknaden enligt Ahmed och Omar",];
 $kitchenPrice =["200","350","150","700","250","180","70","320","380","190"];
 $kitchenImage = ["Blender.jpg","Brödrost.jpg","CitrusJuicer.jpg","Gjutjärnsgryta.jpg","Köksvåg.jpg","LitenKastrull.jpg","Lökblender.jpg",
"Smörgåsgrill.jpg","StorKastrull.jpg","Vattenkokare.jpg"];


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