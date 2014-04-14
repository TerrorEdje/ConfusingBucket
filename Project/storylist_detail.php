<?php
	include_once 'db/connection.php';
	include_once 'repositories/storyRepository.php';
	include_once 'repositories/studentRepository.php';
	include_once 'repositories/studyRepository.php';
	include_once 'repositories/schoolRepository.php';
	include_once 'repositories/organizationRepository.php';
	include_once 'repositories/locationRepository.php';
	include_once 'repositories/storylocationRepository.php';
	
	$con = openDB();
	
	if($_GET['storyid'] != null)
	{
		$story = getStoryByID($_GET['storyid'], $con);
		$type = $story -> _get("type");
		
		if ($story->_get("student_ids") != null)
			$student = getStudentByID($story->_get("student_ids")[0], $con);
		if ($story->_get("study_ids") != null)
			$study = getStudyByID($story->_get("study_ids")[0], $con);
		if (isset($study))
		{
			if ($study -> _get("school_id") != null)
				$school = getSchoolByID($study -> _get("school_id"), $con);
		}
		
		if($story != null)
		{
			echo "<table>";
			echo "<tr><td>Type: </td><td> " .$type . "</td></tr>";
			echo "<tr><td>Begindatum: </td><td> " .$story -> _get("startdate"). "</td></tr>";
			echo "<tr><td>Einddatum: </td><td> " .$story -> _get("startdate"). "</td></tr>";
			echo "<tr><td>Omschrijving: </td><td> " .$story -> _get("description"). "</td></tr>";
			echo "<tr><td>&nbsp;</td></tr>";
			
			if (isset($student) && isset($study))
			{
				echo "<tr><td>Student: </td><td> " .$student -> _get("firstname"). " " .$student -> _get("insertion"). " " .$student -> _get("surname"). "</td></tr>";
				echo "<tr><td>Opleiding: </td><td> " .$study -> _get("name"). "</td></tr>";
				echo "<tr><td>Schooljaar: </td><td> " .$story -> _get("schoolyear"). "</td></tr>";
				echo "<tr><td>School: </td><td> " .$school -> _get("name"). "</td></tr>";
				echo "<tr><td>Email: </td><td> " .$student -> _get("email"). "</td></tr>";
				echo "<tr><td>&nbsp;</td></tr>";
			}

			$organization_ids = $story->_get("organization_ids");
			$organization = getOrganizationByID($story -> _get("organization_id"), $con);
			echo "<tr><td>Organisatie: </td><td> " .$organization -> _get("name")."</td></tr>";
			echo "<tr><td>Omschrijving organisatie: &nbsp; </td><td> " .$organization -> _get("description")."</td></tr>";
			
			
			$storylocations = getStoryLocationsByStoryID($_GET['storyid'],$con);
			foreach($storylocations as &$storylocation)
			{
				$location = getLocationByID($storylocation->_get("location_id"),$con);
				$country = $location -> _get("country");
				$city = $location -> _get("city");
				$type = $storylocation -> _get("location_type");
				$streetname = $location -> _get("streetname");
				$zipcode = $location -> _get("zipcode");
				$number = $location -> _get("number");
				
				echo "<tr><td class=\"tdTop\">Locatie(s) story: </td><td><ul>";
				echo "<li>$type<br/>$streetname $number<br/>$zipcode $city<br/>$country</li>";
				echo "</ul></td></tr>";				
			}
			
			
			
			$links = $story -> _get("links");
			if ($story -> _get("links") != null) {
				echo "<tr><td>Links: </td><td>";
				foreach ($links as &$link) {
					echo "<a target=\"_blank\" href='".$link."'>".$link."</a><br />";
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