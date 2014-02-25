<?php
	include 'db/connection.php';
	include 'repositories/storyRepository.php';
	include 'repositories/typeRepository.php';
	include 'repositories/studentRepository.php';
	include 'repositories/studyRepository.php';
	
	$con = openDB();
	
	if($_GET['storyid'] != null)
	{
		$story = getStoryByID($_GET['storyid'], $con);
		$type = getTypeByID($story -> _get("type_id"), $con);
		
		# Moet in repository
		$query = "SELECT * FROM study_has_student WHERE story_id =". $_GET['storyid'];
		$result = $con->query($query);
		$row = $result->fetch_assoc();
        $study_id = $row["study_id"];
        $student_id = $row["student_id"];
		$story_id = $row["story_id"];
		
		$student = getStudentByID($student_id, $con);
		$study = getStudyByID($study_id, $con);
		
		# Moet veranderd worden in schoolin plaats van organisatie
		$organization = getOrganizationByID($study -> _get("school_id"), $con);
		
		if($story != null)
		{
			echo "Type: " .$type -> _get("name"). "<br/>";
			echo "Begindatum: " .$story -> _get("startdate"). "<br/>";
			echo "Einddatum: " .$story -> _get("startdate"). "<br/>";
			echo "Omschrijving: " .$story -> _get("description"). "<br/>";
			
			echo "Student: " .$student -> _get("firstname"). " " .$student -> _get("insertion"). " " .$student -> _get("surname"). "<br/>";
			echo "Opleiding: " .$study -> _get("name"). "<br/>";
			echo "Schooljaar: " .$story -> _get("schoolyear"). "<br/>";
			echo "School: " .$organization -> _get("name"). "<br/>"; # Moet veranderd worden in school in plaats van organisatie
			echo "Email: " .$student -> _get("email"). "<br/>";
			
			echo "Organisatie: <br/>";
			echo "Omschrijving organisatie: <br/>";
			echo "Locatie organisatie: <br/>";
			
			echo "Verblijf: <br/>";
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