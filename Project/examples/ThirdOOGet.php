<?php
	include 'db/connection.php';
	include 'repositories/opleidingRepository.php';
    include 'repositories/studentRepository.php';
    include 'repositories/storyRepository.php';

	$connection = openDB();
	
	$opleidingen = getAllOpleiding($connection);
	
	echo "Opleidingen: <br />";
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
        
        if (count($student_ids) > 0)
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
	
	echo "</table><br /><br />";
    
    $stories = getAllStory($connection);
    
    echo "stories: <br />";
	echo "<table cellpadding=\"2\" border=\"1\">";
	echo "<tr><th>story ID</th><th>opleiding IDs</th><th>student IDs</th></tr>";
	
	foreach($stories as &$story)
	{
		echo "<tr>";
        $id = $story -> _get("id");
        $opleiding_ids = $story -> _get("opleiding_ids");
        $student_ids = $story -> _get("student_ids");
        
		echo "<td>$id</td><td>";
        
        if (count($opleiding_ids) > 0)
        {
            foreach ($opleiding_ids as &$opleiding_id)
            {
                echo $opleiding_id.", ";
            }
        }
        else
        {
            echo "geen opleidingen gevonden";
        }
        
        echo "</td><td>";
        
        if (count($student_ids) > 0)
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
	
	echo "</table><br /><br />";
    
    $students = getAllStudents($connection);
    
    echo "students: <br />";
	echo "<table cellpadding=\"2\" border=\"1\">";
	echo "<tr><th>student ID</th><th>opleiding IDs</th><th>student IDs</th></tr>";
	
	foreach($students as &$student)
	{
		echo "<tr>";
        $id = $student -> _get("id");
        $opleiding_ids = $student -> _get("opleiding_ids");
        $story_ids = $student -> _get("story_ids");
        
		echo "<td>$id</td><td>";
        
        if (count($opleiding_ids) > 0)
        {
            foreach ($opleiding_ids as &$opleiding_id)
            {
                echo $opleiding_id.", ";
            }
        }
        else
        {
            echo "geen opleidingen gevonden";
        }
        
        echo "</td><td>";
        
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
        
		echo "</td></tr>";
	}
	
	echo "</table><br /><br />";

    
    $opleiding = getOpleidingByID(3, $connection);
	
	echo "Opleiding ID 3: <br />";
	echo "<table cellpadding=\"2\" border=\"1\">";
	echo "<tr><th>Opleiding ID</th><th>naam</th><th>omschrijving</th><th>Organisatie ID</th><th>story IDs</th><th>student IDs</th></tr>";
    
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
       
       if (count($student_ids) > 0)
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
    
	
	echo "</table><br /><br />";
    
	closeDB($connection);
?>