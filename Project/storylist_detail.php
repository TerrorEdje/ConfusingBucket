<?php
	include 'db/connection.php';
	include 'repositories/storyRepository.php';
	
	$con = openDB();
	
	if($_GET['storyid'] != null)
	{
		$story = getStory($con, $_GET['storyid']);
	}
	else
	{
		echo "<h3>Je aanpassing in de url balk is niet helemaal goed gegaan ;)</h3>";
	}
	
	if($story != null)
	{
		echo "<h2>Stage gelopen van ".$story -> _get("begin_datum")." tot ".$story -> _get("eind_datum")."</h2>");
		echo "<h3>".$story -> _get("beschrijving")."</h3>";
		echo "<h3>".$story -> _get("leerjaar")."</h3>";
		echo "<h4><a href='".$story -> _get("link")."'>".$story -> _get("link")."</a></h4>";
	}
	else
	{
		echo "<h3>Dit verhaal is helaas niet langer beschikbaar</h3>";
	}
	
	closeDB($connection);
?>