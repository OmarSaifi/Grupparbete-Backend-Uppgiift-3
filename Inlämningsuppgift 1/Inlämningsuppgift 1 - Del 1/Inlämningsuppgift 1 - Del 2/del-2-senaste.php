<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inlämningsuppgift 1 Del_2</title>
</head>
<body>

<h1>PHP-skript som läser in förnamn och efternamn, via ett formulär.</h1>

<form action="#" method="get">

    Firstname: <br>
    <input type="text" name="firstName"> <br>
    Lastname: <br>
    <input type="text" name="lastName">

    <input type="submit" value="Submit">

</form>

<?php

function print_array()
{
    echo "<pre>";
    print_r($_GET);
    echo "</pre>";
}

//Funktion som kontrollerar att indatan är korrekt
function email($firstName, $lastName){

    //Slårihop för -och efter namn
    $Fullname = $firstName.'.'.$lastName;

    //Byter ut å, ä, ö
    $Fullname = str_replace("å", "a", $Fullname);
    $Fullname = str_replace("ä", "a", $Fullname);
    $Fullname = str_replace("ö", "o", $Fullname);

    $Fullname = str_replace("Å", "a", $Fullname);
    $Fullname = str_replace("Ä", "a", $Fullname);
    $Fullname = str_replace("Ö", "o", $Fullname);

    //Tar bort alla mellanslag
    $Fullname = str_replace(" ","", $Fullname);
    $Fullname = trim($Fullname);
   
    //Max 20 tecken tillåtna på namn och inga siffror är tillåtna
    if (strlen($firstName.$lastName) > 20){
        echo "Max 20 tecken är tillåtna";
        echo "<br>";
        return "";
    }
    elseif (preg_match('~[0-9]~', $Fullname)){
        echo "Inga siffor är tillåtna";
        echo "<br>";
        return "";
    }
    else{
        echo "<br>";
    }
    //Epostadressen returneras i små bokstäver
    return $Fullname.'@yh.nackademin.se';
}
//Skriver ut i små bokstäver
echo strtolower(email($_GET['firstName'] ?? "", $_GET['lastName'] ?? ""));
?>


</body>
</html>