<?php
	include 'model/student.php';
		
	function getAllStudents($connection)
	{
		$query = "SELECT * FROM student";
		$result =$connection->query($query);
		
		$i = 0;
		$students = array();
		
		while ($row =$result->fetch_assoc())
		{
			$id = $row["id"];
			$voornaam = $row["voornaam"];
			$tussenvoegsel = $row["tussenvoegsel"];
			$achternaam = $row["achternaam"];
			$email = $row["email"];
			$gebruiker_id = $row["gebruiker_id"];
			
			$students[$i] = new Student();
			$students[$i] -> _set("id",$id);
			$students[$i] -> _set("voornaam",$voornaam);
			$students[$i] -> _set("tussenvoegsel",$tussenvoegsel);
			$students[$i] -> _set("achternaam",$achternaam);
			$students[$i] -> _set("email",$email);
			$students[$i] -> _set("gebruiker_id",$gebruiker_id);
			
			$i++;
		}
		
		$result->close();
		
		return $students;
	}
?>