<?php
	include_once 'db/connection.php';
	include_once 'repositories/storyRepository.php';
	include_once 'repositories/studentRepository.php';
	include_once 'repositories/typeRepository.php';
	include_once 'repositories/locationRepository.php';
	
	$connection = openDB();
	
	if(isset($_GET['locationid']))
	{
		$locationID = $_GET['locationid'];
		$stories = getStoriesByLocationID($locationID,$connection);
	}
	else if (isset($_GET['locationids']))
	{
		$locationIDs = explode(",", $_GET['locationids']);
		
		$stories = array();
		
		foreach($locationIDs as $locationID)
		{
			$newstories = getStoriesByLocationID(intval($locationID), $connection);
			$stories = array_merge($stories, $newstories);
		}
	}
	else
	{
		$stories = getAllStories($connection);
	}
	
	if (count($stories) == 1)
	{
		echo "<script type=\"text/javascript\">load('storylist_detail.php?storyid=".$stories[0]->_get("id")."')</script>";
	}
	
	echo "<table class=\"tblUserStory\" rules='cols'>";
	echo "<tr ><th>Type</th><th class=\"otherTDTH\">Country</th><th class=\"otherTDTH\">City</th><th class=\"otherTDTH\">Startdate</th><th class=\"otherTDTH\">Enddate</th><th class=\"otherTDTH\">Name</th></tr>";

		foreach($stories as &$story)
		{
			echo "<tr>";
			$id = $story -> _get("id");
			$startdate = $story -> _get("startdate");
			$enddate = $story -> _get("enddate");
			$student = getStudentById($id,$connection);
			$name = $student -> _get("firstname"). " " .$student -> _get("insertion"). " " .$student -> _get("surname");
			$type = getTypeByID($id, $connection);
			$location = getLocationByID($story->_get("location_ids")[0],$connection);
			$country = $location -> _get("country");
			$city = $location -> _get("city");
			echo "<td >".$type->_get("name")."</td>";
			echo "<td class=\"otherTDTH\">$country</td>";
			echo "<td class=\"otherTDTH\">$city</td>";
			echo "<td class=\"otherTDTH\">$startdate</td>";
			echo "<td class=\"otherTDTH\">$enddate</td>";
			echo "<td class=\"otherTDTH\">$name</td>";
			echo "<td class=\"otherTDTH\"><a href='#' onClick=\"load('storylist_detail.php?storyid=$id')\">Details</a></td>";
			echo "</tr>";
		}

	echo "</table>";

	closeDB($connection);
?>