<?php
	include 'db/connection.php';
	include 'repositories/studentRepository.php';
	include 'repositories/storyRepository.php';

	$connection = openDB();
	
	$students = getAllStudents($connection);
	$storys = getAllStory($connection);
	
	$query = "SELECT * FROM study_has_student";
	
	$result = $connection->query($query);
	
	echo "<table cellpadding=\"2\" border=\"1\">";
	echo "<tr><th>Voornaam</th><th>Tussenvoegsel</th><th>Achternaam</th><th>Email</th><th>Begin datum</th><th>Eind datum</th><th>Beschrijving</th><th>Link</th><th>Leerjaar</th></tr>";
	
	while ($row = $result-> fetch_assoc())
	{
		echo "<tr>";
		$story_id = $row["story_id"];
		$student_id = $row["student_id"];
		//echo "<td>$story_id</td><td>$student_id</td>";
		
		foreach($storys as &$story)
		{
			if ($story_id == $story -> _get("id"))
			{
				$id = $story -> _get("id");
				$startdate = $story -> _get("startdate");
				$enddate = $story -> _get("enddate");
				$description = $story -> _get("description");
				$link = $story -> _get("link");
				$schoolyear = $story -> _get("schoolyear");
			}
		}
		
		foreach($students as &$student)
		{
			if ($student_id == $student -> _get("id"))
			{
				$firstname = $student -> _get("firstname");
				$insertion = $student -> _get("insertion");
				$surname = $student -> _get("surname");
				$email = $student -> _get("email");
			}			
		}
		echo "<td>$voornaam</td>";
		echo "<td>$tussenvoegsel</td>";
		echo "<td>$achternaam</td>";
		echo "<td>$email</td>";
		echo "<td>$begin_datum</td>";
		echo "<td>$eind_datum</td>";
		echo "<td>$beschrijving</td>";
		echo "<td>$link</td>";
		echo "<td>$leerjaar</td>";
		echo "<td onClick=\"window.location.href='storylist_detail.php?storyid=$id'\">Details</td>";
		echo "</tr>";
		
	}
	
	echo "</table>";

	closeDB($connection);
?>