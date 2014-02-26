<?php
	include 'db/connection.php';
	include 'repositories/storyRepository.php';
	
	
	$connection = openDB();
	
	$storys = getAllStories($connection);
	
	
	
	echo "<table id='tblUserStory' rules='cols'>";
	echo "<tr id='firstrow' ><th>Type</th><th>Country</th><th>City</th><th>Startdate</th><th>Enddate</th><th>Name</th></tr>";

		
		
		foreach($storys as &$story)
		{
			echo "<tr>";
			$id = $story -> _get("id");
			$startdate = $story -> _get("startdate");
			$enddate = $story -> _get("enddate");
			$description = $story -> _get("description");
			$link = $story -> _get("link");
			$schoolyear = $story -> _get("schoolyear");
			echo "<td >type</td>";
			echo "<td >country</td>";
			echo "<td >city</td>";
			echo "<td >$startdate</td>";
			echo "<td >$enddate</td>";
			echo "<td >name</td>";
			echo "<td><a href='#' onClick=\"load('storylist_detail.php?storyid=$id')\">Details</a></td>";
			echo "</tr>";
		}
	

	
	
	echo "</table>";

	closeDB($connection);
?>