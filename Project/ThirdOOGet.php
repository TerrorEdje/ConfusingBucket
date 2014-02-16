<?php
	include 'db/connection.php';
	include 'repositories/opleidingRepository.php';

	$connection = openDB();
	
	$opleidingen = getAllOpleiding($connection);
	
	
	echo "<table cellpadding=\"2\" border=\"1\">";
	echo "<tr><th>Opleiding ID</th><th>naam</th><th>omschrijving</th><th>Organisatie ID</th><th>story IDs</th><th>student IDs</th></tr>";
	
	foreach($opleidingen as &$opleiding)
	{
		echo "<tr>";
		$id = $opleiding -> _get("id");
        $naam = $opleiding -> _get("naam");
        $omschrijving = $opleiding -> _get("omschrijving");
        $organisatie_id = $opleiding -> _get("organisatie_id");
        $story_ids = $opleiding -> _get("story_ids");
        $student_ids = $opleiding -> _get("student_ids");
        
		echo "<td>$id</td><td>$naam</td><td>$omschrijving</td><td>$organisatie_id</td><td>";
        
        if (count($story_ids) > 0)
        {
            foreach ($story_ids as &$story_id)
            {
                echo $story_id.", ";
            }
        }
        else
        {
            echo "geen stories gevonden";
        }
        
        echo "</td><td>";
        
        if (count($story_ids) > 0)
        {
            foreach ($student_ids as &$student_id)
            {
                echo $student_id.", ";
            }
        }
        else
        {
            echo "geen studenten gevonden";
        }
        
		echo "</td></tr>";
	}
	
	echo "</table>";

	closeDB($connection);
?>