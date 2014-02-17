<?php
	include 'db/connection.php';
	include 'repositories/studentRepository.php';

	$connection = openDB();
	
	$students = getAllStudents($connection);
	
	
	echo "<table cellpadding=\"2\" border=\"1\">";
	echo "<tr><th>Student ID</th><th>Voornaam</th><th>Tussenvoegsel</th><th>Achternaam</th><th>Email</th><th>Gebruiker ID</th></tr>";
	
	foreach($students as &$student)
	{
		echo "<tr>";
		$id = $student -> _get("id");
		$voornaam = $student -> _get("voornaam");
		$tussenvoegsel = $student -> _get("tussenvoegsel");
		$achternaam = $student -> _get("achternaam");
		$email = $student -> _get("email");
		$gebruiker_id = $student -> _get("gebruiker_id");
		echo "<td>$id</td><td>$voornaam</td><td>$tussenvoegsel</td><td>$achternaam</td><td>$email</td><td>$gebruiker_id</td>";
		echo "</tr>";
	}
	
	echo "</table>";

	closeDB($connection);
?>