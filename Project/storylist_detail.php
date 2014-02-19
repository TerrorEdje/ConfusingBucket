<?php
	include 'db/connection.php';
	include 'repositories/storyRepository.php';
	
	$con = openDB();
	
	if($_GET['storyid'] != null)
	{
		$story = getStoryByID($_GET['storyid'], $con);
		
		if($story != null)
		{
			echo "<h2>Stage gelopen van ".$story -> _get("startdate")." tot ".$story -> _get("enddate")."</h2>";
			echo "<h3>".$story -> _get("description")."</h3>";
			echo "<h3>Ik heb dit gedaan in leerjaar ".$story -> _get("schoolyear")."</h3>";
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