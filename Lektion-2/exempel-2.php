<h1>Hämta för- och efternamn med GET-request</h1>
<ul>
<li><a href="exempel-2.php">exempel-2.php</a>
<li><a href="exempel-2.php?firstname=Omar">exempel-2.php?firstname=Omar</a>
<li><a href="exempel-2.php?lastname=Saifi">exempel-2.php?lastname=Saifi</a>
<li><a href="exempel-2.php?firstname=Omar&lastname=Saifi">exempel-2.php?firstname=Omar&lastname=Saifi</a>
</ul>
<?php

echo "<pre>";
print_r($_GET);
echo "</pre>";

$firstname = $_GET['firstname'] ?? "SAKNAS";
$lastname = $_GET['lastname'] ?? "SAKNAS";
echo "<p>Hej $firstname $lastname!</p>";

?>