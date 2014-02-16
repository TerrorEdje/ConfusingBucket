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
            $opleiding_ids = array();
            $story_ids = array();
            
            $query2 = "SELECT * FROM opleiding_has_student WHERE student_id='".$id."'";
            $result2 = $connection->query($query2);
            
            $j = 0;
            
            while ($row =$result2->fetch_assoc())
            {
                $opleiding_ids[$j] = $row["opleiding_id"];
                $story_ids[$j] = $row["story_id"];
            }
			
			$students[$i] = new Student();
			$students[$i] -> _set("id",$id);
			$students[$i] -> _set("voornaam",$voornaam);
			$students[$i] -> _set("tussenvoegsel",$tussenvoegsel);
			$students[$i] -> _set("achternaam",$achternaam);
			$students[$i] -> _set("email",$email);
			$students[$i] -> _set("gebruiker_id",$gebruiker_id);
            $students[$i] -> _set("opleiding_ids",$opleiding_ids);
            $students[$i] -> _set("story_ids",$story_ids);
			
			$i++;
		}
		
		$result->close();
		
		return $students;
	}
?>