<?php
	include 'db/connection.php';
	include 'repositories/storyRepository.php';
	include 'repositories/studentRepository.php';
	include 'repositories/typeRepository.php';
	include 'repositories/locationRepository.php';
	
	$connection = openDB();
	
	if(isset($_GET['locationid']))
	{
		$locationID = $_GET['locationid'];
		$stories = getStoriesByLocationID($locationID,$connection);
	}
	else
	{
		$stories = getAllStories($connection);
	}
	
	if (count($stories) == 1)
	{
		echo "<script type=\"text/javascript\">load('storylist_detail.php?storyid=".$stories[0]->_get("id")."')</script>";
	}
	
	echo "<table id='tblUserStory' rules='cols'>";
	echo "<tr id='firstrow' ><th>Type</th><th>Country</th><th>City</th><th>Startdate</th><th>Enddate</th><th>Name</th></tr>";

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
			echo "<td >$country</td>";
			echo "<td >$city</td>";
			echo "<td >$startdate</td>";
			echo "<td >$enddate</td>";
			echo "<td >$name</td>";
			echo "<td><a href='#' onClick=\"load('storylist_detail.php?storyid=$id')\">Details</a></td>";
			echo "</tr>";
		}

	echo "</table>";

	closeDB($connection);
?>