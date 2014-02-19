<?php
	include 'db/connection.php';
	include 'repositories/storyRepository.php';
	include 'repositories/typeRepository.php';
	
	$con = openDB();
	
	if($_GET['storyid'] != null)
	{
		$story = getStoryByID($_GET['storyid'], $con);
		$type = getTypeByID($story -> _get("type_id"), $con);
		
		if($story != null)
		{
			echo "Type: " .$type -> _get("name");
			echo "Begindatum: " .$story -> _get("startdate");
			echo "Einddatum: " .$story -> _get("startdate");
			echo "Omschrijving: " .$story -> _get("description");
			
			echo "Student: ";
			echo "Opleiding: ";
			echo "Schooljaar: " .$story -> _get("schoolyear");
			echo "School: ";
			echo "Email: ";
			
			echo "Organisatie: ";
			echo "Omschrijving organisatie: ";
			echo "Locatie organisatie: ";
			
			echo "Verblijf: ";
			echo "<h4><a href='".$story -> _get("link")."'>".$story -> _get("link")."</a></h4>";
		}
		else
		{
			echo "<h3>Dit verhaal is helaas niet langer beschikbaar</h3>";
		}
	}
	else
	{
		echo "<h3>Je aanpassing in de url balk is niet helemaal goed gegaan ;)</h3>";
	}
	
	closeDB($con);
?>