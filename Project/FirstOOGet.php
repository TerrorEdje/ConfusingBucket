<?php
	include 'db/connection.php';
	if ($mysqli->connect_errno!= 0) //er gaat iets fout ...
	{
		die("Probleem bij het leggen van connectie of selecteren van database");
	}
	
	$query = "SELECT * FROM student";
	$result =$mysqli->query($query);
	
	echo "<table cellpadding=\"2\" border=\"1\">";
	echo "<tr><th>Student ID</th><th>Voornaam</th><th>Tussenvoegsel</th><th>Achternaam</th><th>Email</th><th>Gebruiker ID</th></tr>";
	
	while ($row =$result->fetch_assoc())
	{
		echo "<tr>";$id = $row["id"];$voornaam = $row["voornaam"];$tussenvoegsel = $row["tussenvoegsel"];$achternaam = $row["achternaam"];$email = $row["email"];$gebruiker_id = $row["gebruiker_id"];
		echo "<td>$id</td><td>$voornaam</td><td>$tussenvoegsel</td><td>$achternaam</td><td>$email</td><td>$gebruiker_id</td>";
		echo "</tr>";
	}
	
	echo "</table>";
	$result->close();
	$mysqli->close();
?>