<?php
$db_hostnaam = "localhost"; // De locatie waar de MySQL-service draait
$db_gebruiker = "gebruikersnaam"; // De gebruikersnaam waarmee naar de database kan worden verbonden
$db_wachtwoord = "wachtwoord"; // Het wachtwoord waarmee naar de database kan worden verbonden
$db_naam = "database"; // De naam van de database zelf, deze moet via de DBMS worden aangemaakt
 
$mysqli = new mysqli($db_hostnaam, $db_gebruiker, $db_wachtwoord, $db_naam);
?>