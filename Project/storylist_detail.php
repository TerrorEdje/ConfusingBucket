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
			echo "<table>";
			echo "<tr><td>Type: </td><td> " .$type -> _get("name"). "</td></tr>";
			echo "<tr><td>Begindatum: </td><td> " .$story -> _get("startdate"). "</td></tr>";
			echo "<tr><td>Einddatum: </td><td> " .$story -> _get("startdate"). "</td></tr>";
			echo "<tr><td>Omschrijving: </td><td> " .$story -> _get("description"). "</td></tr>";
			echo "<tr><td>&nbsp;</td></tr>";

			echo "<tr><td>Student: </td><td> " .$student -> _get("firstname"). " " .$student -> _get("insertion"). " " .$student -> _get("surname"). "</td></tr>";
			echo "<tr><td>Opleiding: </td><td> " .$study -> _get("name"). "</td></tr>";
			echo "<tr><td>Schooljaar: </td><td> " .$story -> _get("schoolyear"). "</td></tr>";
			echo "<tr><td>School: </td><td> " .$school -> _get("name"). "</td></tr>";
			echo "<tr><td>Email: </td><td> " .$student -> _get("email"). "</td></tr>";
			echo "<tr><td>&nbsp;</td></tr>";

			$organization_ids = $story->_get("organization_ids");
			foreach($organization_ids as &$organization_id)
			{
				$organization = getOrganizationByID($organization_id, $con);
				echo "<tr><td>Organisatie: </td><td> " .$organization -> _get("name")."</td></tr>";
				echo "<tr><td>Omschrijving organisatie: &nbsp; </td><td> " .$organization -> _get("description")."</td></tr>";
			}
			$location_ids = $story -> _get("location_ids");
			echo "<tr><td class=\"tdTop\">Locatie(s) story: </td><td><ul>";
			foreach($location_ids as &$location_id)
			{
				$location = getLocationByID($location_id, $con);
				
				echo "<li>".$location -> _get("streetname"). " " .$location -> _get("number"). "<br />";
				echo $location -> _get("zipcode"). " " .$location -> _get("city"). "<br />";
				echo $location -> _get("country"). "</li>";
				
			}
			echo "</ul></td></tr>";
			
			$residence_location_ids = $story -> _get("residence_location_ids");
			if ($residence_location_ids !=null)
			{
				echo "<tr><td class=\"tdTop\">Verblijf locatie(s): </td><td><ul>";
				foreach ($residence_location_ids as &$residence_location_id) {
					$location = getLocationByID($residence_location_id, $con);
					echo "<li>".$location -> _get("streetname"). " " .$location -> _get("number"). "<br />";
					echo $location -> _get("zipcode"). " " .$location -> _get("city"). "<br />";
					echo $location -> _get("country"). "</li>";
				}
				echo "</ul></td></tr>";
			}
			
			$links = $story -> _get("links");
			if ($story -> _get("links") != null) {
				echo "<tr><td>Links: </td><td>";
				foreach ($links as &$link) {
					echo "<a href='".$link."'>".$link."</a><br />";
				}
				echo "</td></tr>";
			}
			echo "</table>";
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