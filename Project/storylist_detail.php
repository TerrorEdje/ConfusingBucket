<?php
	include 'db/connection.php';
	include 'repositories/storyRepository.php';
	include 'repositories/typeRepository.php';
	include 'repositories/studentRepository.php';
	include 'repositories/studyRepository.php';
	include 'repositories/schoolRepository.php';
	include 'repositories/organisatieRepository.php';
	include 'repositories/locationRepository.php';
	
	$con = openDB();
	
	if($_GET['storyid'] != null)
	{
		$story = getStoryByID($_GET['storyid'], $con);
		$type = getTypeByID($story -> _get("type_id"), $con);
		
		# Moet in een repository
		$query = "SELECT * FROM study_has_student WHERE story_id =". $_GET['storyid'];
		$result = $con->query($query);
		$row = $result->fetch_assoc();
        $study_id = $row["study_id"];
        $student_id = $row["student_id"];
		
		# Moet in een repository
		$query = "SELECT * FROM study_has_student WHERE story_id =". $_GET['storyid'];
		$result = $con->query($query);
		$row = $result->fetch_assoc();
        $location_id = $row["location_id"];
        $organization_id = $row["organization_id"];
		
		$student = getStudentByID($student_id, $con);
		$study = getStudyByID($study_id, $con);
		$school = getSchoolByID($study -> _get("school_id"), $con);
		$organization = getOrganizationByID($organization_id, $con);
		$location = getLocationByID($location_id, $con);
		
		if($story != null)
		{
			echo "Type: " .$type -> _get("name"). "<br/>";
			echo "Begindatum: " .$story -> _get("startdate"). "<br/>";
			echo "Einddatum: " .$story -> _get("startdate"). "<br/>";
			echo "Omschrijving: " .$story -> _get("description"). "<br/>";
			
			echo "Student: " .$student -> _get("firstname"). " " .$student -> _get("insertion"). " " .$student -> _get("surname"). "<br/>";
			echo "Opleiding: " .$study -> _get("name"). "<br/>";
			echo "Schooljaar: " .$story -> _get("schoolyear"). "<br/>";
			echo "School: " .$school -> _get("name"). "<br/>";
			echo "Email: " .$student -> _get("email"). "<br/>";
			
			echo "Organisatie: " .$organiztion -> _get("name"). "<br/>";
			echo "Omschrijving organisatie: " .$organization -> _get("description"). "<p/>";
			echo "Locatie organisatie: " .$location -> _get("description"). "<br/>";
			echo $location -> _get("streetname"). " " .$location -> _get("number"). "<br/>";
			echo $location -> _get("zipcode"). " " .$location -> _get("city"). "<br/>";
			echo $location -> _get("country"). "<br/>";
			
			// Moet nog afgemaakt worden (Verblijfplaats(en) en link(s) weergeven)
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