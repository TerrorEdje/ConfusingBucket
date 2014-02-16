<?php
	include 'model/story.php';
		
	function getAllStory($connection)
	{
		$query = "SELECT * FROM story";
		$result =$connection->query($query);
		
		$i = 0;
		$story = array();
		
		while ($row =$result->fetch_assoc())
		{
			$id = $row["id"];
			$organisatie_id = $row["organisatie_id"];
			$type_id = $row["type_id"];
			$begin_datum = $row["begin_datum"];
			$eind_datum = $row["eind_datum"];
			$beschrijving = $row["beschrijving"];
			$link = $row["link"];
			$leerjaar = $row["leerjaar"];
            $opleiding_ids = array();
            $student_ids = array();
            
            $query2 = "SELECT * FROM opleiding_has_student WHERE story_id='".$id."'";
            $result2 = $connection->query($query2);
            
            $j = 0;
            
            while ($row =$result2->fetch_assoc())
            {
                $opleiding_ids[$j] = $row["opleiding_id"];
                $student_ids[$j] = $row["student_id"];
            }
			
			$story[$i] = new Story();
			$story[$i] -> _set("id",$id);
			$story[$i] -> _set("organisatie_id",$organisatie_id);
			$story[$i] -> _set("type_id",$type_id);
			$story[$i] -> _set("begin_datum",$begin_datum);
			$story[$i] -> _set("eind_datum",$eind_datum);
			$story[$i] -> _set("beschrijving",$beschrijving);
			$story[$i] -> _set("link",$link);
			$story[$i] -> _set("leerjaar",$leerjaar);
            $story[$i] -> _set("opleiding_ids",$opleiding_ids);
            $story[$i] -> _set("student_ids",$student_ids);
			
			$i++;
		}
		
		$result->close();
		
		return $story;
	}
?>