<?php
	include 'model/opleiding.php';
		
	function getAllOpleiding($connection)
	{
		$query = "SELECT * FROM opleiding";
		$result =$connection->query($query);
		
		$i = 0;
		$opleiding = array();
		
		while ($row =$result->fetch_assoc())
		{
			$id = $row["id"];
			$naam = $row["naam"];
			$omschrijving = $row["omschrijving"];
			$organisatie_id = $row["organisatie_id"];
            $story_ids = array();
            $student_ids = array();
            
            $query2 = "SELECT * FROM opleiding_has_student WHERE opleiding_id='".$id."'";
            $result2 = $connection->query($query2);
            
            $j = 0;
            
            while ($row =$result2->fetch_assoc())
            {
                $story_ids[$j] = $row["story_id"];
                $student_ids[$j] = $row["student_id"];
            }
            
			$opleiding[$i] = new Opleiding();
			$opleiding[$i] -> _set("id",$id);
			$opleiding[$i] -> _set("naam",$naam);
			$opleiding[$i] -> _set("omschrijving",$omschrijving);
			$opleiding[$i] -> _set("organisatie_id",$organisatie_id);
            $opleiding[$i] -> _set("story_ids",$story_ids);
            $opleiding[$i] -> _set("student_ids",$student_ids);
			
			$i++;
		}
		
		$result->close();
		
		return $opleiding;
	}
    
    function getOpleidingByID($opleidingID, $connection)
	{
		$query = "SELECT * FROM opleiding WHERE id = '".$opleidingID."'";
		$result =$connection->query($query);
		
		$opleiding = new Opleiding();
		
		while ($row =$result->fetch_assoc())
		{
			$id = $row["id"];
			$naam = $row["naam"];
			$omschrijving = $row["omschrijving"];
			$organisatie_id = $row["organisatie_id"];
            $story_ids = array();
            $student_ids = array();
            
            $query2 = "SELECT * FROM opleiding_has_student WHERE opleiding_id='".$id."'";
            $result2 = $connection->query($query2);
            
            $j = 0;
            
            while ($row =$result2->fetch_assoc())
            {
                $story_ids[$j] = $row["story_id"];
                $student_ids[$j] = $row["student_id"];
            }
            
			$opleiding = new Opleiding();
			$opleiding -> _set("id",$id);
			$opleiding -> _set("naam",$naam);
			$opleiding -> _set("omschrijving",$omschrijving);
			$opleiding -> _set("organisatie_id",$organisatie_id);
            $opleiding -> _set("story_ids",$story_ids);
            $opleiding -> _set("student_ids",$student_ids);
		}
		
		$result->close();
		
		return $opleiding;
	}
?>