<?php
	include 'db/connection.php';
	include 'repositories/storyRepository.php';
	include 'repositories/typeRepository.php';
	include 'repositories/studentRepository.php';
	include 'repositories/studyRepository.php';
	include 'repositories/schoolRepository.php';
	include 'repositories/organizationRepository.php';
	include 'repositories/locationRepository.php';
	
	$con = openDB();
	
	if($_GET['storyid'] != null)
	{
		$story = getStoryByID($_GET['storyid'], $con);
		$type = getTypeByID($story -> _get("type_id"), $con);
		
		$student = getStudentByID($story->_get("student_ids")[0], $con);
		$study = getStudyByID($story->_get("study_ids")[0], $con);
		$school = getSchoolByID($study -> _get("school_id"), $con);
		
		if($story != null)
		{
			echo "<p>";
			echo "Type: " .$type -> _get("name"). "<br/>";
			echo "Begindatum: " .$story -> _get("startdate"). "<br/>";
			echo "Einddatum: " .$story -> _get("startdate"). "<br/>";
			echo "Omschrijving: " .$story -> _get("description"). "<br/>";
			echo "</p>";
			
			echo "<p>";
			echo "Student: " .$student -> _get("firstname"). " " .$student -> _get("insertion"). " " .$student -> _get("surname"). "<br/>";
			echo "Opleiding: " .$study -> _get("name"). "<br/>";
			echo "Schooljaar: " .$story -> _get("schoolyear"). "<br/>";
			echo "School: " .$school -> _get("name"). "<br/>";
			echo "Email: " .$student -> _get("email"). "<br/>";
			echo "</p>";
			
			echo "<p>"; 
			$organization_ids = $story->_get("organization_ids");
			foreach($organization_ids as &$organization_id)
			{
				$organization = getOrganizationByID($organization_id, $con);
				echo "Organisatie: " .$organization -> _get("name"). "<br/>";
				echo "Omschrijving organisatie: " .$organization -> _get("description")."<br/>";
			}
			$location_ids = $story -> _get("location_ids");
			foreach($location_ids as &$location_id)
			{
				$location = getLocationByID($location_id, $con);
				echo "Locatie(s) story: <br/>";
				echo $location -> _get("streetname"). " " .$location -> _get("number"). "<br/>";
				echo $location -> _get("zipcode"). " " .$location -> _get("city"). "<br/>";
				echo $location -> _get("country"). "<br/>";
			}
			echo "</p>";
			
			echo "<p>";
			$residence_location_ids = $story -> _get("residence_location_ids");
			if ($residence_location_ids !=null)
			{
				echo "Verblijf locatie(s): <br/>";
				foreach ($residence_location_ids as &$residence_location_id) {
					$location = getLocationByID($residence_location_id, $con);
					echo $location -> _get("streetname"). " " .$location -> _get("number"). "<br/>";
					echo $location -> _get("zipcode"). " " .$location -> _get("city"). "<br/>";
					echo $location -> _get("country"). "<br/>";
				}
			}
			echo "</p>";
			
			echo "<p>";
			$links = $story -> _get("links");
			if ($story -> _get("links") != null) {
				echo "Links: <br/>";
				foreach ($links as &$link) {
					echo "<a href='".$link."'>".$link."</a><br/>";
				}
			}
			echo "</p>";
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