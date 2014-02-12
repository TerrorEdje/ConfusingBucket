<?php
$db_hostnaam = "212.83.232.237"; // De locatie waar de MySQL-service draait
$db_gebruiker = "confusingbucket"; // De gebruikersnaam waarmee naar de database kan worden verbonden
$db_wachtwoord = "bucket007"; // Het wachtwoord waarmee naar de database kan worden verbonden
$db_naam = "mydb"; // De naam van de database zelf, deze moet via de DBMS worden aangemaakt
 
$mysqli = new mysqli($db_hostnaam, $db_gebruiker, $db_wachtwoord, $db_naam);
?>