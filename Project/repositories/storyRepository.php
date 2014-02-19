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
    
    function getStoryByID($storyID, $connection)
    {
        $query = "SELECT * FROM story where id = '".$storyID."'";
		$result =$connection->query($query);
		
		$story = new Story();
		
		while ($row =$result->fetch_assoc())
		{

			//alle waardes van tabel story zetten
			foreach ($row as $key => $value) {
				$story -> _set($key, $value);
			}

			/*$id = $row["id"];
			$organisatie_id = $row["organisatie_id"];
			$type_id = $row["type_id"];
			$begin_datum = $row["begin_datum"];
			$eind_datum = $row["eind_datum"];
			$beschrijving = $row["beschrijving"];
			$link = $row["link"];
			$leerjaar = $row["leerjaar"];
            $opleiding_ids = array();
            $student_ids = array();*/
            
            $query2 = "SELECT * FROM study_has_student WHERE story_id='".$row["id"]."'";
            $result2 = $connection->query($query2);

            $opleiding_ids = array();
            $student_ids = array();
            
            $j = 0;
            
            while ($row =$result2->fetch_assoc())
            {
                $opleiding_ids[$j] = $row["study_id"];
                $student_ids[$j] = $row["student_id"];
                $j = $j+1;
            }
			
            $story -> _set("opleiding_ids",$opleiding_ids);
            $story -> _set("student_ids",$student_ids);
		}
		
		$result->close();
		
		return $story;
    }
?>