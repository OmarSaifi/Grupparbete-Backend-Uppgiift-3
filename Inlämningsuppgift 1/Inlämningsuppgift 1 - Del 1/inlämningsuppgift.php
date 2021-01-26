<?php

date_default_timezone_set("Europe/Stockholm");
$maonad = "januari"

?>

<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inlämningsuppgift 1 Del_1</title>
</head>
<body>

<h1>Dagens datum och tid:</h1>

<?php

$manad = array ("januari", "februari", "mars", "april", "maj", "juni", "juli", "augusti", "september", "oktober", "november", "december");
$veckodag = array ("Måndag", "Tisdag", "Onsdag", "Torsdag", "Fredag", "lördag", "Söndag");

echo "<b> Vecka " . date("W ") . "- ";
//echo date("l ");
echo "$veckodag[3] ";
echo "den " . date("d ");
echo " $manad[0] ";
echo date("Y ");
echo "kl. " . date("H:i ");
echo "<br>";

echo "<b> Vecka " . date("W - ") . "$veckodag[3] ". "den " . date("d ") . "$maonad " . date("Y ") . "kl. " .date("H:i");

?>

</body>
</html>